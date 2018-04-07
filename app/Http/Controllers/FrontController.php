<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');

    }

    public function books()
    {
        return view('front.books');

    }

    public function aboutus()
    {
        return view('front.aboutus');

    }

    public function trending()
    {
        return view('front.trending');

    }
    public function book()
    {
        return view('front.book');

    }
}
