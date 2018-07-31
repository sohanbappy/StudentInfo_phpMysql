<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO signup_info (f_name,l_name,user_email,user_name,user_password) VALUES ('$_POST[f_name]','$_POST[l_name]','$_POST[user_email]','$_POST[user_name]','$_POST[user_password]')";


$result = $conn->query($sql);
 echo "Data added successfully";
//header("Location: http://localhost/project/entry.php");
//die();

?>
<br>
<br>
<br>
<button value="Home"><a href="index.php">Home</a></button>


