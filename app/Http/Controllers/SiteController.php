<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() {
        return view('site.home');
    }

    public function services() {
        return view('site.services');
    }

    public function plans() {
        return view('site.plans');
    }

    public function blog() {
        return view('site.blog');
    }

    public function blogSingle($slug) {
        return view('site.blog-single', compact('slug'));
    }

    public function contact() {
        return view('site.contact');
    }

    public function sendMessage(Request $request) {
        // اعتبارسنجی و ذخیره یا ارسال ایمیل
    }
}
