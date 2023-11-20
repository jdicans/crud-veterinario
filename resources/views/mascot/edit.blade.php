@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Mascot
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Mascot</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('mascots.update', $mascot->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('mascot.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
