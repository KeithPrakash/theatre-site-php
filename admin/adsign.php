<?php 
include 'conn.php';  

                                           //admin login code
if(isset($_POST['submit'])){

    $admin = mysqli_real_escape_string($conn,$_POST['admin']);
    
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if ($admin != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from admin where name='".$admin."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['admin'] = $admin;
            header('Location: main.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>






