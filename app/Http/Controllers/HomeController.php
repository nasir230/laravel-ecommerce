<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Order;
use Auth;
use Con;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('shop');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    //   $setting =  new \App\ct\setting();
        // $setting =  \App\ct\ctFacade::setting();
        // dd($setting);
       $cat = Category::all();
       $product=Product::all();
       return view('index',compact('cat','product'));

    }

    public function categoryFind($id)
    {

       $cat = Category::find($id);
    
        $product=Product::where('category_id','=' ,$id)->get();
     // dd( $product);
     return back();
        //return view('index',compact('cat','product'));
    }

    public function login_Register()
    {
        return view('login_Register');
    }

    public function shop()
    {
        $product=Product::all();
        return view('shop',compact('product'));

    }

    public function dashboard()
    {
        $id = Auth::user()->id;
        $order = Order::where('user_id',$id)->get();
        return view('dashboard',compact('order'));
    }
}
