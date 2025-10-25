<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => ['required', 'regex:/^(?:0(1\d{3}\s?\d{6}|2\d{1,2}\s?\d{3}\s?\d{4})|07\d{3}\s?\d{6}|\+447\d{3}\s?\d{6})$/'],
            'investment' => 'required|numeric',
            'details' => 'nullable|string',
            'g-recaptcha-response' => 'required',
        ]);

        // ✅ Verify reCAPTCHA with Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
        ]);

        $result = $response->json();
        if (empty($result['success']) || $result['score'] < 0.5) {
            return response()->json(['success' => false, 'message' => 'reCAPTCHA verification failed.'], 422);
        }

        // ✅ Send email
        Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
            $message->to('info@dubaimyhouse.com')
                ->subject('New Contact Form Submission from ' . $data['firstName'] . ' ' . $data['lastName']);
        });

        return response()->json(['success' => true, 'message' => 'Form submitted successfully!']);
    }

}
