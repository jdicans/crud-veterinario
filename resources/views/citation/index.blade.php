@extends('adminlte::page')

@section('template_title')
    Citation
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Citation') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('citations.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Date</th>
										<th>Time</th>
										<th>Query Type</th>
										<th>Mascot Id</th>
										<th>Owner Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($citations as $citation)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $citation->date }}</td>
											<td>{{ $citation->time }}</td>
											<td>{{ $citation->query_type }}</td>
											<td>{{ $citation->mascot->name }}</td>
											<td>{{ $citation->owner->name }}</td>

                                            <td>
                                                <form action="{{ route('citations.destroy',$citation->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('citations.show',$citation->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('citations.edit',$citation->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $citations->links() !!}
            </div>
        </div>
    </div>
@endsection
