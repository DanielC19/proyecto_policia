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
            {{ Form::label('name') }}
            {{ Form::text('name', $equipment->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type') }}
            {{ Form::text('type', $equipment->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('provider') }}
            {{ Form::text('provider', $equipment->provider, ['class' => 'form-control' . ($errors->has('provider') ? ' is-invalid' : ''), 'placeholder' => 'Provider']) }}
            {!! $errors->first('provider', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>