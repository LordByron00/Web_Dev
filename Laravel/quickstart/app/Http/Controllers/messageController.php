<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeMessageRequest;
use Illuminate\Http\Request;
use App\Models\Message;

class messageController extends Controller
{
    public function showForm() {
        return View('contact');
    }

    public function storeMessage(storeMessageRequest $request) {
        Message::create([
            'sender_name' => $request->input('sender_name'),
            'sender_email' => $request->input('sender_email'),
            'message' => $request->input('message'),
        ]);
        return redirect('/messages');
    }

    public function getMessages() {
        return View('messages', ['messages' => Message::all()]);
    }
}
