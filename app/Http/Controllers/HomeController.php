<?php

namespace App\Http\Controllers;

use App\Models\Hidden_gem;
use App\Models\logPayments;
use App\Models\Trip_categories;
use Illuminate\Http\Request;

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
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();

        
        foreach($notifications as $notification){
            $time = $this->timeAgo($notification->updated_at);
            $notification['time'] = $time;
        }


        return view('home', compact('countTrip', 'countHiddenGems', 'notifications', 'notificationsCount'));
    }

    public function notification(Request $request)
    {
        if ($request->ajax()) {
            $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
            $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();
            foreach($notifications as $notification){
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
        $notifications = logPayments::where('status', '=', 'belum dibaca')->get();
        $notificationsCount = logPayments::where('status', '=', 'belum dibaca')->count();

        $result = [$notifications, $notificationsCount];
        return response()->json($result);
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
