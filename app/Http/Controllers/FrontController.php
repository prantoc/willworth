<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function termsConditions()
    {
        return view('frontend.terms-conditions');
    }

    public function press()
    {
        return view('frontend.press');
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function singleNews()
    {
        return view('frontend.single-news');
    }

    public function singlePage()
    {
        return view('frontend.single-page');
    }

    public function singlepageOne()
    {
        return view('frontend.single-page-one');
    }

    public function singlepageTwo()
    {
        return view('frontend.single-page-two');
    }

    public function missionVission()
    {
        return view('frontend.mission-vission');
    }

    public function whoweAre()
    {
        return view('frontend.who-we-are');
    }
}
