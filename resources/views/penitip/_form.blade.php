<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}} ">
	{!! Form::label('nama','Nama', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::text('nama',null, ['class'=>'form-control'])!!}
		{!! $errors->first('nama','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}} ">
	{!! Form::label('alamat','Alamat', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::textarea('alamat',null, ['class'=>'form-control'])!!}
		{!! $errors->first('alamat','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('no_tlp') ? 'has-error' : ''}} ">
	{!! Form::label('no_tlp','No Telpon', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::text('no_tlp',null, ['class'=>'form-control'])!!}
		{!! $errors->first('no_tlp','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('no_ktp') ? 'has-error' : ''}} ">
	{!! Form::label('no_ktp','No KTP', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-10">
		{!! Form::text('no_ktp',null, ['class'=>'form-control'])!!}
		{!! $errors->first('no_ktp','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('tgl_titip') ? 'has-error' : ''}} ">
	{!! Form::label('tgl_titip','Tanggal Penitipan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-3">
		{!! Form::date('tgl_titip',null, ['class'=>'form-control'])!!}
		{!! $errors->first('tgl_titip','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>