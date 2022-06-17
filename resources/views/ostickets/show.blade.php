@extends('layouts.template')

@section('title', 'Mostrar ticket ' . $osticket->siomid )

@section('content')
    <h1>pagina que un ticket especifico: {{ $osticket->siomid }}</h1>
    <p><strong>Tipo: </strong> {{ $osticket->descripcion }} </p>
    <a href=" {{ route('ostickets.index') }} ">Volver a tickets</a>
@endsection()
