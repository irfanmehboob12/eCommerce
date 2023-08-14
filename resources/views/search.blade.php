@extends('master')
@section('content')


<h2 style="margin-top:30px;margin-left:30px;">Result for  Products</h2>
<div class="carousel-inner">
    @foreach($products as $item)
    <div class="search-item"style="width:250px;display:inline-block;">
    <a href="detail/{{$item['id']}}">
      <img class="search-img" src="{{$item['gallary']}}" >
      <div class="">
        <h6 class="col-sm-8" style="margin-left:15px;margin-top:10px;"> {{ $item['name']}}-{{$item['description']}}</h6>
        
      </div>
      </a>
     </div>

    
 @endforeach


@endsection

