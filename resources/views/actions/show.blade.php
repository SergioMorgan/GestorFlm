@extends('layouts.template')

@section('title', 'Mostrar actuaciones' . $action->id)

@section('content')
    <h1>Edicion de actuaciones:  {{$action->id}}</h1>
    <a href="{{ route('actions.index') }}">Volver a actuaciones</a>
    <br>
    <a href="{{ route('actions.edit', $action) }}">Editar actuacion</a>
    <p><strong>Tipo: </strong>{{$action->detalle}}</p>
@endsection()
