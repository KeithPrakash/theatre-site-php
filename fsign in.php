<?php
                                  //php code to sign in
  include 'connect.php';

if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if ($email != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from user where email='".$email."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['email'] = $email;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}

?>