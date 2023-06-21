<?php


// Database connection String
$con = mysqli_connect('localhost','Rongel','Hutchinson_473');// Host name, user, password

//Database Selection
mysqli_select_db($con,'id20757496_wd_w5_assignment');// database name 

$username = $_POST['Username'];
$password = $_POST['Password'];






$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($con,$query)or die(mysqli_error());
$row = mysqli_fetch_array($result);
$num_row = mysqli_num_rows($result);
		
 if( $num_row > 0 ) { 


print "<h1>Successful Login</h1>";
print "<br>";
print "<h2>". $username ."</h2>";
header("refresh:5,cal.html");
}
else if ($num_row == 0){          
echo '<h1> Login Unsuccessful</h1>';
header("refresh:5,index.html");
}
else{ 
echo 'Error, Error';
header("refresh:7,index.html");
}	
$con->close();

?>