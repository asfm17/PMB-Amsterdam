<?php


  
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\HomeController;
 Route::get('/', [HomeController::class, 'index'])->name("home.index");


// Route::get('/home', function () {
//     return view('home');
//     // return response('ADMIN WORKS (LARAVEL)', 200)
//     //     ->header('Content-Type', 'text/plain');
// });


Route::get('admin', function () {
    return view('admin');
    // return response('ADMIN WORKS (LARAVEL)', 200)
    //     ->header('Content-Type', 'text/plain');
});


    //    echo "bind routes";

    use App\Http\Controllers\Admin\VacancyAdminController;

Route::prefix('admin')->group(function () {
    Route::resource('vacancies', VacancyAdminController::class)->except(['show']);
});

use App\Http\Controllers\Admin\ContactMessageAdminController;

Route::get('/admin/contact-messages', [ContactMessageAdminController::class, 'index']);
use App\Http\Controllers\Admin\AdminController;