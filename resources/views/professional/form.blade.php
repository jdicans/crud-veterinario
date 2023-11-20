<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $professional->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_name') }}
            {{ Form::text('last_name', $professional->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name']) }}
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('speciality') }}
            {{ Form::select('speciality',['medico de urgencia' => 'medico de urgencia', 'medico general' => 'medico general', 'cirugano' => 'cirugano', 'medico de control' => 'medico de control', 'limpiador' => 'limpiador', 'terapeuta' => 'terapeuta'], $professional->speciality, ['class' => 'form-control' . ($errors->has('speciality') ? ' is-invalid' : ''), 'placeholder' => 'Speciality']) }}
            {!! $errors->first('speciality', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('emeil') }}
            {{ Form::email('emeil', $professional->emeil, ['class' => 'form-control' . ($errors->has('emeil') ? ' is-invalid' : ''), 'placeholder' => 'Emeil']) }}
            {!! $errors->first('emeil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number') }}
            {{ Form::number('number', $professional->number, ['class' => 'form-control' . ($errors->has('number') ? ' is-invalid' : ''), 'placeholder' => 'Number']) }}
            {!! $errors->first('number', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>