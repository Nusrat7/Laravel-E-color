<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $data= product::all();
       return view("products",['products'=>$data]);
       //return product::all();
    }
    function detail($id)
    {
        $data= product::find($id);
        return view("detail",['products'=>$data]);
      
    }
    function search(Request $req)
    {
         $data= product::where('name', 'like','%'.$req->input('query').'%')->get();
         return view("search",['products'=>$data]);
        
    }
    function addToCart(Request $req)
    {
         

        if($req->session()->has('user'))
        {
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');

        }
        else
        {
            return redirect('/login');
        }
        
    }

    static function cartItem()
    {
         $userId= Session::get('user') ['id'];
         return Cart::where('user_id',$userId)->count();
        
    }
     function cartlist()
    {
        
        $userId= Session::get('user') ['id'];
        $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId )
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cartlist',['products'=>$products]);
    }

    function removeCart($id)
    {
         Cart::destroy($id);
         return redirect('cartlist');
        
    }

    function orderNow()
    {
        $userId= Session::get('user') ['id'];
        $total=$products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId )
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);
        
    }
     function  orderPlace(Request $req)
    {
        $userId= Session::get('user') ['id'];
        $allCart= Cart::where('user_id',$userId)->get();
        foreach( $allCart as $cart){
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();

        }
       $req->input();
        return redirect('/');
        
        
    }

    function myOrders()
    {
        $userId= Session::get('user') ['id'];
        $orders= DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId )
        ->get();
        return view('myorders',['orders'=>$orders]);
        


    }
    // admin panel product show related
    function show()
    {
        $data= product::all();
       return view("productshow",['products'=>$data]);
       //return product::all();
    }
    // delete product
    public function destroy($id)
    {
        $post=product::find($id);
        $post->delete();
        return redirect('/productshow');
    }

    //UPDATE
   
    public function edit($id)
    {
        $posts=product::find($id);
        
        return view('editproduct', ['product'=>$posts]);
        
    }
    public function update(Request $request, $id)
    {
        $posts=product::find($id);
        $posts->name=$request->get('name');
        $posts->price=$request->get('price');
        $posts->save();
        return redirect('/productshow');
    
    }


}
