<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class Landingpage extends Controller
{
    public function index(){
        return view ("layouts.LandingPage");
    }


    public function bloging()
    {
        $data = Blog::all()->map(function ($blog) {
            $blog->description = strip_tags($blog->description);
            $blog->description = Str::limit($blog->description, 150, '...'); // Batasi deskripsi
            return $blog;
        });
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

    public function show($id) {
    $blog = Blog::findOrFail($id);
    $blog->description = html_entity_decode($blog->description);
    return view('layouts.show', compact('blog'));

    }



}

