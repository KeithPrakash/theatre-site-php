 <?php

$conn=mysqli_connect("localhost","root","");
$db =mysqli_select_db($conn,'film_company');






if(isset($_POST['id'])){

          $id = $_POST['id'];

          $query ="DELETE FROM comments WHERE id='$id'";   //query to delete comments

          $query_run= mysqli_query($conn,$query);


         if ($query_run) {

         	echo '<script> alert("Data deleted")</script>';
         	header("location:comments.php");


         	
         }else{

         	echo'<script> alert("data not deleted")</script>';


         }


	
 
}
	
   ?>

