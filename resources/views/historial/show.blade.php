@extends('layouts.plantilla')

@section('title', 'Show' . $historial->name)

@section('content')
    <h1>Bienvenido al historial {{$historial->name}} </h1>
    <a href="{{route('historial.index')}}">Volver a Historial</a>
    <p><strong>Apellido: </strong>{{$historial->apellido}}</p>
    <p>{{$historial->descripcion}}</p>
@endsection