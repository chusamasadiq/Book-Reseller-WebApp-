<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="{{ asset('uploads/BRS.png') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
  integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
</head>
<style>
body {
    background: url('uploads/BOOK.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
h1   {color: white;}
p    {color: red;}
</style>
<body>


<div class="container">
<div class="container pt-4">
            <h1 class="text-center" >Welcome To Vendor Panel</h1>
        </div>

    <div class="col-4 mt-5" style="margin: auto" >
        <h4 class="text-center text-warning">Please Login here</h4>

@if(session()->has('message'))
    <div class="alert alert-danger">
        <strong>
        {{ session()->get('message') }}
        </strong>
    </div>
@endif
        <div class="mt-4 mb-4 text-white">
    <form method="post" action="login">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input required name="email" type="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" name="password" class="form-label">Password</label>
            <input required name="password" type="password" class="form-control" >
        </div>
        
        <div class="text-center">
          <button type="submit" class="btn btn-primary center">Login</button>
        </div>
    </form>
</div>
</div>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4 fixed-bottom">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1 text-warning ">Register for free</h5>
      </li>
      <li class="list-inline-item">
        <a href="register" class="btn btn-outline-white btn-rounded text-white">Sign up!</a>
      </li>
    </ul>
    <div class="mt-4 mb-4 text-center">
    <a href="aboutus">
    <button class="btn btn-primary center">About Us</button></a>
    <a href="contactus">
    <button class="btn btn-primary center">Contact Us</button></a>
    <a href="term" >
    <button class="btn btn-primary center">Term & Conditions</button></a>
</div>
    <!-- Call to action -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>


