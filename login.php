<?php

$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "basic");
  
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($con,"select * from slambook_admin where username = '$username' && password = '$password'");
    
    $rowcount = mysqli_num_rows($query);
    if($rowcount == true){
        header('location:list.php');
    }
    else{
        ?>
        <script>
            alert("please enter valid username and password"); 
        </script>
       <?php 
    }




?>