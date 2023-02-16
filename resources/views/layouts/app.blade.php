@extends('adminlte::page')

@section('title', 'Comité')

@section('content_header')
<h1>Comite-seguimiento</h1>
@stop

@section('content')
<p>Welcome to this beautiful admin panel.</p>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    Swal.fire(
        'The Internet?',
        'That thing is still around?',
        'question'
    )
</script>
@stop