<?php 

include 'connect.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO comments (name, email, comment)
      VALUES ('$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>alert('Comment added successfully.')</script>";
  } else {
    echo "<script>alert('Comment does not add.')</script>";
  }
}

?>

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
  <script src="js/alert.js"></script>

  <script src="css/carousel.js"></script>
  <style >body{

  background-color: #E81111;
 }</style>


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
      <a class="nav-link" href="#">Announcement</a>
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
  
<div class="container" >
<div class="wrapper">

   <h1> Announcement</h1>
   <p>Lego cinema will be open 11th of october.</p>
    <form action="" method="POST" class="form">
      <div class="row">
        <div class="input-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter your Name" required>
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter your Email" required>
        </div>
      </div>
      <div class="input-group textarea">
        <label for="comment">Comment</label>
        <textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
      </div>
      <div class="input-group">
        <button name="submit" class="btn">Post Comment</button>
      </div>
    </form>
    <div class="prev-comments">
      <?php 
      
      $sql = "SELECT * FROM comments";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

      ?>
      <div class="single-item">
        <h4><?php echo $row['name']; ?></h4>
        <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
        <p><?php echo $row['comment']; ?></p>
      </div>
      <?php

        }
      }
      
      ?>
    </div>
  </div>


</div>

<footer class="bg-info text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">LEGO CINEMA</h5>

        <p>
         Head Office:
No. 35, Dharmapala Mawatha,
Colombo 03, Sri Lanka.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase"></h5>


</div>
</body>
</html>
 