<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
    
});
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
