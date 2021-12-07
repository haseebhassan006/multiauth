<?php

namespace App\Http\Controllers;

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
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('layouts.pages.about');
    }  
     public function contact()
    {
        return view('layouts.pages.contact');
    }

    public function requests()
    {
        return view('layouts.pages.requests');
    }

    public function urgentDonation()
    {
        return view('layouts.pages.donationdetail');
    }
}
