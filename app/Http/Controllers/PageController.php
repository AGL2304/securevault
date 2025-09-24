<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Page Fonctionnalités
    public function features()
    {
        return view('pages.features');
    }

    // Page Sécurité
    public function security()
    {
        return view('pages.security');
    }

    // Page Contact
    public function contact()
    {
        return view('pages.contact');
    }
}
