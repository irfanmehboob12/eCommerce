@extends('master')
@section('content')

<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();


}
?>

<div  style="position:absolute;margin-top:80px;margin-left:900px;background-color:#ededed;width:400px;height:300px;">
<h5  style="color:#545454;font-size:20px;margin-top:20px;margin-left:20px;">Order Summary</h5>
<h6  style="color:#7e7e7e;font-size:20px;margin-top:20px;margin-left:20px;">Subtotal 0 items)</h6>
<h6  style="position:absolute;color:#7e7e7e;font-size:20px;top:60px;margin-left:300px;">Rs. 0</h6>
<h6  style="color:#7e7e7e;font-size:20px;margin-top:20px;margin-left:20px;">Shipping Fee</h6>
<h6  style="position:absolute;color:#7e7e7e;font-size:20px;top:100px;margin-left:300px;">Rs. 500</h6>
<h6  style="color:#7e7e7e;font-size:20px;margin-top:20px;margin-left:20px;">Shipping Fee Discount</h6>
<h6  style="position:absolute;color:#7e7e7e;font-size:20px;top:150px;margin-left:300px;">Rs. 0</h6>
<h6  style="color:#7e7e7e;font-size:20px;margin-top:20px;margin-left:20px;">Grand Total</h6>
<h6  style="position:absolute;color:#7e7e7e;font-size:20px;top:200px;margin-left:300px;">Rs. 0</h6>


</div>
<div class="custom-product">
<div  class="col-sm-10">
<div class="trending-wrapper">
<h5 class="" style="position:absolute;margin-left:50px;margin-top:50px;"> Cart items ({{$total}})</h5><br>
<a  class="" style="font-size:18px;padding:10px;text-decoration: none;color:white;background-color:#32cd32;text-align:center;border:none;height:50px;width:380px;position:absolute;margin-top:290px;margin-left:910px;" href="/ordernow">PROCEED TO CHECKOUT ({{$total}})</a><br>
<div class="">
  @foreach($products as $item)
 <div style="padding:30px;height:180px;width:850px;background-color:#ededed;" class="row search-item ">
 <div class="col-sm-3">
<a href="detail/{{$item->id}}">
    <img class="trending-img" src="{{$item->gallary}}">
</a>
</div>
<div class="col-sm-3">
<div class="">
<h4 style="color:#545454;">{{$item->name}}</h4>
<h6 style="color:#545454;">{{$item->description}}</h6>

</div>
</div>
<div class="col-sm-3">
<a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
</div>
</div>
  @endforeach  
  
</div>
</div>
</div>
</div>




@endsection
