<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        
        
        // Send email
    Mail::to('sureshkushmi@gmail.com')->send(new ContactFormMail($validatedData));
        return back()->with('success', 'Thank you for contacting us!');
    }
}
