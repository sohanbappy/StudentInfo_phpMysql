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

$sql="INSERT INTO course_info (c_code,c_name,c_credit,c_grade) VALUES ('$_POST[c_code]','$_POST[c_name]','$_POST[c_credit]','$_POST[c_grade]')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

