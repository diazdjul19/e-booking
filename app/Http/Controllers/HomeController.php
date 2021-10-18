<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


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

        $data_user = count(User::where('status', 'A')->where('email', '!=', 'setlightcombo@gmail.com')->get());
        
        // return view('home');
        return view('dashboard_view.home', compact('data_user'));
    }


    
}
