@extends('layouts.template')

@section('title', 'Mostrar local ' . $site->nombre)

@section('content')
    <h1>Listado de un local especifico: {{$site->nombre}}</h1>
    <p><strong>Tipo: </strong>{{$site->estado}}</p>
    <a href=" {{ route('sites.index') }} ">Volver a locales</a>
@endsection()
