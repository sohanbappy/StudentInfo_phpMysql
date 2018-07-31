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

$name = $_POST['user_name'];
$password = $_POST['user_password'];

$sql = "SELECT * FROM signup_info WHERE user_name ='$name' AND user_password ='$password' ";


$result = $conn->query($sql);

 if(!$row = $result->fetch_assoc()){
	 
	 echo "Invalid Username or Password !!!";
 }
 else {
	 
	 echo "You are logged in !!!".'</br></br></br></br></br>
	<a href = "entry.php"><input type = "button" value = "Entry" ></a></br></br></br>';
 }
 
 
//header("Location: http://localhost/project/entry.php");
//die();

?>
<br>
<br>
<br>

<button value="Home"><a href="index.php">Home</a></button>


