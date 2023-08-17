@extends('master')
@section('content')
<p   style="position:absolute;font:12px italic;margin-top:150px; margin-left:620px;"> Login to<p>
<p   style="color:blue;position:absolute;font:30px italic bold ;margin-top:120px; margin-left:670px;"> ShopOnline.com<p>
<div class="container custom-login" >
<div class="row">
<div class="col-sm-3 position-absolute top-50 start-50 translate-middle">
<form action="/login" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@endsection