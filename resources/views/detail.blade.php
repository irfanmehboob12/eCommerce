@extends('master')
@section('content')

<script>

  document.body.style.backgroundColor = "white";
</script>

<?php
$products = array("a"=>1, "b"=>2, "c"=>3,"d"=>4, "e"=>5, "f"=>6,"g"=>7, "h"=>8, "i"=>9,"g"=>10);

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





<h3 style="margin-top:80px;margin-left:570px;color:black;width:600px;" class="head-pos">{{$product["name"]}}</h3>

<a href="" style="color:#4682B4;margin-left:570px;text-decoration: none;">Visit the iOttie Store</a>
   
     
    
        <div  style="top:120px;position:absolute;width:550px;height:1000px;background-color:#e0e0e0;" >
         <p style=""></p>
</div>

<div  style="right:20px;top:120px;position:absolute;width:240px;height:1000px;background-color:grey;" >
         <p style=""></p>
</div>


 
@if($product['rating']=='4.1' || $product['rating']=='4.2' || $product['rating']=='4.3' || $product['rating']=='4.4' || $product['rating']=='4.5' || $product['rating']=='4.6' || $product['rating']=='4.7' || $product['rating']=='4.8' || $product['rating']=='4.9')
<p style="color:#4682B4;margin-top:3px;margin-left:570px;position:relative;">{{$product['rating']}}</p>
<img src="{{asset('images/star5.png')}}"  style="margin-top :-85px;0px;margin-left:600px;width:18px;height:18px;">
<img src="{{asset('images/star5.png')}}"  style="margin-top:-85px;width:18px;height:18px;"/>
<img src="{{asset('images/star5.png')}}"  style="margin-top:-85px;width:18px;height:18px;"/>
<img src="{{asset('images/star5.png')}}"  style="margin-top:-85px;width:18px;height:18px;"/>
<img src="{{asset('images/half-star6.png')}}"  style="margin-top:-85px;width:18px;height:18px;"/>

@elseif($product['rating']=='5.0')
<p style="color:#4682B4;margin-top:3px;margin-left:570px;position:relative;">{{$product['rating']}}</p>
<img src="{{asset('images/star5.png')}}"  style="margin-top :-85px;0px;margin-left:600px;width:18px;height:18px;">
<img src="{{asset('images/star5.png')}}"  style="width:18px;height:18px;"/>
<img src="{{asset('images/star5.png')}}"  style="width:18px;height:18px;"/>
<img src="{{asset('images/star5.png')}}"  style="width:18px;height:18px;"/>
<img src="{{asset('images/star5.png')}}"  style="width:18px;height:18px;"/>
@elseif($product['rating']=='4.0')
<p style="color:#4682B4;margin-top:3px;margin-left:570px;position:relative;">{{$product['rating']}}</p>
<img src="{{asset('images/star5.png')}}"  style="margin-top :-85px;0px;margin-left:600px;width:18px;height:18px;">
<img src="{{asset('images/star5.png')}}"  style="width:18px;height:18px;"/>
<img src="{{asset('images/star5.png')}}"  style="width:18px;height:18px;"/>
<img src="{{asset('images/star5.png')}}"  style="width:18px;height:18px;"/>
<img src="{{asset('images/empty-star5.png')}}"  style="width:18px;height:18px;"/>


@endif

<img src="{{asset('images/down.png')}}" style="width:15px;height:15px;margin-left:785px;margin-top:-133px;" />
<p  style="color:#4682B4;margin-left:840px;margin-top:-90px;">129, 027 ratings</p>
<p style="margin-top:-10px;margin-left:640px;">| </p><p  style="color:#4682B4;margin-left:650px;margin-top:-40px;"> 1000+ answered questions</p>
<hr style="margin-top:-15px;margin-left:640px; width:500px;"></hr>
<p style="margin-left:640px;font-size:30px;color:red;">-25%</p>
<p style="margin-left:730px;font-size:30px;margin-top:-60px;color:black;"><sup style="font-size:17px;margin-top:-10px;">RS</sup>{{$product['price']-0.25*$product['price']}}<sup style="font-size:19px;margin-top:-5px;">99</sup></p>
<p style="color:#808080;margin-top:-10px;margin-left:640px;font-size:16px;">List Price: PKR {{$product['price']}}</p>
<hr style="margin-left:710px;width:100px;margin-top:-28px;" ></hr>
<p style="color:#808080;margin-top:-5px;margin-left:640px;font-size:16px;">No import fee deposit and Rs.300 delivery to Pakistan</p>
<p style="color:#4682B4;margin-left:1040px;margin-top:-40px;">Detail</p>
<img src="{{asset('images/down.png')}}" style="width:15px;height:15px;margin-left:1083px;margin-top:-91px;" />
<div style="font-weight:bold;padding:2px 0px 0px 5px;border-radius:5px;background-color:#ff8c00;margin-left:640px;margin-top:-20px;width:96px;height:27px">Coupon:</div>
<div style=";border-radius:50px;background-color:white;margin-left:717px;margin-top:-29px;width:30px;height:30px"></div>
<input type="checkbox"  style="width:19px;height:19px;position:absolute;margin-left:740px;margin-top:-28px;">
<p  style="color:green;margin-left:770px;margin-top:-28px;">Apply 10% coupon</p>
<p  style="color:#4682B4;margin-left:920px;margin-top:-41px;">Terms</p>
<img src="{{asset('images/down.png')}}" style="width:15px;height:15px;margin-left:965px;margin-top:-85px;" />
<p  style="color:grey;margin-left:640px;margin-top:-28px;">Available at lower price form other sellers that may note offer <br>free prime shipping.</p>

<p  style="color:grey;margin-left:640px;margin-top:0px;">Color:</p><p  style="font-weight:bold;color:black;margin-left:690px;margin-top:-40px;">Icy Blue</p>

<div style="border:1px solid grey;margin-top:0px;background-color:white;margin-left:640px;width:45px;height:50px;"><div style="margin-left:7px;background-color:#e0e0e0;width:30px;height:48px;"></div></div>
<div style="border:1px solid grey;margin-top:-50px;background-color:white;margin-left:700px;width:45px;height:50px;"><div style="margin-left:7px;background-color:blue;width:30px;height:48px;"></div></div>
<div style="border:1px solid grey;margin-top:-50px;background-color:white;margin-left:760px;width:45px;height:50px;"><div style="margin-left:7px;background-color:green;width:30px;height:48px;"></div></div>

<p  style="color:grey;margin-left:640px;margin-top:20px;">Size:</p><p  style="font-weight:bold;color:black;margin-left:683px;margin-top:-40px;">512GB</p>
<div style="padding-left:20px;padding-top:10px;border:1px solid grey;margin-top:20px;background-color:white;margin-left:640px;width:90px;height:40px;">256GB</div>
<div style="padding-left:20px;padding-top:10px;border:1px solid grey;margin-top:-40px;background-color:white;margin-left:745px;width:90px;height:40px;">512GB</div>

<p  style="color:grey;margin-left:640px;margin-top:20px;">Style: </p><p  style="font-weight:bold;color:black;margin-left:688px;margin-top:-40px;"> Z Fold 5 only</p>
<div style="padding-left:20px;padding-top:9px;border:1px solid grey;margin-top:20px;background-color:white;margin-left:640px;width:195px;height:40px;">Z Fold 5 + Buds 2 Pro</div>
<div style="padding-left:20px;padding-top:9px;border:1px solid grey;margin-top:-40px;background-color:white;margin-left:850px;width:135px;height:40px;">Z Fold 5 Only</div>

<p  style="font-weight:bold;color:black;margin-left:640px;margin-top:30px;">Brand </p><p  style="color:grey;margin-left:890px;margin-top:-40px;">SAMSUNG</p>
<p  style="font-weight:bold;color:black;margin-left:640px;margin-top:-10px;">Wireless Carrier </p><p  style=";color:grey;margin-left:890px;margin-top:-40px;">Unlocked</p>
<p  style="font-weight:bold;color:black;margin-left:640px;margin-top:-10px;">Form Factor </p><p  style=";color:grey;margin-left:890px;margin-top:-40px;">Icy Blue</p>
<p  style="font-weight:bold;color:black;margin-left:640px;margin-top:-10px;">Battery Capacity </p><p  style="color:grey;margin-left:890px;margin-top:-40px;">4000 Milliamp Hours</p>
<p  style="font-weight:bold;color:black;margin-left:640px;margin-top:-10px;">Year</p><p  style=";color:grey;margin-left:890px;margin-top:-40px;">2019</p>
<p  style="font-weight:bold;color:black;margin-left:640px;margin-top:-10px;">Biometric Security<br>Feature </p><p  style=";color:grey;margin-left:890px;margin-top:-65px;">Face Recognition</p>
<p  style="font-weight:bold;color:black;margin-left:640px;margin-top:30px;">Other camera <br>features </p><p  style=";color:grey;margin-left:890px;margin-top:-65px;">Rear, Front</p>
<p  style="font-weight:bold;color:black;margin-left:640px;margin-top:30px;">Battery Description </p><p  style="color:grey;margin-left:890px;margin-top:-40px;">Lithium-Ion</p>
<p  style="font-weight:bold;color:black;margin-left:640px;margin-top:-10px;">Manufacturer </p><p  style=";color:grey;margin-left:890px;margin-top:-40px;">Samsung</p>
<hr style="margin-left:640px;margin-top:20px;width:500px;"></hr>
<p  style="font-size:18px;font-weight:bold;color:black;margin-left:640px;margin-top:10px;">About this item </p>

<?php 
$desc=$product['description'];
$count=strlen($desc);
 
while($count>0) 
{

 $len=strpos($desc,"PPP");
 $str=substr($desc,0,$len);
 $desc=substr($desc,$len+3);
 echo '<p  style="width:600px;font-size:16px;color:black;margin-left:640px;margin-top:10px;">'.$str.'</p>';
 $count=strlen($desc);
}

?>




@endsection