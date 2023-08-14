@extends('master')
@section('content')



<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    @foreach($products as $item)
    @if($loop->first)
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    @else
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$item->id-1}}" aria-label="Slide 2"></button>
    @endif
    @endforeach
</div>

  <div class="carousel-inner">
    @foreach($products as $item)
    <div class="carousel-item @if($loop->first) active @endif" data-bs-interval="2000">
      <img class="slider-img" src="{{$item['gallary']}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$item['name']}}</h5>
        <p>{{$item['description']}}</p>
      </div>
     </div>
    @endforeach
    </div>
    
    
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<h2 class="head-pos">Trending Products</h2>
<div class="carousel-inner">
    @foreach($products as $item)
    <div class="trending-item">
      <img class="trending-img" src="{{$item['gallary']}}" >
      <div class="">
        <h6>{{$item['name']}}</h6>
        
      </div>
     </div>
    
 @endforeach
@endsection