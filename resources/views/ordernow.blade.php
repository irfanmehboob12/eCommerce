@extends('master')
@section('content')

<h5 for="" class="style-label" style=" margin-left:20px;margin-top:20px;">Order Details : </h5>
<div class="custom-product sm">
<div class="col-sm-6" >
<table class="table table-striped">
 
  <tbody>
    <tr>
      <th scope="row">Price</th>
      <td>Rs. {{$total}}/-</td>
     
    </tr>
    <tr>
      <th scope="row">Tax</th>
      <td>0 </td>
      
    </tr>
    <tr>
      <th scope="row">Delivery</th>
      <td colspan="2">Rs. 500/- </td>
     
    </tr>
    <tr>
      <th scope="row">Total Amount</th>
      <td colspan="2">Rs. {{$total+500}}/-</td>
     
    </tr>
  </tbody>
</table>

<form action="/orderplace" method="POST">
    @csrf
  <div class="mb-3">
   
    <textarea placeholder="Please enter your address" name="address" class="form-control"></textarea>
</div>
  <div class="mb-3"><br>
    
    <h5 for="" class="style-label" >Payment Method</h5>
    <img src="https://clipart-library.com/new_gallery/12-120390_visa-png-visa-and-mastercard-png.png" style=";height:100px"  />
    
    
    <p><input type="radio" name="payment" value="Debit/credit Card"><span> Debit/Credit Cards</span></p>
    
    <img src="https://creativeon.com/wp-content/uploads/2023/01/jazzcash.png" style=";height:100px"  />
    
    <p><input type="radio" name="payment" value="JazzCash"><span> JazzCash</span></p>
    <p><input type="radio" name="payment" value="On delivery"><span> Payment on delivery</span></p>
  </div>
  
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
</div><br>

</div>
@endsection
