@extends('adminlte::page')

@section('title', 'ver instructor')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">
                                <i class="fa fa-eye">
                                    Ver Instructor
                                </i>
                            </span>
                        </div>
                        <div class="float-right">
                                <a class="btn btn-success" href="{{ route('instructortbl.index') }}">
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
                            <i class="fa far fa-address-card"></i>
                            <strong>Documento:</strong>
                            {{ $instructortbl->documento_in }}
                        </div>
                        <div class="form-group">
                            <i class="fa fa-user-secret"></i>
                            <strong>Nombre completo:</strong>
                            {{ $instructortbl->nombre_in }}
                        </div>
                        <div class="form-group">
                            <i class="fa fa-fw fa-envelope"></i>
                            <strong>Email:</strong>
                            {{ $instructortbl->email_in }}
                        </div>
                        <div class="form-group">
                            <i class="fa fa-book"></i>
                            <strong>Gestor de grupo:</strong>
                            {{ $instructortbl->programatbl->nombre_pro}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
