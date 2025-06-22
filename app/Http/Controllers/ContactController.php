<?php

namespace App\Http\Controllers;


class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact'); // file resources/views/contact.blade.php
    }
}

