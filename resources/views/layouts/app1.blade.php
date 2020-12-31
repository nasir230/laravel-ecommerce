<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Daily Shop | @yield('title')</title>
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <!-- Font awesome -->
    <link href="{{asset('front/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('front/css/bootstrap.css')}}" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{asset('front/css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/jquery.simpleLens.css')}}">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/slick.css')}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/nouislider.css')}}">
    <!-- Theme color -->
    <link id="switcher" href="{{asset('front/css/theme-color/default-theme.css')}}" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{asset('front/css/sequence-theme.modern-slide-in.css')}}" rel="stylesheet" media="all">
   

  </head>
    <!-- Main style sheet -->
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 

 

    <div class="container-fluid" >
      <div class="row ">
        
       <div class="col-md-12">
        @if (session('msg'))
        <div class="alert ses alert-info text-center"  style=" background-color: #ffff; color:#FF6666;">
              {{ session('msg') }}
          </div>
      @endif
       </div>
      
      </div>
    </div>
 <!-- SCROLL TOP BUTTON -->
 <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  

  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="{{asset('front/img/flag/english.jpg')}}" alt="english flag">ENGLISH
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#"><img src="{{asset('front/img/flag/french.jpg')}}" alt="">FRENCH</a></li>
                    <li><a href="#"><img src="{{asset('front/img/flag/english.jpg')}}" alt="">ENGLISH</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-usd"></i>USD
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                      <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="account.html">My Account</a></li>
                <li class="hidden-xs"><a href="{{route('wishList')}}">Wishlist</a></li>
                  <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                  <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>
          <!--<li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li> -->
                  @if (Auth::check())
                <li>  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a></li>
                                  <li>   {{ Auth::user()->name }}</li>
              <li>  <a href="{{route('dashboard')}}">Dashboard</a></li>
                                  

                @else
                <li><a href="{{route('login')}}" >Login</a></li>
                @endif
                  
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
                
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.html">
                  <span class="fa fa-shopping-cart"></span>
                  <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
                  <span class="aa-cart-notify">2</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    
                    @php
                    $subTotal = 0 ; 
                @endphp
            @if(session('cart') )

               @foreach(session('cart') as $id => $details)
               <?php 
                      // Cart Total
                      
                      $lineTotal = $details['price'] * $details['quantity']; 
                      $subTotal += $details['price'] * $details['quantity']; 
                      $salesTax = 0.06 *  $subTotal;
                      $totalCost = $salesTax + $subTotal;
                ?>
                    <li>
                    <a class="aa-cartbox-img" href="#"><img src="{{$details['thumbnail']}}" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">{{$details['title']}}</a></h4>
                        <p>{{$details['quantity']}} x {{$details['price']}}</p>
                      </div>
                    <a class="aa-remove-product" href="{{route('remove', $id)}}"><span class="fa fa-times"></span></a>
                    </li>  
                    
                    {{-- <tr>
                      <td>{{ $details['title'] }} {{$details['price']}}<strong> x &nbsp; {{ $details['quantity'] }}</strong></td>
                        <td>{{$lineTotal}}</td>
                        <input type="hidden" name="line_total" value="{{$lineTotal}}">
                     </tr> --}}
                      @endforeach
                    
                  @endif
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        {{$subTotal}}
                      </span>
                    </li>
                  </ul>
                <a class="aa-cartbox-checkout aa-primary-btn" href="checkout">Checkout</a>
                </div>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Search here ex. 'man' ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
 
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">Men <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="#">Casual</a></li>
                  <li><a href="#">Sports</a></li>
                  <li><a href="#">Formal</a></li>
                  <li><a href="#">Standard</a></li>                                                
                  <li><a href="#">T-Shirts</a></li>
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Jeans</a></li>
                  <li><a href="#">Trousers</a></li>
                  <li><a href="#">And more.. <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Sleep Wear</a></li>
                      <li><a href="#">Sandals</a></li>
                      <li><a href="#">Loafers</a></li>                                      
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">Women <span class="caret"></span></a>
                <ul class="dropdown-menu">  
                  <li><a href="#">Kurta & Kurti</a></li>                                                                
                  <li><a href="#">Trousers</a></li>              
                  <li><a href="#">Casual</a></li>
                  <li><a href="#">Sports</a></li>
                  <li><a href="#">Formal</a></li>                
                  <li><a href="#">Sarees</a></li>
                  <li><a href="#">Shoes</a></li>
                  <li><a href="#">And more.. <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Sleep Wear</a></li>
                      <li><a href="#">Sandals</a></li>
                      <li><a href="#">Loafers</a></li>
                      <li><a href="#">And more.. <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Rings</a></li>
                          <li><a href="#">Earrings</a></li>
                          <li><a href="#">Jewellery Sets</a></li>
                          <li><a href="#">Lockets</a></li>
                          <li class="disabled"><a class="disabled" href="#">Disabled item</a></li>                       
                          <li><a href="#">Jeans</a></li>
                          <li><a href="#">Polo T-Shirts</a></li>
                          <li><a href="#">SKirts</a></li>
                          <li><a href="#">Jackets</a></li>
                          <li><a href="#">Tops</a></li>
                          <li><a href="#">Make Up</a></li>
                          <li><a href="#">Hair Care</a></li>
                          <li><a href="#">Perfumes</a></li>
                          <li><a href="#">Skin Care</a></li>
                          <li><a href="#">Hand Bags</a></li>
                          <li><a href="#">Single Bags</a></li>
                          <li><a href="#">Travel Bags</a></li>
                          <li><a href="#">Wallets & Belts</a></li>                        
                          <li><a href="#">Sunglases</a></li>
                          <li><a href="#">Nail</a></li>                       
                        </ul>
                      </li>                   
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">Kids <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="#">Casual</a></li>
                  <li><a href="#">Sports</a></li>
                  <li><a href="#">Formal</a></li>
                  <li><a href="#">Standard</a></li>                                                
                  <li><a href="#">T-Shirts</a></li>
                  <li><a href="#">Shirts</a></li>
                  <li><a href="#">Jeans</a></li>
                  <li><a href="#">Trousers</a></li>
                  <li><a href="#">And more.. <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Sleep Wear</a></li>
                      <li><a href="#">Sandals</a></li>
                      <li><a href="#">Loafers</a></li>                                      
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#">Sports</a></li>
             <li><a href="#">Digital <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="#">Camera</a></li>
                  <li><a href="#">Mobile</a></li>
                  <li><a href="#">Tablet</a></li>
                  <li><a href="#">Laptop</a></li>                                                
                  <li><a href="#">Accesories</a></li>                
                </ul>
              </li>
              <li><a href="#">Furniture</a></li>            
              <li><a href="blog-archive.html">Blog <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                <li><a href="{{route('posts')}}">Blog</a></li>
                             
                </ul>
              </li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="#">Pages <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="{{route('shop')}}">Shop Page</a></li>
                <li><a href="#">Shop Single</a></li>                
                  <li><a href="404.html">404 Page</a></li>                
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>

@yield('content')

  
<footer id="aa-footer">
  <!-- footer bottom -->
  <div class="aa-footer-top">
   <div class="container">
      <div class="row">
      <div class="col-md-12">
        <div class="aa-footer-top-area">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="aa-footer-widget">
                <h3>Main Menu</h3>
                <ul class="aa-footer-nav">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Our Services</a></li>
                  <li><a href="#">Our Products</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="aa-footer-widget">
                <div class="aa-footer-widget">
                  <h3>Knowledge Base</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Discount</a></li>
                    <li><a href="#">Special Offer</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="aa-footer-widget">
                <div class="aa-footer-widget">
                  <h3>Useful Links</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Search</a></li>
                    <li><a href="#">Advanced Search</a></li>
                    <li><a href="#">Suppliers</a></li>
                    <li><a href="#">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="aa-footer-widget">
                <div class="aa-footer-widget">
                  <h3>Contact Us</h3>
                  <address>
                    <p> {{Con::settings()->This_Is_Setting}}</p>
                    <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                    <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                  </address>
                  <div class="aa-footer-social">
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>
                    <a href="#"><span class="fa fa-youtube"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
  </div>
  <!-- footer-bottom -->
  <div class="aa-footer-bottom">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <div class="aa-footer-bottom-area">
          <p>Designed by <a href="http://www.markups.io/"> </a></p>
          <div class="aa-footer-payment">
            <span class="fa fa-cc-mastercard"></span>
            <span class="fa fa-cc-visa"></span>
            <span class="fa fa-paypal"></span>
            <span class="fa fa-cc-discover"></span>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</footer>


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{asset('front/js/bootstrap.js')}}"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="{{asset('front/js/jquery.smartmenus.js')}}"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="{{asset('front/js/jquery.smartmenus.bootstrap.js')}}"></script>  
  <!-- To Slider JS -->
  <script src="{{asset('front/js/sequence.js')}}"></script>
  <script src="{{asset('front/js/sequence-theme.modern-slide-in.js')}}"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="{{asset('front/js/jquery.simpleGallery.js')}}"></script>
  <script type="text/javascript" src="{{asset('front/js/jquery.simpleLens.js')}}"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{{asset('front/js/slick.js')}}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{asset('front/js/nouislider.js')}}"></script>
  <!-- Custom js -->
  <script src="{{asset('front/js/custom.js')}}"></script> 
 
  


@yield('customeJquery')
  </body>
</html>