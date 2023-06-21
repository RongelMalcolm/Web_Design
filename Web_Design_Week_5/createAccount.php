<?php
// Database connection String
$con = mysqli_connect('localhost','root','');// Host name, user, password

//Database Selection
mysqli_select_db($con,'id20757496_wd_w5_assignment');// database name

$sql = "INSERT INTO id20757496_wd_w5_assignment (username, email, password) VALUES ('$_POST Rongel', '$_POST malcolm6299@gmail.com', '$_POST Hutchinson473')";

if ($con->query($sql) == TRUE) {
    echo "User Registered Successfully.";
	header("refresh:3,index.html");
        
    }
    else {

    echo $con->error;
    header("refresh:3,index.html");
    }
    $con->close();
?>
