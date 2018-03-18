@extends('home2')

@section('user')
<section class="page-title text-center">
    <div class="container">
        <h1 class=" heading page-title__title">contact</h1>
        @foreach ($kontak as $data)
        
        <p class="page-title__subtitle lead">{!!$data->keterangan!!}</p>    
        @endforeach
    </div>
</section> <!-- end page title -->
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
@endsection