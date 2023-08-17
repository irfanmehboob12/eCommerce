@extends('master')
@section('content')
<?php
$count=$products->count();

?>
@if($count==0)

<div style="margin-top:140px;margin-left:550px;" class="container">

<img style=";height:300px" src="https://cdn.dribbble.com/userupload/2905383/file/original-4ea237e94e803ddd575a66eb32198899.png?compress=1&resize=400x300&vertical=center"/>


</div>
@else

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
@endif




@endsection

