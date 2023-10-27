<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('id') }}
            {{ Form::number('id', $officer->id, ['class' => 'form-control' . ($errors->has('id') ? ' is-invalid' : ''), 'placeholder' => 'Id']) }}
            {!! $errors->first('id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $officer->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('police_id') }}
            {{ Form::number('police_id', $officer->police_id, ['class' => 'form-control' . ($errors->has('police_id') ? ' is-invalid' : ''), 'placeholder' => 'Police Id']) }}
            {!! $errors->first('police_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('birth') }}
            {{ Form::date('birth', $officer->birth, ['class' => 'form-control' . ($errors->has('birth') ? ' is-invalid' : ''), 'placeholder' => 'Birth']) }}
            {!! $errors->first('birth', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $officer->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rh') }}
            {{ Form::text('rh', $officer->rh, ['class' => 'form-control' . ($errors->has('rh') ? ' is-invalid' : ''), 'placeholder' => 'Rh']) }}
            {!! $errors->first('rh', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rank') }}
            {{ Form::text('rank', $officer->rank, ['class' => 'form-control' . ($errors->has('rank') ? ' is-invalid' : ''), 'placeholder' => 'Rank']) }}
            {!! $errors->first('rank', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>