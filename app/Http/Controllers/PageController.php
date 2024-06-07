<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }

    public function welcome() {
        return view('welcome');
    }

    public function features() {
        return view('features');
    }

    public function pricing() {
        return view('pricing');
    }

    public function blog() {
        return view('blog');
    }

    public function contact() {
        return view('contact');
    }
}
