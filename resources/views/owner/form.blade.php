<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $owner->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::email('emeil', $owner->emeil, ['class' => 'form-control' . ($errors->has('emeil') ? ' is-invalid' : ''), 'placeholder' => 'Emeil']) }}
            {!! $errors->first('emeil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number') }}
            {{ Form::number('number', $owner->number, ['class' => 'form-control' . ($errors->has('number') ? ' is-invalid' : ''), 'placeholder' => 'Number']) }}
            {!! $errors->first('number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CC') }}
            {{ Form::number('CC', $owner->CC, ['class' => 'form-control' . ($errors->has('CC') ? ' is-invalid' : ''), 'placeholder' => 'Cc']) }}
            {!! $errors->first('CC', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>