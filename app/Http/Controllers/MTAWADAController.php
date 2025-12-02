<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MTAWADAController extends Controller
{
    public function home()
    {
        return view('Pages.home');
    }
    public function about()
    {
        return view('Pages.About.about');
    }
    public function mission()
    {
        return view('Pages.About.mission');
    }
    public function history()
    {
        return view('Pages.About.history');
    }
    public function coreValues()
    {
        return view('Pages.About.core-values');
    }
    public function impact()
    {
        return view('Pages.impact');
    }
    public function news()
    {
        return view('Pages.news');
    }
    public function gallery()
    {
        return view('Pages.gallery');
    }
    public function contact()
    {
        return view('Pages.contact');
    }
}
