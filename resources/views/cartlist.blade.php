My cart



@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4"> 
   
</div>
<div class="col-sm-20">
     <div class="trending-wrapper">
     <h2> My Cart</h2>
     <br> <br>
     <a class="btn btn-success" href="ordernow">Order Now </a> 
     <br>
     <br>
     <br>
     <br><br>
     <br><br>
     <br>
  @foreach($products as $item)
  <div class="row searched-item cart-list-devider">
      <div class="col-sm-3">
        <a href="detail/{{$item->id}}">
             <img class="trending-image" src="{{$item->gallery}}" >
               
         </a>
      </div>
      <div class="col-sm-5">
       
               <div class="">
               <h3>{{$item->name}}</h3>
             <h6>{{$item->description}}</h6>
             </div>
        
      </div>
      <div class="col-sm-4">
      <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove From Cart</a>
      <a class="btn btn-success" href="ordernow">Order Now </a> 
      </div>
    

</div>

      
   </div>
    @endforeach
    </div>
  </div>

</div>

    
    

@endsection