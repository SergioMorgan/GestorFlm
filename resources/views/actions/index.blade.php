@extends('layouts.template')
@section('title', 'actuaciones')

@section('content')
    <h1>INDEX DE ACTUACIONES</h1>
    <a href="{{ route('actions.create') }}">Crear actuacion</a>
    <ul>
        @foreach ($actions as $action)
        <li>
            <a href="{{ route('actions.show', $action->id) }}"> {{$action->detalle}} </a>
            
        </li>
        @endforeach
    </ul>

    {{ $actions->links() }}
@endsection()
