@extends('master')
@section('content')
<?php
$items = array("a"=>1, "b"=>2, "c"=>3,"d"=>4, "e"=>5, "f"=>6,"g"=>7, "h"=>8, "i"=>9,"g"=>10);

?>



<nav id="navSub" style="position:relative;height:30px;background-color:#202A44;"class="navbar navbar-expand-lg bg ">
  <div style=";position:relative;"class="container-fluid">
  <div style=";"id="main">
 
  <span style=";position:relative;color:white;font-weight:bold;font-size:15px;cursor:pointer" onclick="openNav()">&#9776; ALL</span>
</div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div  style="position:relative;background-color:black;height:30px;background-color:#202A44;" class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style=";color:white;" class="nav-link active" aria-current="page" href="#">Today's Deal</a>
        </li>
        <li class="nav-item">
          <a  style=";color:white;" class="nav-link" href="#">Customer Service</a>
        </li>
        <li class="nav-item">
          <a style=";color:white;" class="nav-link" href="#">Gift Cards</a>
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


<img id="nav" style=""> 
<div id="mySidenav" style="" class="sidenav">
  
  <div id="nav2"  style="margin-top:-60px; color:white;z-index:-1;position:relative;padding-bottom:10px;right:0px;padding-left:0px;background-color:black;width:350px;height:85px;">
  <a  id="close" href="javascript:void(0)" style="background-color:black;position:absolute;font-size:35px;margin-top:-15px;left:271px;color:white;"  onclick="closeNav()">&times;</a>
  <a  class="g1" href="/login" style="margin-top:0px;">
  <img style="position:absolute;margin-left:0px;margin-top:15px;width:40px; height:40px;" src="images/user1.png">
  <h5 style="position:absolute;color:white;margin-top:25px;left:90px;font-weight:bold;">Hello, Sign in</h5>
  </a>
  </div>
  <h5 style="margin-top:40px;position:relative;margin-left:35px;font-weight:bold;">Shop By Department</h5>
  <a style="font-size:20px;" onclick="dropdown('d1')" class="dropdown-btn">Electronics
  <i class="fa fa-caret-down"></i>
</a>
  <div id="d1" class="dropdown-container">
    <a style="font-size:15px;" href="#">Accessories & Supplies</a>
    <a style="font-size:15px;" href="#">Camera & Photos</a>
    <a style="font-size:15px;" href="#">Car & Vehicle Electronics</a>
    <a style="font-size:15px;" href="#">GPS and Navigation</a>
    <a style="font-size:15px;" href="#">Headphones</a>
    <a style="font-size:15px;" href="#">Home Audio</a>
    <a style="font-size:15px;" href="#">Office Electronics</a>
    <a style="font-size:15px;" href="#">Television and Video</a>
    <a style="font-size:15px;" href="#">Video Projectors</a>
    <a style="font-size:15px;" href="#">Portable Audio & Video</a>
    <a style="font-size:15px;" href="#">Security & Servilience</a>
  </div>
  <a  style="font-size:20px;"onclick="dropdown('d2')" class="dropdown-btn">Computers 
    <i class="fa fa-caret-down"></i>
</a>
  <div style="font-size:20px;"id="d2" class="dropdown-container">
  <a style="font-size:15px;" href="#">Computer Accessories & Peripherals</a>
    <a style="font-size:15px;" href="#">Computer Components</a>
    <a style="font-size:15px;" href="#">Computers and Tablets</a>
    <a style="font-size:15px;" href="#">Data Storage </a>
    <a style="font-size:15px;" href="#">External Components</a>
    <a style="font-size:15px;" href="#">Laptop Accessories</a>
    <a style="font-size:15px;" href="#">Monitors</a>
    <a style="font-size:15px;" href="#">Printers</a>
    <a style="font-size:15px;" href="#">Scanners</a>
  </div>
  <a style="font-size:20px;" onclick="dropdown('d3')" class="dropdown-btn">Smart home 
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d3" class="dropdown-container">
  <a style="font-size:15px;" href="#">Smart Home Lightining</a>
    <a style="font-size:15px;" href="#">Smart Locks and Entry</a>
    <a style="font-size:15px;" href="#">Security Cemaras and Systems</a>
    <a style="font-size:15px;" href="#">Plugs and Outlets </a>
    <a style="font-size:15px;" href="#">New Smart Devices</a>
    <a style="font-size:15px;" href="#">Heating and Cooling</a>
    <a style="font-size:15px;" href="#">Detectors and Sensors</a>
    <a style="font-size:15px;" href="#">Home Entertainment</a>
    <a style="font-size:15px;" href="#">Kitchen</a>
    <a style="font-size:15px;" href="#">Vacuum and Mops</a>
    <a style="font-size:15px;" href="#">Lawn and Garden</a>
    <a style="font-size:15px;" href="#">WIFI and Networking</a>
  </div>
  <a  style="font-size:20px;" onclick="dropdown('d4')" class="dropdown-btn">Arts & Crafts
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d4" class="dropdown-container">
  <a style="font-size:15px;" href="#">Paintind, drawing and art Supplies</a>
    <a style="font-size:15px;" href="#">Beading and Jewelry Making</a>
    <a style="font-size:15px;" href="#">Crafting</a>
    <a style="font-size:15px;" href="#">Fabric</a>
    <a style="font-size:15px;" href="#">fabric Dectoration</a>
    <a style="font-size:15px;" href="#">Knitting and Crochet</a>
    <a style="font-size:15px;" href="#">Neddlework</a>
    <a style="font-size:15px;" href="#">Organization, Storage & Transport</a>
    <a style="font-size:15px;" href="#">Sewing</a>
    <a style="font-size:15px;" href="#">Printmaking</a>
    <a style="font-size:15px;" href="#">Party Decoratiion and Supplies</a>
    <a style="font-size:15px;" href="#">Kitchen</a>
  </div>
  
  <a  style="font-size:20px;"onclick="dropdown('d5')" class="dropdown-btn">Automotive
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d5" class="dropdown-container">
  <a style="font-size:15px;" href="#">Car Care</a>
    <a style="font-size:15px;" href="#">Car Electronics & Accessories</a>
    <a style="font-size:15px;" href="#">Exterior Accessories</a>
    <a style="font-size:15px;" href="#">Interior Accessories</a>
    <a style="font-size:15px;" href="#">Light and Lighting Accessories</a>
    <a style="font-size:15px;" href="#">Oil and Fluids</a>
    <a style="font-size:15px;" href="#">Motorcycle & Powersports</a>
    <a style="font-size:15px;" href="#">Paint and Paint Supplies</a>
    <a style="font-size:15px;" href="#">Performance parts and Accessories</a>
    <a style="font-size:15px;" href="#">Replacements parts</a>
    <a style="font-size:15px;" href="#">Tires and wheels</a>
    <a style="font-size:15px;" href="#">Tools and Euipments</a>
  </div>

  <a  style="font-size:20px;"onclick="dropdown('d6')" class="dropdown-btn">Women's Fashion
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d6" class="dropdown-container">
  <a style="font-size:15px;" href="#">Clothing</a>
    <a style="font-size:15px;" href="#">Jewelary</a>
    <a style="font-size:15px;" href="#">Shoes</a>
    <a style="font-size:15px;" href="#">Watches</a>
    <a style="font-size:15px;" href="#">Handbags</a>
    <a style="font-size:15px;" href="#">Accessories</a>
  </div>
  <a  style="font-size:20px;" onclick="dropdown('d7')" class="dropdown-btn">Men's Fashion
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d7" class="dropdown-container">
  <a style="font-size:15px;" href="#">Clothing</a>
   <a style="font-size:15px;" href="#">Shoes</a>
    <a style="font-size:15px;" href="#">Watches</a>
   <a style="font-size:15px;" href="#">Accessories</a>
  </div>
  <a  style="font-size:20px;"onclick="dropdown('d45')" class="dropdown-btn">Boy's Fashion
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d45" class="dropdown-container">
  <a style="font-size:15px;" href="#">Clothing</a>
   <a style="font-size:15px;" href="#">Shoes</a>
    <a style="font-size:15px;" href="#">Watches</a>
   <a style="font-size:15px;" href="#">Schools Uniforms</a>
  </div>

  <a  style="font-size:20px;"onclick="dropdown('d8')" class="dropdown-btn">Men's Fashion
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d8" class="dropdown-container">
  <a style="font-size:15px;" href="#">Clothing</a>
   <a style="font-size:15px;" href="#">Shoes</a>
    <a style="font-size:15px;" href="#">Watches</a>
   <a style="font-size:15px;" href="#">Accessories</a>
  </div>
  <a  style="font-size:20px;"onclick="dropdown('d9')" class="dropdown-btn">Health and Household
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d9" class="dropdown-container">
  <a style="font-size:15px;" href="#">Baby & Child Care</a>
   <a style="font-size:15px;" href="#">Health Care</a>
    <a style="font-size:15px;" href="#">Household Supplies</a>
   <a style="font-size:15px;" href="#">Medical supplies and Equipment</a>
   <a style="font-size:15px;" href="#">Personal Care</a>
   <a style="font-size:15px;" href="#">Oral Care</a>
    <a style="font-size:15px;" href="#">Vitamins & Dietary Supplement</a>
   <a style="font-size:15px;" href="#">Wellnes and Relaxation</a>
   <a style="font-size:15px;" href="#">Sports Nutrition</a>
</div>

<a  style="font-size:20px;"onclick="dropdown('d10')" class="dropdown-btn">Toys and Games
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d10" class="dropdown-container">
  <a style="font-size:15px;" href="#">Action Figures and Statues</a>
   <a style="font-size:15px;" href="#">arts and Crafts</a>
    <a style="font-size:15px;" href="#">Building Toys</a>
   <a style="font-size:15px;" href="#">Dolls and Accessories</a>
   <a style="font-size:15px;" href="#">kid's Electronics</a>
   <a style="font-size:15px;" href="#">Grown-Up Toys</a>
    <a style="font-size:15px;" href="#">Hobbies</a>
   <a style="font-size:15px;" href="#">Games</a>
   <a style="font-size:15px;" href="#">Puzzles</a>
   <a style="font-size:15px;" href="#">Games</a>
   <a style="font-size:15px;" href="#">Toy remote control & Play Vehicle</a>
   <a style="font-size:15px;" href="#">Tricycle, Scoters and Wagons</a>
   <a style="font-size:15px;" href="#">Sports & Outdoor Play</a>
   <a style="font-size:15px;" href="#">Video Games</a>

</div>

<a  style="font-size:20px;"onclick="dropdown('d11')" class="dropdown-btn">Video Games
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d11" class="dropdown-container">
  <a style="font-size:15x;" href="#">Video Games</a>
   <a style="font-size:15px;" href="#">Playstation4</a>
    <a style="font-size:15px;" href="#">Playstation3</a>
   <a style="font-size:15px;" href="#">Sony PSP</a>
   <a style="font-size:15px;" href="#">Xbox One</a>
   <a style="font-size:15px;" href="#">Xbox 360</a>
    <a style="font-size:15px;" href="#">Nintendo Switch</a>
   <a style="font-size:15px;" href="#">Wii U</a>
   <a style="font-size:15px;" href="#">Wii</a>
   <a style="font-size:15px;" href="#">PC</a>
   <a style="font-size:15px;" href="#">Mac</a>
   <a style="font-size:15px;" href="#">Nintendo 3DS & 2DS</a>
   <a style="font-size:15px;" href="#">Nintendo DS</a>
   <a style="font-size:15px;" href="#">Playstation Vita</a>
   <a style="font-size:15px;" href="#">Retro Gaming and Microconsoles</a>
   <a style="font-size:15px;" href="#">accessories</a>
   <a style="font-size:15px;" href="#">Nintendo DS</a>
   <a style="font-size:15px;" href="#">Digital Games</a>
</div>
<a  style="font-size:20px;"onclick="dropdown('d12')" class="dropdown-btn">Sports and Outdoors
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d12" class="dropdown-container">
  <a style="font-size:15px;" href="#">Outdoor Recreation</a>
  <a style="font-size:15px;" href="#">Sports and Outdoors</a>
  <a style="font-size:15px;" href="#">Sports and Fitness</a>
   
  </div>

<hr></hr>
<h5 style="margin-left:35px;font-weight:bold;">Programs and Features</h5>
<a  style="font-size:20px;" onclick="dropdown('d13')" class="dropdown-btn">Gift Cards 
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d13" class="dropdown-container">
    <a style="font-size:15px;" href="#">Link 1</a>
    <a style="font-size:15px;" href="#">Link 2</a>
    <a style="font-size:15px;" href="#">Link 3</a>
    <a style="font-size:20px;" href="#about">Shop By Intrest</a>
  </div><a  style="font-size:20px;" onclick="dropdown('d14')" class="dropdown-btn">International Shopping 
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d14" class="dropdown-container">
    <a style="font-size:15px;" href="#">Link 1</a>
    <a style="font-size:15px;" href="#">Link 2</a>
    <a style="font-size:15px;" href="#">Link 3</a>
  
  </div><a style="font-size:20px;"  onclick="dropdown('d15')" class="dropdown-btn">Shop Live 
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d15" class="dropdown-container">
    <a style="font-size:15px;" href="#">Link 1</a>
    <a style="font-size:15px;" href="#">Link 2</a>
    <a style="font-size:15px;" href="#">Link 3</a>
  </div>
  <a  style="font-size:20px;" onclick="dropdown('d16')" class="dropdown-btn">See All
    <i class="fa fa-caret-down"></i>
</a>
  <div id="d16" class="dropdown-container">
    <a style="font-size:15px;" href="#">Link 1</a>
    <a style="font-size:15px;" href="#">Link 2</a>
    <a style="font-size:15px;" href="#">Link 3</a>
  </div>
  <hr>
  <h5 style="margin-left:35px;">Help and Settings</h5>
  <a style="font-size:20px;" href="#">Your Account</a>
  <a  style="font-size:20px;" onclick="dropdown('d17')" class="dropdown-btn">Languages
    <i class="fa fa-caret-down"></i>
</a>
  <div style="font-size:20px;" id="d17" class="dropdown-container">
    <a style="font-size:15px;" href="#">English</a>
    <a style="font-size:15px;" href="#">Arabic</a>
    <a style="font-size:15px;" href="#">Chinese</a>
  </div>
  
  <a style="font-size:20px;" href="#">Customer Services</a>
  <a href="/login" style="font-size:20px;" href="#">Sign in</a>
  <hr></hr>
</div>
</img>
<div class="row">
  <a style="" href="detail">
  <div class="column">
<div  class="card" style=";margin-top:60px;border-radius:0px;border-style:none;padding-left:20px;margin-left:30px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Games Accessories</h4>
  <img style="border-radius:0px;margin-top:100px;width:305px;height:200px;" src="images/games_and_accessories1.jpg" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</a>
</div>



  <div class="column">
<div  class="card" style=";margin-top:60px;border-radius:0px;border-style:none;padding-left:20px;margin-left:20px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Toy Under $30</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:320px;" src="images/toys3.jpg" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>

<div class="column">
<div  class="card" style=";margin-top:60px;border-radius:0px;border-style:none;padding-left:20px;margin-left:10px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Home & Kitchen Under $30</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:320px;" src="images/home_and_kitchen.jpg" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>

<div class="column">
<div  class="card" style=";margin-top:60px;border-radius:0px;border-style:none;padding-left:20px;margin-left:0px;height:150px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Sign in for the best <br> experience</h4>
  <a href="/login" style="border-style:none;background-color:#FFAE0D;width:300px;height:50px;" class="btn btn-primary">sign in</a>
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
  
</div>
<img style="margin-left:10px;margin-top:30px;width:325px;height:280px;" src="images/sell_online.jpg" class="card-img-top" alt="...">
  
</div>
</div>

<div class="row">

  <div class="column">
<div  class="card" style=";margin-top:25px;border-radius:0px;border-style:none;padding-left:20px;margin-left:30px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Electronics</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:320px;" src="images/electronics2.jpg" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>

<div class="column">
<div  class="card" style=";margin-top:25px;border-radius:0px;border-style:none;padding-left:20px;margin-left:20px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Health & Personel Care</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:320px;" src="images/healthcare.png" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>

<div class="column">
<div  class="card" style=";margin-top:25px;border-radius:0px;border-style:none;padding-left:20px;margin-left:10px;height:470px;width:345px;padding-top:25px;">
<h4 style="position:absolute;margin-left:10px;font-weight:bold;color:black;"class="card-title">Shop deals in Fashion</h4>
  

<img style="position:absolute;margin-left:10px;border-radius:0px;margin-top:60px;width:135px;height:130px;" src="images/beauty-pics.jpg" class="card-img-top" alt="...">
<p style="font-size:13px;position:absolute;margin-top:190px; margin-left:20px;"  >Jeans under 50$</p>

<img style="position:absolute;margin-left:160px;border-radius:0px;margin-top:60px;width:135px;height:130px;" src="images/beauty-pics.jpg" class="card-img-top" alt="...">
<p style="font-size:13px;position:absolute;margin-top:190px; margin-left:180px;"  >Tops under 25$</p>

<img style="position:absolute;border-radius:0px;margin-left:10px;margin-top:230px;width:135px;height:130px;" src="images/beauty-pics.jpg" class="card-img-top" alt="...">

<img style="position:absolute;margin-left:160px;border-radius:0px;margin-top:230px;width:135px;height:130px;" src="images/beauty-pics.jpg" class="card-img-top" alt="...">
<p style="font-size:13px;position:absolute;margin-top:360px; margin-left:20px;"  >Dress under 30$</p>

<div  class="card-body" style="width:190px;height:20px;">
<p style="font-size:13px;position:absolute;margin-top:345px; margin-left:160px;"  >Shoes under 25$</p>

  </div>
</div>
</div>

<div class="column">
<div  class="card" style=";margin-top:25px;border-radius:0px;border-style:none;padding-left:20px;margin-left:0px;height:470px;width:345px;padding-top:25px;">
<h4 style="margin-left:10px;font-weight:bold;color:black;"class="card-title">Refresh your space</h4>
<img style="position:absolute;margin-left:10px;border-radius:0px;margin-top:60px;width:135px;height:130px;" src="images/beauty-pics.jpg" class="card-img-top" alt="...">
<p style=";font-size:13px;position:absolute;margin-top:190px; margin-left:20px;"  >Jeans under 50$</p>

<img style="position:absolute;margin-left:160px;border-radius:0px;margin-top:60px;width:135px;height:130px;" src="images/beauty-pics.jpg" class="card-img-top" alt="...">
<p style="font-size:13px;position:absolute;margin-top:190px; margin-left:180px;"  >Tops under 25$</p>

<img style="position:absolute;border-radius:0px;margin-left:10px;margin-top:230px;width:135px;height:130px;" src="images/beauty-pics.jpg" class="card-img-top" alt="...">
<p style="font-size:13px;position:absolute;margin-top:360px; margin-left:170px;"  >Shoes under 25$</p>

<img style="position:absolute;margin-left:160px;border-radius:0px;margin-top:230px;width:135px;height:130px;" src="images/beauty-pics.jpg" class="card-img-top" alt="...">
<p style="font-size:13px;position:absolute;margin-top:360px; margin-left:20px;"  >Dress under 30$</p>


  
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>

</div>
    
<div style="height:320px;margin-top:30px;margin-left:100px;overflow:hidden;position:absolute;left:-80px;width:1470px;" id="carouselExampleControls"  >
<h4 style="z-index:24;font-weight:bold;margin-left:50px;position:absolute;top:15px;">New beauty products</h4>
  
<div id="s1" style="margin-left:0px;margin-top:0px;width:2850px;height:320px;" class="carousel-inner">
    
      <div style="width:3000px;height:320px;background-color:white;">
      
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty1.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty2.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty3.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty4.webp" ></a>
      <a href=""><img  style="margin-left:20px;margin-top:50px;width:200px;height:210px;" src="images/beauty5.webp" ></a>
      <a href=""><img  style="margin-left:10px;margin-top:50px;width:200px;height:210px;" src="images/beauty6.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty1.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty2.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty3.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty4.webp" ></a>
      <a href=""><img  style="margin-left:20px;margin-top:50px;width:200px;height:210px;" src="images/beauty5.webp" ></a>
      
    
    
    
    </div>
    
   
  </div>
  
</div>
<button class="m7" style=";border-bottom-right-radius:7px;border-top-right-radius:7px;border:0px solid #c7c7c7;box-shadow: 2px 2px 2px 2px #c7c7c7;border-left-style:none;;position:absolute;margin-top:130px;font-size:35px;margin-left:20px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="prev1">
   <img class="m7" src="images/left.png" />
  </button>
  <button class="m7" style="border-bottom-left-radius:7px;border-top-left-radius:7px;border-right-style:none;border:0px solid #c7c7c7;margin-top:130px;box-shadow: 0px 2px 2px 2px #c7c7c7;position:absolute;font-size:35px;margin-left:1440px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="next1">
  <img class="m7" src="images/right.png"/>
  </button>

  <div id="slider1" style="position:absolute;left:50px;top:1915px;width:400px;height:8px;border-radius:7px;border:1px solid #959595;background-color:#959595"></div>




  <div style="height:320px;margin-top:370px;margin-left:100px;overflow:hidden;position:absolute;left:-80px;width:1470px;" id="carouselExampleControls"  >
  <h4 style="z-index:24;font-weight:bold;margin-left:50px;position:absolute;top:15px;">New customers in Pakistan purchased</h4>
 
  <div id="s2" style="margin-left:0px;margin-top:0px;width:2850px;height:320px;" class="carousel-inner">
    
      <div style="width:3000px;height:320px;background-color:white;">
      
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty1.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty2.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty3.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty4.webp" ></a>
      <a href=""><img  style="margin-left:20px;margin-top:50px;width:200px;height:210px;" src="images/beauty5.webp" ></a>
      <a href=""><img  style="margin-left:10px;margin-top:50px;width:200px;height:210px;" src="images/beauty6.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty1.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty2.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty3.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty4.webp" ></a>
      <a href=""><img  style="margin-left:20px;margin-top:50px;width:200px;height:210px;" src="images/beauty5.webp" ></a>
      
    
    
    
    </div>
    
   
  </div>
  
</div>
<button class="m7" style=";border-bottom-right-radius:7px;border-top-right-radius:7px;border:0px solid #c7c7c7;box-shadow: 2px 2px 2px 2px #c7c7c7;border-left-style:none;;position:absolute;margin-top:480px;font-size:35px;margin-left:20px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="prev2">
   <img class="m7" src="images/left.png" />
  </button>
  <button class="m7" style="border-bottom-left-radius:7px;border-top-left-radius:7px;border-right-style:none;border:0px solid #c7c7c7;margin-top:480px;box-shadow: 0px 2px 2px 2px #c7c7c7;position:absolute;font-size:35px;margin-left:1440px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="next2">
  <img class="m7" src="images/right.png"/>
  </button>

  <div id="slider2" style="position:absolute;left:50px;top:2255px;width:400px;height:8px;border-radius:7px;border:1px solid #959595;background-color:#959595"></div>



  <div class="row">
  <div class="column">
<div  class="card" style=";margin-top:715px;border-radius:0px;border-style:none;padding-left:20px;margin-left:30px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">New arrivals in Toys</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:320px;" src="images/toy5.jpg" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>


<div class="column">
<div  class="card" style=";margin-top:715px;border-radius:0px;border-style:none;padding-left:20px;margin-left:20px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">For your Fitness Needs</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:320px;" src="images/gym_and_fitness2.jpg" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>
  
<div class="column">
<div  class="card" style=";margin-top:715px;border-radius:0px;border-style:none;padding-left:20px;margin-left:15px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Discover fashion trends</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:320px;" src="images/fashion_trends2.jpg" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>
  
<div class="column">
<div  class="card" style=";margin-top:715px;border-radius:0px;border-style:none;padding-left:20px;margin-left:10px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Frequently repurchased in Home</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:290px;" src="images/frequently_purchased_home.jpg" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>
  
</div>



<div style="height:320px;margin-top:30px;margin-left:100px;overflow:hidden;position:absolute;left:-80px;width:1470px;" id="carouselExampleControls"  >
<h4 style="z-index:24;font-weight:bold;margin-left:50px;position:absolute;top:15px;">Exciting Deals</h4>
 
<div id="s3" style="margin-left:0px;margin-top:0px;width:2850px;height:320px;" class="carousel-inner">
    
      <div style="width:3000px;height:320px;background-color:white;">
     
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty1.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty2.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty3.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty4.webp" ></a>
      <a href=""><img  style="margin-left:20px;margin-top:50px;width:200px;height:210px;" src="images/beauty5.webp" ></a>
      <a href=""><img  style="margin-left:10px;margin-top:50px;width:200px;height:210px;" src="images/beauty6.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty1.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty2.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty3.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty4.webp" ></a>
      <a href=""><img  style="margin-left:20px;margin-top:50px;width:200px;height:210px;" src="images/beauty5.webp" ></a>
      
    
    
    
    </div>
    
   
  </div>
  
</div>
<button class="m7" style=";border-bottom-right-radius:7px;border-top-right-radius:7px;border:0px solid #c7c7c7;box-shadow: 2px 2px 2px 2px #c7c7c7;border-left-style:none;;position:absolute;margin-top:130px;font-size:35px;margin-left:20px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="prev3">
   <img class="m7" src="images/left.png" />
  </button>
  <button class="m7" style="border-bottom-left-radius:7px;border-top-left-radius:7px;border-right-style:none;border:0px solid #c7c7c7;margin-top:130px;box-shadow: 0px 2px 2px 2px #c7c7c7;position:absolute;font-size:35px;margin-left:1440px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="next3">
  <img class="m7" src="images/right.png"/>
  </button>

  <div id="slider3" style="position:absolute;left:50px;top:3100px;width:400px;height:8px;border-radius:7px;border:1px solid #959595;background-color:#959595"></div>





  <div style="height:320px;margin-top:375px;margin-left:100px;overflow:hidden;position:absolute;left:-80px;width:1470px;" id="carouselExampleControls"  >
  <h4 style="z-index:24;font-weight:bold;margin-left:50px;position:absolute;top:15px;">Deals Under 25$</h4>
 
  <div id="s4" style="margin-left:0px;margin-top:0px;width:2850px;height:320px;" class="carousel-inner">
    
      <div style="width:3000px;height:320px;background-color:white;">
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty1.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty2.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty3.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty4.webp" ></a>
      <a href=""><img  style="margin-left:20px;margin-top:50px;width:200px;height:210px;" src="images/beauty5.webp" ></a>
      <a href=""><img  style="margin-left:10px;margin-top:50px;width:200px;height:210px;" src="images/beauty6.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty1.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty2.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty3.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty4.webp" ></a>
      <a href=""><img  style="margin-left:20px;margin-top:50px;width:200px;height:210px;" src="images/beauty5.webp" ></a>
      
    
    
    
    </div>
    
   
  </div>
  
</div>
<button class="m7" style=";border-bottom-right-radius:7px;border-top-right-radius:7px;border:0px solid #c7c7c7;box-shadow: 2px 2px 2px 2px #c7c7c7;border-left-style:none;;position:absolute;margin-top:480px;font-size:35px;margin-left:20px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="prev4">
   <img class="m7" src="images/left.png" />
  </button>
  <button class="m7" style="border-bottom-left-radius:7px;border-top-left-radius:7px;border-right-style:none;border:0px solid #c7c7c7;margin-top:480px;box-shadow: 0px 2px 2px 2px #c7c7c7;position:absolute;font-size:35px;margin-left:1440px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="next4">
  <img class="m7" src="images/right.png"/>
  </button>

  <div id="slider4" style="position:absolute;left:50px;top:3445px;width:400px;height:8px;border-radius:7px;border:1px solid #959595;background-color:#959595"></div>

  <div class="row">
  <div class="column">
<div  class="card" style=";margin-top:720px;border-radius:0px;border-style:none;padding-left:20px;margin-left:30px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Shop activity trackers and smart watches</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:290px;" src="images/trackers_and_smart.webp" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>

<div class="column">
<div  class="card" style=";margin-top:720px;border-radius:0px;border-style:none;padding-left:20px;margin-left:30px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Shop Laptops and Tablets</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:320px;" src="images/laptops_and_tablets.avif" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>
<div class="column">
<div  class="card" style=";margin-top:720px;border-radius:0px;border-style:none;padding-left:20px;margin-left:30px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Create with strip lights</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:320px;" src="images/strip_lights.jpg" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>

<div class="column">
<div  class="card" style=";margin-top:720px;border-radius:0px;border-style:none;padding-left:20px;margin-left:30px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Home refresh ideas</h4>
  <img style="border-radius:0px;margin-top:20px;width:295px;height:320px;" src="images/home_refresh_ideas2.jpg" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>

</div>



<div style="height:320px;margin-top:25px;margin-left:100px;overflow:hidden;position:absolute;left:-80px;width:1470px;" id="carouselExampleControls"  >
<h4 style="z-index:24;font-weight:bold;margin-left:50px;position:absolute;top:15px;">Top sellers in Toys</h4>
 
<div id="s5" style="margin-left:0px;margin-top:0px;width:2850px;height:320px;" class="carousel-inner">
    
      <div style="width:3000px;height:320px;background-color:white;">
     
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty1.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty2.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty3.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty4.webp" ></a>
      <a href=""><img  style="margin-left:20px;margin-top:50px;width:200px;height:210px;" src="images/beauty5.webp" ></a>
      <a href=""><img  style="margin-left:10px;margin-top:50px;width:200px;height:210px;" src="images/beauty6.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty1.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty2.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty3.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty4.webp" ></a>
      <a href=""><img  style="margin-left:20px;margin-top:50px;width:200px;height:210px;" src="images/beauty5.webp" ></a>
      
    
    
    
    </div>
    
   
  </div>
  
</div>
<button class="m7" style=";border-bottom-right-radius:7px;border-top-right-radius:7px;border:0px solid #c7c7c7;box-shadow: 2px 2px 2px 2px #c7c7c7;border-left-style:none;;position:absolute;margin-top:120px;font-size:35px;margin-left:20px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="prev5">
   <img class="m7" src="images/left.png" />
  </button>
  <button class="m7" style="border-bottom-left-radius:7px;border-top-left-radius:7px;border-right-style:none;border:0px solid #c7c7c7;margin-top:120px;box-shadow: 0px 2px 2px 2px #c7c7c7;position:absolute;font-size:35px;margin-left:1440px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="next5">
  <img class="m7" src="images/right.png"/>
  </button>

  <div id="slider5" style="position:absolute;left:50px;top:4285px;width:400px;height:8px;border-radius:7px;border:1px solid #959595;background-color:#959595"></div>


  <div style="height:320px;margin-top:370px;margin-left:100px;overflow:hidden;position:absolute;left:-80px;width:1470px;" id="carouselExampleControls"  >
  <h4 style="z-index:24;font-weight:bold;margin-left:50px;position:absolute;top:15px;">Top Sellers in Book for you</h4>
 
  <div id="s6" style="margin-left:0px;margin-top:0px;width:2850px;height:320px;" class="carousel-inner">
    
      <div style="width:3000px;height:320px;background-color:white;">
      
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty1.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty2.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty3.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty4.webp" ></a>
      <a href=""><img  style="margin-left:20px;margin-top:50px;width:200px;height:210px;" src="images/beauty5.webp" ></a>
      <a href=""><img  style="margin-left:10px;margin-top:50px;width:200px;height:210px;" src="images/beauty6.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty1.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty2.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty3.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty4.webp" ></a>
      <a href=""><img  style="margin-left:20px;margin-top:50px;width:200px;height:210px;" src="images/beauty5.webp" ></a>
      
    
    
    
    </div>
    
   
  </div>
  
</div>
<button class="m7" style=";border-bottom-right-radius:7px;border-top-right-radius:7px;border:0px solid #c7c7c7;box-shadow: 2px 2px 2px 2px #c7c7c7;border-left-style:none;;position:absolute;margin-top:480px;font-size:35px;margin-left:20px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="prev6">
   <img class="m7" src="images/left.png" />
  </button>
  <button class="m7" style="border-bottom-left-radius:7px;border-top-left-radius:7px;border-right-style:none;border:0px solid #c7c7c7;margin-top:480px;box-shadow: 0px 2px 2px 2px #c7c7c7;position:absolute;font-size:35px;margin-left:1440px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="next6">
  <img class="m7" src="images/right.png"/>
  </button>

  <div id="slider6" style="position:absolute;left:50px;top:4625px;width:400px;height:8px;border-radius:7px;border:1px solid #959595;background-color:#959595"></div>




  <div class="row">
  <div class="column">
<div  class="card" style=";margin-top:720px;border-radius:0px;border-style:none;padding-left:20px;margin-left:30px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Deals in Tools and Home Improvements</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:290px;" src="images/tools_and_home.jpg" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>

<div class="column">
<div  class="card" style=";margin-top:720px;border-radius:0px;border-style:none;padding-left:20px;margin-left:30px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Gaming merchandise</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:320px;" src="images/gaming_merchandise.webp" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>

<div class="column">
<div  class="card" style=";margin-top:720px;border-radius:0px;border-style:none;padding-left:20px;margin-left:30px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Shop Pet supplies</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:320px;" src="images/pet_supplies.jpeg" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>

<div class="column">
<div  class="card" style=";margin-top:720px;border-radius:0px;border-style:none;padding-left:20px;margin-left:30px;height:470px;width:345px;padding-top:25px;">
<h4 style="font-weight:bold;color:black;"class="card-title">Vehicles and spare parts</h4>
  <img style="border-radius:0px;margin-top:20px;width:305px;height:320px;" src="images/vehicles_and_parts.jpg" class="card-img-top" alt="...">
  <div  class="card-body" style="width:190px;height:20px;">
  </div>
</div>
</div>

</div>


<div style="height:320px;margin-top:30px;margin-left:100px;overflow:hidden;position:absolute;left:-80px;width:1470px;" id="carouselExampleControls"  >
<h4 style="z-index:24;font-weight:bold;margin-left:50px;position:absolute;top:15px;">New international customers purchased</h4>
 
<div id="s7" style="margin-left:0px;margin-top:0px;width:2850px;height:320px;" class="carousel-inner">
    
      <div style="width:3000px;height:320px;background-color:white;">
      
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty1.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty2.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty3.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty4.webp" ></a>
      <a href=""><img  style="margin-left:20px;margin-top:50px;width:200px;height:210px;" src="images/beauty5.webp" ></a>
      <a href=""><img  style="margin-left:10px;margin-top:50px;width:200px;height:210px;" src="images/beauty6.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty1.jpg" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty2.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty3.webp" ></a>
      <a href=""><img  style="margin-left:50px;margin-top:50px;width:200px;height:210px;" src="images/beauty4.webp" ></a>
      <a href=""><img  style="margin-left:20px;margin-top:50px;width:200px;height:210px;" src="images/beauty5.webp" ></a>
      
    
    
    
    </div>
    
   
  </div>
  
</div>
<button class="m7" style=";border-bottom-right-radius:7px;border-top-right-radius:7px;border:0px solid #c7c7c7;box-shadow: 2px 2px 2px 2px #c7c7c7;border-left-style:none;;position:absolute;margin-top:140px;font-size:35px;margin-left:20px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="prev7">
   <img class="m7" src="images/left.png" />
  </button>
  <button class="m7" style="border-bottom-left-radius:7px;border-top-left-radius:7px;border-right-style:none;border:0px solid #c7c7c7;margin-top:140px;box-shadow: 0px 2px 2px 2px #c7c7c7;position:absolute;font-size:35px;margin-left:1440px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="next7">
  <img class="m7" src="images/right.png"/>
  </button>

  <div id="slider7" style="position:absolute;left:50px;top:5480px;width:400px;height:8px;border-radius:7px;border:1px solid #959595;background-color:#959595"></div>


  




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 


<script>
  
  
var count1=-650;
var count2=0;
var count3=300;
function moveRight(next,items,slider,count1,count2,count3)
{
$(document).ready(function(){
  $(next).click(function(){
    if(count3==50)
    count3=300;
    count3=count3+380;
    if(count3>1060)
    count3=1060;
    $(items).animate({
     
      left: count1+'px',
      
    });
    
    $(slider).animate({
      left: count3+'px',
      
      
    });

   if(count1!=-1950 )
   {
      
    count1=count1-650;
    
    //count2=coun1+650;

      

   }
   
     
  
   
   // alert(count2);
     
      count2=count1+650;
      if(count2==-650 && count1==-1300)
      {
      count2=0;
     // alert(count2);
      }
      

      if(count1==-1950)
    {
      
       count1=-1300;
       count2=-650;
       
    }
     
    
  });
});

}


function moveLeft(prev,items,slider,count1,count2,count3)
{

$(document).ready(function(){
  $(prev).click(function(){
    
    count3=count3-510;
   if(count3<50)
    count3=50;
    $(items).animate({
      left: count2+'px',
      
      
    });

       if(count2!=0)
       {
      count2=count2+650;
       }  
       
       if(count2==0 && count1!=-650)
       {
         
         count1=count1+650;
         if(count2==0 && count1==-650)
            count1=-1300;
       }
     

       $(slider).animate({
      left: count3+'px',
      
    });
     
    
    //count2=count2-650;
    

  });
});
}

function Scroll(slider,s1)
{
var v1=document.getElementById(slider);
var v2=document.getElementById(s1);

//alert(v1);

var mousePosition;
var offset = [0,0];
var div;
var isDown = false;

//alert("s11");
v1.addEventListener('mousedown', function(e) {
  //alert("s1");
    isDown = true;
    offset = [
        v1.offsetLeft - e.clientX,
        v2.offsetLeft - e.clientX,
    
    ];
}, true);

document.addEventListener('mouseup', function() {
    isDown = false;
}, true);

document.addEventListener('mousemove', function(event) {
  //alert("SSS");
    event.preventDefault();
    if (isDown) {
        mousePosition = {
    
            x : event.clientX,

            
        };
        if(mousePosition.x + offset[0]>1060 )
        {
        v1.style.left=1060+'px';
        
        
        count3=1060;
        }
        else  if(mousePosition.x + offset[0]<30 )
        {
          //alert("s111");
        v1.style.left=50+'px';
        v2.style.left=0+'px';
        count3=50;
        }
        else
        {
         // alert(mousePosition.x);
        v1.style.left = (mousePosition.x + offset[0]) + 'px';
       
        
        v2.style.left=-(mousePosition.x -20)+'px';
         

        }
        
        if(mousePosition.x>1450)
        {
          //alert(mousePosition.x);
        v2.style.left=1080;
        }
    }
}, true);

}
    

 moveLeft('#prev1','#s1','#slider1',count1,count2,count3);
 moveRight('#next1','#s1','#slider1',count1,count2,count3);
 Scroll('slider1','s1');
  
 
 moveLeft('#prev2','#s2','#slider2',count1,count2,count3);
 moveRight('#next2','#s2','#slider2',count1,count2,count3);
 Scroll('slider2','s2');


 moveLeft('#prev3','#s3','#slider3',count1,count2,count3);
 moveRight('#next3','#s3','#slider3',count1,count2,count3);
 Scroll('slider3','s3');


 moveLeft('#prev4','#s4','#slider4',count1,count2,count3);
 moveRight('#next4','#s4','#slider4',count1,count2,count3);
 Scroll('slider4','s4');

 moveLeft('#prev5','#s5','#slider5',count1,count2,count3);
 moveRight('#next5','#s5','#slider5',count1,count2,count3);
 Scroll('slider5','s5');

 moveLeft('#prev6','#s6','#slider6',count1,count2,count3);
 moveRight('#next6','#s6','#slider6',count1,count2,count3);
 Scroll('slider6','s6');


 moveLeft('#prev7','#s7','#slider7',count1,count2,count3);
 moveRight('#next7','#s7','#slider7',count1,count2,count3);
 Scroll('slider7','s7');






function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
 //document.getElementById("close").style.left = "271px";
 // var element = document.getElementById("carouselExampleDark");
 // var element = document.body;
 //element.style.filter="brightness(0.3)";
  //element.style.background="rgba(0,0,0,0.8)";

  var elem = document.getElementById("nav24");
  
  elem.style.filter="brightness(0.3)";

  var elem1 = document.getElementsByTagName("p")[2];
 // alert(elem1);
  elem1.style.color="red";
  var len=document.getElementsByClassName("card").length;
  for(var i=0;i<len;i++)
  {
  const element = document.getElementsByClassName("card")[i];
  element.style.filter="brightness(0.3)";
  }
  var elem = document.getElementById("carouselExampleDark");
  elem.style.filter="brightness(0.3)";
  var elem = document.getElementById("navSub");
  elem.style.filter="brightness(0.3)";
  var elem = document.getElementById("footer");
  elem.style.filter="brightness(0.3)";
  var elem = document.body;
  elem.style.background="rgba(0,0,0,0.7)";
  //$('#g1').addClass('.g1');
  
  //var element = document.getElementById("mySidenav");
 // alert(element);
  //element.classList.remove("");

}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  //document.getElementById("mySidenav").style.marginLeft= "0";
  var elem = document.body;
  elem.style.background="#f0f0f0";
  //element.style.background="#f0f0f0";

  var elem = document.getElementById("nav24");
  
  elem.style.filter="brightness(1.0)";

  var elem1 = document.getElementsByTagName("p")[2];
 // alert(elem1);
  elem1.style.color="red";
  var len=document.getElementsByClassName("card").length;
  for(var i=0;i<len;i++)
  {
  const element = document.getElementsByClassName("card")[i];
  element.style.filter="brightness(1.0)";
  }
  var elem = document.getElementById("carouselExampleDark");
  elem.style.filter="brightness(1.0)";
  var elem = document.getElementById("navSub");
  elem.style.filter="brightness(1.0)";

  var elem = document.getElementById("footer");
  elem.style.filter="brightness(1.0)";




}



/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
//var dropdown = document.getElementsByClassName("dropdown-btn");
//alert(dropdown);
//var i;


  
  function dropdown(id)
  {  
    
    //alert(id);
    if (document.getElementById(id).style.display === "block") {
      document.getElementById(id).style.display = "none";
    } else {
      document.getElementById(id).style.display = "block";
    }
 
  }
  function dropdown2()
  {  
    //alert("ok");
    
    if (document.getElementById("d2").style.display === "block") {
      document.getElementById("d2").style.display = "none";
    } else {
      document.getElementById("d2").style.display = "block";
    }
  }

</script>
@endsection