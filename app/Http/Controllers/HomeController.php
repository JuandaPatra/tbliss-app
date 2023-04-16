<?php

namespace App\Http\Controllers;

use App\Models\Hidden_gem;
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
        return view('home', compact('countTrip','countHiddenGems'));
    }
}
