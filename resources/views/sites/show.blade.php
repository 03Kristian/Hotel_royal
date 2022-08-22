@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Sitio: {{''.$site->nombre}}</h1>
    <p>Descripcion: {{''.$site->descripcion}}</p>

@stop

@section('content')
<h4>lista de servicios</h4>
    <table class="table table-success">
        <thead>
            <tr>
                <td> servicio</td>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{$service->servicio}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
