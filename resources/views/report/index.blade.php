@extends('adminlte::page')

@section('template_title')
    Report
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Report') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reports.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Characteristics</th>
										<th>Date Entered</th>
										<th>Date Deperture</th>
										<th>Time Entered</th>
										<th>Time Deperture</th>
										<th>General Note</th>
										<th>Important Note</th>
										<th>Price</th>
										<th>Consultation Id</th>
										<th>Professional Id</th>
										<th>Mascot Id</th>
										<th>Owner Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reports as $report)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $report->characteristics }}</td>
											<td>{{ $report->date_entered }}</td>
											<td>{{ $report->date_deperture }}</td>
											<td>{{ $report->time_entered }}</td>
											<td>{{ $report->time_deperture }}</td>
											<td>{{ $report->general_note }}</td>
											<td>{{ $report->important_note }}</td>
											<td>{{ $report->price }}</td>
											<td>{{ $report->consultation->realization }}</td>
											<td>{{ $report->professional->name }}</td>
											<td>{{ $report->mascot->name }}</td>
											<td>{{ $report->owner->name}}</td>

                                            <td>
                                                <form action="{{ route('reports.destroy',$report->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reports.show',$report->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reports.edit',$report->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $reports->links() !!}
            </div>
        </div>
    </div>
@endsection
