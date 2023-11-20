<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $mascot->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tapy_animal') }}
            {{ Form::select('tapy_animal', ['gatos' => 'Gatos', 'perros' => 'Perros', 'conejos' => 'Conejos', 'otros' => 'Otros'], $mascot->tapy_animal, ['class' => 'form-control' . ($errors->has('tapy_animal') ? ' is-invalid' : ''), 'placeholder' => 'Tapy Animal']) }}
            {!! $errors->first('tapy_animal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('owner_id') }}
            {{ Form::select('owner_id',$owner, $mascot->owner_id, ['class' => 'form-control' . ($errors->has('owner_id') ? ' is-invalid' : ''), 'placeholder' => 'Owner Id']) }}
            {!! $errors->first('owner_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>