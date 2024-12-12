<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\clientcontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


// usre route area start
    Route::get('/', [clientcontroller::class, 'index'])->name('home');
    Route::get('/about', [clientcontroller::class, 'about'])->name('about');
    Route::get('/service', [clientcontroller::class, 'service'])->name('service');
    Route::get('/whyus', [clientcontroller::class, 'whyus'])->name('whyus');
    Route::get('/team', [clientcontroller::class, 'team'])->name('team');
    Route::get('/contact', [clientcontroller::class, 'contactus'])->name('contract');

// usre route area start
//admin route area start

//admin route area end
    Route::get('admin-mt-143', [admincontroller::class, 'index'])->name('admin_dashbord');
    Route::resource('services', ServiceController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
