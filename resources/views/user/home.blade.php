@extends('home2')

@section('user')
    <!-- Hero Slider -->
    <section class="hero">
      <div id="owl-hero" class="owl-carousel owl-theme owl-carousel--dots-inside">        

        <div class="hero__slide" style="background-image: url({{asset('user/img/hero/ex1.jpg')}}">
          <div class="container text-center">
            {{--  <h1 class="hero__title">Got the style? Show us</h1>
            <a href="single-product.html" class="hero__link">Shop Now</a>  --}}
          </div>          
        </div>

        <div class="hero__slide" style="background-image: url({{asset('user/img/hero/ex5.jpg')}}">
          <div class="container relative">
            <div class="hero__holder">
              {{--  <h1 class="hero__title-1">dope<br>street<br>wear</h1>
              <a href="single-product.html" class="hero__link-1 btn btn-lg btn-dark"><span>New Arrivals</span></a>  --}}
            </div>
          </div>
        </div>

        <div class="hero__slide" style="background-image: url({{asset('user/img/hero/ex4.jpg')}}">
          <div class="container text-center">
            <div class="hero__holder-1">
              {{--  <h1 class="hero__title-2">new lookbook</h1>
              <h3 class="hero__subtitle">Sale 50% off. Get only trendy items</h3>
              <a href="single-product.html" class="hero__link-1 btn btn-lg btn-color"><span>Shop the trend</span></a>  --}}
            </div>
          </div>
        </div>

      </div> <!-- end owl -->
    </section> <!-- end hero slider -->

    <!-- Feature -->
    <section class="section-wrap pb-0">
      <div class="container">
        <div class="row justify-content-center">
          
        </div>
      </div>
    </section>    

    <!-- Best Seller -->
    <section class="section-wrap pb-30">
      <div class="container">

        <div class="heading-row">
          <div class="text-center">
            <h2 class="heading bottom-line">
              NEW PRODUCT
            </h2>
          </div>
        </div>

        <div class="row row-8">
          @foreach ($barang as $data)
          <div class="col-lg-2 col-sm-4 product">
            <div class="product__img-holder">
              <a href="{{url('/lihat/'.$data->id)}}" class="product__link" aria-label="Product">
                <img src="{{asset('img/'. $data->foto)}}" width="200px" height="270px" alt="" class="product__img">
                <img src="{{asset('img/'. $data->foto)}}" width="200px" height="270px" alt="" class="product__img-back">
              </a>
              <div class="product__actions" >
                <center>
                  <a href="{{url('/lihat/'.$data->id)}}" >
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
      </div> <!-- end container -->
    </section> <!-- end best seller -->
    <!-- Testimonials -->
    <section class="section-wrap">
      <div class="container">

        <div class="heading-row mb-0">
          <div class="text-center">
            <h2 class="heading">
              What the customers say?
            </h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-8">

            <div id="owl-testimonials" class="owl-carousel owl-theme owl-carousel--dark-arrows owl-carousel--visible-arrows">

              <div class="testimonial">
                <div class="testimonial__rating text-center">
                  <span class="rating"></span>
                  <span class="rating__time">20 days ago</span>
                </div>
                <p class="testimonial__text">I’am amazed, I should say thank you so much for your awesome template. Design is so good and neat, every detail has been taken care these team are realy amazing and talented!</p>
                <span class="testimonial__author">Camille Ragpa</span>
              </div>

              <div class="testimonial">
                <div class="testimonial__rating text-center">
                  <span class="rating"></span>
                  <span class="rating__time">20 days ago</span>
                </div>
                <p class="testimonial__text">I’am amazed, I should say thank you so much for your awesome template. Design is so good and neat, every detail has been taken care these team are realy amazing and talented!</p>
                <span class="testimonial__author">Camille Ragpa</span>
              </div>

              <div class="testimonial">
                <div class="testimonial__rating text-center">
                  <span class="rating"></span>
                  <span class="rating__time">20 days ago</span>
                </div>
                <p class="testimonial__text">I’am amazed, I should say thank you so much for your awesome template. Design is so good and neat, every detail has been taken care these team are realy amazing and talented!</p>
                <span class="testimonial__author">Camille Ragpa</span>
              </div>

            </div> <!-- end carousel -->
          </div>
        </div> <!-- end carousel row -->

      </div>
    </section> <!-- end testimonials -->
@endsection