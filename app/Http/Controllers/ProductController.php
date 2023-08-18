<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;
use App\Models\User;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
       
       
    
       if(Session::has('user'))
       {
        $userid=Session::get('user')['id'];
        $data=DB::table('cart')->where('cart.user_id',$userid)->get();
        //return $data;
        
        if($data->isEmpty())
        {
            return redirect("/notfound");
        }
        else
        {
        $userid=Session::get('user')['id'];
         $data=DB::table('cart')
       ->join('products','cart.product_id','products.id')
       ->select('products.*','cart.id as cart_id')
       ->where('cart.user_id',$userid)
       ->get();
       return view('cartlist',['products'=>$data]);
        
        }
       }
       else
       {
        echo "<script>";
        echo "window.open('http://localhost:8000/login')";
        echo "</script>";
       }
     
    }

    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('/cartlist');
       
    }

    public function orderNow()
    {
       $userid=Session::get('user')['id'];
       $total= DB::table('cart')
       ->join('products','cart.product_id','products.id')
       ->where('cart.user_id',$userid)
       ->sum('products.price');
       return view('ordernow',['total'=>$total]);
     
    }

    public function orderPlace(Request $req)
    {
        if($req->address==""  || $req->payment=="")
        {
            echo "<script>";
            echo "alert('Note : Some fields are empty. All fields must be filled.');";
            echo "window.open('http://localhost:8000/ordernow')";
            echo "</script>";

        }
        else
        {



        $userid=Session::get('user')['id'];
        $allCart= Cart::where('user_id',$userid)->get();
        foreach($allCart as $cart)
        {

              $order=new Order();
              $order->product_id=$cart['product_id'];
              $order->user_id=$cart['user_id'];
              $order->address=$req->address;
              $order->status="Pending";
              $order->payment_method=$req->payment;
              $order->payment_status="Pending";
              $order->save();
              
              
        }
           Cart::where('user_id',$userid)->delete();
           return redirect("/order_confirmation");
    }
    }

      public function myOrder()
      {
        
       if(Session::has('user'))
       {
        $userid=Session::get('user')['id'];
        $data=DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$userid)
        ->get();
        return view('myorder',['orders'=>$data]);
       }
       else
       {
        echo "<script>";
        echo "window.open('http://localhost:8000/login')";
        echo "</script>";
       }

   
      }

      public function signup(request $req)
    {
        if($req->name==""  || $req->email==""  || $req->password==""  || $req->cpassword=="")
        {
            echo "<script>";
            echo "alert('Note : Some fields are empty. All fields must be filled.');";
            echo "window.open('http://localhost:8000/signup')";
            echo "</script>";

        }
        else
        {



       if($req->password == $req->cpassword)
       {
          $users=User::all();
          foreach($users as $user)
          {
            $flag=true;
           if($req->email == $user->email)
           {
              $flag=false;
             
              break;
             
            }
           }
            
          

          if($flag)
         {
         
        $user=new User();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
          return redirect("/login");
         }
       
       else
       {
        echo "<script>";
        echo "alert('Note : Email address already exists.');";
        echo "window.open('http://localhost:8000/signup')";
        echo "</script>";
        
          //return redirect('/signup');
          
        
       }
    }
    else 
    {

        echo "<script>";
        echo "alert('Note : Password not matched.');";
        echo "window.open('http://localhost:8000/signup')";
        echo "</script>";
      //return redirect('/signup');
    }

} 
    }


   public  function buyProduct(Request $req)
   {
    if($req->session()->has('user'))
    {

            $cart=new Cart();
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();

        $data=DB::table('products')->where('Products.id',$req->product_id)
        ->select('products.price')
        ->sum('products.price');
          
       return view('ordernow',['total'=>$data]);
      
     
    }
    else
    {

        return redirect("/login");
    }

   }

}
