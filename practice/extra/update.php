<!DOCTYPE html>
<html>
<head>
<title>Update Information</title>
<link rel="stylesheet" type="text/css" href="mai.css">
<link rel="stylesheet" type="text/css" href="menu.css">
<script>
function goBack() {
    window.history.back()
}

</script>

</head>
<body>
<font color="white">
<div> <!--logo start-->
<h3 align="center">STUDENT DATABASE MANAGEMENT SYSTEM</h3>
		<a href="#"><img src="images/logo.PNG"></img></a>
<div id="search" method="post" align="right" > <!--search box start-->
<form action="search.php">
		<input type="submit"  class="submit" value="" name="search">
		Id:
		<input type="text"  name="id"  >
</form>
</div> <!--search box close-->
<div id="menu" ><!--menu start-->
<ul >
<li ><a  href="index.html">Home</a></li>
	<li ><a  href="insert.html">Insert</a></li>
	<li><a  href="view.php">View</a></li>
	<li id="active"><a  href="Update.php">Update</a></li>
	<li><a  href="delete.html">Delete</a></li>
</ul>	
</div><!--menu close-->
<form id="form" align="center">
Id:<br>
<input type="text" name="id"><br>
Name:<br>
<input type="text" name="name"><br>
sec:<br>
<select name="sec">
<option value="Day">Day</option>
<option value="Evening">Evening</option>
</select>
<br>
Blood:<br>
<select name="blood">
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select><br>
Date Of Birth:<br>
<input id="meeting" type="date" name="d_o_b"/><br>
phone Number :<br>
<input type="text" name="phone_number"><br>
<center> <input type="submit" value="submit" name="submit"><br>
<input type="button" value="Back" onclick="goBack()">
</center>
</form>
<?php
if(isset($_GET['submit']))
{
require ('connect.php');
$id=$_GET['id'];
$name=$_GET['name'];
$sec=$_GET['sec'];
$blood=$_GET['blood'];
$d_o_b=$_GET['d_o_b'];
$phone_number=$_GET['phone_number'];
$view="SELECT id FROM info_tb WHERE id=$id";
$viewer=$con->query($view);
if ($viewer->num_rows > 0) {
$sql = "UPDATE info_tb SET name='$name',sec='$sec',blood='$blood',d_o_b='$d_o_b',phone_number='$phone_number' WHERE id=$id";

if ($con->query($sql) === TRUE) {
    echo ("<SCRIPT LANGUAGE='Javascript'>
window.alert('Data Updated Succesfully.')
window.location.href='view.php'
   </SCRIPT>");
} else {
    echo "Error updating record: " . $conn->error;
}
}
else
{
echo "This Id has no data";
}
}
?>
</body>
</html>
