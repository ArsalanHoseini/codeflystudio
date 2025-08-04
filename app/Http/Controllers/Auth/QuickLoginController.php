<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class QuickLoginController extends Controller
{
    public function sendCode(Request $request)
    {
        $request->validate([
            'identifier' => 'required|string'
        ]);

        $code = rand(100000, 999999);

        VerificationCode::create([
            'identifier' => $request->identifier,
            'code' => $code,
            'expires_at' => now()->addMinutes(5)
        ]);

        // فعلاً ارسال پیامک نداریم. فقط لاگ می‌گیریم
        \Log::info("Verification code for {$request->identifier}: {$code}");

        return response()->json(['message' => 'کد ارسال شد (شبیه‌سازی شده).']);
    }


    public function verifyCode(Request $request)
    {
        $request->validate([
            'identifier' => 'required|string',
            'code' => 'required|string',
        ]);

        $code = VerificationCode::where('identifier', $request->identifier)
            ->where('code', $request->code)
            ->where('expires_at', '>', now())
            ->latest()
            ->first();

        if (!$code) {
            return response()->json(['message' => 'کد نامعتبر است یا منقضی شده.'], 422);
        }

        // کاربر رو پیدا یا ایجاد کن
        $user = \App\Models\User::firstOrCreate(
            ['email' => $request->identifier],
            ['name' => 'کاربر جدید', 'password' => bcrypt('12345678')]
        );

        Auth::login($user);

        return response()->json(['message' => 'ورود موفقیت‌آمیز.']);
    }

//         $sessionCode = Session::get('quick_login_code');
//         $login = Session::get('quick_login_user');

//         if ($request->code != $sessionCode || !$login) {
//             return response()->json(['message' => 'کد اشتباه است.'], 422);
//         }

//         $user = User::where('email', $login)->orWhere('phone', $login)->first();

//         if (!$user) {
//             $user = User::create([
//                 'name' => 'کاربر جدید',
//                 'email' => filter_var($login, FILTER_VALIDATE_EMAIL) ? $login : null,
//                 'phone' => is_numeric($login) ? $login : null,
//                 'password' => bcrypt(str()->random(10)), // رمز تصادفی
//             ]);
//         }

//         Auth::login($user);
//         Session::forget(['quick_login_code', 'quick_login_user']);

//         return response()->json(['message' => 'ورود با موفقیت انجام شد.']);
//     }
// }
}