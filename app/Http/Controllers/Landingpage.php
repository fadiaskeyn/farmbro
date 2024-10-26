<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landingpage extends Controller
{
    public function index(){
        return view ("layouts.LandingPage");
    }

    public function bloging(){
        return view("layouts.blog");
    }

    public function contact(){
        return view("layouts.contact");
    }

    public function layanan() {
        return view("layouts.layanan");
    }

}

