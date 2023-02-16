@extends('adminlte::page')

@section('title', 'Solicitud comité')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Solicitud comité</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('solicitudcomitetbl.index') }}">
                                <div class="div">
                                    <i class="fa fa-reply-all">
                                        Volver
                                    </i>                                
                                </div>  
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $solicitudcomitetbl->descripcion_co }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $solicitudcomitetbl->documento }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $solicitudcomitetbl->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Instructor de apoyo:</strong>
                            {{ $solicitudcomitetbl->instructortbl->nombre_in }}
                        </div>
                        <div class="form-group">
                            <strong>Gestor de grupo:</strong>
                            {{ $solicitudcomitetbl->instructortbl->nombre_in }}
                        </div>
                        <div class="form-group">
                            <strong>Aprendiz:</strong>
                            {{ $solicitudcomitetbl->aprendiztbl->nombre_ap }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
