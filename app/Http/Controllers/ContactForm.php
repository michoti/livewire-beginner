<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactForm extends Controller
{
    public function index()
    {
        return view('form.contact-form');
    }
}
