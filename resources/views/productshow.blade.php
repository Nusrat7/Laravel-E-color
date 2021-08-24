<!DOCTYPE html>
<html>
<head>
<title></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-color:LightGray;">
<div class="container">
<table class="shadow-lg p-3 mb-5 table table-striped table-dark rounded">
<br> <br> <br> <br>
<div class="shadow-lg p-3 mb-5 bg-Tomato rounded"  style="background-color:Tomato;">
<center>
<h2>Product Delete/Edit</h2>
</center>
<br> <br> 
</div>
  <tr>
    <th></th>
    <th> Product Name</th>
    <th> Product Price</th>
    <th> Delete Product</th>
    <th>Edit Details</th>


  </tr>

  


  @foreach($products as $item)
  <tr>
    <td>{{$item['id']}}</td>
    <td>{{$item['name']}}</td>
    <td>{{$item['price']}}</td>
    <td><a href="/delete/{{$item->id}}" class="btn btn-danger">Delete</a></td>
    <td><a href="/edit/{{$item->id}}" class="btn btn-success">edit</a></td>


  </tr>
  @endforeach
  
</table>




</body>
</div>
</html>