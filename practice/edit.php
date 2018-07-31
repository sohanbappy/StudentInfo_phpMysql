<?php
include ('header.php');
?>
  <html>
      <center>
<?php
require_once('functions/dbconfig.php');				
	require_once('functions/functions.php');						
	$obj = new cls_func();
	
	if (isset($_POST['submit']))
	{
		$id = addslashes("$_POST[id]");
		$st_name = addslashes("$_POST[st_name]");
		$st_dof = addslashes("$_POST[st_dof]");
		$sex = addslashes("$_POST[sex]");
     $st_mail = addslashes("$_POST[st_mail]");
     $st_phone = addslashes("$_POST[st_phone]");


		

		$qry = $obj->data_update($id,$st_name,$st_dof,$sex,$st_mail,$st_phone);
			if ($qry){
				echo "Successfully Updated".'</br><br><br><br><br><a href = "display.php"><input type = "button" value = "View" ></a>';
					include ('footer.php'); 
					exit();
			}
			else{
				echo "not posted!";
				}
	}
?>
<style>
table, th, td {
    border: 1px solid black;
	border-collapse: collapse;
}
</style>

<?php
$qry1=$obj->edit_result_db($_GET['id']);
$rec=$qry1->fetch_assoc();

?>
<form action="" method="post" class="form-horizontal">
<table style="width:30%">
  <tr>
<h3>Registration Form</h3>
  </tr>
  <tr>
    <td> Id</td>
    <td><input id="id" name="id" type="text" value="<?php echo $rec['id']; ?>" placeholder="Enter Your Id" readonly></td>
  </tr>
  <tr>
    <td>Student's Name</td>
    <td><input id="name" name="st_name" type="text" value="<?php echo $rec['st_name']; ?>" placeholder="Enter Your Name" required=""></td>
  </tr>
  <tr>
    <td>Student's DoF</td>
    <td><input id="gender" name="st_dof" value="<?php echo $rec['st_dof']; ?>" type="text"></td>
  </tr>
    <tr>
    <td>Sex</td>
    <td><input id="age" name="sex" value="<?php echo $rec['sex']; ?>" type="text"></td>
  </tr>
       <tr>
    <td>E-mail</td>
    <td><input id="phone" name="st_mail" value="<?php echo $rec['st_mail']; ?>" type="text"></td>
       <tr>
    <td>Phone</td>
    <td><input id="room" name="st_phone" value="<?php echo $rec['st_phone']; ?>" type="text"></td>
  </tr>
       
  <tr>
  <td></td>
  <td>
  <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
	<a href = "index2.php"><input type = "button" value = "Cancel" ></a>
	</td>
	</tr>
</table>

</form>
      </center>
	<?php
include ('footer.php');
?>
</html>