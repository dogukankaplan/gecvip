<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
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

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        ContactMessage::create($validated);

        return back()->with('success', 'Mesajınız başarıyla gönderildi. En kısa sürede size dönüş yapacağız.');
    }
}
