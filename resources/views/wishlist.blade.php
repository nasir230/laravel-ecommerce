@extends('layouts.app1')
@section('title','Wish List Page')
@section('content')



  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
  <img src="{{asset('front/img/fashion/fashion-header-bg-8.jpg')}}" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>Wishlist Page</h2>
         <ol class="breadcrumb">
           <li><a href="index.html">Home</a></li>                   
           <li class="active">Wishlist</li>
         </ol>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->


   <section id="cart-view">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table aa-wishlist-table">
              <form action="">
                <div class="table-responsive">
                   <table class="table">
                     <thead>
                       <tr>
                         <th></th>
                         <th></th>
                         <th>Product</th>
                         <th>Price</th>
                         <th>Stock Status</th>
                         <th></th>
                       </tr>
                     </thead>
                     <tbody>
                      
                          @if(session('wish'))
                           @foreach (session('wish') as $id=>$item)
                           <tr>
                           <td><a class="remove" href="{{route('remove',$id)}}"> <fa class="fa fa-close"></fa> </a></td>
                            <td><a href="#"><img src="{{$item['thumbnail']}}" alt="img"></a></td>
                            <td><a class="aa-cart-title" href="#">{{$item['title']}}</a></td>
                            <td>{{$item['price']}}</td>
                            <td>In Stock</td>
                           <td><a href="{{route('add_to_cart',$id)}}" class="aa-add-to-cart-btn">Add To Cart</a></td>
                        </tr>
                            @endforeach
                             @endif
                      
                       </tbody>
                   </table>
                 </div>
              </form>             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Subscribe section -->
    <section id="aa-subscribe">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-subscribe-area">
                <h3>Subscribe our newsletter </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                <form action="" class="aa-subscribe-form">
                  <input type="email" name="" id="" placeholder="Enter your Email">
                  <input type="submit" value="Subscribe">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Subscribe section -->

@endsection 