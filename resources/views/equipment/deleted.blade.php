@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Equipamiento eliminado
                            </span>

                            <div class="float-right">
                                <a href="{{ route('equipment.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Ver equipamiento') }}
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
										<th>Nombre Uniformado</th>
										<th>Nombre Equipamiento</th>
										<th>Tipo</th>
										<th>Proveedor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipment_all as $equipment)
                                        <tr>
                                            <td>{{ $equipment->id }}</td>
											<td>{{ $equipment->officer_id }}</td>
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
                {!! $equipment_all->links() !!}
            </div>
        </div>
    </div>
@endsection
