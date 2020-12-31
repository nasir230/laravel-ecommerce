@extends('layouts.app1')
@section('title','Cart Page')
@section('content')
<section id="aa-catg-head-banner">
    <img src="{{asset('front/img/fashion/fashion-header-bg-8.jpg')}}" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>Cart Page</h2>
         <ol class="breadcrumb">
           <li><a href="index.html">Home</a></li>                   
           <li class="active">Cart</li>
         </ol>
       </div>
      </div>
    </div>
   </section>

    <!-- Cart view section -->
 <section id="cart-view">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table">
              <form action="">
                <div class="table-responsive">
                   <table class="table">
                     <thead>
                       <tr>
                         <th>Action</th>
                         <th>Image</th>
                         <th>Product</th>
                         <th>Price</th>
                         <th>Quantity</th>
                         <th>Total</th>
                       </tr>
                     </thead>
                     <tbody>
                     @php $total=0; @endphp

                     @if(session('cart'))
                        @foreach (session('cart') as $id => $product)
                        @php
                            $sub_total = $product['price'] * $product['quantity'];
                            $total += $sub_total;
                        @endphp
                        <tr>
                        <td><a class="remove" href="{{route('remove-cart',$id)}}"><fa class="fa fa-close"></fa></a></td>
                            <td><a href="#"><img src="{{$product['thumbnail']}}" title="{{$product['title']}}" alt="img" height="50px" width="100px"></a></td>
                            <td><a class="aa-cart-title" href="#">{{$product['title']}}</a></td>
                             <td>{{$product['price']}}</td>
                            {{-- <td><input class="aa-cart-quantity" type="number" value="1"></td> --}}
                        <td>{{$product['quantity']}}</td>
                        <td>{{$sub_total}}</td>
                          </tr>
                        @endforeach
                     @endif
                       <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                          <div class="aa-cart-coupon">
                            <input class="aa-coupon-code" type="text" placeholder="Coupon">
                            <input class="aa-cart-view-btn" type="submit" value="Apply Coupon">
                          </div>
                          <input class="aa-cart-view-btn" type="submit" value="Update Cart">
                        </td>
                      </tr>
                       </tbody>
                   </table>
                 </div>
              </form>
              <!-- Cart Total view -->
              <div class="cart-view-total">
                <h4>Cart Totals</h4>
                <table class="aa-totals-table">
                  <tbody>
                    <tr>
                      <th>Subtotal</th>
                    <td>{{$total}}</td>
                    </tr>
                    <tr>
                      <th>Total</th>
                      <td>{{$total}}</td>
                    </tr>

                    
                  </tbody>
                </table>
              <a href="{{route('checkout')}}" class="aa-cart-view-btn">Proced to Checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Cart view section -->

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