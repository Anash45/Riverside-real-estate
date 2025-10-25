<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::middleware(['uk.only'])->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/contact', [ContactController::class, 'index'])->name('contact.form');
    Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
});