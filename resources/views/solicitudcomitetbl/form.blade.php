<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion_co', $solicitudcomitetbl->descripcion_co, ['class' => 'form-control' . ($errors->has('descripcion_co') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Co']) }}
            {!! $errors->first('descripcion_co', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Anexar documento') }}
            {{ Form::text('documento', $solicitudcomitetbl->documento, ['class' => 'form-control' . ($errors->has('documento') ? ' is-invalid' : ''), 'placeholder' => 'Documento']) }}
            {!! $errors->first('documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha solicitud') }}
            {{ Form::date('Fecha', $solicitudcomitetbl->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Instructor de apoyo') }}
            {{ Form::select('apoyoin_id', $instructortbl, $solicitudcomitetbl->apoyoin_id, ['class' => 'form-control' . ($errors->has('apoyoin_id') ? ' is-invalid' : ''), 'placeholder' => 'Apoyoin Id']) }}
            {!! $errors->first('apoyoin_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gestor de grupo') }}
            {{ Form::select('gestor_id', $instructortbl, $solicitudcomitetbl->gestor_id, ['class' => 'form-control' . ($errors->has('gestor_id') ? ' is-invalid' : ''), 'placeholder' => 'Gestor Id']) }}
            {!! $errors->first('gestor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Aprendiz') }}
            {{ Form::select('aprendiz_id', $aprendiztbl,$solicitudcomitetbl->aprendiz_id, ['class' => 'form-control' . ($errors->has('aprendiz_id') ? ' is-invalid' : ''), 'placeholder' => 'Aprendiz Id']) }}
            {!! $errors->first('aprendiz_id', '<div class="invalid-feedback">:message</div>') !!}
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