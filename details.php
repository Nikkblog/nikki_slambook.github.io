<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="ham_style.css">
    <style>
        .details table tr td{
            text-align:left; 
            width:400px;  
        }
      
        .social_icon{
            display: flex;
            width: 80%;
            justify-content: center;
            align-items: center;
            padding: 5px;
        }
        .in, .fb{
            font-size: 45px;
        }

        .social_icon a .fb, .insta, .gh, .in{
            margin: 5px;
            padding: 5px;
            font-size: 35px;
            transition: .4s ease-in-out transform;
            color: white;
            background: rgba(0, 0, 0, 0.6);
            transition: .5s all background; 
            border-radius: 12px;
        }
        .social_icon a .insta:hover{
            transform: scale(1.2);
            background: linear-gradient(rgba(126, 57, 153, 0.8), rgba(221, 45, 147, 0.9), rgba(212, 14, 14, 0.9));
        }
        .social_icon a .fb:hover, .in:hover{
            transform: scale(1.2);
            background: white;
            color: rgb(51, 51, 223);
        }
        .social_icon a .gh:hover{
            transform: scale(1.2);
            background: white;
            color: black;
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
                            <a href="#" class="nav_link">About
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#" class="nav_link">Contact
                            </a>
                        </li>
                    </ul>
               
            </nav>
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
    <div class="heading"><h1 class="login">Thank you :)</h1></div>
    <div class="main" id="detail_main">
            <form class="details">
                <table>
                    <tr><td>
                    <label> Full Name:</label></td>
                    <td><?php echo $_SESSION['name']; ?></td></tr>
                    
                    <tr><td>
                    <label> Relation between u & Nikki:</label></td>
                    <td><?php echo $_SESSION['relation']; ?></td></tr>
                    
                    <tr><td>
                    <label> Phone number:</label></td>
                    <td><?php echo $_SESSION['ph_no']; ?></td></tr>
                    
                    <tr><td>
                    <label> Date of Birth:</label></td>
                    <td><?php echo $_SESSION['dob']; ?></td></tr>
                    
                    <tr><td>
                    <label> Nick Name for Nikki:</label></td>
                    <td><?php echo $_SESSION['nick_name']; ?></td></tr>
                    
                    <tr><td>
                    <label> Things you dislike in Nikki:</label></td>
                    <td><?php echo $_SESSION['hate']; ?></td></tr>

                    <tr><td>
                    <label> Things you like in Nikki:</label></td>
                    <td><?php echo $_SESSION['love']; ?></td></tr>

                    <tr><td>
                    <label> Sweet memories with Nikki:</label></td>
                    <td><?php echo $_SESSION['memory']; ?></td></tr>
                    
                    <tr><td>
                    <label> Any song which u want to dedicate Nikki:</label></td>
                    <td><?php echo $_SESSION['song']; ?></td></tr>
                    
                    <tr><td>
                    <label> Which color suits on Nikki most:</label></td>
                    <td><?php echo $_SESSION['color']; ?></td></tr>
                    
                    <tr><td>
                    <label> Similarities between u & Nikki:</label></td>
                    <td><?php echo $_SESSION['similar']; ?></td></tr>
                    
                    <tr><td>
                    <label> Any message for Nikki:</label></td>
                    <td><?php echo $_SESSION['msg']; ?></td></tr>
                    
                    </table>
            </form>
            <div class="heading"><h1>Feedback :)</h1></div>
            <div class="social_icon">
                    <a href="https://www.facebook.com/nikita.parwala.5/?viewas=100000686899395">
                        <ion-icon name="logo-facebook" class="fb"></ion-icon>
                    </a>
                    <a href="https://www.instagram.com/nikki_parwala32/?hl=en">
                        <ion-icon name="logo-instagram" class="insta"></ion-icon> 
                    </a>
                    <a href="https://github.com/Nikkblog/nikkblog/watchers">
                         <ion-icon name="logo-github" class="gh"></ion-icon>
                    </a>
                    <a href="">
                        <ion-icon name="logo-linkedin" class="in"></ion-icon>
                    </a>

                </div>
        </div>
    </div>
</section>
<script src="script.js"></script>
</body>
</html>