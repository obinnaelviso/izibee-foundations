<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function causes() {
        return view('causes');
    }

    public function donation() {
        return view('donation');
    }

    public function volunteer() {
        return view('volunteer');
    }

    public function stories() {
        return view('stories');
    }

    public function contact() {
        return view('contact');
    }

    public function blog() {
        return redirect('https://blog.izibeehallmarkfoundation.org');
    }

    public function volunteerRegister() {
        return view('volunteer-register');
    }
}
