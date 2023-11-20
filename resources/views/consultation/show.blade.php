@extends('adminlte::page')

@section('template_title')
    {{ $consultation->name ?? "{{ __('Show') Consultation" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Consultation</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consultations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Realization:</strong>
                            {{ $consultation->realization }}
                        </div>
                        <div class="form-group">
                            <strong>Treatment:</strong>
                            {{ $consultation->treatment }}
                        </div>
                        <div class="form-group">
                            <strong>Citation Id:</strong>
                            {{ $consultation->citation_id }}
                        </div>
                        <div class="form-group">
                            <strong>Professional Id:</strong>
                            {{ $consultation->professional_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
