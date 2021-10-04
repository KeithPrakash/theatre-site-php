<?php
session_start();

if(!ISSET($_SESSION['email']))
	{
		echo "<script>window.location = 'index.php';</script>";
	}	

?>