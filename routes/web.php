<?php

use App\Http\Controllers\TimelineController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');




Route::middleware(['auth','verified'])->group(function(){
    Route::view('/dashboard','dashboard')->name('dashboard');
    Route::get('timeline',TimelineController::class)->name('timeline');
    Route::view('/about','about')->name('about');
});



require __DIR__.'/auth.php';
