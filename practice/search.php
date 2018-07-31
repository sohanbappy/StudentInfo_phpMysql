<?php
$data1=$_POST['search'];


if(isset($data)){

$db_name="result_db";
$host_username="root";
$host_password="";
$host="localhost";
$connect=mysqli_connect($host, $host_username, $host_password, $db_name);

   $select="SELECT * FROM `student_info` WHERE st_id = '$data'";
   
   $sqll=mysqli_query($connect,$select);
    while($roni= mysqli_fetch_array($sqll)){
    
	echo $roni['st_id'];
   	   
}

}

?>