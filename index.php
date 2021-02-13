<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "basic");

if(isset($_POST['submit'])){
    $name = $_POST['full_name'];
    $relation = $_POST['relation'];
    $ph_no = $_POST['ph_no'];
    $dob = $_POST['dob'];
    $hate = $_POST['hate'];
    $love = $_POST['like'];
    $memory = $_POST['memory'];
    $photo = $_FILES['photo'];
    $song = $_POST['song'];
    $color = $_POST['color'];
    $similar = $_POST['similar'];
    $msg = $_POST['msg'];
    $nick_name = $_POST['nick_name'];



    
    $_SESSION['name']=$name;
    $_SESSION['relation']=$relation;
    $_SESSION['ph_no']=$ph_no;
    $_SESSION['dob']=$dob;
    $_SESSION['hate']=$hate;
    $_SESSION['love']=$love;
    $_SESSION['memory']=$memory;
    $_SESSION['song']=$song;
    $_SESSION['color']=$color;
    $_SESSION['similar']=$similar;
    $_SESSION['msg']=$msg;
    $_SESSION['nick_name']=$nick_name;



        $filename = $photo['name'];
        $fileerror = $photo['error'];
        $filetmp = $photo['tmp_name'];

        $fileext = explode('.', $filename);
        $filecheck = strtolower(end($fileext));

        $fileextstored = array('png', 'jpg', 'jpeg');
        if(in_array($filecheck, $fileextstored)){
            $destinationfile = 'image/' .$filename;
            move_uploaded_file($filetmp, $destinationfile);

            // $_SESSION['pic1']=$_FILES['photo'];
            $_SESSION['pic']=$destinationfile;

    $insert = "insert into slambook_user(name, relation, phone_no, dob, nick_name, hate, love, memory, image, song, color, similar, msg) values('$name', '$relation', '$ph_no', '$dob', '$nick_name', '$hate', '$love', '$memory', '$destinationfile', '$song', '$color', '$similar', '$msg')";
    $query = mysqli_query($conn,$insert);
    if($query){
        header('location:details.php');
    }else{
    echo "try again";
    }
}
}

?>