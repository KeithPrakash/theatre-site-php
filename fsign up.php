<?php
    include 'connect.php';
                                         //php code to sign up
if (isset($_POST['submit'])){


	$fname =$_POST['Fname'];
	$lname  =$_POST['Sname'];
	$phone     =$_POST['PhoneNumber'];
	$password  =$_POST['password'];

	$email     =$_POST['email'];



  	
   mysqli_query($conn,"INSERT INTO user(fname,lname,phone,email,password)VALUES('$fname','$lname','$phone','$email','$password');")or die(mysqli_error()); 

  header('Location: sign in.php');
}else{

echo "failed";
 
}


?>












