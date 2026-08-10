<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * Handle contact form submission with validation and response feedback.
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you, ' . $validated['name'] . '! Your message has been sent successfully. We will contact you soon.'
            ]);
        }

        return redirect()->route('contact')->with('success', 'Thank you, ' . $validated['name'] . '! Your message has been sent successfully. We will contact you soon.');
    }
}
