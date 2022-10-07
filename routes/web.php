<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//flush cache
Route::get('/cache-clear', function () {
    Artisan::call('optimize:clear');
    return "Cache is cleared";
});

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return "Migrate";
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return "storage:link";
});


//Home
Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('sigup-page', function () {
    $title = array(
        'active' => 'signup-page',
    );
    return view('pages.signup-page', compact('title'));
})->name('signup-page');

Route::get('signup-customers', function () {
    $title = array(
        'active' => 'signup-customers',
    );
    return view('auth.register-customer', compact('title'));
})->name('signup-customers');



Route::get('signup-cleaner', function () {
    $title = array(
        'active' => 'signup-cleaner',
    );
    return view('auth.register-cleaner', compact('title'));
})->name('signup-cleaner');
