@extends('layouts.plantilla')

@section('title', 'Edit')

@section('content')
    <h1>Bienvenido a la pagina de editar un historial</h1>
    <form action="{{route('historial.update', $historial)}}" method="POST">
        
        @csrf

        @method('put')
        
        <label">
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{$historial->nombre}}">
        </label>
        <br>
        <label">
            Apellido:
            <br>
            <input type="text" name="apellido" value="{{$historial->apellido}}">
        </label>
        <br>
        <label">
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{$historial->descripcion}}</textarea>
        </label>
        <br>
        <button type="submit">Actializar Formulario</button>
    </form>
@endsection