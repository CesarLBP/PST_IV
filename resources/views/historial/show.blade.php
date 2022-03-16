@extends('layouts.plantilla')

@section('title', 'Show' . $historial->nombre)

@section('content')
    <h1>Bienvenido al historial {{$historial->nombre}} </h1>
    <a href="{{route('historial.index')}}">Volver a Historial</a>
    <br>
    <a href="{{route('historial.edit', $historial)}}">Editar Historial</a>
    <p><strong>Apellido: </strong>{{$historial->apellido}}</p>
    <p>{{$historial->descripcion}}</p>

    <form action="{{route('historial.destroy', $historial)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection