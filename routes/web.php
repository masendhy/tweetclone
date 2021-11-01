<?php

use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TimelineController;
use App\Models\Status;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');




Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/about', 'about')->name('about');

    Route::get('timeline', TimelineController::class)->name('timeline');
    Route::post('status/store', [StatusController::class, 'store'])->name('statuses.store');

    Route::get('profile/{user}', ProfileInformationController::class)->name('profile');
});



require __DIR__ . '/auth.php';
