@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Karyawan</center></div>

                <div class="panel-body">
                   {!! Form::model($karyawan, ['url' => route('karyawan.update', $karyawan->id), 'method'=>'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                    @include('karyawan._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
