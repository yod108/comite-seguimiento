@extends('adminlte::page')

@section('title', 'Editar solicitud comité')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar solicitud comité</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('solicitudcomitetbls.update', $solicitudcomitetbl->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('solicitudcomitetbl.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
