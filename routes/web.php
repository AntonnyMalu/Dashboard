<?php

use Illuminate\Support\Facades\Route;

Route::get('login', function () {
    return view('pages.auth.login');
})->middleware('guest')->name('login');

Route::view('/', 'welcome')->name('home');

/*Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});*/

require __DIR__.'/settings.php';
