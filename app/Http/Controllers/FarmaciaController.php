<?php

namespace App\Http\Controllers;

use App\Models\Farmacias;
use Illuminate\Http\Request;

class FarmaciaController extends Controller
{
    function index(){
        return Farmacias::all();
    }

    function index1(){
        $farmacias = Farmacias::all();
        return view('app', compact('farmacias'));
    }
}
