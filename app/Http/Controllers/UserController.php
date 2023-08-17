<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    

    function index(Request $req)
    {

      if( $req->email==""  || $req->password=="")
      {
          echo "<script>";
          echo "alert('Note : Username and Password fields must be filled.');";
          echo "window.open('http://localhost:8000/login')";
          echo "</script>";

      }
      else
      {
       $user= User::where(['email'=>$req->email])->first();
       if(!$user || !Hash::check($req->password,$user->password))
       {
        echo "<script>";
        echo "alert('Note : Username or Password not matched.');";
        echo "window.open('http://localhost:8000/login')";
        echo "</script>";

       }
       else{
//$user=User::where(['email'=>$req->email])->first();
        $req->session()->put('user',$user);
       return redirect('/');
       }
    }
  }
    


}
