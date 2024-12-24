<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Camareira;

class CamareiraController extends Controller
{
    public function index()
    {
        $camareiras = Camareira::all(); 
        return view('dashboard', compact('camareiras'));
    }
}