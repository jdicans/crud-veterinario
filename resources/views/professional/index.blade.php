@extends('adminlte::page')

@section('template_title')
    Professional
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Professional') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('professionals.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Last Name</th>
										<th>Speciality</th>
										<th>Emeil</th>
										<th>Number</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($professionals as $professional)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $professional->name }}</td>
											<td>{{ $professional->last_name }}</td>
											<td>{{ $professional->speciality }}</td>
											<td>{{ $professional->emeil }}</td>
											<td>{{ $professional->number }}</td>

                                            <td>
                                                <form action="{{ route('professionals.destroy',$professional->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('professionals.show',$professional->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('professionals.edit',$professional->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $professionals->links() !!}
            </div>
        </div>
    </div>
@endsection
