@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Equipment') }} para {{ $officer->name }}
                            </span>

                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th>Nombre Equipamiento</th>
										<th>Tipo</th>
										<th>Proveedor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($result as $equipment)
                                        <tr>
											<td>{{ $equipment->name }}</td>
											<td>{{ $equipment->type }}</td>
											<td>{{ $equipment->provider }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
