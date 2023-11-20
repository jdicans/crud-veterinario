@extends('adminlte::page')

@section('template_title')
    {{ $professional->name ?? "{{ __('Show') Professional" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Professional</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('professionals.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $professional->name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $professional->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Speciality:</strong>
                            {{ $professional->speciality }}
                        </div>
                        <div class="form-group">
                            <strong>Emeil:</strong>
                            {{ $professional->emeil }}
                        </div>
                        <div class="form-group">
                            <strong>Number:</strong>
                            {{ $professional->number }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
