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
        $this->middleware('auth')->except('terms_of_services','facts');
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
    
    /**
     * Show the terms of services.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function terms_of_services()
    {
        return view('terms-services');
    }

     /**
     * Show the faq page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function facts()
    {
        return view('facts');
    }
}
