@extends('adminlte::page')

@section('title', 'Lista de aprendices')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <div class="div">
                                    <i class="fa fa-users">
                                        {{ __('Lista de Aprendices') }}
                                    </i>
                                </div>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('aprendiztbl.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                    <div class="div"> 
                                        <i class="fa fa-plus-square"> {{ __('Nuevo') }}</i>
                                    </div>
                                </a>
                              </div>
                        </div>
                    </div>
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
                                        <th>Nª</th>
										<th>Documento</th>
										<th>Nombre completo</th>
										<th>Email</th>
										<th>Programa de formación</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aprendiztbls as $aprendiztbl)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $aprendiztbl->documento_ap }}</td>
											<td>{{ $aprendiztbl->nombre_ap }}</td>
											<td>{{ $aprendiztbl->email_ap }}</td>
											{{-- <td>{{ $aprendiztbl->programa_id }}</td> --}}
                                            <td>
                                                {{ $aprendiztbl->programatbl->nombre_pro }}
                                            </td>

                                            <td>
                                                <form action="{{ route('aprendiztbl.destroy',$aprendiztbl->id) }}" method="POST" class="eliminar-registro">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('aprendiztbl.show',$aprendiztbl->id) }}"><i class="fa fa-fw fa-binoculars"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('aprendiztbl.edit',$aprendiztbl->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $aprendiztbls->links() !!}
            </div>
        </div>
    </div>
@stop
{{-- @endsection --}}

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Alert Eliminar --}}

    @if(session('eliminar') == 'ok')
        <script>
            Swal.fire(
                'Registro Eliminado!',
                '¡Su registro ha sido eliminado con éxito!',
                'success',
            )
        </script>
    @endif
        {{-- Alert Crear Aprendiz --}}
    @if(session('crear') == 'ok' )
        <script>
            Swal.fire({
                position: 'relative',
                icon: 'success',
                title: '¡Aprendiz creado con éxito!',
                showConfirmButton: false,
                timer: 2000
            })
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
@stop