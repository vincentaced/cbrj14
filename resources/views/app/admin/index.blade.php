@extends('adminlte::page')

@section('title', 'CBRJ\'s Admin')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('footer')
Copyright &copy 2024, CBRJ IS. All rights reserved
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop