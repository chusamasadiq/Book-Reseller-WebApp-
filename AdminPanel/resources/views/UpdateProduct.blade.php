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
    <title>Update Product</title>
</head>
<style>
body {
  background: url('uploads/BOOK.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
h1   {color: while;}
p    {color: red;}
</style>
<body>
<div class="jumbotron">
            <h1 class="text-center">Welcome To Vendor Panel</h1>
        </div>
<form action="/update" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
      <h1 class="Heading" style="text-align: center;"> Update Book</h1>
        
        <div class="col-12">
          <div class="form-group">
            <input type="hidden" class="form-control" name="id"  value="{{$product['id']}}">
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="productname">Book Name</label>
            <input type="text" class="form-control" name="bookname" value="{{$product['Book_Name']}}">
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="salary">Book Price</label>
            <input type="text" class="form-control" name="bookprice" value="{{$product['Book_Price']}}">
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="department">Book Author Name</label>
            <input type="text" class="form-control" name="authorname" value="{{$product['Author_Name']}}">
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="Designation">Book Category</label>
            <input type="text" class="form-control" name="bookcategory" value="{{$product['Book_Category']}}">
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="Designation">Seller Location</label>
            <input type="text" class="form-control" name="sellerlocation" value="{{$product['Seller_Location']}}">
          </div>
        </div>
        
        <div class="col-12">
          <div class="form-group">
            <label for="Designation">Seller Contact Number</label>
            <input type="text" class="form-control" name="sellercontactnumber" value="{{$product['Seller_ContactNumber']}}">
          </div>
        </div>
        

        <div class="col-12">
          <div class="form-group">
            <label for="Designation">Book Quantity</label>
            <input type="text" class="form-control" name="bookquantity" value="{{$product['Book_Quantity']}}">
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="Designation">Book Image</label>
            <input type="file" class="form-control" name="bookimg" value="{{$product['Book_Img']}}">
          </div>
        </div>



      <button type="submit" class="btn btn-secondary"> Save</button>
    </div>
  </form>
</body>
</html>