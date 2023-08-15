@extends('master')
@section('content')
<div class="container">
 <div class="flex">
<div class=" d-inline-block img-div">
<img class="detail-img" src="{{$product['gallary']}}" />
</div>
<div class=" d-inline-block img-desc">
 <a href="/" >Go Back</a>
 <br><br>
 <h4>Name : {{$product['name']}}</h4>
 <h5 class="price-s1">Price : {{$product['price']}}</h5>
 <h6>Catagory : {{$product['catagory']}}</h6>
 <h6>Description : {{$product['description']}}</h6>
 <br><br>
 <button class="btn-buy d-inline-block">Buy Now</button>
 <form action="/add_to_cart" method="POST">
 <input type="hidden" name="product_id" value="{{$product['id']}}">
 @csrf
  <button class="btn-cart d-inline-block">Add to Cart</button>
</form>
 <br><br>

 
</div>
</div>
</div>
@endsection