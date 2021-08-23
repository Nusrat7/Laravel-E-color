



@extends('master')
@section("content")
<div class="container">
  <div class="row">
    <div class="col-sm-6">
    <br> <br>
    <br> <br>
    <br> <br>
    <img class="detail-img" src="{{$products['gallery']}}" >
   
   </div>
   <div class="col-sm-6">
   <div class="trending">
     <h2> Product Details</h2>
     <br> <br>
</div>
  
   <h2>{{$products['name']}}</h2>
   <h3>Price: {{$products['price']}}</h3>
   <h4>Detail: {{$products['description']}}</h4>
   <h4>Category: {{$products['category']}}</h4>
   <br>
   <br>
  
   <br> <br>
   <form action="/add_to_cart" method="POST">
       @csrf
         <input type="hidden" name="product_id" value={{$products['id']}}>
         <button class="btn btn-primary">Add to Cart</button>
   
   </form>
   <br> <br>
   <button class="btn btn-success">Buy Now</button>

   <button  class="btn btn-success">Chat Now</button>
   <br> <br>
   <br> <br>
   <br> <br>
   <br> <br>
   </div>
   </div>
   </div>
@endsection