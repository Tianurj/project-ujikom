<div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
    <div class="col-md-12">
        {!! Form::text('nama', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-12 col-md-offset-10">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>