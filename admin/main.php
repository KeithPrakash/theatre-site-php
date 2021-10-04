 <?php
include'conn.php'
   ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style>
table, th, td {
  
padding-right: 20px;
}
th{
font-size: 20;
background-color:#9DC2E2;


}
td{

background-color: #E4CCD2;
font-size: 20;
}


</style>
</head>
<body>

<div class="sidenav">
  <a href="#">accouts</a>
  <a href="comments.php">commets</a>
  <a href="#">films</a>
  <a href="#">Contact</a>
  <a href="index.php">log out</a>
</div>

<div class="main">
  <h2>Users</h2>


<div class="row justify-content-center">   </div>   
<?php  
$sql ="SELECT user_id, fname, lname, email, phone FROM user";

$result = $conn->query($sql);

if($result->num_rows >0){

echo "<table> <tr><th>ID</th><th> First Name</th><th>Second Name</th><th>Email</th><th>Phone number</th></tr>";

while($row = $result->fetch_assoc()){


echo"<tr><td>".$row["user_id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><tr>";


}

}


 ?>
</div></div>   
  
</body>
</html> 
