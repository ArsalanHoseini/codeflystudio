<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/plans', [SiteController::class, 'plans'])->name('plans');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [SiteController::class, 'blogSingle'])->name('blog.single');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::post('/contact', [SiteController::class, 'sendMessage'])->name('contact.send');





Route::get('/client', function () {
        return view('admin.dashboard');
}); 
use App\Http\Controllers\Admin\UserController;

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::post('/users/{user}/role', [UserController::class, 'updateRole'])->name('admin.users.updateRole');
});

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});

Route::prefix('employee')->middleware(['auth', 'role:employee'])->group(function () {
    Route::get('/dashboard', function () {
        return view('employee.dashboard');
    });
});

Route::prefix('client')->middleware(['auth', 'role:client'])->group(function () {
    Route::get('/dashboard', function () {
        return view('client.dashboard');
    });
});

Route::prefix('user')->middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', function () {
        return view('site.dashboard');
    });
});
