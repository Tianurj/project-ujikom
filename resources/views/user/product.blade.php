@extends('home2')

@section('user')
<section class="section-wrap pt-60 pb-30 catalog">
    <div class="container">

    <!-- Breadcrumbs -->
    <ol class="breadcrumbs">
        <li>
        <a href="index.html">Home</a>
        </li>
        <li>
        <a href="index.html">Pages</a>
        </li>
        <li class="active">
        Catalog Grid
        </li>
    </ol>

    <div class="row">
        <div class="col-lg-9 order-lg-2 mb-40">

        <div class="row row-8">
            @foreach ($barang as $data)
            <div class="col-lg-3 col-sm-5 product">
            <div class="product__img-holder">
              <a href="{{url('/lihat/'.$data->id)}}" class="product__link" aria-label="Product">
                <img src="{{asset('img/'. $data->foto)}}" width="200px" height="270px" alt="" class="product__img">
                <img src="{{asset('img/'. $data->foto)}}" width="200px" height="270px" alt="" class="product__img-back">
              </a>
              <div class="product__actions" >
                <center>
                  <a href="{{url('/lihat/'.$data->id)}}">
                    <i class="ui-eye"></i>
                    <span>Quick View</span>
                  </a>
                </center>
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
        {{$barang->links()}}
        
        <!-- Pagination -->
        {{--  <div class="pagination clearfix">                
          <nav class="pagination__nav right clearfix">
            <a href="#" class="pagination__page"><i class="ui-arrow-left"></i></a>
            <span class="pagination__page pagination__page--current">1</span>
            <a href="#" class="pagination__page">2</a>
            <a href="#" class="pagination__page">3</a>
            <a href="#" class="pagination__page">4</a>
            <a href="#" class="pagination__page"><i class="ui-arrow-right"></i></a>
          </nav>
        </div>  --}}
      </div> <!-- end col -->
      
      
      <!-- Sidebar -->
      <aside class="col-lg-3 sidebar left-sidebar">
        
        <!-- Categories -->
        <div class="widget widget_categories widget--bottom-line">
          <h4 class="widget-title">Categories</h4>
            <ul>
              <li>
                    <a href="{{url('/product')}}">ALL</a>
                </li>
                @foreach ($kategori as $data)
                <li>
                    <a href="{{url('/kategoris/'.$data->id)}}">{{$data->nama}}</a>
                </li>
                @endforeach
            </ul>
        </div>

        </aside> <!-- end sidebar -->

    </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end catalog -->
@endsection