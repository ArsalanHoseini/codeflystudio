<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function forgotPassword(Request $request)
    {
        $request->validate([
            'identifier' => 'required'
        ]);

        // فعلاً فقط شبیه‌سازی می‌کنیم
        return response()->json([
            'message' => 'در صورت وجود حساب، لینک بازیابی ارسال خواهد شد.'
        ]);
    }
}
