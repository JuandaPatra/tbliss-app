<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Carbon;

use App\Exports\ContactExport;
use Alert;
use App\Models\emails;
use App\Models\logPayments;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = emails::select('*');
            // $data = Contact::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('finish_date', function ($row) {
                    $date = date("d F Y h:m", strtotime($row->created_at));
                    return $date;
                })
                ->make(true);
        }

        $notifications = logPayments::where('status','=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status','=', 'belum dibaca')->count();
        foreach($notifications as $notification){
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }
        return view('admin.contact.index', compact('notifications','notificationsCount'));
    }

    public function export(Request $request)
    {
        return Excel::download(new ContactExport($request->slug), 'leads.xlsx');
    }

    public function createEmail(Request $request)
    {
        if ($request->ajax()) {
            $data = emails::select('*');
            // $data = Contact::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('finish_date', function ($row) {
                    $date = date("d F Y h:m", strtotime($row->created_at));
                    return $date;
                })
                ->make(true);
        }
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
        foreach($notifications as $notification){
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }
        return view('admin.contact.createEmail', compact('notifications', 'notificationsCount'));
    }

    public function sendEmail(Request $request)
    {
        $contacts = emails::all()->pluck('email');

        $subject = $request->subject;
        $body = $request->body;

        $email = [
            'body'          => $body,
        ];

        foreach($contacts as $contact){
            Mail::send('web.emails.emailSubscription', $email, function ($message) use ( $subject, $contact) {
                $message->from('patrajuanda10@gmail.com');
                $message->to($contact);
                $message->subject($subject);
            });
        }
        Alert::success('Kirim Email', 'Berhasil');
        return redirect()->back();
    }

    private function timeAgo($time_ago)
    {
        $time_ago =  strtotime($time_ago) ? strtotime($time_ago) : $time_ago;
        $time  = time() - $time_ago;

        switch ($time):
                // seconds
            case $time <= 60;
                return 'lessthan a minute ago';
                // minutes
            case $time >= 60 && $time < 3600;
                return (round($time / 60) == 1) ? 'a minute' : round($time / 60) . ' minutes ago';
                // hours
            case $time >= 3600 && $time < 86400;
                return (round($time / 3600) == 1) ? 'a hour ago' : round($time / 3600) . ' hours ago';
                // days
            case $time >= 86400 && $time < 604800;
                return (round($time / 86400) == 1) ? 'a day ago' : round($time / 86400) . ' days ago';
                // weeks
            case $time >= 604800 && $time < 2600640;
                return (round($time / 604800) == 1) ? 'a week ago' : round($time / 604800) . ' weeks ago';
                // months
            case $time >= 2600640 && $time < 31207680;
                return (round($time / 2600640) == 1) ? 'a month ago' : round($time / 2600640) . ' months ago';
                // years
            case $time >= 31207680;
                return (round($time / 31207680) == 1) ? 'a year ago' : round($time / 31207680) . ' years ago';

        endswitch;
    }
}
