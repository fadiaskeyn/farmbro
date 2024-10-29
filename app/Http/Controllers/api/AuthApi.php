<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthApi extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            "status" => 200,
            "token" => $token,
            "message" => "Selamat datang, " . $user->name,
        ]);
    }

    return response()->json([
        "status" => 401,
        "message" => "Data yang anda masukan salah, silahkan periksa kembali"
    ]);
}
}
