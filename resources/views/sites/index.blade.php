@extends('layouts.template')
@section('title', 'Locales')

@section('content')
    <h1>INDEX DE LOCALES</h1>
    <a href="{{ route('sites.create') }}">Crear local</a>
    <ul>
        @foreach ($sites as $site)
        <li>
            <a href="{{ route('sites.show', $site->id) }}"> {{$site->nombre}} </a>
        </li>
        @endforeach
    </ul>
    {{ $sites->links() }}
@endsection()
