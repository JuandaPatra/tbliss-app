<?php

namespace App\Http\Controllers;

use App\Models\Hidden_gem;
use App\Models\logPayments;
use App\Models\Payment;
use App\Models\Trip_categories;
use Illuminate\Http\Request;
use DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countTrip = Trip_categories::all(['id'])->count();
        $countHiddenGems = Hidden_gem::all(['id'])->count();
        $notifications = logPayments::where('status', '=', 'belum dibaca')->orderBy('id', 'desc')->get();
        foreach ($notifications as $notification) {
            $notificationsplit = explode(' ', $notification->name);
            $notification['order'] = $notificationsplit[0];
        }
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();


        foreach ($notifications as $notification) {
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }

        $datas = Payment::orderBy('id', 'DESC')->get();
        $data = [];
        
        foreach($datas as $dt){
            $int = $dt->invoice_id;
            $str = (string) $int;
            $orderId = substr($str,10,2);
            if($orderId == '00'){
                array_push($data,$dt);
            }
        }

        // return $data;


        return view('home', compact('countTrip', 'countHiddenGems', 'notifications', 'notificationsCount', 'data'));

        
    }

    public function table(Request $request)
    {
        if ($request->ajax()) {
            $datas = Payment::orderBy('id', 'DESC')->get();
            $data = [];
            
            foreach($datas as $dt){
                $int = $dt->invoice_id;
                $str = (string) $int;
                $orderId = substr($str,10,2);
                if($orderId == '00'){
                    array_push($data,$dt);
                }
            }
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('opsi_pembelian', function ($row) {
                    if($row->opsi_pembayaran == 0){
                        return 'DP Payment';
                    }else{
                        return 'Full Payment';
                    }
                })
                ->addColumn('due_satu', function ($due) {
                    if($due->due_date_satu == null){
                        return '-';
                    }else{
                        
                        return date('d-m-Y', strtotime($due->due_date_satu));
                    }
                })
                ->addColumn('due_dua', function ($due) {
                    if($due->due_date_dua == null){
                        return '-';
                    }else{
                        return date('d-m-Y', strtotime($due->due_date_dua));
                    }
                })
                ->addColumn('invoice', function ($user) {
                    if($user->status == "Lunas"){

                        return '
                        
                        <a href="'.route('invoicePDF', $user->id).'" target="_blank" name="bulk_delete" id="bulk_delete" class="btn btn-primary btn-xs">Lihat Invoice</a>
                        ';
                    }

                })
                ->rawColumns(['invoice'])
                ->make(true);
        }
    }

    public function notification(Request $request)
    {
        if ($request->ajax()) {
            $notifications = logPayments::where('status', '=', 'belum dibaca')->orderBy('id', 'desc')->get();
            $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
            foreach ($notifications as $notification) {
                $time = $this->timeAgo($notification->updated_at);
                $notification['time'] = $time;
            }
        }

        $results = [$notifications, $notificationsCount];


        return response()->json($results);
    }
    public function notificationRead(Request $request, $id)
    {
        // $result = 'id adalah' . $id;
        $notification = logPayments::whereId($id);
        $notification->update([
            'status' => 'sudah dibaca'
        ]);
        $notifications = logPayments::where('status', '=', 'belum dibaca')->orderBy('id', 'desc')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();

        $result = [$notifications, $notificationsCount];
        return response()->json($result);
    }

    public function notificationTo($id)
    {
        $notification = logPayments::whereId($id);
        $notification->update([
            'status' => 'sudah dibaca'
        ]);
        
        $logPayment = logPayments::where('id', '=', $id)->first();

        $explodeText = explode(' ', $logPayment->name);
        $orderId = substr($explodeText[0], 3);
        $data = Payment::where('order_id', '=', $orderId)->first(['id']);

        return redirect()->route('payments.show', ['payment' => $data->id]);
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
