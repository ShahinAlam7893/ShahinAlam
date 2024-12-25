<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    // public function sendMessage(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'message' => 'required|string',
    //     ]);

    //     $details = [
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'message' => $request->message,
    //     ];

    //     Mail::send('partials.contact', $details, function ($mail) use ($request) {
    //         $mail->to('shahinalam7893@gmail.com')
    //              ->subject('New Contact Message from ' . $request->name);
    //     });

    //     return response()->json(['message' => 'Message sent successfully!'], 200);
    // }
}



