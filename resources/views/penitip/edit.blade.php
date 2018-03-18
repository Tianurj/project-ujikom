@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Data Penitip Barang</center></div>

                <div class="panel-body">
                   {!! Form::model($penitip, ['url' => route('penitip.update', $penitip->id), 'method'=>'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                    @include('penitip._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
