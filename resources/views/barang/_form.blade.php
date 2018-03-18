<div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
    {!! Form::label('nama', 'Nama Barang', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('nama', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('penitip_id') ? 'has-error' : '' }}">
    {!! Form::label('penitip_id', 'Nama Penitip', ['class'=>'col-md-1 control-label','required','autofocus']) !!}
    <div class="col-md-12">
        {!! Form::select('penitip_id', ["Pilih Penitip"]+App\Penitip::pluck('nama','id')-> all() , null, ['class'=>'form-control']) !!}
        {!! $errors->first('penitip_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('kategori_id') ? 'has-error' : '' }}">
    {!! Form::label('kategori_id', 'Kategori', ['class'=>'col-md-1 control-label','required','autofocus']) !!}
    <div class="col-md-12">
        {!! Form::select('kategori_id', ["Pilih Kategori"]+App\Kategori::pluck('nama','id')-> all() , null, ['class'=>'form-control']) !!}
        {!! $errors->first('kategori_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('jumlah') ? 'has-error' : '' }}">
    {!! Form::label('jumlah', 'Jumlah', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::number('jumlah', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('foto') ? 'has-error' : '' }}">
    {!! Form::label('foto', 'Gambar', ['class'=>'col-md-1 control-label','required','autofocus']) !!}
    <div class="col-md-12">
        {!! Form::file('foto', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('harga') ? 'has-error' : '' }}">
    {!! Form::label('harga', 'Harga Awal', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('harga', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('hargajual') ? 'has-error' : '' }}">
    {!! Form::label('hargajual', 'Harga Jual', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('hargajual', null, ['class'=>'form-control','required','autofocus']) !!}
        {!! $errors->first('hargajual', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('keterangan') ? 'has-error' : '' }}">
    {!! Form::label('keterangan', 'Keterangan', ['class'=>'col-md-1 control-label']) !!}
    <div class="col-md-12">
        {!! Form::textarea('keterangan', null, ['class'=>'form-control','id'=>'editor1','required','autofocus']) !!}
        {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-12 col-md-offset-10">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>