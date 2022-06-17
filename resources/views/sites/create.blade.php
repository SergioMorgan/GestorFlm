@extends('layouts.template')

@section('title', 'Creacion de local')

@section('content')
    <h1>CREACION DE LOCAL</h1>

    <form action="{{ route('sites.store') }}" method="POST">
        @csrf
        <label>
            ID de local
            <br>
            <input type="text" name="localid">
        </label>

        <br>
        <label>
            Nombre
            <br>
            <input type="text" name="nombre">
        </label>

        <br>
        <label>
            Zonal
            <br>
            <input type="text" name="zonal">
        </label>

        <br>
        <label>
            Estado
            <br>
            <input type="text" name="estado">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>


@endsection()