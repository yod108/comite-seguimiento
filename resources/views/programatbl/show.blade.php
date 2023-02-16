@extends('adminlte::page')

@section('title', 'ver programa')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">
                                <i class="fa fa-eye">
                                    Ver Programa
                                </i>
                            </span>
                        </div>
                        <div class="float-right">
                                <a class="btn btn-success" href="{{ route('programatbl.index') }}">
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
                            <i class="fa fas fa-bug"></i>
                            <strong> Código:</strong>
                            {{ $programatbl->codigo_pro }}
                        </div>
                        <div class="form-group">
                            <i class="fa fa-book"></i>
                            <strong> Nombre del Programa:</strong>
                            {{ $programatbl->nombre_pro }}
                        </div>
                        <div class="form-group">
                            <i class="fa far fa-calendar-alt"></i>
                            <strong> Fecha inicio:</strong>
                            {{ $programatbl->Fechaini }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
