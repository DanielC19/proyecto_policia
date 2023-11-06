<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <label for="officer_id">Uniformado</label>
            <select name="officer_id" class="form-select {{ $errors->has('name') ? ' is-invalid' : '' }}">
                @foreach ($officers as $officer)
                    <option value="{{ $officer->id }}">{{ $officer->name }}</option>
                @endforeach
            </select>
            {!! $errors->first('officer_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $equipment->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('type', $equipment->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Proveedor') }}
            {{ Form::text('provider', $equipment->provider, ['class' => 'form-control' . ($errors->has('provider') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor']) }}
            {!! $errors->first('provider', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>