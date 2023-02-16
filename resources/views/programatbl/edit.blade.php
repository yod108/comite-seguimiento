@extends('adminlte::page')

@section('title', 'Actualizar programa')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">
                            <i class="fa fa-paint-brush">
                                Actualizar Programa
                            </i>
                        </span>

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
                        <form method="POST" action="{{ route('programatbl.update', $programatbl->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('programatbl.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
