<?php
 
if(isset($_POST['logout'])){
   session_start();
   unset($_SESSION["email"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = index.php');
}
?>