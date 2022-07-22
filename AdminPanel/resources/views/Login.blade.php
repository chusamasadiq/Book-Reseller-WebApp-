<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('uploads/BRS.png') }}">

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
h1   {color: blue;}
p    {color: red;}
jumbotron {color:#ffffff;}
</style>

<body>
<div class="jumbotron pt-5">
            <h1 class="text-center text-warning">Welcome To Admin Panel</h1>
        </div>

<div class="container text-warning pt-5">
    <div class="col-4 mt-5" style="margin:auto" >
        <h4 class="text-center">Please Login here</h4>

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
</html>
