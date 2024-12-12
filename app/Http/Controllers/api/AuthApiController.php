<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthApiController extends Controller
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



public function updateprofile(Request $request) {

    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . Auth::id(),
        'password_lama' => 'required|string',
        'password' => 'nullable|string',
        'phone' => 'nullable|string|max:15',
        'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'message' => $validator->errors()->first()
        ], 422);
    }
    $user = Auth::user();
    if (!Hash::check($request->password_lama, $user->password)) {
        return response()->json([
            'status' => 'error',
            'message' => 'Password lama salah.'
        ], 400);
    }
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;


    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    if ($request->hasFile('photo')) {
        // Hapus foto lama jika ada
        if ($user->photo) {
            Storage::delete($user->photo);
        }
        $path = $request->file('photo')->store('photos', 'public');
        $user->photo = $path;
    }
    $user->save();
    return response()->json([
        'status' => 'success',
        'message' => 'Profil berhasil diperbarui.',
        'data' => $user
    ], 200);
}

public function logout(Request $request)
{
    $request->user()->currentAccessToken()->delete();
    return response()->json([
        'status' => 'success',
        'message' => 'Logout berhasil.'
    ], 200);
}

    public function me(){
        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return response()->json(['message' => 'success', 'data' => $user], 200);
    }
    public function getData()
    {
        $data = User::all();
        return response()->json($data);
    }

}
