



@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4"> 
   

<div class="col-sm-20">
<table class="table">

    <tbody>
      <tr>
        <td>Amount</td>
        <td>$  {{$total}}</td>
        
      </tr>
      <tr>
        <td>Vat 15 %</td>
        <td>$  {{$total*0.15}}</td>
        
      </tr>
      <tr>
        <td>Delevery Charge </td>
        <td>$ 5</td>
       
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$  {{$total+ $total*0.15+5}}</td>
        
      </tr>
    </tbody>
  </table>
  
      <br>      <br>       <br>       <br>
      
      <div class="col-sm-20" >
  <form action="/orderplace" method="POST">
  @csrf
  <div class="col-sm-20" >
     <label for="pwd">Give your Address</label>      
    <textarea  name="address" type="TEXT" placeholder="Enter your address" class="form-control"></textarea>
    <br>      <br>       <br>       <br>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label>      <br>      <br> 
    <input  type="radio" value="cash" name="payment"> <span>Online payment</span>      <br>      <br>
    <input type="radio"  value="cash" name="payment"> <span>EMI payment</span>   <br>      <br>
    <input type="radio"  value="cash" name="payment"> <span>Cash On Delivery</span>   
  </div>
  
  <button type="submit" class="btn btn-SUCCESS">Confirm Order</button>
</form>
</div>
</div>
<div>

  </div>

</div>

    
    

@endsection