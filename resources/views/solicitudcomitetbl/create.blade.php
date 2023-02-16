@extends('adminlte::page')

@section('title', 'Crear solicitud comité')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><i class="fa fas fa-file-export"> Crear Solicitud comité</i></span>  
                            
                        <div class="float-right">
                            <a class="btn btn-success" href="{{ route('solicitudcomitetbl.index') }}">
                               <div class="div">
                                    <i class="fa fa-reply-all">
                                        Volver
                                    </i>
                               </div>                                                             
                            </a>   
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('solicitudcomitetbl.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('sweetalert::alert')
                            @include('solicitudcomitetbl.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
