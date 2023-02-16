@extends('adminlte::page')

@section('title', 'Solicitud comité')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            <div class="div">
                                <i class="fa fas fa-clipboard-list"> {{ __('Lista Solicitud comité') }}</i>
                            </div>
                        </span>

                        <div class="float-right">
                            <a href="{{ route('solicitudcomitetbl.create') }}"
                                class="btn btn-success btn-sm float-right" data-placement="left" data-toggle="modal"
                                data-target="#dialogo1">
                                <div class="div">
                                    <i class="fa fa-plus-square">
                                        {{ __('Nuevo') }}
                                    </i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- <!--inicio para modal-->
                <div class="container">

                    <form class="needs-validation" method="POST" action="{{ route('solicitudcomitetbl.index') }}">

                        <div class="modal fade" id="dialogo1">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- cabecera del diálogo -->
                                    <div class="modal-header">
                                        <div class="div">
                                            <i class="fa fa-puzzle-piece">
                                                {{ __('Registrar comité') }}
                                            </i>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal">X</button>
                                    </div>

                                    <!-- cuerpo del diálogo -->
                                    <div class="modal-body">

                                        <div class="form-group">
                                            {{ Form::label('Fecha solicitud') }}
                                            {{ Form::date('Fecha', $solicitudcomitetbl->Fecha, ['class' =>
                                            'form-control'. ($errors->has('Fecha') ? ' is-invalid' : ''),
                                            'placeholder' => 'Fecha']) }}
                                            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message
                                            </div>') !!}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('Instructor de apoyo') }}
                                            {{ Form::select('apoyoin_id', $instructortbl,
                                            $solicitudcomitetbl->apoyoin_id, ['class' => 'form-control' .
                                            ($errors->has('apoyoin_id') ? ' is-invalid' : ''), 'placeholder' =>
                                            '']) }}
                                            {!! $errors->first('apoyoin_id', '<div class="invalid-feedback">:message
                                            </div>') !!}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('gestor de grupo') }}
                                            {{ Form::select('gestor_id', $instructortbl,
                                            $solicitudcomitetbl->gestor_id, ['class' => 'form-control' .
                                            ($errors->has('gestor_id') ? ' is-invalid' : ''), 'placeholder' =>
                                            '']) }}
                                            {!! $errors->first('gestor_id', '<div class="invalid-feedback">:message
                                            </div>') !!}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('Aprendiz') }}
                                            {{ Form::select('aprendiz_id',
                                            $aprendiztbl,$solicitudcomitetbl->aprendiz_id, ['class' =>
                                            'form-control' . ($errors->has('aprendiz_id') ? ' is-invalid' : ''),
                                            'placeholder' => '']) }}
                                            {!! $errors->first('aprendiz_id', '<div class="invalid-feedback">
                                                :message</div>') !!}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('Anexar documento') }}
                                            {{ Form::file('documento', $solicitudcomitetbl->documento, ['class' =>
                                            'form-control' . ($errors->has('documento') ? ' is-invalid' : ''),
                                            'placeholder' => 'Anexo']) }}
                                            {!! $errors->first('documento', '<div class="invalid-feedback">:message
                                            </div>') !!}
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('Descripción') }}
                                            {{ Form::textarea('descripcion_co', $solicitudcomitetbl->descripcion_co,
                                            ['class' => 'form-control' . ($errors->has('descripcion_co') ? '
                                            is-invalid' : ''), 'placeholder' => 'Escriba aquí más información...']) }}
                                            {!! $errors->first('descripcion_co', '<div class="invalid-feedback">
                                                :message</div>') !!}
                                        </div>
                                        <button class="btn btn-success" data-dismiss="modal">
                                            <i class="fa fw fa-download">
                                                Guardar
                                            </i>
                                        </button>
                                    </div>

                                    <!-- pie del diálogo -->
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" data-dismiss="modal">
                                            <i class="fa fw fa-download">
                                                Guardar
                                            </i>
                                        </button>

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                            <i class="fa fa-close ">
                                                Cerrar
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--fin modal--> --}}

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Descripcion</th>
                                    <th>Documento</th>
                                    <th>Fecha</th>
                                    <th>Instructor de apoyo</th>
                                    <th>Gestor de grupo</th>
                                    <th>Aprendiz</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($solicitudcomitetbls as $solicitudcomitetbl)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $solicitudcomitetbl->descripcion_co }}</td>
                                    <td>{{ $solicitudcomitetbl->documento }}</td>
                                    <td>{{ $solicitudcomitetbl->Fecha }}</td>
                                    <td>{{ $solicitudcomitetbl->instructortbl->nombre_in }}</td>
                                    <td>{{ $solicitudcomitetbl->instructortbl->nombre_in }}</td>
                                    <td>{{ $solicitudcomitetbl->aprendiztbl->nombre_ap }}</td>


                                    <td>
                                        <form action="{{ route('solicitudcomitetbl.destroy',$solicitudcomitetbl->id) }}"
                                            method="POST" class="eliminar-registro">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('solicitudcomitetbl.show',$solicitudcomitetbl->id) }}"><i
                                                    class="fa fa-fw fa-binoculars"></i></a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('solicitudcomitetbl.edit',$solicitudcomitetbl->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {!! $solicitudcomitetbls->links() !!}
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Alert Eliminar --}}

    @if(session('eliminar')== 'ok')
        <script>
            Swal.fire(
                'Registro Eliminado!',
                '¡Su registro ha sido eliminado con éxito!',
                'success'
            )
        </script>
    @endif

    <script>
        $('.eliminar-registro').submit(function(e){
            e.preventDefault();

            Swal.fire({
                title: '¿Está seguro de eliminarlo?',
                text: "¡No podrás recuperar este registro!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar!',
                cancelButtonText: 'Cancelar',
                }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@stop