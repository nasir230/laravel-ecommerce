<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function cart(){
        return view('cart');
    }

    public function addToCart(Product $product){
        $cart=session()->get('cart');

        if(!$cart){
            $cart=[
                $product->id=>[
                    'title' => $product->title,
                    'quantity' => 1,
                    'price' => $product->price,
                    'thumbnail' => $product->thumbnail
                ]
            ];

            session()->put('cart',$cart);
            return redirect()->route('cart')->with('msg', ' Added To The Cart!');;
        }

        if(isset($cart[$product->id])){
                $cart[$product->id]['quantity']++;
                session()->put('cart',$cart);
                return redirect()->route('cart')->with('msg',' Remove To  Cart!');
        }

        $cart[$product->id]=[
            'title' => $product->title,
            'quantity' =>1,
            'price' => $product->price,
            'thumbnail' => $product->thumbnail
        ];

        session()->put('cart',$cart);
        return redirect()->route('cart')->with('msg',' Remove To  Cart!');
       
    }

    public function remove($id)
    {
        
        $cart=session()->get('cart');
        if(isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart',$cart);
            return redirect()->route('cart')->with('msg',' Remove To  Cart!');

        }
    }


    public function product_detail($id)
    {
        $product=Product::find($id);
        $allProduct=Product::all();
        return view('product_detail',compact('product','allProduct'));
    }

    Public function checkout()
    {
            return view('checkout');
    }


    Public function wishlist()
    {
        return view ('wishlist');
    }

    public function addWishlist(Product $product)
    {
        $wish_list=session()->get('wish');

        if(!$wish_list){
            $wish_list=[
                $product->id=>[
                    'title' => $product->title,
                    'price' => $product->price,
                    'thumbnail' => $product->thumbnail
                ]
            ];

            session()->put('wish',$wish_list);
            return redirect()->route('shop');
        }


        $wish_list[$product->id]=[
            'title' => $product->title,
            'price' => $product->price,
            'thumbnail' => $product->thumbnail
        ];

        session()->put('wish',$wish_list);
        return redirect()->route('shop')->with('msg','Added To Wish List');
    }


    Public Function removeWish($id)
    {
        $wish_list=session()->get('wish');
        if(isset($wish_list[$id])){
            unset($wish_list[$id]);
            session()->put('wish',$wish_list);
            return redirect()->route('wishList')->with('msg','Remove To Wish List');

        }
    }

 }
