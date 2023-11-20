@extends('adminlte::page')

@section('template_title')
    {{ $citation->name ?? "{{ __('Show') Citation" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Citation</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $citation->date }}
                        </div>
                        <div class="form-group">
                            <strong>Time:</strong>
                            {{ $citation->time }}
                        </div>
                        <div class="form-group">
                            <strong>Query Type:</strong>
                            {{ $citation->query_type }}
                        </div>
                        <div class="form-group">
                            <strong>Mascot Id:</strong>
                            {{ $citation->mascot_id }}
                        </div>
                        <div class="form-group">
                            <strong>Owner Id:</strong>
                            {{ $citation->owner_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
