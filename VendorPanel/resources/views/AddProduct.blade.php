<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="{{ asset('uploads/BRS.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
  integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Add Product</title>
</head>
<style>
body {
    background: url('uploads/BOOK.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
h1   {color: black;}
p    {color: red;}
</style>
<body>
<div class="jumbotron">
            <h1 class="text-center">Welcome To Vendor Panel</h1>
        </div>
    
<form action="InsertProduct/insert" method="post" enctype="multipart/form-data" class="text-white">
    @csrf
    <div class="container">
      <h1 class="Heading  text-white" style="text-align: center"> Add Book </h1>
        
        <div class="col-12">
          <div class="form-group">
            <input type="hidden" class="form-control" name="id">
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="Bookname">Book Name</label>
            <input type="text" class="form-control" name="bookname" placeholder="Enter Book Name">
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="AuthorName">Book Price</label>
            <input type="text" class="form-control" name="bookprice" placeholder="Enter Book Price">
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="Book Category">Book Author Name</label>
            <input type="text" class="form-control" name="authorname" placeholder="Enter Author Name">
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="Book Price">Book Category</label>
            <input type="text" class="form-control" name="bookcategory" placeholder="Enter Book Category">
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="Book Quantity">Seller Location</label>
            <input type="text" class="form-control" name="sellerlocation" placeholder="Enter Seller Location" required>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="Book Quantity">Seller Contact Number</label>
            <input type="text" class="form-control" name="sellercontactnumber" placeholder="Enter Seller Contact Number" required>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
          <label for="Quantity">Quantity</label>
          <input type="number" class="form-control" value="1" name="bookquantity" required
          name="bookQuantity" min="1" max="100">

          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="Book Image">Book Image</label>
            <input type="file" class="form-control" name="bookimg">
          </div>
        </div>



      <button type="submit" class="btn btn-primary"> Add Book</button>
    </div>
  </form>
</body>
</html>