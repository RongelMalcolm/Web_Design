<?php
// Database connection configuration
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "signup"; // Replace with your database name

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$uname = $_POST["Username"];
$email = $_POST["Email"];
$password = $_POST["Password"];

// SQL query to insert the form data into the "register" table
$sql = "INSERT INTO register (Username, Email, Password) VALUES ('$uname', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
    header("Location: /Users/nigelhutchinson/Desktop/Web_Design/Final_Project/index.html"); 
    exit();
} 

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
