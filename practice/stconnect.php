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

$sql="INSERT INTO student_info (st_name,st_id,st_dof,sex,st_mail,st_phone) VALUES ('$_POST[st_name]','$_POST[st_id]','$_POST[date]','$_POST[sex]','$_POST[st_mail]','$_POST[st_phone]')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: http://localhost/project/viewstudent.php");
die();

?>


