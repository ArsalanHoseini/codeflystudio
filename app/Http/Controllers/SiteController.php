<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function services()
    {
        return view('site.services');
    }

    public function plans()
    {
        return view('site.plans');
    }

    public function blog()
    {
        return view('site.blog');
    }

    public function blogSingle($slug)
    {
        return view('site.blog-single', compact('slug'));
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function sendMessage(Request $request)
    {
        // اعتبارسنجی
        $request->validate([
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        // اینجا می‌تونی ایمیل بفرستی یا پیام ذخیره کنی
        return back()->with('success', 'پیام شما با موفقیت ارسال شد.');
    }

    public function dashboard()
    {
        return view('site.dashboard');
    }
}

