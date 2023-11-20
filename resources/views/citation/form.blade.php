<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::date('date', $citation->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('time') }}
            {{ Form::time('time', $citation->time, ['class' => 'form-control' . ($errors->has('time') ? ' is-invalid' : ''), 'placeholder' => 'Time']) }}
            {!! $errors->first('time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('query_type') }}
            {{ Form::select('query_type', ['urgencia' => 'urgencia', 'medicina general' => 'medicina general', 'cirugia' => 'cirugia', 'control' => 'control', 'limpieza' => 'limpieza', 'terapia' => 'terapia'], $citation->query_type, ['class' => 'form-control' . ($errors->has('query_type') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un tipo']) }}
            {!! $errors->first('query_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mascot_id') }}
            {{ Form::select('mascot_id',$mascot, $citation->mascot_id, ['class' => 'form-control' . ($errors->has('mascot_id') ? ' is-invalid' : ''), 'placeholder' => 'Mascot Id']) }}
            {!! $errors->first('mascot_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('owner_id') }}
            {{ Form::select('owner_id',$owner, $citation->owner_id, ['class' => 'form-control' . ($errors->has('owner_id') ? ' is-invalid' : ''), 'placeholder' => 'Owner Id']) }}
            {!! $errors->first('owner_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>