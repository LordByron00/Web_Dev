<?php

use App\Http\Controllers\messageController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\task;

// Route::get('/user/{username?}', function (?string $username = 'Justine') {
//     return 'Hello World ' . $username;
// })->where('username', '[A-Z]+');

Route::get('/contact', [messageController::class, 'showForm']);

Route::post('/contact', [messageController::class, 'storeMessage']);

Route::get('/messages', [messageController::class, 'getMessages']);


//SIMPLE CRUD
Route::get('/add', function() {
    return View('/add');
});

Route::post('/add', function(Request $request) {
    $validated = $request->validate(
[
            'name' => 'required',
            'action' => 'required|min:5|max:500'
        ]
    );
    task::create($validated);

    return redirect('/task');
});

Route::get('/task', function() {
    $tasks = task::all();
    return View('/task', ['tasks' => $tasks]);
});

Route::patch('/update/{id}', function(Request $request, $id) {
    $validated = $request->validate(
        [
                    'name' => 'required',
                    'action' => 'required|min:5|max:500'
                ]
            );
        $task = task::findOrFail($id);
        $task->update($validated);
    
        return redirect('/task')->with('success', 'Task updated successfully');;
});

Route::delete('/delete/{id}', function($id) {
    $task = task::findOrFail(($id));
    $task->delete();
    return redirect('/task');
});