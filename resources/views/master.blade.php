<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     
</head>
<body style="background-color:#f0f0f0">
    {{View::make('header')}}
    @yield('content')
</body>

<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}


 .dropdown-btn {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

.dropdown-container {
  display: none;
  background-color: white;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    .custom-login
    {
       height:100px;

    }

    .slider-img
    {

        height:400px;
        
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .trending-img
    {
        height:80px;
        


    }
    .trending-item
    {
        margin-top:30px;
        float:left;
        padding-left:40px;
    }
     .
    .head-pos
    {
        
        margin-left: 200px;
        margin-right: ;

    }

    .detail-img
    {

        height:200px;
        margin-top:10px;
    }

    .img-desc
    {
        position:absolute;
        margin-top:50px;
        margin-left:400px;
    }
    .img-div
    {
        position:absolute;
        margin-right:40px;
        margin-top:50px;
    
    }

    .btn-buy
    {
        background-color:DodgerBlue;
        left:280px;
        width:250px;
        height:50px;
        font-size: 16px;
        color: white;
        border:none;
        position:absolute;
        display: inline-block;
     
    }
    .btn-cart
    {
        background-color:Orange;
        border:none;
        color: white;
        width:250px;
        height:50px;
        font-size: 16px;
        display: inline-block;
        position:absolute;

    }

    .price-s1
    {

        color:MediumSeaGreen;  
    }

    .search-box
    {

        width:600px;
    }

    .search-item
    {
        margin-top:30px;
        margin-left:30px;
    }
    .search-img
    {
        height:100px;
        width:200px;
        
     }

     .cart-list-divider
     {

       border-bottom: 1px solid #ccc;

     }
      .s2-text
      {
        position:relative;
        margin-top:20px;


      }
      .sm
      {
        position:relative;
        margin-top:20px;
        margin-left:20px;


      }

      .style-label
      {
        font-weight:bold;

      }
      .warn-s1
      {
        visibility: hidden;
        color: red;

      }


      /* Dropdown Button */
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}

</style>
</html>

@include('footer')