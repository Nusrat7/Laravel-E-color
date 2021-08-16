<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
<div class="container">
 <div class="jumbotron">
     <h3> Insert product:</h3>
 <form action="{{ route('addimage')}}" method="POST" enctype="multipart/form-data">
 @csrf
    <div class="form-group">
      <label>Product Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
     </div>

     <div class="form-group">
      <label>Product Price</label>
      <input type="text" name="price" class="form-control" id="12345" aria-describedby="emailHelp" placeholder="Product Price">
     </div>

     <div class="form-group">
      <label>Product Category</label>
      <input type="text" name="category" class="form-control"  aria-describedby="emailHelp" placeholder="Product Category">
     </div>
     <div class="form-group">
      <label for="exampleInputEmail1">Product description</label>
      <input type="text" name="description" class="form-control" placeholder="Product description">
     </div>

     <div class="form-group">
      <label class="custom-file-input">Product image</label>
      <input type="file" name="gallery" class="custom-file-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product image">
     </div>
  <button type="submit" class="btn btn-primary">Save Data</button>
  </div>
</form>
</div>
</div>



</body>
</html>