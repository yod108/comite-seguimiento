@extends('adminlte::page')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">
                            <i class="fa fas fa-user-edit">
                                Actualizar datos aprendiz
                            </i>
                        </span>

                        <div class="float-right">
                            <a class="btn btn-success" href="{{ route('aprendiztbl.index') }}">
                               <div class="div">
                                    <i class="fa fa-reply-all">
                                        Volver
                                    </i>
                               </div>                                                             
                            </a>   
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('aprendiztbl.update', $aprendiztbl->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('aprendiztbl.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
