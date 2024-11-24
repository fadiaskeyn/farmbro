<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Chick;
use Illuminate\Http\Request;

class ChickController extends Controller
{

    public function index() {
        try {
            $chick = Chick::orderBy('amount', 'desc')
                          ->orderBy('chick_density', 'desc')
                          ->first();
            return response()->json([
                "status" => 200,
                "data" => $chick
            ]);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function store(Request $request){
        try {
            $request->validate(
                [
                'amount' => 'required|numeric',
                'chick_density' => 'required'
                ]
            );
            $chick = Chick::create([
                "amount" => $request->amount,
                "chick_density" => $request->chick_density
            ]);
            return response()->json([
                "status" => 200,
                "datt" => $chick
            ]);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }



}
