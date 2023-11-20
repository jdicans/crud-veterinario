@extends('adminlte::page')
@section('template_title')
    {{ $report->name ?? "{{ __('Show') Report" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Report</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reports.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Characteristics:</strong>
                            {{ $report->characteristics }}
                        </div>
                        <div class="form-group">
                            <strong>Date Entered:</strong>
                            {{ $report->date_entered }}
                        </div>
                        <div class="form-group">
                            <strong>Date Deperture:</strong>
                            {{ $report->date_deperture }}
                        </div>
                        <div class="form-group">
                            <strong>Time Entered:</strong>
                            {{ $report->time_entered }}
                        </div>
                        <div class="form-group">
                            <strong>Time Deperture:</strong>
                            {{ $report->time_deperture }}
                        </div>
                        <div class="form-group">
                            <strong>General Note:</strong>
                            {{ $report->general_note }}
                        </div>
                        <div class="form-group">
                            <strong>Important Note:</strong>
                            {{ $report->important_note }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $report->price }}
                        </div>
                        <div class="form-group">
                            <strong>Consultation Id:</strong>
                            {{ $report->consultation_id }}
                        </div>
                        <div class="form-group">
                            <strong>Professional Id:</strong>
                            {{ $report->professional_id }}
                        </div>
                        <div class="form-group">
                            <strong>Mascot Id:</strong>
                            {{ $report->mascot_id }}
                        </div>
                        <div class="form-group">
                            <strong>Owner Id:</strong>
                            {{ $report->owner_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
