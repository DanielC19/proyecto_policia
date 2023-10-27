@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Bienvenid@ {{ explode(' ', Auth::user()->name)[0] }}, aquí tienes un
                        administrador de uniformados y equipamiento para cada uno:</p>
                    <a href="" class="btn">Uniformados</a>
                    <a href="" class="btn">Equipamiento</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
