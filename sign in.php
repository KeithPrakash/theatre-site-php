<?php
include 'fsign in.php';


?>




<!DOCTYPE html>
<html>
<head>
	<title>sign in</title>

		<link rel="stylesheet" type="text/css" href="css/styles.css?va<?php time(); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">


 



   <link rel="stylesheet" type="text/css" href="css/styles.css?va<?php time(); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="css/carousel.js"></script>
<style>
	
body
{
	margin:0;
	padding:0;
	font-family: sans-serif;
	background-image: url(backco.jpg);
	background-size: cover;
	background-position: center;
}
.sign-up-form
{

	width: 300px;
	box-shadow:0 0 3px 0 rgba(0,0,0,0.3);
	background:pink;
	padding:20px;
	margin:8% auto 0;
	text-align: center;
}

.sign-up-form h1
 {
	color:red;
	margin-bottom: 30px;
}
.input-box
{
	border-radius:20px;
	padding: 10px
	margin:10px 0;
	width:100;
	boarder- 1px solid #999;
	outline:none;
}
button{
	color: #fff;
	width: 100%;
	padding: 10px;
    font-size: 15px;
	border-radius: 20px;
	margin:  10px 0;
	boarder:none;
	outline:none;
	cursor: pointer;

}
.sign-up-btn
{
background-color: red;

}

input[type=text], input[type=password] {
  width: 90%;
  padding: 15px;
  margin: 5px 0 15px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;


</style>

	


</head>

<body>
<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">LEgo CENEma</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="booking.php">Booking</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Annoncements</a>
    </li><li class="nav-item">
      <a class="nav-link" href="#">contact us</a>
    </li><li class="nav-item">
      <a class="nav-link" href="blog.php">blog</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Account
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="sign in.php">login</a>
        <a class="dropdown-item" href="create acc.php"> sign up</a>
      </div>
    </li>
  </ul>
</nav>
<br>

	<div class= "sign-up-form">
		<h1>LOGIN</h1>
	<form method="POST" action="Sign in.php">
		
		<p><label for="email"><b>Email </b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required><br><p/>

    <p><label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required><p/>

        <button type= "submit" name="submit" value="submit" class="sign-up-btn">Sign in</button>
        <hr>

        <p> Don't you have an account? <a href="create acc.php"> sign up</a></p><p/>

	</form>
</div>
</body>
</html>