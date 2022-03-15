<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public function index(){

        return view('historial.index');
    }

    public function create(){
        return view('historial.create');
    }

    public function show($dia){
        //compact('curso'); // ['curso' => $curso]
        return view('historial.show', ['dia' => $dia]);
    }
}
