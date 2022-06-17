@extends('layouts.template')

@section('title', 'Edicion de actuacion')

@section('content')
    <h1>EDITAR ACTUACION</h1>

    <form action="{{ route('actions.update', $action) }}" method="POST">
        @csrf
        @method('put')
        <label>
            ID de SIOM
            <br>
            <input type="text" name="siomid" value="{{ $action->siomid}}">
        </label>

        <br>
        <label>
            Nombre de usuario
            <br>
            <input type="text" name="username" value="{{ $action->username}}">
        </label>

        <br>
        <label>
            Detalle
            <br>
            <textarea name="detalle" rows="5">{{ $action->detalle}}</textarea>
        </label>
        <br>


        <button type="submit">Enviar</button>
    </form>


@endsection()