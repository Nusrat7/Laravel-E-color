<!DOCTYPE html>
<html>
<head>
<title>update</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2 class="text-center"> Update data :</h2>
   <form method="POST" >
   @csrf
     <div class="mb-3">
     <label >Product Name</label>
     <input type="text" name="name " class="form-control" value={{$product->name}}><br>
     </div>
     <div class="mb-3">
     <label> Product Price</label>
     <input type="text" name="price" class="form-control" value={{$product->price}}><br>
     </div>
     
     <input type="submit" name="update" value="Update" class="btn btn-primary"><br>
     </div>
   </form>
</div>


</body>
</html>