@extends('master')
@section('content')
<?php
$items = array("a"=>1, "b"=>2, "c"=>3,"d"=>4, "e"=>5, "f"=>6,"g"=>7, "h"=>8, "i"=>9,"g"=>10);

?>




<nav style="height:30px;"class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <div id="main">
 
  <span style="color:white;font-weight:bold;font-size:15px;cursor:pointer" onclick="openNav()">&#9776; ALL</span>
</div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div style="background-color:black;height:30px;" class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color:white;" class="nav-link active" aria-current="page" href="#">Today's Deal</a>
        </li>
        <li class="nav-item">
          <a  style="color:white;" class="nav-link" href="#">Customer Service</a>
        </li>
        <li class="nav-item">
          <a style="color:white;" class="nav-link" href="#">Gift Cards</a>
        </li>
        <li class="nav-item">
          <a style="color:white;" class="nav-link" href="#">Sell</a>
        </li>
          
        
       
      </ul>
     
    </div>
  </div>
</nav>
<div style=" overflow: hidden;margin-top:15px;border:0px ; border-radius: 15px;margin-left:385px;width:1000px;height:400px;"id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
<div style="backgrounnd-color:grey;" class="carousel-indicators">
    @for($i=0; $i < 10 ; $i++)
    @if($i==0)
  
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$i}}" class="active" aria-current="true" aria-label="Slide 1"></button>
    @else
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$i}}" aria-label="Slide 2"></button>
    
    @endif
    @endfor
</div>


  <div  class="carousel-inner">
    
    @foreach($items as $item)
    <div  class="carousel-item @if($loop->first) active @endif" data-bs-interval="2000">
    <a href="">
      <img style="margin-top:0px;width:1000px;height:400px;"  class="slider-img" src="\images\image{{$item}}.jpg" class="d-block w-100" alt="...">
      
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p ></p>
      </div>
      </a>
     </div>
    
     
    @endforeach
  
    </div>
    
   
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<h3 style="margin-left:90px;color:#6d6d6d" class="head-pos">Trending Products</h3>
     
<div style="margin-right:0px;position:relative;display:inline;" class="container">
   <?php  $count=0; ?>
    @foreach($products as $item)
    
    <div style="position:relative;margin-left:40px;margin-right:50px; width:130px;height:370px;" class="trending-item">
    <a style="text-decoration: none;" href="detail/{{$item['id']}}">
    <div class="card" style="width: 13rem;padding-top:20px;">
  <img style="width:205px;height:160px;" src="{{$item['gallary']}}" class="card-img-top" alt="...">
  <div class="card-body" style="width:190px;height:200px;">
    <h5 style="color:#FF8C00;"class="card-title">{{$item['name']}}</h5>
    <p style="color:#36454F;text-decoration: none;" class="">{{$item['description']}}</p>
    <p style="font-size:20px;color:#FF8C00;"class="card-title">Rs.{{$item['price']}}</p>
    

     
    
    
      
    
  </div>
</div>
      </div>
      </a>

</div>  
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h5 style="margin-left:40px;">Shop By Department</h5>
  <a  onclick="dropdown()" class="dropdown-btn">Electronics
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d1" class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a  onclick="dropdown()" class="dropdown-btn">Computers 
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d1" class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a  onclick="dropdown()" class="dropdown-btn">Smart home 
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d1" class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a  onclick="dropdown()" class="dropdown-btn">Arts & Crafts
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d1" class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a href="#about">Shop By Intrest</a>
  <a  onclick="dropdown()" class="dropdown-btn">See All 
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d1" class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
<hr></hr>
<h5 style="margin-left:40px;">Programs and Features</h5>
<a  onclick="dropdown()" class="dropdown-btn">Gift Cards 
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d1" class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div><a  onclick="dropdown()" class="dropdown-btn">International Shopping 
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d1" class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  
  </div><a  onclick="dropdown()" class="dropdown-btn">Shop Live 
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d1" class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <a  onclick="dropdown()" class="dropdown-btn">See ALL
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d1" class="dropdown-container">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
  <hr>
  <h5 style="margin-left:40px;">Help and Settings</h5>
  <a href="#">Your Account</a>
  <a  onclick="dropdown()" class="dropdown-btn">Languages
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d1" class="dropdown-container">
    <a href="#">English</a>
    <a href="#">Arabic</a>
    <a href="#">Chinese</a>
  </div>
  
  <a href="#">Customer Services</a>
  <a href="#">Sign in</a>
  <hr></hr>
</div>


 @endforeach
@endsection




<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}


function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
//var dropdown = document.getElementsByClassName("dropdown-btn");
//alert(dropdown);
//var i;


  
  function dropdown()
  {  
    //alert("ok");
    
    if (document.getElementById("d1").style.display === "block") {
      document.getElementById("d1").style.display = "none";
    } else {
      document.getElementById("d1").style.display = "block";
    }
  }

</script>
   