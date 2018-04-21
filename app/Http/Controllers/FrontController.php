<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');

    }

public function books()
{

    $books=Product::all();
    return view('front.books',compact('books'));

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
