@extends('adminlte::page')

@section('template_title')
    {{ $mascot->name ?? "{{ __('Show') Mascot" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Mascot</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mascots.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $mascot->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tapy Animal:</strong>
                            {{ $mascot->tapy_animal }}
                        </div>
                        <div class="form-group">
                            <strong>Owner Id:</strong>
                            {{ $mascot->owner_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
