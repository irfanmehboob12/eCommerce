@extends('master')
@section('content')

<?php
use App\Http\Controllers\ProductController;
$count=0;
foreach($orders as $order)
{
    $count=$count+1;

}
/*$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();


}*/
?>
<div class="custom-product">
<div class="col-sm-10">
<div class="trending-wrapper">
<h5 class="" style="position:absolute;margin-left:50px;top:80px;"> Order Items ({{$count}}) </h5><br>
@if($count==0)
<div style="margin-top:110px;margin-left:550px;" class="container">

<img style=";height:300px" src="https://cdn.dribbble.com/userupload/2905383/file/original-4ea237e94e803ddd575a66eb32198899.png?compress=1&resize=400x300&vertical=center"/>


</div>


@endif


<div class="">
  @foreach($orders as $item)
 <div  style="margin-top:40px;padding:30px;height:230px;width:850px;background-color:#ededed;" class="row search-item +">
 <div class="col-sm-3">
<a href="detail/{{$item->id}}">
    <img class="trending-img" src="{{$item->gallary}}">
</a>
</div>
<div class="col-sm-5">
<div class="">
<h3>{{$item->name}}</h3>
<h6>Delivery Status : {{$item->status}}</h6>
<h6>Payment Status : {{$item->payment_status}}</h6>
<h6>Payment Method : {{$item->payment_method}}</h6>
<h6>Delivery Address : {{$item->address}}</h6>
<h6>         Price : Rs. {{$item->price}}/-</h6>


</div>
</div>
<div class="col-sm-3">

</div>
</div>
  @endforeach  
  
</div>
</div>
</div>
</div>




@endsection
