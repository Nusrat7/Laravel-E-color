



@extends('master')
@section("content")
<div class="shadow-lg p-3 mb-5 bg-body rounded">
<div class="custom-product" >
    <div class="col-sm-4"> 
   
</div>
<div class="col-sm-20" >
     <div class="trending-wrapper">
     <div class="shadow-lg p-3 mb-5 bg-body rounded">
     <div class="trending">
     <h2 > My Orders</h2>
</div>
     <br> <br>
     </div>
     <br>
     <br>
     
  @foreach($orders as $item)
  <div class="row searched-item cart-list-devider">
      <div class="col-sm-3">
        <a href="detail/{{$item->id}}">
             <img class="trending-image" src="{{$item->gallery}}" >
               
         </a>
      </div>
      <div class="shadow-lg p-3 mb-5 bg-body rounded">
      <div class="col-sm-5">
       
               <div class="">
               <h3>Name: {{$item->name}}</h3>
               <h4>Delevery status: {{$item->status}}</h4>
               <h4>Payment Method: {{$item->payment_method}}</h4>
               <h4>Payment status: {{$item->payment_status}}</h4>
               <h4>Address: {{$item->address}}</h4>
             </div>
        
</div>
    

</div>

      
   </div>
    @endforeach
    </div>
  </div>



    
    

@endsection
</div>