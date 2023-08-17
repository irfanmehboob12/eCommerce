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
<div class="custom-product">
<div class="col-sm-10">
<div class="trending-wrapper">
<h5 class="" style="margin-left:50px;margin-top:50px;"> Cart items ({{$total}})</h5><br>
<a  class="btn btn-success" style="margin-left:50px;" href="/ordernow">Order Now</a><br>
<div class="">
  @foreach($products as $item)
 <div class="row search-item +">
 <div class="col-sm-3">
<a href="detail/{{$item->id}}">
    <img class="trending-img" src="{{$item->gallary}}">
</a>
</div>
<div class="col-sm-3">
<div class="">
<h3>{{$item->name}}</h3>
<h5>{{$item->description}}</h5>

</div>
</div>
<div class="col-sm-3">
<a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
</div>
</div>
  @endforeach  
  <a  class="btn btn-success" style="margin-left:50px;margin-bottom:20px;" href="/ordernow">Order Now</a><br>

</div>
</div>
</div>
</div>




@endsection
