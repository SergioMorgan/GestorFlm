@extends('layouts.template')

@section('title', 'Edicion de local')

@section('content')
    <h1>EDITAR LOCAL</h1>

    <form action="{{ route('sites.update', $site) }}" method="POST">
        @csrf
        @method('put')
        <label>
            ID de local
            <br>
            <input type="text" name="localid" value="{{ old('localid', $site->localid) }}">
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
            <input type="text" name="nombre" value="{{ old('nombre', $site->nombre) }}">
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
            <input type="text" name="zonal" value="{{ old('zonal', $site->zonal) }}">
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
            <input type="text" name="estado" value="{{ old('estado', $site->estado) }}">
            @error('estado')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>


@endsection()