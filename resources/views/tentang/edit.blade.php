@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Tentang</center></div>

                <div class="panel-body">
                    {!! Form::model($tentang, ['url' => route('tentang.update', $tentang->id), 'method'=>'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                    <div class="form-group{{ $errors->has('keterangan') ? 'has-error' : '' }}">
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
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
