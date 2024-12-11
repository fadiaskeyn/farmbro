<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    public function index()
    {
        $user = User::all();
        return view('layouts.worker.index',compact('user'));
    }

    public function create(){
        return view('layouts.worker.create_modal');
    }

    public function store(Request $request)
{
    try {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('images', 'public');
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'photo' => $imagePath,
            'role' => 'worker',
        ]);

        return redirect()->route('worker.index')->with('success', 'Worker created successfully.');
    } catch (\Exception $e) {
        \Log::error('Error creating worker: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Failed to create worker. Please check your input and try again.');
    }
}


    public function destroy($id){
        $worker = User::findOrFail($id);
        if ($worker->images){
            storage::disk('public')->delete($worker->images);
        }
        $worker -> delete();
        return redirect() -> route('worker.index') -> with('success', "data user berhasil dihapus");
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::findOrFail($id);
        $imagePath = null;
        if ($request->hasFile('photo')) {
            if ($user->photo) {
                Storage::delete('public/photos/' . $user->photo);
            }
            $imagePath = $request->file('photo')->store('photos', 'public');
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        if ($imagePath) {
            $user->photo = $imagePath;
        }
        $user->save();
        return redirect()->route('worker.index')->with('success', 'Data user berhasil diperbarui');
    }



    public function edit($id)
    {
        $userW = User::findOrFail($id);
        return view('layouts.worker.update_worker', compact('userW'));
    }






}
