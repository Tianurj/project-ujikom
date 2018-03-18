<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rangkas | Home</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Questrial:400%7CMontserrat:300,400,700,700i' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('user/css/font-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('user/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('user/css/color.css')}}" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{asset('user/img/favicon.ico')}}">
  <link rel="apple-touch-icon" href="{{asset('user/img/apple-touch-icon.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{asset('user/img/apple-touch-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{asset('user/img/apple-touch-icon-114x114.png')}}">

</head>

<body>

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>
  

  <!-- Mobile Sidenav -->    
  <header class="sidenav" id="sidenav">
    <!-- Search -->
    <div class="sidenav__search-mobile">
      <form action="{{url('/product')}}" method="get" class="sidenav__search-mobile-form">
        <input type="search" name="cari" class="sidenav__search-mobile-input" placeholder="Search..." aria-label="Search input">
        <button type="submit" class="sidenav__search-mobile-submit" aria-label="Submit search">
          <i class="ui-search"></i>
        </button>
      </form>
    </div>

    <nav>
      <ul class="sidenav__menu" role="menubar">
        <li>
          <a href="#" class="sidenav__menu-link">Men</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
        </li>
      
        <li>
          <a href="#" class="sidenav__menu-link">Women</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="#" class="sidenav__menu-link">Underwear</a></li>
            <li><a href="#" class="sidenav__menu-link">Hipster</a></li>
            <li><a href="#" class="sidenav__menu-link">Dress</a></li>
            <li><a href="#" class="sidenav__menu-link">Hoodie &amp; Jackets</a></li>
            <li><a href="#" class="sidenav__menu-link">Tees</a></li>
          </ul>
        </li>
        
        <li>
          <a href="#" class="sidenav__menu-link">Accessories</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li>
              <a href="#" class="sidenav__menu-link">All accessories</a>
              <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
              <ul class="sidenav__menu-dropdown">
                <li>
                  <a href="#" class="sidenav__menu-link">Wallets</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Scarfs</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Shirt</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Shoes</a>
                </li>
              </ul>
            </li>
            
            <li>
              <a href="#" class="sidenav__menu-link">for her</a>
              <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
              <ul class="sidenav__menu-dropdown">
                <li>
                  <a href="#" class="sidenav__menu-link">Underwear</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Hipster</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Dress</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Hoodie &amp; Jackets</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Tees</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#" class="sidenav__menu-link">for him</a>
              <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
              <ul class="sidenav__menu-dropdown">
                <li>
                  <a href="#" class="sidenav__menu-link">T-shirt</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Hoodie &amp; Jackets</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Dress</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Suits</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Shorts</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#" class="sidenav__menu-link">Watches</a>
              <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
              <ul class="sidenav__menu-dropdown">
                <li>
                  <a href="#" class="sidenav__menu-link">Smart Watches</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Diving Watches</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Sport Watches</a>
                </li>
                <li>
                  <a href="#" class="sidenav__menu-link">Classic Watches</a>
                </li>
              </ul>
            </li>
            
          </ul>
        </li>
        
        <li>
          <a href="#" class="sidenav__menu-link">News</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="blog-standard.html" class="sidenav__menu-link">Blog Standard</a></li>
            <li><a href="blog-single.html" class="sidenav__menu-link">Single Post</a></li>
          </ul>
        </li>

        <li>
          <a href="#" class="sidenav__menu-link">Pages</a>
          <button class="sidenav__menu-toggle" aria-haspopup="true" aria-label="Open dropdown"><i class="ui-arrow-down"></i></button>
          <ul class="sidenav__menu-dropdown">
            <li><a href="catalog.html" class="sidenav__menu-link">Catalog</a></li>
            <li><a href="single-product.html" class="sidenav__menu-link">Single Product</a></li>
            <li><a href="cart.html" class="sidenav__menu-link">Cart</a></li>
            <li><a href="checkout.html" class="sidenav__menu-link">Checkout</a></li>
            <li><a href="about.html" class="sidenav__menu-link">About</a></li>
            <li><a href="contact.html" class="sidenav__menu-link">Contact</a></li>
            <li><a href="login.html" class="sidenav__menu-link">Login</a></li>
            <li><a href="faq.html" class="sidenav__menu-link">FAQ</a></li>
            <li><a href="404.html" class="sidenav__menu-link">404</a></li>
          </ul>
        </li>

        <li>
          <a href="#" class="sidenav__menu-link">Sign In</a>
        </li>
      </ul>
    </nav>
  </header> <!-- end mobile sidenav -->


  <main class="main oh" id="main">

    <!-- Navigation -->
    <header class="nav">

      <div class="nav__holder nav--sticky">
        <div class="container relative">

          <!-- Top Bar -->
          

          <div class="flex-parent">

            <!-- Mobile Menu Button -->
            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open mobile menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
            </button> <!-- end mobile menu button -->

            <!-- Logo -->
            <a href="index.html" class="logo">
              <img class="logo__img" src="{{asset('user/img/ligi.png')}}" alt="logo" width="200" height="200">
            </a>

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">              
              <ul class="nav__menu">

                <li class="nav__dropdown active">
                  <a href="/">HOME</a>
                </li>

                <li class="nav__dropdown active">
                  <a href="{{url('/product')}}">PRODUCT</a>
                </li>

                <li class="nav__dropdown">
                  <a href="{{url('/contact')}}">CONTACT</a>
                </li>

                <li class="nav__dropdown">
                  <a href="{{url('/about')}}">ABOUT</a>
                </li>

              </ul> <!-- end menu -->

            </nav> <!-- end nav-wrap -->


            <!-- Search -->
            <div class="flex-child nav__search d-none d-lg-block">
              <form action="{{url('/product')}}" method="get" class="nav__search-form">
                <input type="search" name="cari" class="nav__search-input" placeholder="Search">
                <button type="submit" class="nav__search-submit">
                  <i class="ui-search"></i>
                </button>
              </form>
            </div>


            <!-- Mobile Wishlist -->
            <a href="#" class="nav__mobile-wishlist d-lg-none" aria-label="Mobile wishlist">
              <i class="ui-heart"></i>
            </a>

            <!-- Mobile Cart -->
            <a href="cart.html" class="nav__mobile-cart d-lg-none">
              <i class="ui-bag"></i>
              <span class="nav__mobile-cart-amount">(2)</span>
            </a>

            
         
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->

    @yield('user')
    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="footer__widgets">
          
      <div class="footer__bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-sm-center">
              <span class="copyright">
                &copy; 2017 Rangkas Theme. Made by <a href="http://deothemes.com">DeoThemes</a>
              </span>
            </div>

            <div class="col-md-6 footer__payment-systems text-right text-sm-center mt-sml-10">
              <i class="ui-paypal"></i>
              <i class="ui-visa"></i>
              <i class="ui-mastercard"></i>
              <i class="ui-discover"></i>
              <i class="ui-amex"></i>
            </div>
          </div>
        </div>
      </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->


  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="{{asset('user/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('user/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('user/js/easing.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('user/js/price-slider.js')}}"></script>
  <script type="text/javascript" src="{{asset('user/js/owl-carousel.min.js')}}"></script>  
  <script type="text/javascript" src="{{asset('user/js/flickity.pkgd.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('user/js/modernizr.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('user/js/scripts.js')}}"></script>

</body>
</html>