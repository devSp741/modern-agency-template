<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    /**
     * Display the contact us page.
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Handle contact form submission with validation and send HTML mail.
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:50',
            'subject' => 'required|string|max:255',
            'budget'  => 'nullable|string|max:255',
            'message' => 'required|string|min:5',
        ]);

        $recipientEmail = env('CONTACT_MAIL_RECIPIENT', 'gbytedeveloper@gmail.com');

        try {
            Mail::to($recipientEmail)->send(new ContactFormMail($validated));

            $successMsg = 'Thank you, ' . $validated['name'] . '! Your message has been delivered to our engineering team. We will get back to you as soon as possible.';

            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => $successMsg
                ]);
            }

            return redirect()->route('contact')->with('success', $successMsg);

        } catch (\Exception $e) {
            Log::error('Webvire Mail Error: ' . $e->getMessage());

            $errMsg = 'We received your input, but email notification failed (' . $e->getMessage() . '). Please call us at +91 7309277237 or WhatsApp.';

            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => $errMsg
                ], 500);
            }

            return redirect()->route('contact')->with('error', $errMsg)->withInput();
        }
    }
}
