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
            <input type="text" name="localid" value="{{ $site->localid }}">
        </label>

        <br>
        <label>
            Nombre
            <br>
            <input type="text" name="nombre" value="{{ $site->nombre }}">
        </label>

        <br>
        <label>
            Zonal
            <br>
            <input type="text" name="zonal" value="{{ $site->zonal }}">
        </label>

        <br>
        <label>
            Estado
            <br>
            <input type="text" name="estado" value="{{ $site->estado }}">
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>


@endsection()