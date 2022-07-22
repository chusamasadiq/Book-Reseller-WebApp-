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
    <title>Home</title>
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
p    {color: white;}
jumbotron {color:#ffffff;}
</style>
<body>
    
        <div class="jumbotron">
            <h1 class="text-center text-danger">Welcome To Vendor Panel</h1>
        </div>
<div class="container">
    <p>
        <button class="btn btn-warning mr-5" ><a style="text-decoration: none; color: white " href="AddProduct">Add Book</a> </button>

        <button class="btn btn-danger" ><a style="text-decoration: none; color: white " href="logout">LogOut</a> </button>
        <p>
            {{$email['name']}}
        </p>
    </p>
</div>

    
    <h1 class="text-center p-3 text-danger">Books Information</h1>
    <div class="container-fluid">
        <table class="table table-striped text-white">
            <tr>
            <th>Book ID</th>
            <th>Book Name</th>
            <th>Book Price</th>
            <th>Author Name</th>
            <th>Book Category</th>
            <th>Seller Location</th>
            <th>Seller Contact Number</th>
            <th>Book Quantity</th>
            <th>Action</th>
            </tr>
            @foreach($product as $item)
            @if($item['vendor']==$email['name'])
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['Book_Name']}}</td>
                <td>{{$item['Book_Price']}}</td>
                <td>{{$item['Author_Name']}}</td>
                <td>{{$item['Book_Category']}}</td>
                <td>{{$item['Seller_Location']}}</td>
                <td>{{$item['Seller_ContactNumber']}}</td>
                <td>{{$item['Book_Quantity']}}</td>
                
                <td><a href="/Home/updateProduct/{{$item['id']}}" class="btn btn-warning mr-2">Update</a>
                <a href="/Home/delete/{{$item['id']}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endif
            @endforeach
            
        </table>

    </div>

</body>
</html>