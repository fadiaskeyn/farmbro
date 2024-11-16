<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $user = User::all();
        return view('layouts.worker.index',compact('user'));
    }

    public function store(Request $request){
        try {
            $users = $request->validate([
               "name" => "required",
               "email" => "required",
               "phone" => "required"
            ]);
          User::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
           ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
