<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/styles.css?va<?php time(); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<style>
  
body{


background-color:  #E81111;;



}


</style>


</head>
<body >

<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">LEgo CENEma</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="booking.php">Booking</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="annoucement.php">Annoucements</a>
    </li><li class="nav-item">
      <a class="nav-link" href="#">contact us</a>
    </li><li class="nav-item">
      <a class="nav-link" href="blog.php">blog</a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Account
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="sign in.php">Sign in</a>
        <a class="dropdown-item" href="create acc.php">Sign up</a>
      </div>
    </li>
  </ul>
</nav>
<br>
  
<div class="container">
  
<h2 style="color:pink;">Articles</h2>
  <ul>
    <tr>
  <div class="card" style="width:100%">
    <img class="card-img-top" src="img/sonic1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Sonic</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="sonic.php" class="btn btn-primary">See More</a>
    </div>
  </div>
  <br>
</tr>
  </ul>
   <tr>
  <div class="card" style="width:100%">
    <img class="card-img-top" src="img/john.jpg" alt="Card image" style="width:100%">
    <div class="card-body" >
      <h4 class="card-title">John Wick</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="Wick.php" class="btn btn-primary">See More</a>
    </div>
  </div>
  <br>
</tr>
</div>
















</body>
</html>
