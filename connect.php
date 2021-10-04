
<?php
$conn=mysqli_connect("localhost","root","","film_company");

if($conn->connect_errno){

	 die("<script>alert('Connection Failed.')</script>");
}
else{
	echo"connected";
}


?>