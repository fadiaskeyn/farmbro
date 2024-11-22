<?php

namespace App\Http\Controllers\api;

use App\Models\Gas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class GasApiController extends Controller
{
    public function dashboard () {
        $gas = Gas::latest()->first();
        return response()->json([
            "status" => 200,
            "data" => $gas
        ]);
    }

    public function store(Request $request){
        $request->validate([
            "humidity" => "required",
            "temperature" => "required",
            "amonia" => "required"
        ]);
        $gas = Gas::create([
            "humidity" => $request->humidity,
            "temperature" => $request->temperature,
            "amonia" => $request->amonia
        ]);
        return response()->json([
            "status" => 200,
            "data" => $gas
        ]);

    }

    public function all(){
        $data = Gas::all();
        return response()->json([
            "status" => 200,
            "data" => $data
        ]);
    }
    
}
