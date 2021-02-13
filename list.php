<?php 

$conn = mysqli_connect("localhost", "root", "", "basic");

$query = "select * from slambook_user";
$q = mysqli_query($conn,$query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data of your Friends</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="ham_style.css">



</head>
<body>
<section>
<div class="container">
<nav class="navbar">
            <div class="hamburger_menu">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
             </div>       
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="login.html" class="nav_link">Login
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="validation.html" class="nav_link">User
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#" class="nav_link">Contact
                        </a>
                    </li>
                </ul>
           
        </nav>
    <div class="header"><span></span>
        <div class="logo_head"><h1>Slam</h1></div>
        <div class="logo_icon"><img src="https://img.icons8.com/cute-clipart/64/000000/book.png"/></div>
    </div>
    <div class="heading"><h1 class="head">See here what friends think about you</h1></div>
    <div class="main" id="list_main">
    <table class="table table-bordered table-striped table-hover">
        <thead class="bg-dark text-white">
            <th>Name</th>
            <th>View</th>
        </thead>
        <tbody>
            <?php
                while($res=mysqli_fetch_array($q)){
                   ?>
                   <tr>
                       <td><?php echo $res['name'];?></td>
                       <td><button class="btn btn-primary" style="padding:7px 30px"> <a href="view.php?id=<?php echo $res['id'];?>" class="text-white" >View</a></button></td>
                   </tr> 
                   <?php
                }
            ?>
        </tbody>
    </table>
            </div>
</div>
</section>
<script src="script.js"></script>
</body>
</html>