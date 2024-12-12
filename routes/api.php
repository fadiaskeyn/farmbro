<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\GasApiController;
use App\Http\Controllers\api\AuthApiController;
use App\Http\Controllers\api\ChickController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
Route::put('/updateprofile', [AuthApiController::class,'updateprofile']);
Route::post('/logout', [AuthApiController::class,'logout']);
});

Route::get('/gas', [GasApiController::class,'dashboard']);
Route::post('/gas/store', [GasApiController::class, 'store']);
Route::post('/chick/store',[ChickController::class,'store']);
Route::get('/chick', [ChickController::class,'index']);
Route::get('/average',[GasApiController::class,'average']);
Route::get('/chartaverage',[GasApiController::class,'chart']);


// Route::get('/apiUser', [AuthApiController::class, 'me']);
// Route::get('/test', [AuthApiController::class, 'getData']);

