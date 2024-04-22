<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('master');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('agungtrivaldo@gmail.com')->send(new ContactFormMail($data));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

}
