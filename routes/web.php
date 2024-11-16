<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landingpage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.landingPage');
});


Route::get('/home', [Landingpage::class, 'index'])->name('index');
Route::get('/blog', [Landingpage::class, 'bloging']) ->name('blog');
Route::get('/contact', [Landingpage::class, 'contact']) ->name('contact');

Route::resource('worker',UserController::class);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



route::middleware('auth')->group(function(){
    Route::get('/user', [UserController::class,'index'])->name('user.index');
    Route::get('/dashboard', [Landingpage::class,'showdashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';



Route::get('/home', [Landingpage::class, 'index'])->name('index');
Route::get('/blog', [Landingpage::class, 'bloging']) ->name('blog');
Route::get('/contact', [Landingpage::class, 'contact']) ->name('contact');
Route::get('/layanan', [Landingpage::class, 'layanan'])->name('layanan');

