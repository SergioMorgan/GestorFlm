<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
    <style>
        /* body {
            font-family: 'Nunito';
        } */
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')

    <div class="container mx-auto">
        <x-alert color="blue" class="mt-4">
            <x-slot name="title">
                Titulo personalizado
            </x-slot>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, eveniet ab inventore magni quisquam debitis at rem reprehenderit distinctio accusamus iusto voluptatibus? Consectetur, eos voluptate nulla ad deserunt totam odit.
        </x-alert>
    </div>
</body>
</html>