



@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4"> 
  
</div>
<div class="col-sm-4">
     <div class="trending-wrapper">
     <div class="trending">
     <h2> Result for product</h2>
</div>
     <br> <br>
     
  @foreach($products as $item)
  <div class="searched-item">
  <a href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}" >
      <div class="">
        <h3>{{$item['name']}}</h3>
        <h3>{{$item['description']}}</h3>
        
      </div>
</a>
  
    </div>
    @endforeach
    </div>
  </div>

</div>

    
    

@endsection