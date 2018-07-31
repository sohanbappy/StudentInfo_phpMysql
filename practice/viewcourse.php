<?php include 'header.php'; ?>

<?php
include "connect.php";

$sql = "SELECT * FROM course_info";
if(isset($_POST['search'])){
	$search_term=mysql_real_escape_string($_POST['search']);
	$sql="SELECT * FROM student_info WHERE st_id = '$search_term'";
	$query= mysqli_query($connect,$sql) or die(mysqli_error($connect));
	
}
else{
$query= mysqli_query($connect,$sql) or die(mysqli_error($connect));

}

?>
<div class="panel-heading " style="text-align: center; background-color:#ff9999;">
				<h3 style="color:green; background-color:white; text-decoration:underline;">Course Information<h3>
				</div>
<table border="1" class="table" width="100%" style="background-color:#ffffcc";>

<tr style="color:white; background-color:black;">
<td>Course Code</td>
<td>Course Name</td>
<td>Course Credit</td>
<td>Course Grade</td>
</tr>
<?php while($row = mysqli_fetch_array($query)){ ?>
<tr>
<td><?php echo $row['c_code']; ?></td>
<td><?php echo $row['c_name']; ?></td>
<td><?php echo $row['c_credit']; ?></td>
<td><?php echo $row['c_grade']; ?></td>

</tr>
<?php } ?>
</table>
<?php include 'footer.php'; ?>