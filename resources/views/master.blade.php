<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comm Project</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
</head>
<body>
    {{View::make('header')}}
    @yield('content')
</body>

<style>
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

</style>
</html>

@include('footer')