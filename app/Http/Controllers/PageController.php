<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function download()
    {
        return view('pages.download');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function technology()
    {
        return view('pages.technology');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
