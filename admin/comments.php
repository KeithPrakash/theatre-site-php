 <?php
include'conn.php'
   ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/alert.js"></script>


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
  <a href="main.php">accouts</a>
  <a href="#">commets</a>
  <a href="#">films</a>
  <a href="#">Contact</a>
   <a href="index.php">log out</a>
</div>

<div class="main">
  <h2>Manage comments</h2>
  


  <?php  

$sql ="SELECT id,email,comment,allow FROM comments";  //sql command to show infor

$result = $conn->query($sql);

if($result->num_rows >0){

echo "<table> <tr><th>ID</th><th>Email</th><th>Comment</th> <th>delete</th></tr>";


while($row = $result->fetch_assoc()){
?>

    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['comment']; ?></td>

    <form action ="delete.php" method= "POST" >  

    <input type="hidden" name="id" value="<?php echo $row['id'];?>">

<td> <input type="submit" name="delete" class="btn btn-danger" ></td> ";

//delete button



<?php
}
}
?>




</div>
   
</body>
</html> 

