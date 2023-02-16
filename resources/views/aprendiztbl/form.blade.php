<div class="box box-info padding-1">
    <div class="box-body">

        {{-- Validación de campos --}}
 
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                           
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            {{ Form::label('documento') }}
            {{ Form::text('documento_ap', $aprendiztbl->documento_ap, ['class' => 'form-control' . ($errors->has('documento_ap') ? ' is-invalid' : ''), 'placeholder' => 'ej. 12345678']) }}
            {!! $errors->first('documento_ap', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre completo') }}
            {{ Form::text('nombre_ap', $aprendiztbl->nombre_ap, ['class' => 'form-control' . ($errors->has('nombre_ap') ? ' is-invalid' : ''), 'placeholder' => 'ej. Matt Shadows']) }}
            {!! $errors->first('nombre_ap', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email_ap', $aprendiztbl->email_ap, ['class' => 'form-control' . ($errors->has('email_ap') ? ' is-invalid' : ''), 'placeholder' => 'ej. abc@xyz.com']) }}
            {!! $errors->first('email_ap', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('programa de formación') }}
            {{ Form::select('programa_id',$programatbl, $aprendiztbl->programa_id, ['class' => 'form-control' . ($errors->has('programa_id') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('programa_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">
            <i class="fa fw fa-download"> 
                Guardar 
            </i>            
        </button>
    </div>
</div>

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@stop