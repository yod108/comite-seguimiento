<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('documento') }}
            {{ Form::text('documento_in', $instructortbl->documento_in, ['class' => 'form-control' . ($errors->has('documento_in') ? ' is-invalid' : ''), 'placeholder' => 'ej.1234567']) }}
            {!! $errors->first('documento_in', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre completo') }}
            {{ Form::text('nombre_in', $instructortbl->nombre_in, ['class' => 'form-control' . ($errors->has('nombre_in') ? ' is-invalid' : ''), 'placeholder' => 'ej. Albert Einstein']) }}
            {!! $errors->first('nombre_in', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email_in', $instructortbl->email_in, ['class' => 'form-control' . ($errors->has('email_in') ? ' is-invalid' : ''), 'placeholder' => 'ej. abc@xyz.com']) }}
            {!! $errors->first('email_in', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Gestor de grupo') }}
            {{ Form::select('programa_id', $programatbl, $instructortbl->programa_id, ['class' => 'form-control' . ($errors->has('programa_id') ? ' is-invalid' : ''), 'placeholder' => ' ']) }}
            {!! $errors->first('programa_id', '<div class="invalid-feedback">:message</div>') !!}
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