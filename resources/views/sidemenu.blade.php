@extends('master')
@section('content')
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script> 




var count1=-650;
var count2=0;
var count3=300;
$(document).ready(function(){
  $("#next").click(function(){
    if(count3==50)
    count3=300;
    count3=count3+380;
    if(count3>1060)
    count3=1060;
    $("#s1").animate({
     
      left: count1+'px',
      
    });
    
    $("#slider1").animate({
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


$(document).ready(function(){
  $("#prev").click(function(){
    
    count3=count3-510;
   if(count3<50)
    count3=50;
    $("#s1").animate({
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
     

       $("#slider1").animate({
      left: count3+'px',
      
    });
     
    
    //count2=count2-650;
    

  });
});



    


</script> 
<style>
  .m7
  {

    width:27px;
    height:27px;
    
  }
.m7:hover
{
  filter: brightness(120%);

}



</style>


</head>
<body>

<div style="height:320px;margin-top:100px;margin-left:100px;overflow:hidden;position:absolute;left:-80px;width:1470px;" id="carouselExampleControls"  >
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
<button class="m7" style=";border-bottom-right-radius:7px;border-top-right-radius:7px;border:0px solid #c7c7c7;box-shadow: 2px 2px 2px 2px #c7c7c7;border-left-style:none;;position:absolute;margin-top:200px;font-size:35px;margin-left:20px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="prev">
   <img class="m7" src="images/left1.png" />
  </button>
  <button class="m7" style="border-bottom-left-radius:7px;border-top-left-radius:7px;border-right-style:none;border:0px solid #c7c7c7;margin-top:200px;box-shadow: 0px 2px 2px 2px #c7c7c7;position:absolute;font-size:35px;margin-left:1440px;padding-top:0px;width:50px;height:100px;background-color:rgba(255, 255, 255, 0.5);" type="button" id="next">
  <img class="m7" src="images/right1.png"/>
  </button>

  <div id="slider1" style="position:absolute;left:50px;top:400px;width:400px;height:8px;border-radius:7px;border:1px solid #959595;background-color:#959595"></div>
</body>
<script>
var v1=document.getElementById("slider1");
var v2=document.getElementById("s1");
alert(v1);

var mousePosition;
var offset = [0,0];
var div;
var isDown = false;


v1.addEventListener('mousedown', function(e) {
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
          //alert(mousePosition.x);
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





</script>
</html>
