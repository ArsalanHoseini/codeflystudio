<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/plans', [SiteController::class, 'plans'])->name('plans');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [SiteController::class, 'blogSingle'])->name('blog.single');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::post('/contact', [SiteController::class, 'sendMessage'])->name('contact.send');


Route::get('/dashboard', function () {
    return view('site.dashboard');
})->middleware('auth')->name('dashboard');

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::prefix('employee')->middleware(['auth', 'role:employee'])->group(function () {
    Route::get('/dashboard', function () {
        return view('employee.dashboard');
    })->name('employee.dashboard');
});

Route::prefix('client')->middleware(['auth', 'role:client'])->group(function () {
    Route::get('/dashboard', function () {
        return view('client.dashboard');
    })->name('client.dashboard');
});

Route::prefix('user')->middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');
});

use App\Http\Controllers\Auth\QuickLoginController;

Route::post('/quick-login/send-code', [QuickLoginController::class, 'sendCode'])->name('quicklogin.send');
Route::post('/quick-login/verify-code', [QuickLoginController::class, 'verifyCode'])->name('quicklogin.verify');

use App\Http\Controllers\AuthController;

Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
