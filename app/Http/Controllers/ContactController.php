<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactEmail(Request $request)
    {
        $validatedData = $request->validate([
            'fName' => 'required|string|max:255',
            'lName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|string|max:255',
            'fav_language' => 'required|string',
            'message' => 'required|string',
        ]);

        $details = [
            'first_name' => $validatedData['fName'],
            'last_name' => $validatedData['lName'],
            'email' => $validatedData['email'],
            'number' => $validatedData['number'],
            'subject' => $validatedData['fav_language'],
            'message' => $validatedData['message'],
        ];

        Mail::to(env('MAIL_USERNAME'))->send(new ContactMail($details));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
