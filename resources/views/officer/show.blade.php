@extends('layouts.app')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Oficial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('officers.index') }}"> {{ __('Retroceder') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $officer->name }}
                        </div>
                        <div class="form-group">
                            <strong>ID Polícia:</strong>
                            {{ $officer->police_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha cumpleaños:</strong>
                            {{ $officer->birth }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $officer->address }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de sangre:</strong>
                            {{ $officer->rh }}
                        </div>
                        <div class="form-group">
                            <strong>Rango:</strong>
                            {{ $officer->rank }}
                        </div>
                        <div class="form-group">
                            <strong>Equipamiento:</strong>
                            <ul>
                                @foreach ($officer->equipment as $equipment)
                                    <li><a href="{{ route('equipment.show', $equipment->id) }}">{{ $equipment->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
