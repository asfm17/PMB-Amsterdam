<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ContactMessageAdminController;

/*
|--------------------------------------------------------------------------
| Publiek
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {
    Route::get('/contact-messages', [ContactMessageAdminController::class, 'index']);
    Route::get('/contact-messages/{contactMessage}', [ContactMessageAdminController::class, 'show']);
    Route::delete('/contact-messages/{contactMessage}', [ContactMessageAdminController::class, 'destroy']);
});
