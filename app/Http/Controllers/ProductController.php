<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\support\Facades\DB;
use Session;

class ProductController extends Controller
{
    function show()
    {
    $data=Product::all();
    return view('product',['products'=>$data]);
    }

    function detail($id)
    {

        $data= Product::find($id);
        return view('detail',['product'=>$data]);
    }

    function search(Request $req)
    {
       $data=Product::where('name','like','%'.$req->input('query').'%')->get();
       return view('search',['products'=>$data]);
    }

    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart=new Cart();
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect("/");
        }
        else {
            return redirect("/login");
        }


    }


    public static function cartItem() {
        $user_id=Session::get('user')['id'];
        $count=Cart::where('user_id',$user_id)->count();
        return $count;

    }

    public function cartList()
    {
       $userid=Session::get('user')['id'];
       $data=DB::table('cart')
       ->join('products','cart.product_id','products.id')
       ->select('products.*','cart.id as cart_id')
       ->where('cart.user_id',$userid)
       ->get();
       return view('cartlist',['products'=>$data]);
     
    }

    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('/cartlist');
       
    }
}
