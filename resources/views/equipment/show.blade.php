@extends('layouts.app')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Equipment</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('equipment.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Officer Name:</strong>
                            <a href="{{ route('officers.show', $equipment->officer->id) }}">{{ $equipment->officer->name }}</a>
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $equipment->name }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $equipment->type }}
                        </div>
                        <div class="form-group">
                            <strong>Provider:</strong>
                            {{ $equipment->provider }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
