<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\OrderItem;
use Auth;
class CheckoutController extends Controller
{
    public function placeOrder(Request $req)
    {

        if(Auth::check()){

            $cart = session()->get('cart');
         
            //  dd(count($cart));
            
              if(!isset($cart)) {
     
                 return redirect()->route('cart')->with('warning' ,'Cart is Empty');
              }
              
              if(count($cart) == 0) {
     
                 return redirect()->route('cart')->with('warning' ,'Cart is Empty');
              }

       // dd($req);
        $cart = session()->get('cart');

        $order = Order::create([
            'order_number'      =>  'ORD-'.strtoupper(uniqid()),
            'user_id'           => auth()->user()->id,
            'status'            =>  'pending',
            'grand_total'       =>  $req->total_cost,
            'item_count'        =>  0,
            'payment_status'    =>  0,
            'payment_method'    =>  null,
            'first_name'        =>  $req->first_name,
            'last_name'         =>  $req->last_name,
            'address'           =>  $req->address,
            'city'              =>  $req->city,
            'country'           =>  $req->country,
            'post_code'         =>  $req->post_code,
            'phone_number'      =>  $req->phone_number,
            'notes'             =>  $req->notes
        ]);
    
        if ($order) {
    
            $items = session()->get('cart');
         
            foreach ($items as $item)
            {
                // A better way will be to bring the product id with the cart items
                // you can explore the package documentation to send product id with the cart
                $product = Product::where('title', $item['title'])->first();
             //   dd( $product->id);
                $orderItem = new OrderItem([
                    'product_id'    => $product->id,
                    'quantity'      =>  $item['quantity'],
                    'price'         =>  $item['price']
                ]);
    
                $order->items()->save($orderItem);
                $req->session()->forget('cart');
               // $cart->session()->invalidate();

            }
        }
    
        return redirect()->route('shop');

        }
        return redirect()->route('login');
    }

    
}
