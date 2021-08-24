<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body style="background-color:LightGray;">
<div class="mb-3">
<div class="container">
 <div class="jumbotron" >
 <br>
      <br>
      <br>   <br>   <br>   <br>
     <h3> Insert product:</h3>
     <br>   <br> 
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
      <!-- <select name="cars" id="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select> -->
     </div>
     <div class="form-group">
      <label for="exampleInputEmail1">Product description</label>
      <input type="text" name="description" class="form-control" placeholder="Product description">
     </div>

     <div class="form-group">
     <br>   
      <label class="custom-file-input">Product image</label>
      <input type="file" name="gallery" class="custom-file-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product image">
     </div>
     <br>   <br>  
     <br>   <br> 
  <button type="submit" class="btn btn-primary">Save Data</button>
  </div>
  </div>
</form>
</div>
</div>



</body>
</html>