@extends('master')
@section('content')
<style>
* {box-sizing: border-box;}

.img-zoom-container {
  position: relative;
}

.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the lens:*/
  width: 80px;
  height: 80px;
}

.img-zoom-result {
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/
  width: 300px;
  height: 300px;
}


</style>

<script>


function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");

  
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the`` lens:*/
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  
      

  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x+50;
    y = pos.y+100;
    x1 = pos.x;
    y1 = pos.y;
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width-10 || x < 70  || y > img.height+70 ||  y < 110 ) 
    {
      
      document.getElementById("myresult").style.display="none";
    }
    
    if (x > img.width-11) {x = img.width-11;
    }
    
     if(x < 70) {x = 70;}
    
    if (y > img.height+50) {y = img.height+50;
    }
    if (y <130) {y = 130;}
    
    
    
    /*set the position of the lens:*/
    
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx-539) + "px -" + ((y * cy)-1150) + "px";
  }

  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
  //document.body.innerHTML="";


}
  document.body.style.backgroundColor = "white";
  //document.getElementById("menu1").onclick = function() {myFunction4()};

  function showImage(demo,image1) {

   document.getElementById("myimage").src=image1;
   

  }


  function termDetails() {
    document.getElementById("terms").style.display="inline-block";
    document.getElementById("cross12").style.display="inline-block";
    document.getElementById("triangle").style.display="inline-block";
  
  }
 
  function closeDetails() {
    document.getElementById("terms").style.display="none";
    document.getElementById("cross12").style.display="none";
    document.getElementById("triangle").style.display="none";
  }
 






function moreDetails1() {
    
    document.getElementById("demo16").style.display="none";
    var collection=document.getElementsByClassName("demo15");
    for(let i=0;i<collection.length;i++)
    {
      collection[i].style.display="inline-block";
 
    }
    
 
   document.getElementById("demo17").style.display="inline-block";
    document.getElementById("down-arrow1").style.display="none";
   document.getElementById("up-arrow1").style.display="inline-block";
    
   }
   
  function moreDetails() {
    
   document.getElementById("demo10").style.display="none";
   var collection=document.getElementsByClassName("demo11");
   for(let i=0;i<collection.length;i++)
   {
     collection[i].style.display="inline-block";

   }
   

   document.getElementById("demo12").style.display="inline-block";
   document.getElementById("down-arrow").style.display="none";
   document.getElementById("up-arrow").style.display="inline-block";
   
  }


  function lessDetails1() {
    
    document.getElementById("demo16").style.display="inline-block";
    var collection=document.getElementsByClassName("demo15");
    for(let i=0;i<collection.length;i++)
    {
      collection[i].style.display="none";
 
    }
    
    document.getElementById("down-arrow1").style.display="inline-block";
    document.getElementById("up-arrow1").style.display="none";
   
    document.getElementById("demo17").style.display="none";
    
   }
  
  function lessDetails() {
    
    document.getElementById("demo10").style.display="inline-block";
    var collection=document.getElementsByClassName("demo11");
    for(let i=0;i<collection.length;i++)
    {
      collection[i].style.display="none";
 
    }
    
    document.getElementById("down-arrow").style.display="inline-block";
    document.getElementById("up-arrow").style.display="none";
   
    document.getElementById("demo12").style.display="none";
    
   }


  function myFunction7(demo) {
    //alert(demo.id);
   var val= document.getElementById(demo.id).value;
   document.getElementById("demo9").innerHTML = "Qty: "+val;
   //alert(val);


  }
  
  function myFunction5() {
    
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {
    var dropdowns = document.getElementsByClassName("dropdown-content1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
 





function myFunction(demo,count,color) {

  
  /*document.getElementById("demo1").style.border = "1px solid #e0e0e0";
  document.getElementById("demo1").style.boxShadow = "none";*/  
 // alert(color);
  for(let i=1;i<count;i++)
   {
    
  document.getElementById("demo"+i).style.border = "1px solid #e0e0e0";
  document.getElementById("demo"+i).style.boxShadow = "none";  
  
   }
   
  document.getElementById("para1").innerHTML = color;
  document.getElementById(demo.id).style.border = "1px solid red";
  document.getElementById(demo.id).style.boxShadow = "0px 0px 6px -2px red";
   

}
 
function myFunction1(demo,count,size) {
  
  
  
  for(let i=1;i<count;i++)
   {
    
  
  document.getElementById("a"+i).style.border = "1px solid #e0e0e0";
  document.getElementById("a"+i).style.boxShadow = "none";  

   }
  document.getElementById("para2").innerHTML = size;
  document.getElementById(demo.id).style.border = "1px solid red";
  document.getElementById(demo.id).style.boxShadow = "0px 0px 6px -2px red";
  }

  function myFunction2(demo,count,style) 
  {
  
  
  //alert(count);
  for(let i=1;i<count;i++)
   {
    

  document.getElementById("b"+i).style.border = "1px solid #e0e0e0";
  document.getElementById("b"+i).style.boxShadow = "none";  

   }
  document.getElementById("para3").innerHTML = style;
  document.getElementById(demo.id).style.border = "1px solid red";
  document.getElementById(demo.id).style.boxShadow = "0px 0px 6px -2px red";
   

}


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
   
     
    
        <div  style="top:120px;position:absolute;width:550px;height:1000px;background-color:white;" >
        
        <div class="img-zoom-container">
        <img src="{{$product['image1']}}" onmouseover="bigImg(myresult)" onmouseout="normalImg(myresult)" id="myimage"   style="margin-top:130px;margin-left:70px;width:480px;height:450px;" />
        <div id="myresult"  style="display:none;position:absoloute;border-radius:5px;border:none;position:relative;z-index:25;width:620px;height:720px;margin-left:560px;top:-520px;" class="img-zoom-result"></div>

        <a onclick="showImage(image1,'{{$product['image1']}}')"><div style="position:absolute;border-radius:7px;border: 1px solid grey;background-color:white;top:90px;margin-left:15px;width:50px;height:70px;" ><img src="{{$product['image2']}}"  id="image1" class="dropbtn1" style="padding-top:3px;margin-top:0px;margin-left:0px;width:45px;height:60px;"></div></a>
        <a onclick="showImage(image2,'{{$product['image2']}}')" ><div style="position:absolute;border-radius:7px;border: 1px solid grey;background-color:white;top:170px;margin-left:15px;width:50px;height:70px;" ><img src="{{$product['image2']}}"  id="image2" class="dropbtn1" style="padding-top:3px;margin-top:0px;margin-left:0px;width:45px;height:60px;"></div></a>
        <a onclick="showImage(image3,'{{$product['image3']}}')" ><div style="position:absolute;border-radius:7px;border: 1px solid grey;background-color:white;top:250px;margin-left:15px;width:50px;height:70px;" ><img src="{{$product['image3']}}"  id="image3" class="dropbtn1" style="padding-top:3px;margin-top:0px;margin-left:0px;width:45px;height:60px;"></div></a>
        <a onclick="showImage(image4,'{{$product['image4']}}')" ><div style="position:absolute;border-radius:7px;border: 1px solid grey;background-color:white;top:330px;margin-left:15px;width:50px;height:70px;" ><img src="{{$product['image4']}}"  id="image4" class="dropbtn1" style="padding-top:3px;margin-top:0px;margin-left:0px;width:45px;height:60px;"></div></a>
        <a onclick="showImage(image5,'{{$product['image5']}}')" ><div style="position:absolute;border-radius:7px;border: 1px solid grey;background-color:white;top:410px;margin-left:15px;width:50px;height:70px;" ><img src="{{$product['image5']}}"  id="image5" class="dropbtn1" style="padding-top:3px;margin-top:0px;margin-left:0px;width:45px;height:60px;"></div></a>
        <a onclick="showImage(image6,'{{$product['image6']}}')" ><div style="position:absolute;border-radius:7px;border: 1px solid grey;background-color:white;top:490px;margin-left:15px;width:50px;height:70px;" ><img src="{{$product['image6']}}"  id="image6"  class="dropbtn1" style="padding-top:3px;margin-top:0px;margin-left:0px;width:45px;height:60px;"></div></a>
        

       <p style="margin-left:200px;margin-top:50px;">Mouse over the image:</p>

       
  
  
</div>
      
      
      </div>
       
        
<div  style="border:1px solid #e0e0e0;border-radius:5px;right:20px;top:195px;position:absolute;width:290px;height:700px;background-color:white;" >
<p style="margin-left:20px;font-size:30px;margin-top:20px;color:black;"><sup style="font-size:13px;top:-12x;">RS</sup>{{$product['price']-0.25*$product['price']}}<sup style="font-size:13px;top:-12px;">99</sup></p>
<p style="margin-left:20px;font-size:15px;margin-top:20px;color:black;width:250px;">Rs. 500 delivery and shipping  charges in all over Pakistan</p>


<section  class="body-content">
            <div  hidden >
                <div data-name="popover-content">
                    <p>
Price		                       <p style="margin-left:170px;margin-top:-35px;">Rs. {{$product['price']}}</p>

Estimated Delivery Fees 		 <p style="margin-left:170px;margin-top:-20px;">Rs. 500 </p>
<hr style="width:240px;">
Total		                         <p style="margin-left:170px;margin-top:-20px;">Rs. {{500+$product['price']}}</p>
</p>
                </div>
            </div>

<div style="color:#4682B4;margin-left:210px;font-size:15px;margin-top:-38px;">
  <a id="example" class="detail-more1" style="cursor:pointer;width:400px;height:200px;" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="">Detail</a>
  
</div>
</section>

<img src="{{asset('images/down1.png')}}" style="width:15px;height:15px;margin-left:250px;margin-top:-55px;" />

<p style="color:black;margin-left:20px;font-size:15px;margin-top:-23px;">Delivery</p>

<p style="color:black;margin-left:100px;font-size:15px;margin-top:-40px;font-weight:bold;">{{$product['deliveryDate']}}</p>
<p style="color:green;margin-left:20px;font-size:15px;margin-top:-14px;">Order within 1 hr 12 mins.</p>
<p style="color:#4682B4;margin-left:50px;font-size:14px;margin-top:0px;">Deliver to Pakistan.</p>
<img src="{{asset('images/location.png')}}" style="margin-left:20px;margin-top:-85px;width:18px;height:18px;">

@if($product["count"]>19)
<p style="color:green;margin-left:20px;font-size:21px;margin-top:-10px;">In Stock</p>
@elseif ($product["count"]>0)
 <p style="color:green;margin-left:20px;font-size:21px;margin-top:-10px;">Only <?php echo $product["count"]; ?> left in Stock</p>
@else
<p style="color:red;margin-left:20px;font-size:21px;margin-top:-10px;">Out of Stock</p>
@endif


<button onclick="myFunction5()" class="dropbtn1" style="margin-bottom:30px;border-style:none;padding-right:20px;padding-top:2px;background-color:#e7e7e7;margin-left:15px;border-radius:10px;width:80px;height:25px;"><p id="demo9"  class="dropbtn1">Qty: 1</p>
<img src="{{asset('images/down1.png')}}"  class="dropbtn1" style="margin-top:-85px;margin-left:50px;width:18px;height:18px;"></button>
<div id="myDropdown" class="dropdown-content1" style=";position:absolute;border-radius:5px;border:1px solid #e0e0e0;margin-top:-29px;margin-left:16px;background-color:white;width:80px;height:190px;" >
<ul id="demo7" style="list-style:none;">
<li id="t1"  value="1"><button class="list1" onclick="myFunction7(t1)" >1</button></li>
<li id="t2"  value="2"><button class="list1" onclick="myFunction7(t2)" >2</button></li>
<li id="t3"  value="3"><button class="list1" onclick="myFunction7(t3)" >3</button></li>
<li id="t4"  value="4"><button class="list1" onclick="myFunction7(t4)" >4</button></li>
<li id="t5"  value="5"><button class="list1" onclick="myFunction7(t5)" >5</button></li>
</ul>

</div>

<button style=";font-size:13px;border-style:none;border-radius:20px;margin-left:20px;background-color:#ffdc02;width:250px;height:35px;padding-left:10px;padding-top:5px;">Add to Cart</button>
<button style="font-size:13px;border-style:none;margin-top:10px;border-radius:20px;margin-left:20px;background-color:#f4ae00;width:250px;height:35px;padding-left:10px;padding-top:5px;">Buy Now</button>
<p style="color:grey;margin-left:20px;font-size:13px;margin-top:20px;">Payment</p>
<p style="color:grey;margin-left:120px;font-size:13px;margin-top:-40px;">Secure Transaction</p>
<p style="color:grey;margin-left:20px;font-size:13px;margin-top:-10px;">Ships From</p>
<p style="color:grey;margin-left:120px;font-size:13px;margin-top:-40px;">Amazon.com</p>
<p style="color:grey;margin-left:20px;font-size:13px;margin-top:-10px;">Sold By</p>
<p style="color:grey;margin-left:120px;font-size:13px;margin-top:-40px;">Amazon.com</p>
<p style="color:grey;margin-left:20px;font-size:13px;margin-top:-10px;">Returns</p>
<p style="width:150px;color:grey;margin-left:120px;font-size:13px;margin-top:-40px;">Eligible for Return, Refund or Replacement within 30 Days of receipt</p>
<p style="color:grey;margin-left:20px;font-size:13px;margin-top:-10px;">Support</p>
<p style="color:grey;margin-left:120px;font-size:13px;margin-top:-40px;">Product Support Included</p>
<input type="checkbox" style="margin-top:20px;width:15px;height:15px;margin-left:20px;">
<p style="width:200px;color:black;margin-left:45px;font-size:17px;margin-top:-25px;">Add a Gift reciept for easy return</p>

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
<img src="{{asset('images/star5.png')}}"  style="margin-top:-85px;width:18px;height:18px;"/>
<img src="{{asset('images/star5.png')}}"  style="margin-top:-85px;width:18px;height:18px;"/>
<img src="{{asset('images/star5.png')}}"  style="margin-top:-85px;width:18px;height:18px;"/>
<img src="{{asset('images/star5.png')}}"  style="margin-top:-85px;width:18px;height:18px;"/>
@elseif($product['rating']=='4.0')
<p style="color:#4682B4;margin-top:3px;margin-left:570px;position:relative;">{{$product['rating']}}</p>
<img src="{{asset('images/star5.png')}}"  style="margin-top :-85px;0px;margin-left:600px;width:18px;height:18px;">
<img src="{{asset('images/star5.png')}}"  style="margin-top:-85px;width:18px;height:18px;"/>
<img src="{{asset('images/star5.png')}}"  style="margin-top:-85px;width:18px;height:18px;"/>
<img src="{{asset('images/star5.png')}}"  style="margin-top:-85px;width:18px;height:18px;"/>
<img src="{{asset('images/empty-star5.png')}}"  style="margin-top:-85px;width:18px;height:18px;"/>


@endif

<img src="{{asset('images/down1.png')}}" style="Z-index:10;width:15px;height:15px;margin-left:775px;margin-top:-137px;" />
<p  style="color:#4682B4;margin-left:800px;margin-top:-90px;">129, 027 ratings</p>
<p style="margin-top:-10px;margin-left:570px;">| </p><p  style="color:#4682B4;margin-left:585px;margin-top:-40px;"> 1000+ answered questions</p>
<hr style="margin-top:-15px;margin-left:570px; width:500px;"></hr>
<p style="margin-left:570px;font-size:30px;color:red;">-25%</p>
<p style="margin-left:660px;font-size:30px;margin-top:-60px;color:black;"><sup style="font-size:13px;top:-12px;">RS</sup>{{$product['price']-0.25*$product['price']}}<sup style="font-size:13px;top:-12px;">99</sup></p>
<p style="color:#808080;margin-top:-10px;margin-left:570px;font-size:16px;">List Price: PKR {{$product['price']}}</p>
<hr style="margin-left:640px;width:100px;margin-top:-28px;" ></hr>
<p style="color:#808080;margin-top:-5px;margin-left:570px;font-size:16px;">No import fee deposit and Rs.500 delivery to Pakistan</p>

<section  class="body-content">
            <div  hidden >
                <div data-name="popover-content">
                    <p>
Price		                       <p style="margin-left:170px;margin-top:-35px;">Rs. {{$product['price']}}</p>

Estimated Delivery Fees 		 <p style="margin-left:170px;margin-top:-20px;">Rs. 500 </p>
<hr style="width:240px;">
Total		                         <p style="margin-left:170px;margin-top:-20px;">Rs. {{500+$product['price']}}</p>
</p>
                </div>
            </div>

<div style="color:#4682B4;margin-left:970px;margin-top:-40px;">
  <a id="example1" class="detail-more1" style="cursor:pointer;width:400px;height:200px;" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="">Detail</a>
  
</div>
</section>
<img src="{{asset('images/down1.png')}}" style="width:15px;height:15px;margin-left:1013px;margin-top:-55px;" />


<div style="font-weight:bold;padding:2px 0px 0px 5px;border-radius:5px;background-color:#ff8c00;margin-left:570px;margin-top:-20px;width:96px;height:27px">Coupon:</div>
<div style=";border-radius:50px;background-color:white;margin-left:648px;margin-top:-29px;width:30px;height:30px"></div>
<input type="checkbox"  style="width:19px;height:19px;position:absolute;margin-left:670px;margin-top:-28px;">
<p  style="color:green;margin-left:700px;margin-top:-28px;">Apply 10% coupon</p>
<a id="term-detail" onclick="termDetails()" class="detail-more1"  ><p  style="margin-left:860px;margin-top:-41px;">Terms</p></a>
<img src="{{asset('images/down1.png')}}" style="width:15px;height:15px;margin-left:905px;margin-top:-85px;" />

<p id="terms" style="display:none;padding-left:10px;padding-top:10px;position:absolute;margin-top:-10px;margin-left:-250px;border-radius:5px;border:1px solid #e0e0e0;width:450px;height:70px;background-color:yellow;">It is a concession coupon given by iotte store.You can get 10% concesion using this coupon.</p>

<div class="triangle-up" id="triangle"  style=""></div>
<p  style="Z-index:-1;position:relative;color:grey;margin-left:570px;margin-top:-28px;">Available at lower price form other sellers that may note offer <br>free prime shipping.</p>
<a onclick="closeDetails()"><img id="cross12" src="{{asset('images/close23.png')}}" style="display:none;cursor:pointer;z-index:5;position:relative;width:10px;height:10px;margin-left:1100px;margin-top:-137px;" /></a>


<?php 


    $i=1;
    $left=20;
    $top=0;
    $count=1;
    while($product["color".$count]!="")
    {
       $count++;
       

    }
    $color=$product["color3"];
    $i=2;
    while($product["color".$i]!="")
    {  

      
      //$color1=$product["color".$i];
      
      
      if($i==2)
      {
      echo '<p  style="color:grey;margin-left:570px;margin-top:0px;">Color:</p><p id="para1" style="font-weight:bold;color:black;margin-left:620px;margin-top:-40px;">'.$product["color1"].'</p>';
      echo '<a  onclick="myFunction(demo1,'.$count.',\''.$product["color1"].'\')"><img id="demo1"  src="'.$product["cimage1"].'" style="cursor:pointer;box-shadow : 0px 0px 6px -2px red;border:1px solid red;margin-top:0px;background-color:white;margin-left:570px;width:43px;height:43px;"/></a>';
     
      }
      echo '<a onclick="myFunction(demo'.$i.','.$count.',\''.$product["color".$i].'\')"><img id="demo'.$i.'" src="'.$product["cimage$i"].'" style="cursor:pointer;;border:1px solid #e0e0e0;margin-top:0px;background-color:white;margin-left:'.$left.'px;width:43px;height:43px;"/></a>';
     
      $i++;
    
    }

    $count=1;
    while($product["size".$count]!="")
    {
       $count++;
       

    }

    $i=2;
    while($product["size".$i]!="")
{  
  if($i==2)
  {
    echo '<p  style="color:grey;margin-left:570px;margin-top:20px;">Size:</p><p id="para2" style="font-weight:bold;color:black;margin-left:610px;margin-top:-40px;">'.$product["size1"].'</p>';
    echo '<a onclick="myFunction1(a1,'.$count.',\''.$product["size1"].'\')"><div id="a1"  style="cursor:pointer;box-shadow : 0px 0px 6px -2px red;padding-left:20px;padding-top:10px;border:1px solid red;margin-top:20px;background-color:white;margin-left:570px;width:90px;height:40px;">'.$product["size1"].'</div></a>';


  }


     echo '<a onclick="myFunction1(a'.$i.','.$count.',\''.$product["size".$i].'\')"> <div id="a'.$i.'" style="cursor:pointer;padding-left:20px;padding-top:10px;border:1px solid #e0e0e0;margin-top:-40px;background-color:white;margin-left:675px;width:90px;height:40px;">'.$product["size".$i].'</div></a>';
   $i++;
}
$count=1;
while($product["style".$count]!="")
{
   $count++;
   

}


$i=2;
    while($product["style".$i]!="")
{  
  if($i==2)
  { 
echo '<p  style="color:grey;margin-left:570px;margin-top:20px;">Style: </p><p id="para3" style="font-weight:bold;color:black;margin-left:618px;margin-top:-40px;">'. $product["style1"].'</p>';
echo'<a onclick="myFunction2(b1,'.$count.',\''.$product["style1"].'\')"><div id="b1" style="cursor:pointer;box-shadow : 0px 0px 6px -2px red;padding-left:20px;padding-top:9px;border:1px solid red;margin-top:20px;background-color:white;margin-left:822px;width:155px;height:40px;">'. $product["style1"].'</div></a>';


}
echo '<a onclick="myFunction2(b'.$i.','.$count.',\''.$product["style".$i].'\')"><div id="b'.$i.'" style="cursor:pointer;padding-left:20px;padding-top:9px;border:1px solid #e0e0e0;margin-top:-40px;background-color:white;margin-left:570px;width:235px;height:40px;">'. $product["style".$i].'</div></a>';
  

$i++;

}    

echo '<p  style="width:100px;font-weight:bold;color:black;margin-left:570px;margin-top:30px;">'. $product["feature1"].'</p><p  style="color:grey;margin-left:730px;margin-top:-40px;">'. $product["detail1"].'</p>
<p  style="width:100px;font-weight:bold;color:black;margin-left:570px;margin-top:-10px;">'. $product["feature2"].'</p><p  style=";color:grey;margin-left:730px;margin-top:-40px;">'. $product["detail2"].'</p>
<p  style="width:100px;font-weight:bold;color:black;margin-left:570px;margin-top:0px;">'. $product["feature3"].'</p><p  style=";color:grey;margin-left:730px;margin-top:-60px;">'. $product["detail3"].'</p>
<p  style="width:100px;font-weight:bold;color:black;margin-left:570px;margin-top:30px;">'. $product["feature4"].'</p><p  style="color:grey;margin-left:730px;margin-top:-60px;">'. $product["detail4"].'</p>
<p  style="width:100px;font-weight:bold;color:black;margin-left:570px;margin-top:30px;">'. $product["feature5"].'</p><p  style=";color:grey;margin-left:730px;margin-top:-60px;">'. $product["detail5"].'</p>';

echo'
<p  class="demo15"  style="width:100px;font-weight:bold;color:black;margin-left:570px;margin-top:20px;margin-right:100px;">'. $product["feature6"].'</p><p     class="demo15"  style="position:absolute;color:grey;margin-left:-40px;margin-top:25px;">'. $product["detail6"].'</p>
<p  class="demo15"  style="width:100px;font-weight:bold;color:black;margin-left:570px;margin-top:20px;margin-right:100px;">'. $product["feature7"].'</p><p     class="demo15"  style="position:absolute;color:grey;margin-left:-40px;margin-top:25px;">'. $product["detail7"].'</p>
<p  class="demo15"  style="width:100px;font-weight:bold;color:black;margin-left:570px;margin-top:20px;margin-right:100px;">'. $product["feature8"].'</p><p     class="demo15"  style="position:absolute;color:grey;margin-left:-40px;margin-top:25px;">'. $product["detail8"].'</p>
<p  class="demo15"  style="width:100px;font-weight:bold;color:black;margin-left:570px;margin-top:20px;margin-right:100px;">'. $product["feature9"].'</p><p     class="demo15"  style="position:absolute;color:grey;margin-left:-40px;margin-top:25px;">'. $product["detail9"].'</p>';

?>
<img id="down-arrow1" src="{{asset('images/down1.png')}}" style="position:absolute;width:23px;height:23px;margin-left:567px;margin-top:19px;" />
<?php
echo '<a id="demo16" onclick="moreDetails1()" class="detail-more" style="position:absolute;margin-top:20px;margin-left:590px;">Show more</a>';
echo '<a id="demo17" onclick="lessDetails1()" class="detail-more" style="position:absolute;margin-bottom:-20px;margin-top:142px;margin-left:-180px;">Show less</a>';
?>
<img id="up-arrow1" src="{{asset('images/up1.png')}}" style="margin-bottom:-95px;display:none;width:13px;height:13px;margin-left:-200px;margin-top:50px;" />





<hr style="margin-left:570px;margin-top:62px;width:570px;"></hr>
<p  style="font-size:18px;font-weight:bold;color:black;margin-left:570px;margin-top:10px;">About this item </p>

<?php 
$desc=$product['description'];
$count=strlen($desc);
 
while($count>1500) 
{

 $len=strpos($desc,"PPP");
 $str=substr($desc,0,$len);
 $desc=substr($desc,$len+3);
 echo '<p  style="width:600px;font-size:16px;color:black;margin-left:570px;margin-top:10px;">'.$str.'</p>';
 $count=strlen($desc);
 }
echo '<a id="demo10" onclick="moreDetails()" class="detail-more" style="margin-left:590px;">Show more</a>';

?>
<img id="down-arrow" src="{{asset('images/down1.png')}}" style="width:23px;height:23px;margin-left:-105px;margin-top:-3px;" />

<?php
while($count>0) 
{

 $len=strpos($desc,"PPP");
 $str=substr($desc,0,$len);
 $desc=substr($desc,$len+3);
 echo '<p  class="demo11" style="display:none;width:600px;font-size:16px;color:black;margin-left:570px;margin-top:10px;">'.$str.'</p>';
 
 $count=strlen($desc);
 }
 echo '<a id="demo12" onclick="lessDetails()" class="detail-more" style="display:none;margin-left:590px;">Show less</a>';
?>
<img id="up-arrow" src="{{asset('images/up1.png')}}" style="display:none;width:13px;height:13px;margin-left:-92px;margin-top:-3px;" />


 
<button class="m7" style=";border-bottom-right-radius:7px;border-top-right-radius:7px;border:0px solid #c7c7c7;box-shadow: 2px 2px 2px 2px #c7c7c7;border-left-style:none;;position:absolute;margin-top:130px;font-size:35px;margin-left:20px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="prev1">
   <img class="m7" src="images/left.png" />
  </button>
  <button class="m7" style="border-bottom-left-radius:7px;border-top-left-radius:7px;border-right-style:none;border:0px solid #c7c7c7;margin-top:130px;box-shadow: 0px 2px 2px 2px #c7c7c7;position:absolute;font-size:35px;margin-left:1440px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="next1">
  <img class="m7" src="images/right.png"/>
  </button>

  <div id="slider1" style="position:absolute;left:50px;top:1915px;width:400px;height:8px;border-radius:7px;border:1px solid #959595;background-color:#959595"></div>






<div style="height:320px;margin-top:30px;margin-left:100px;overflow:hidden;position:absolute;left:-80px;width:1470px;" id="carouselExampleControls"  >
<h4 style="z-index:24;font-weight:bold;margin-left:50px;position:absolute;top:15px;">New international customers purchased</h4>
 
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



<script>



var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})




$(document).ready(function() {
                    
                    var options = {
                        html: true,
                        title: "Price & Delivery Fee Details",
                        style: "width:400px;",
                        //html element
                        //content: $("#popover-content")
                        content: $('[data-name="popover-content"]')
                        //Doing below won't work. Shows title only
                        //content: $("#popover-content").html()
            
                    }
                    var exampleEl = document.getElementById('example')
                    var popover = new bootstrap.Popover(exampleEl, options)
                   
                })


                $(document).ready(function() {
                    
                    var options = {
                        html: true,
                        title: "Price & Delivery Fee Details",
                        style: "width:400px;",
                        //html element
                        //content: $("#popover-content")
                        content: $('[data-name="popover-content"]')
                        //Doing below won't work. Shows title only
                        //content: $("#popover-content").html()
            
                    }
                    var exampleEl = document.getElementById('example1')
                    var popover = new bootstrap.Popover(exampleEl, options)
                    
                })               




</script>
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
  



  
   $("#myimage").hover(function(){
    document.getElementById("myresult").style.display="inline-block";
      imageZoom("myimage", "myresult");

     
   
  }, function(){

   
    
});


</script>

@endsection