@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Oficiales eliminados') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('officers.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Ver oficiales') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Nombre</th>
										<th>ID Polícia</th>
										<th>Fecha nacimiento</th>
										<th>Dirección</th>
										<th>Tipo de sangre</th>
										<th>Rango</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($officers as $officer)
                                        <tr>
                                            <td>{{ $officer->id }}</td>
											<td>{{ $officer->name }}</td>
											<td>{{ $officer->police_id }}</td>
											<td>{{ $officer->birth }}</td>
											<td>{{ $officer->address }}</td>
											<td>{{ $officer->rh }}</td>
											<td>{{ $officer->rank }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $officers->links() !!}
            </div>
        </div>
    </div>
@endsection
