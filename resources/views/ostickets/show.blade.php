@extends('layouts.template')

@section('title', 'Mostrar ' . $osticket)

@section('content')
    <h1>pagina que un ticket especifico: {{$osticket}}</h1>
@endsection()
