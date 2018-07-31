<?php
$db_name="result_db";
$host_username="root";
$host_password="";
$host="localhost";
$item =$_POST['search'];
if (isset($$item)){
	
	$query="SELECT * FROM `student_info` WHERE st_id='$item'";
    $search_result =filtertable($query);
	
	
	}else{
	$query ="SELECT * FROM `student_info`";
	$search_result =filtertable($query);
}
function filtertable($query){
	$connect= mysqli_connect("localhost","root","","student_info");
	$filter_result=mysqli_query($connect,$query);
	return $filter_result;
}




?>

<!DOCTYPE html>
<html>
<head>
<title>data search</title>
<style>
table,tr,th,td
{
	border: 1px solid black;
}


</style>
</head>
<body>

</body>
</html>


<table>
<tr>
      
      <th>Student Name</th>
	  <th>Student ID</th>
      <th>Student Dof</th>
      <th>Sex</th>  
      <th>Student Email</th>
	    <th>Student Phone</th>
     

</tr> 
<?php while($row=mysqli_fetch_array($search_result)){?>
<tr> 
<td> <?php echo $row['st_name'];?></td>
<td> <?php echo $row['st_id'];?></td>
<td> <?php echo $row['st_dof'];?></td>
<td> <?php echo $row['sex'];?></td>
<td> <?php echo $row['st_mail'];?></td>
<td> <?php echo $row['st_phone'];?></td>

</tr>
<?php }?>
</table>
