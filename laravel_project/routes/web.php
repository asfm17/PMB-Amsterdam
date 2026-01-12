<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/ping', fn() => 'LARAVEL OK');


Route::get('/', function () {
    return view('home');
});
