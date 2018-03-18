@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Tambah Penjualan</center></div>

                <div class="panel-body">
                    {!! Form::open(['url' => route('penjualan.store'),'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                    @include('penjualan._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
