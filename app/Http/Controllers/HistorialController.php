<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public function index(){

        //$historial = Historial::all();
        $historial = Historial::orderBy('id','desc')->paginate();
        //return $historial;

        //return view('historial.index');
        return view('historial.index', compact('historial'));
    }

    public function create(){
        return view('historial.create');
    }

    public function store(request $request){
        $historial = new Historial;

        $historial->nombre = $request->nombre;
        $historial->apellido = $request->apellido;
        $historial->descripcion = $request->descripcion;

        $historial->save();

        return redirect()->route('historial.show', $historial);

        //return $historial;
        // return request()->all();
    }

    public function show(Historial $historial){

        // $historial = Historial::find($historial);

        //return $historial;

        //compact('curso'); // ['curso' => $curso]
        // return view('historial.show', ['dia' => $dia]);
         return view('historial.show', compact('historial'));
    }

    public function edit(Historial $historial){
        return view('historial.edit', compact('historial'));
    }

    public function update(request $request, Historial $historial){
        $historial->nombre = $request->nombre;
        $historial->apellido = $request->apellido;
        $historial->descripcion = $request->descripcion;

        $historial->save();

        return redirect()->route('historial.show', $historial);
    }

    public function destroy(Historial $historial){
        $historial->delete();

        return redirect()->route('historial.index');
    }


}
