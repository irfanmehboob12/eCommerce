@extends('master')
@section('content')


<br>
<p   style="position:absolute;font:13px italic;margin-top:5px; margin-left:610px;"> Signup to<p>
<p   style="color:blue;position:absolute;font:30px italic bold ;margin-top:-25px; margin-left:670px;"> ShopOnline.com<p>


<div class="col-sm-3 position-absolute top-50 start-50 translate-middle">
<form action="/signup" method="POST">
    @csrf

  <div class="mb-3">
    <label for="examplename1" class="form-label">Name</label>
    
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="nameHelp" class="form-text">Enter you full name.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    <p id="demo"></p>
  </div>
  
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword2">
    <div  id="mydiv" class="form-text warn-s1">Note : Password did not match!</div>
  </div>
  <button onclick="myFunction()" type="submit" class="btn btn-primary">Submit</button>
</form>
<script>
    function myFunction() {
        //alert("Note : Some fields are empty \n All fields mus be filled.");

     var elem = document.getElementById('mydiv');
     var password1 = document.getElementById("exampleInputPassword1").value;
     var password2= document.getElementById("exampleInputPassword2").value;
     //console.log(password1);
    
     if(password1!=password2)
     {
        
       elem.style.visibility = 'visible';

    
     }
    /* var x1 = document.getElementById("name").value;
     var x2 = document.getElementById("email").value;
     var x3 = document.getElementById("password").value;
     var x4 = document.getElementById("cpassword").value;
     

     
         if(x1=="" || x2=="" || x3=="" || x4=="" )
         {
            alert("Note : Some fields are empty \n All fields mus be filled.");


         }
*/
     


    }


</script>
</div>
</div>
</div>
@endsection