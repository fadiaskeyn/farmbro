<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GasController extends Controller
{
    public function index()
    {
        $gasApiUrl = 'https://farmbro-mbkm.research-ai.my.id/api/gas';
        $chickApiUrl = 'https://farmbro-mbkm.research-ai.my.id/api/chick';

        try {
            $gasResponse = Http::get($gasApiUrl);
            $gasData = $gasResponse->successful() ? $gasResponse->json()['data'] : null;
            $chickResponse = Http::get($chickApiUrl);
            $chickData = $chickResponse->successful() ? $chickResponse->json()['data'] : null;

            return view('layouts.dashboard.index', compact('gasData', 'chickData'));
        } catch (\Exception $e) {
            return view('layouts.dashboard.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
