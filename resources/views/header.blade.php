<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();


}
?>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">ShopOnline.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorder">Orders</a>
          
        </li>
        <form class="d-flex mx-3" action="/search" role="search">
        <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> 
      <img  style="position:absolute;top:15px;right:330px;height:25px; " src="https://static.vecteezy.com/system/resources/previews/019/787/018/original/shopping-cart-icon-shopping-basket-on-transparent-background-free-png.png">
        
        <li class="nav-item position-absolute top-50  translate-middle" style="right:180px;">
       
        <a class="nav-link active" aria-current="page" href="/cartlist">Cart Item ({{$total}})<a>
        </li>
        @if(Session()->has('user'))
        <li class="nav-item dropdown position-relative"  style="margin-left:300px;margin-top:5px;">
          <a class="nav-link dropdown-toggle" style="font-size:14px;color:green;" href="#" role="button" data-bs-toggle="dropdown" >
            {{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/logout" >Logout</a></li>
            
          </ul>
        </li>
        @else
        <li class="nav-item dropdown position-absolute top-50 translate-middle" style="right:0px">
        <a   class="nav-link dropdown-item" href="/login">Login</a>
        </li>
        <li class="nav-item dropdown position-absolute top-50 translate-middle" style="right:50px">
        <a   class="nav-link dropdown-item" href="/signup">SIGNUP</a>
        </li>
        @endif

      </ul>
      
    </div>
  </div>
</nav>