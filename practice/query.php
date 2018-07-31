<?php include 'header.php'; ?>

<?php
include "connect.php";

$sql = "SELECT * FROM student_info";
if(isset($_POST['search'])){
	$search_term=mysql_real_escape_string($_POST['search']);
	$sql="SELECT * FROM student_info WHERE id = '$search_term'";
	$query= mysqli_query($connect,$sql) or die(mysqli_error($connect));
	
}
else{
$query= mysqli_query($connect,$sql) or die(mysqli_error($connect));

}

?>
<div class="panel-heading " style="text-align: center; background-color:#ff9999;">
				<h3 style="color:green; background-color:white; text-decoration:underline;">Student Information<h3>
				</div>
<table border="1" class="table" width="100%" style="background-color:#ffffcc";>

<tr style="color:white; background-color:black;">
<td>Student's ID</td>
<td>Student's Name</td>
<td>Student's Date of Birth</td>
<td>Sex</td>
<td>Student's Mail</td>
<td>Student's Phone</td>
</tr>
<?php while($row = mysqli_fetch_array($query)){ ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['st_name']; ?></td>
<td><?php echo $row['st_dof']; ?></td>
<td><?php echo $row['sex']; ?></td>
<td><?php echo $row['st_mail']; ?></td>
<td><?php echo $row['st_phone']; ?></td>
</tr>
<?php } ?>
</table>
<?php include 'footer.php'; ?>