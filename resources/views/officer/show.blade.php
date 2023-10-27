@extends('layouts.app')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Officer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('officers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $officer->name }}
                        </div>
                        <div class="form-group">
                            <strong>Police Id:</strong>
                            {{ $officer->police_id }}
                        </div>
                        <div class="form-group">
                            <strong>Birth:</strong>
                            {{ $officer->birth }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $officer->address }}
                        </div>
                        <div class="form-group">
                            <strong>Rh:</strong>
                            {{ $officer->rh }}
                        </div>
                        <div class="form-group">
                            <strong>Rank:</strong>
                            {{ $officer->rank }}
                        </div>
                        <div class="form-group">
                            <strong>Equipment:</strong>
                            <ul>
                                @foreach ($officer->equipment as $equipment)
                                    <li>{{ $equipment->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
