@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
    <h1>Bienvenido a la pagina de crear un historial</h1>
    <form action="{{route('historial.store')}}" method="POST">
        
        @csrf
        
        <label">
            Nombre:
            <br>
            <input type="text" name="nombre">
        </label>
        <br>
        <label">
            Apellido:
            <br>
            <input type="text" name="apellido">
        </label>
        <br>
        <label">
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection