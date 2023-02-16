<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('codigo_pro', $programatbl->codigo_pro, ['class' => 'form-control' . ($errors->has('codigo_pro') ? ' is-invalid' : ''), 'placeholder' => 'ej. 1234567']) }}
            {!! $errors->first('codigo_pro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del programa') }}
            {{ Form::text('nombre_pro', $programatbl->nombre_pro, ['class' => 'form-control' . ($errors->has('nombre_pro') ? ' is-invalid' : ''), 'placeholder' => 'ej. electrónica e implementación']) }}
            {!! $errors->first('nombre_pro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha inicio') }}
            {{ Form::date('Fechaini', $programatbl->Fechaini, ['class' => 'form-control' . ($errors->has('Fechaini') ? ' is-invalid' : ''), 'placeholder' => 'dd/mm/aaaa']) }}
            {!! $errors->first('Fechaini', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <div class="div">     
            <button type="submit" class="btn btn-success">
                <i class="fa fw fa-download"> 
                    Guardar 
                </i>
            </button>
        </div>        
    </div>
</div>