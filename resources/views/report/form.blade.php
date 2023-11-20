<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('characteristics') }}
            {{ Form::text('characteristics', $report->characteristics, ['class' => 'form-control' . ($errors->has('characteristics') ? ' is-invalid' : ''), 'placeholder' => 'Characteristics']) }}
            {!! $errors->first('characteristics', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_entered') }}
            {{ Form::date('date_entered', $report->date_entered, ['class' => 'form-control' . ($errors->has('date_entered') ? ' is-invalid' : ''), 'placeholder' => 'Date Entered']) }}
            {!! $errors->first('date_entered', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_deperture') }}
            {{ Form::date('date_deperture', $report->date_deperture, ['class' => 'form-control' . ($errors->has('date_deperture') ? ' is-invalid' : ''), 'placeholder' => 'Date Deperture']) }}
            {!! $errors->first('date_deperture', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('time_entered') }}
            {{ Form::time('time_entered', $report->time_entered, ['class' => 'form-control' . ($errors->has('time_entered') ? ' is-invalid' : ''), 'placeholder' => 'Time Entered']) }}
            {!! $errors->first('time_entered', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('time_deperture') }}
            {{ Form::time('time_deperture', $report->time_deperture, ['class' => 'form-control' . ($errors->has('time_deperture') ? ' is-invalid' : ''), 'placeholder' => 'Time Deperture']) }}
            {!! $errors->first('time_deperture', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('general_note') }}
            {{ Form::text('general_note', $report->general_note, ['class' => 'form-control' . ($errors->has('general_note') ? ' is-invalid' : ''), 'placeholder' => 'General Note']) }}
            {!! $errors->first('general_note', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('important_note') }}
            {{ Form::text('important_note', $report->important_note, ['class' => 'form-control' . ($errors->has('important_note') ? ' is-invalid' : ''), 'placeholder' => 'Important Note']) }}
            {!! $errors->first('important_note', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $report->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('consultation_id') }}
            {{ Form::select('consultation_id',$consultation, $report->consultation_id, ['class' => 'form-control' . ($errors->has('consultation_id') ? ' is-invalid' : ''), 'placeholder' => 'Consultation Id']) }}
            {!! $errors->first('consultation_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('professional_id') }}
            {{ Form::select('professional_id',$professional, $report->professional_id, ['class' => 'form-control' . ($errors->has('professional_id') ? ' is-invalid' : ''), 'placeholder' => 'Professional Id']) }}
            {!! $errors->first('professional_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mascot_id') }}
            {{ Form::select('mascot_id',$mascot, $report->mascot_id, ['class' => 'form-control' . ($errors->has('mascot_id') ? ' is-invalid' : ''), 'placeholder' => 'Mascot Id']) }}
            {!! $errors->first('mascot_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('owner_id') }}
            {{ Form::select('owner_id',$owner, $report->owner_id, ['class' => 'form-control' . ($errors->has('owner_id') ? ' is-invalid' : ''), 'placeholder' => 'Owner Id']) }}
            {!! $errors->first('owner_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>