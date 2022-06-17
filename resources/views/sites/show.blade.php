@extends('layouts.template')

@section('title', 'Mostrar local ' . $site->nombre)

@section('content')
    <h1>Listado de un local especifico: {{$site->nombre}}</h1>
    <a href="{{ route('sites.index') }}">Volver a locales</a>
    <br>
    <a href="{{ route('sites.edit', $site) }}">Editar local</a>
    <p><strong>Tipo: </strong>{{$site->estado}}</p>
@endsection()
