<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class Landingpage extends Controller
{
    public function index(){
        return view ("layouts.LandingPage");
    }

    public function bloging(){
        $data = Blog::all();
        return view("layouts.blog", compact('data'));
    }

    public function contact(){
        return view("layouts.contact");
    }


    public function layanan() {
        return view("layouts.layanan");
    }



    public function showdashboard(){
        return view('layouts.dashboard.index');
    }

}

