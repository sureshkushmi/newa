<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DonationMail;
class DonationController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'amount' => 'required|numeric',
            'message' => 'nullable|string',
        ]);

         // Send email to your preferred email
    Mail::to('sureshkushmi@gmail.com')->send(new \App\Mail\DonationMail($data));

    return back()->with('success', 'Thank you for your generous donation! We will contact you soon.');
    }
}
