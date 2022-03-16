<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public function index(){

        //$historial = Historial::all();
        $historial = Historial::paginate();
        //return $historial;

        //return view('historial.index');
        return view('historial.index', compact('historial'));
    }

    public function create(){
        return view('historial.create');
    }

    public function show($id){

        $historial = Historial::find($id);

        //return $historial;

        //compact('curso'); // ['curso' => $curso]
        // return view('historial.show', ['dia' => $dia]);
         return view('historial.show', compact('historial'));
    }
}
