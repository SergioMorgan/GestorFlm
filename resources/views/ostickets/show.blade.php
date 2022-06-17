@extends('layouts.template')

@section('title', 'Mostrar ticket ' . $osticket->siomid )

@section('content')
    <h1>Pagina que un ticket especifico:  {{$osticket->siomid}}</h1>
    <a href="{{ route('ostickets.index') }}">Volver a tickets</a>
    <br>
    <a href="{{ route('ostickets.edit', $osticket) }}">Editar ticket</a>
    <p><strong>Tipo: </strong>{{$osticket->descripcion}}</p>
@endsection()
