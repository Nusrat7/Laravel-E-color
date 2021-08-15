<!DOCTYPE html>
<html>
<head>
<title></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<table class="table table-bordered shadow text-center table -striped">
<br> <br> <br> <br>
<center>
<h2>Product detais:</h2>
</center>
<br> <br> <br> <br> <br>

  <tr>
    <th></th>
    <th> Product Name</th>
    <th> Product Price</th>
    <th> Delete Product</th>
    <th>Edit details</th>


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