@extends('layouts.template')
@section('title', 'Tickets')

@section('content')
    <h1>Pagina principal de listado de tickets</h1>
    <a href="{{ route('ostickets.create') }}">Crear ticket</a>
    <ul>
        @foreach ($ostickets as $osticket)
        <li>
            <a href="{{ route('ostickets.show', $osticket->id) }}"> {{$osticket->descripcion}} </a>
        </li>
        @endforeach
    </ul>

    {{ $ostickets->links() }}
@endsection()
