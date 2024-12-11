<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GasController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.index');
    }
}
