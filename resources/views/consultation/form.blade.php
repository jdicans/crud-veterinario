<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('realization') }}
            {{ Form::text('realization', $consultation->realization, ['class' => 'form-control' . ($errors->has('realization') ? ' is-invalid' : ''), 'placeholder' => 'Realization']) }}
            {!! $errors->first('realization', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('treatment') }}
            {{ Form::text('treatment', $consultation->treatment, ['class' => 'form-control' . ($errors->has('treatment') ? ' is-invalid' : ''), 'placeholder' => 'Treatment']) }}
            {!! $errors->first('treatment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('citation_id') }}
            {{ Form::select('citation_id', $citation,$consultation->citation_id, ['class' => 'form-control' . ($errors->has('citation_id') ? ' is-invalid' : ''), 'placeholder' => 'Citation Id']) }}
            {!! $errors->first('citation_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('professional_id') }}
            {{ Form::select('professional_id', $professional,$consultation->professional_id, ['class' => 'form-control' . ($errors->has('professional_id') ? ' is-invalid' : ''), 'placeholder' => 'Professional Id']) }}
            {!! $errors->first('professional_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>