@extends('layouts.app')

@section('template_title')
    Officer
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Officer') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('officers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Name</th>
										<th>Police Id</th>
										<th>Birth</th>
										<th>Address</th>
										<th>Rh</th>
										<th>Rank</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($officers as $officer)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $officer->name }}</td>
											<td>{{ $officer->police_id }}</td>
											<td>{{ $officer->birth }}</td>
											<td>{{ $officer->address }}</td>
											<td>{{ $officer->rh }}</td>
											<td>{{ $officer->rank }}</td>

                                            <td>
                                                <form action="{{ route('officers.destroy',$officer->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('officers.show',$officer->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('officers.edit',$officer->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
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
