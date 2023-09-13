<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();


}
?>

<nav  style="background-color:#FA8128;height:90px;" class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <img src="/images/seller1.png" style="position:absolute; left:10px;width="50px" height="50">
    <a  style=";color:white;font-weight: bold;position:absolute;margin-left:60px;" class="navbar-brand" href="/">ShopOnline.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a  style=";color:white;font-weight: bold;position:absolute;margin-left:230px;" class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a  style=";color:white;font-weight: bold;left:315px;position:absolute;" class="nav-link" href="/myorder">Orders</a>
          
        </li>
        <form style="margin-left:400px;" class="d-flex mx-8" action="/search" role="search">
        <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button style="background-color:white;"class="btn " type="submit">Search</button>
      </form> 
      <img  style=";position:absolute;top:30px;right:350px;height:30px; " src="/images/cart3.png">
        
        <li class="nav-item position-absolute top-50  translate-middle" style="right:180px;">
       
        <a class="nav-link active" style=";color:white;font-weight: bold;" aria-current="page" href="/cartlist">Cart Item ({{$total}})<a>
        </li>
        @if(Session()->has('user'))
        <li class="nav-item dropdown position-relative"  style="margin-left:280px;margin-top:5px;">
          <a class="nav-link dropdown-toggle" style="font-size:14px;color:white;" href="#" role="button" data-bs-toggle="dropdown" >
            {{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu">
            <li><a style=";color:white;font-weight: bold;" class="dropdown-item" href="/logout" >Logout</a></li>
            
          </ul>
        </li>
        @else
        <li class="nav-item dropdown position-absolute top-50 translate-middle" style="right:0px">
        <a    style=";color:white;font-weight: bold;" class="nav-link dropdown-item" href="/login">Login</a>
        </li>
        <li class="nav-item dropdown position-absolute top-50 translate-middle" style="right:50px">
        <a   style=";color:white;font-weight: bold;"  class="nav-link dropdown-item" href="/signup">SIGNUP</a>
        </li>
        @endif

      </ul>
      
    </div>
  </div>
</nav>