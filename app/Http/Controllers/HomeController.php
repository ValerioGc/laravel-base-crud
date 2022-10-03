<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $navLinks = config('navLinks');
        return view('home', compact( 'navLinks'));
    }
}
