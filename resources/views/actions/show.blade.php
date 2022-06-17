@extends('layouts.template')

@section('title', 'Mostrar actuaciones' . $action->id)

@section('content')
    <h1>EDICION DE ACTUACIONES: {{$action->id}}</h1>
    <p><strong>Detalle: </strong>{{$action->detalle}}</p>
    <a href=" {{ route('actions.index') }} ">Volver a actuaciones</a>
@endsection()
