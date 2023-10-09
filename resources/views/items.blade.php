@extends('master')
@section('content')
<script>

  document.body.style.backgroundColor = "white";
</script>

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

<p style="font-size:17px;margin-left:20px;margin-top:20px;">1-24 of over 30,000 results</p>
<hr id="grade1" style="margin-top:20px;"></hr>
<p style="font-weight:bold;font-size:21px;margin-top:40px;margin-left:280px;color:black;margin-bottom:-20px;" class="head-pos">Results</p>
<div style="margin-top:0px;background-color:white;position:absolute;width:270px;height:1000px;" ></div>  

   <?php  $count=0; ?>
    @foreach($products as $item)
    
    <div  style=";border-style:none;margin-top:25px;border-radius:0px;position:relative;margin-left:235px;margin-right:-158px; width:230px;height:675px;" class="trending-item">
    <a style="text-decoration: none;" href="detail/{{$item['id']}}">
    <div  class="card" style="width: 18.7rem;padding-top:20px;">
    <div style="margin-top:-20px;width:297px;height:280px;background-color:#F8F8F8">
    @if($item['productTag']=='Best Seller')
    <div style="overflow:hidden;">
    <div style="-webkit-transform: skew(-20deg);position:relative;overflow:hidden;margin: 0 0 0 -10px;padding-left:20px;padding-top:8px;font-size:13px;color:white;background-color:#FA8128;width:100px;height:35px;"><p style="-webkit-transform: skew(20deg);">Best Seller<p></div>
    </div>
    @elseif($item['productTag']=='ShopOnline Choice')
    <div style="overflow:hidden;">
    <div style="-webkit-transform: skew(-20deg);position:relative;overflow:hidden;margin: 0 0 0 -10px;padding-left:20px;padding-top:8px;font-size:13px;color:white;background-color:black;width:150px;height:35px;"><p style="-webkit-transform: skew(20deg);">shopOnline's <span style="color:#FA8128;">Choice</span></p></div>
    </div>
    @endif



   


  <img style="margin-top:50px;margin-left:50px;width:205px;height:160px;" src="{{$item['gallary']}}" class="card-img-top" alt="...">
</div>
  <div  class="card-body" style="width:295px;height:410px;">
  <p style="margin-bottom:5px;color:#de931e;text-decoration: none;font-size:21px;" >{{$item['name']}}</p>
    
    <p style="margin-bottom:5px;color:#36454F;text-decoration: none;font-size:21px;" >{{$item['description']}}</p>
    
    @if($item['rating']=='4.1' || $item['rating']=='4.2' || $item['rating']=='4.3' || $item['rating']=='4.4' || $item['rating']=='4.5' || $item['rating']=='4.6' || $item['rating']=='4.7' || $item['rating']=='4.8' || $item['rating']=='4.9')
<p style="position:absolute;">{{$item['rating']}}</p>
<img src="images/star5.png"  style="margin-left:30px;width:18px;height:18px;">
<img src="images/star5.png"  style="width:18px;height:18px;"/>
<img src="images/star5.png"  style="width:18px;height:18px;"/>
<img src="images/star5.png"  style="width:18px;height:18px;"/>
<img src="images/half-star6.png"  style="width:18px;height:18px;"/>

@elseif($item['rating']=='5.0')
<p style="position:absolute;">{{$item['rating']}}</p>
<img src="images/star5.png"  style="margin-left:30px;width:18px;height:18px;">
<img src="images/star5.png"  style="width:18px;height:18px;"/>
<img src="images/star5.png"  style="width:18px;height:18px;"/>
<img src="images/star5.png"  style="width:18px;height:18px;"/>
<img src="images/star5.png"  style="width:18px;height:18px;"/>
@elseif($item['rating']=='4.0')
<p style="position:absolute;">{{$item['rating']}}</p>
<img src="images/star5.png"  style="margin-left:30px;width:18px;height:18px;">
<img src="images/star5.png"  style="width:18px;height:18px;"/>
<img src="images/star5.png"  style="width:18px;height:18px;"/>
<img src="images/star5.png"  style="width:18px;height:18px;"/>
<img src="images/empty-star5.png"  style="width:18px;height:18px;"/>


@endif

    
    <p style="margin-top:10px;font-size:25px;color:black;"class="card-title"><sup style="font-size:15px;font-weight:normal;margin-top:-20px;color:#55555;">Rs</sup> {{$item['price']}}<sup style="font-size:15px;font-weight:normal;color:#55555;">99</sup></p>
     
     <p style="padding-top:3px;padding-left:10px;color:black;background-color:#03C04A;width:110px;height:27px;">Save $50.00</p>
     <p style="color:black;font-size:13px;position:relative; margin-top:-40px;margin-left:113px;">with coupon</p>
     <p style="color:black;font-size:17px;position:relative; margin-top:20px;margin-left:1px;">Delivery <span style="font-weight:bold;">{{$item['deliveryDate']}}</span></p>
     <p style="color:black;font-size:13px;position:relative; margin-top:-10px;margin-left:1px;">{{$item['deliveryAddress']}}</p>
      
    
    
    
      
    

      </div>
      </a>
      </div>



</div> 

@endforeach

@endsection