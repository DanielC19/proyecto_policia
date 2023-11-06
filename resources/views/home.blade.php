@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div  class="card">
                <h3 class="card-header">{{ __('Inicio') }}</h3>

                <div class="card-body center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h6>Bienvenid@ {{ explode(' ', Auth::user()->name)[0] }}, aquí tienes un
                        administrador de uniformados y equipamiento para cada uno:</h6>
                    <div class="my-3">
                        <a href="{{ route('officers.index') }}" class="btn btn-uni mx-3"  >Uniformados</a>
                        <a href="{{ route('equipment.index')  }}" class="btn btn-uni1 mx-3">Equipamiento</a>
                    </div>

                   
                    <img width="500px" src="{{ asset('storage/img/descarga.gif') }}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
