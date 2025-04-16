<?php

use App\Http\Controllers\messageController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Message;

// Route::get('/user/{username?}', function (?string $username = 'Justine') {
//     return 'Hello World ' . $username;
// })->where('username', '[A-Z]+');

Route::get('/contact', [messageController::class, 'showForm']);

Route::post('/contact', [messageController::class, 'storeMessage']);

Route::get('/messages', [messageController::class, 'getMessages']);