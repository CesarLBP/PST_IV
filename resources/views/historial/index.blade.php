@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienvenido a la pagina principal de historial</h1>
    <a href="{{route('historial.create')}}">Crear Historial</a>
    <ul>   
        @foreach ($historial as $historia)
            <li>
                <a href="{{route('historial.show',$historia->id)}}">{{$historia->nombre}}</a>
            </li>
        @endforeach
    </ul>

    {{$historial->links()}}
@endsection