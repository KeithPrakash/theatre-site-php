<?php
include'fsign up.php';
include'connect.php';
?>




<!DOCTYPE html>
<html>
<head>
  <title>create acc</title>

 



   <link rel="stylesheet" type="text/css" href="css/styles.css?va<?php time(); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="js/alert.js"></script>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;


 background-image: url(css/createback.jpg);

  background-size: cover;
  background-position: center;
  /*background-color: orange;*/
}

*{
  box-sizing: border-box;
}

/* Add padding to containers */
.container {

  width: 400px;
  box-shadow:0 0 3px 0 rgba(0,0,0,0.3);
  background: #fff;
  padding:30px;
  margin:8% auto 0;
/*  margin:8% auto 0;
  text-align: left;


  padding: 40px;*/
  background-color:pink;

  
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color:red;          /*#1c8adb   #4CAF50;  */
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color:pink;
  text-align: center;
}
body{

  background-color: #E81111;
 }
</style>
</head>
<body>
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
<form   method="POST" name="sign up" action="create acc.php">  
  <div class="container">
   
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

      <label ><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="Fname" id="FirstName" required>

    <label ><b>Second Name</b></label>
    <input type="text" placeholder="Enter Second Name" name="Sname" id="SecondName" required>

   <label ><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name=" PhoneNumber" id="PhoneNumber" required>


    <label ><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label ><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>



    <button type="submit" name="submit" class="registerbtn" value="submit">Register</button>


  </div>
  </form>
  <div class="container signin">
    <p>Already have an account? <a href="sign in.php">Sign in</a>.</p>
  </div>

//form to create account

</body>
</html>