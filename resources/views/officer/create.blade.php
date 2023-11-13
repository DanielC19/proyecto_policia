@extends('layouts.app')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Añadir Oficial</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('officers.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('officer.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
