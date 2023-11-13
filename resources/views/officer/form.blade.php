<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Cédula') }}
            {{ Form::number('id', $officer->id, ['class' => 'form-control' . ($errors->has('id') ? ' is-invalid' : ''), 'placeholder' => 'Cédula']) }}
            {!! $errors->first('id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $officer->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ID Policia') }}
            {{ Form::number('police_id', $officer->police_id, ['class' => 'form-control' . ($errors->has('police_id') ? ' is-invalid' : ''), 'placeholder' => 'ID Policia']) }}
            {!! $errors->first('police_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha nacimiento') }}
            {{ Form::date('birth', $officer->birth, ['class' => 'form-control' . ($errors->has('birth') ? ' is-invalid' : ''), 'placeholder' => 'Fecha cumpleaños']) }}
            {!! $errors->first('birth', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('address', $officer->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo sangre') }}
            {{ Form::text('rh', $officer->rh, ['class' => 'form-control' . ($errors->has('rh') ? ' is-invalid' : ''), 'placeholder' => 'Tipo sangre']) }}
            {!! $errors->first('rh', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Rango') }}
            {{ Form::text('rank', $officer->rank, ['class' => 'form-control' . ($errors->has('rank') ? ' is-invalid' : ''), 'placeholder' => 'Rango']) }}
            {!! $errors->first('rank', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>