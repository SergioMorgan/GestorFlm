@extends('layouts.template')

@section('title', 'Creacion de local')

@section('content')
    <h1>CREACION DE LOCAL</h1>

    <form action="{{ route('sites.store') }}" method="POST">
        @csrf

        <label>
            ID de local
            <br>
            <input type="text" name="localid" value=" {{ old('localid') }}">
            @error('localid')
                <br>
                <small>{{$message}}</small>
                <br>
            @enderror
        </label>

        <br>
        <label>
            Nombre
            <br>
            <input type="text" name="nombre" value=" {{ old('nombre') }}">
            @error('nombre')
                <br>
                <small>{{$message}}</small>
                <br>
            @enderror
        </label>

        <br>
        <label>
            Zonal
            <br>
            <input type="text" name="zonal" value=" {{ old('zonal') }}">
            @error('zonal')
                <br>
                <small>{{$message}}</small>
                <br>
            @enderror
        </label>

        <br>
        <label>
            Estado
            <br>
            <input type="text" name="estado" value=" {{ old('estado') }}">
            @error('estado')
                <br>
                <small>{{$message}}</small>
                <br>
            @enderror
        </label>

        <br>
        <button type="submit">Enviar</button>

    </form>


@endsection()