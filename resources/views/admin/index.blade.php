@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Administrador</h1>
@stop

@section('content')
    <p>Bienvenid@ {{ Auth::user()->name }} es un placer tenerl@ por aca, ¿Que haremos hoy?.</p>
    
    <img class="w-100 p-3 " src="/imagenes/ALKA.jpg/" alt="" >
    

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop