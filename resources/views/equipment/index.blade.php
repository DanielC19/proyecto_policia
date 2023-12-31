@extends('layouts.app')

@section('template_title')
    Equipment
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Equipment') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('equipment.deleted') }}" class="btn btn-danger btn-sm float-right"  data-placement="left">
                                    {{ __('Ver eliminados') }}
                                </a>
                                <a href="{{ route('equipment.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Crear Arma') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

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

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipment_all as $equipment)
                                        <tr>
                                            <td>{{ $equipment->id }}</td>
											<td>{{ $equipment->officer->name }}</td>
											<td>{{ $equipment->name }}</td>
											<td>{{ $equipment->type }}</td>
											<td>{{ $equipment->provider }}</td>

                                            <td>
                                                <form action="{{ route('equipment.destroy',$equipment->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('equipment.show',$equipment->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('equipment.edit',$equipment->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
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
