<?php 

$conn = mysqli_connect("localhost", "root", "", "basic");
$id=$_GET['id'];

$query = "select * from slambook_user where id=$id";
$q=mysqli_query($conn, $query);

$id_count=mysqli_num_rows($q);
if($id_count){
    $values=mysqli_fetch_assoc($q);
    
// }
// else{
//     echo "user does not exist";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slambook</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="ham_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        table td{
            text-align:left;
        }
    </style>

</head>
<body>
<section>
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
        <div class="container">
            <div class="header"><span></span>
                <div class="logo_head"><h1>Slam</h1></div>
                <div class="logo_icon"><img src="https://img.icons8.com/cute-clipart/64/000000/book.png"/></div>
            </div>
            <div class="heading"><h1>Your details will be secure!!</h1></div>
            <div class="main" id="view_main">
                    
                <table class="table table-bordered table-striped" >   
                    <tr>
                        <td> Full Name:</td>
                        <td><?php echo $values['name']."<br>"; ?></td><br>
                    </tr> 
                    <tr>
                        <td>Relation between <?php echo $values['name']?> & u:</td>
                        <td><?php echo $values['relation']."<br>"; ?></td><br>
                    </tr> 
                    <tr>
                        <td>Phone number:</td>
                        <td><?php echo $values['phone_no']."<br>"; ?></td>
                    </tr> 
                    <tr>
                        <td>Date of birth:</td>
                        <td><?php echo $values['dob']."<br>"; ?></td>
                    </tr> 
                    <tr>
                        <td><?php echo $values['name']?> give you Nick Name:</td>
                        <td><?php echo $values['nick_name']."<br>"; ?></td>
                    </tr> 
                    <tr>
                        <td><?php echo $values['name']?> dislike your:</td>
                        <td><?php echo $values['hate']."<br>"; ?></td>
                    </tr> 
                    <tr>
                        <td><?php echo $values['name']?> like your:</td>
                        <td><?php echo $values['love']."<br>"; ?></td>
                    </tr> 
                    <tr>
                        <td><?php echo $values['name']?> share sweet memories of you':</td>
                        <td><?php echo $values['memory']."<br>"; ?></td>
                    </tr> 
                    <tr>
                        <td><?php echo $values['name']?> dedicates you song:</td>
                        <td><?php echo $values['song']."<br>"; ?></td>
                    </tr> 
                    <tr>
                        <td>Color suits on you most:</td>
                        <td><?php echo $values['color']."<br>"; ?></td>
                    </tr> 
                    <tr>
                        <td>Similarities between u & <?php echo $values['name']?>:</td>
                        <td><?php echo $values['similar']."<br>"; ?></td>
                    </tr> 
                    <tr>
                        <td>Message from <?php echo $values['name']?>:</td>
                        <td><?php echo $values['msg']."<br>"; ?></td>
                    </tr> 
                    
                    
                </table>
                
            </div>
        </div>
    </section>
    <script src="script.js" ></script>
</body>
<?php 

}
else{
    echo "User not found";
}

?>
</html>
