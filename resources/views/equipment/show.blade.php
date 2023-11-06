@extends('layouts.app')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Equipamiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('equipment.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Oficial:</strong>
                            {{ $equipment->officer_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $equipment->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $equipment->type }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $equipment->provider }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
