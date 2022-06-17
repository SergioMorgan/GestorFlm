@extends('layouts.template')

@section('title', 'Edicion de ticket')

@section('content')
    <h1>EDITAR TICKET OS</h1>

    <form action="{{ route('ostickets.update', $osticket) }}" method="POST">
        @csrf
        @method('put')
        <label>
            ID de SIOM
            <br>
            <input type="text" name="siomid" value="{{ $osticket->siomid}}">
        </label>

        <br>
        <label>
            ID de Local
            <br>
            <input type="text" name="localid" value="{{ $osticket->localid}}">
        </label>

        <br>
        <label>
            Estado
            <br>
            <input type="text" name="estado" value="{{ $osticket->estado}}">
        </label>

        <br>
        <label>
            Tipo
            <br>
            <input type="text" name="tipo" value="{{ $osticket->tipo}}">
        </label>
        <br>

        <br>
        <label>
            Fecha de asignacion
            <br>
            <input type="text" name="fechaasignacion" value="{{ $osticket->fechaasignacion}}">
        </label>
        <br>

        <br>
        <label>
            Descripcion
            <br>
            <textarea name="descripcion" rows="5">{{ $osticket->descripcion}}</textarea>
        </label>
        <br>


        <button type="submit">Enviar</button>
    </form>


@endsection()