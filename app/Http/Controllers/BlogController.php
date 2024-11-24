<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::all();
        return view('layouts.blog.index', compact('blogs'));
        // return view('layouts.Blog.index');

    }

    public function destroy($id) {

    $blog = Blog::findOrFail($id);
    if ($blog->images) {
        Storage::disk('public')->delete($blog->images);
    }
    $blog->delete();

    return redirect()->route('bloging.index')->with('success', 'Blog berhasil dihapus!');
    }



    public function edit($id) {
        $blog = Blog::findOrFail($id);
        return view('layouts.Blog.updateblog', compact('blog'));
    }


    public function update(Request $request, $id) {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $blog = Blog::findOrFail($id);
        if ($request->hasFile('gambar')) {
            if ($blog->images) {
                Storage::disk('public')->delete($blog->images);
            }
            $blog->images = $request->file('gambar')->store('images', 'public');
        }
        $blog->title = $request->input('judul');
        $blog->description = $request->input('deskripsi');
        $blog->created_at = $request->input('tanggal');
        $blog->save();

        return redirect()->route('bloging.index')->with('success', 'Blog berhasil diperbarui!');
    }



    public function create(){
        return view('layouts.Blog.create_blog');
    }

    public function store(Request $request) {
    $request->validate([
        'judul' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'deskripsi' => 'required|string',
    ]);

    $imagePath = null;
    if ($request->hasFile('gambar')) {
        $imagePath = $request->file('gambar')->store('images', 'public');
    }
    Blog::create([
        'title' => $request->input('judul'),
        'description' => $request->input('deskripsi'),
        'images' => $imagePath,
        'created_at' => $request->input('tanggal'),
    ]);


    return redirect()->route('bloging.index')->with('success', 'Blog berhasil ditambahkan!');
}



}
