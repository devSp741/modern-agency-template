<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display the about us page.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the services page.
     */
    public function services()
    {
        return view('pages.services');
    }

    /**
     * Display the IT solutions page.
     */
    public function itSolutions()
    {
        return view('pages.it-solutions');
    }

    /**
     * Display the portfolio page.
     */
    public function portfolio()
    {
        return view('pages.portfolio');
    }

    /**
     * Display the careers page.
     */
    public function careers()
    {
        return view('pages.careers');
    }
}
