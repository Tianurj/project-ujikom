@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>kategori</center></div>

                <div class="panel-body">
                   {!! Form::model($kategori, ['url' => route('kategori.update', $kategori->id), 'method'=>'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                    @include('kategori._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
