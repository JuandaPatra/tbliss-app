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
        return view('admin.contact.index');
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
        return view('admin.contact.createEmail');
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
}
