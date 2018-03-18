@extends('home2')

@section('user')
<section class="section-wrap pb-20 product-single">
    <div class="container">

    <!-- Breadcrumbs -->
    <ol class="breadcrumbs">
        <li>
        <a href="/">Home</a>
        </li>
        <li class="active">
        {{$barang->nama}}
        </li>
    </ol>

    <div class="row">

        <div class="col-md-6 product-slider mb-50">

        <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">

            <div class="gallery-cell">
            <a href="{{asset('img/'.$barang->foto)}}" class="lightbox-img">
                <img src="{{asset('img/'.$barang->foto)}}" alt="" />
            </a>
            </div>
        </div> <!-- end gallery main -->

        </div> <!-- end col img slider -->

        <div class="col-md-6 product-single">
        <h1 class="product-single__title uppercase">{{$barang->nama}}</h1>

        <span class="product-single__price">
            <ins>
            <span class="amount">Rp.{{$barang->harga}}</span>
            </ins>
        </span>                      

        <!-- Accordion -->
        <div class="accordion mb-50" id="accordion">
            <div class="accordion__panel">
            <div class="accordion__heading" id="headingOne">
                <a data-toggle="collapse" href="#collapseOne" class="accordion__link accordion--is-open" aria-expanded="true" aria-controls="collapseOne">Description<span class="accordion__toggle">&nbsp;</span>
                </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion" role="tabpanel" aria-labelledby="headingOne">
                <div class="accordion__body">
                {!!$barang->keterangan!!}
                </div>
            </div>
            </div>
        </div> <!-- end accordion -->

        </div> <!-- end col product description -->
    </div> <!-- end row -->
    
    </div> <!-- end container -->
</section>
<section class="section-wrap pt-0 pb-40">
    <div class="container">

    <div class="heading-row">
        <div class="text-center">
        <h2 class="heading bottom-line">
            Shop the look
        </h2>
        </div>
    </div>

    <div class="row row-8">
    @foreach ($barang2 as $data)

    <div class="col-lg-2 col-sm-4 product">
        <div class="product__img-holder">
            <a href="{{url('/lihat/'.$data->id)}}" class="product__link">
            <img src="{{asset('img/'.$data->foto)}}" width="200px" height="270px" alt="" class="product__img">
            <img src="{{asset('img/'.$data->foto)}}"  width="200px" height="270px" alt="" class="product__img-back">
            </a>
            <div class="product__actions">
            <a href="{{url('/lihat/'.$data->id)}}" >
                <i class="ui-eye"></i>
                <span>Quick View</span>
            </a>
            </div>
        </div>

        <div class="product__details">
            <h3 class="product__title">
            <a href="{{url('/lihat/'.$data->id)}}">{{$data->nama}}</a>
            </h3>
        </div>

        <span class="product__price">
            <ins>
            <span class="amount">Rp.{{$data->harga}}</span>
            </ins>
        </span>
    </div> <!-- end product -->
    
    @endforeach

    </div> <!-- end row -->
    </div> <!-- end container -->
</section>
@endsection