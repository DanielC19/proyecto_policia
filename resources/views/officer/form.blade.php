<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('id') }}
            {{ Form::number('id', $officer->id, ['class' => 'form-control' . ($errors->has('id') ? ' is-invalid' : ''), 'placeholder' => 'Id']) }}
            {!! $errors->first('id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $officer->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID_Policia') }}
            {{ Form::number('police_id', $officer->police_id, ['class' => 'form-control' . ($errors->has('police_id') ? ' is-invalid' : ''), 'placeholder' => 'ID_Policia']) }}
            {!! $errors->first('police_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha cumpleaños') }}
            {{ Form::date('birth', $officer->birth, ['class' => 'form-control' . ($errors->has('birth') ? ' is-invalid' : ''), 'placeholder' => 'Fecha cumpleaños']) }}
            {!! $errors->first('birth', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('address', $officer->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo_sangre') }}
            {{ Form::text('rh', $officer->rh, ['class' => 'form-control' . ($errors->has('rh') ? ' is-invalid' : ''), 'placeholder' => 'Tipo_sangre']) }}
            {!! $errors->first('rh', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Rango') }}
            {{ Form::text('rank', $officer->rank, ['class' => 'form-control' . ($errors->has('rank') ? ' is-invalid' : ''), 'placeholder' => 'Rango']) }}
            {!! $errors->first('rank', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>