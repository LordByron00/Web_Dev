<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');

Route::get('/user/{username?}', function (?string $username = 'Justine') {
    return 'Hello World ' . $username;
})->where('username', '[A-Z]+');


Route::get('/whatever', function () {
    return view('whatever');
})->name('whatever'); 

$url = route('whatever');

Route::redirect('/x', '/whatever'); 