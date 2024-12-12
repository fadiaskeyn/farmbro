<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class GasController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.index');
    }

    public function lamp(){
        $data = DB::table('lamps')->select('status')->get();
     return response()->json([
       'status' => 200,
       'data' => $data
    ]);
    }

    public function lampupdate() {
        $lamp = DB::table('lamps')->first();
        if ($lamp) {
            $newStatus = ($lamp->status == 1) ? 0 : 1;
            DB::table('lamps')
                ->where('id', $lamp->id)
                ->update(['status' => $newStatus]);
            return response()->json(['status' => $newStatus], 200);
        }
        return response()->json(['error' => 'Lamp not found'], 404);
    }
}
