<?php


 $id = $_POST['id'];



if(isset($_POST['id'])){
   $conn=mysqli_connect("localhost","root","","film_company");

      $query=mysqli_query("INSERT INTO 'comments'(allow) VALUES('allow') WHERE ''id'='$id';");







}



	
   ?>

