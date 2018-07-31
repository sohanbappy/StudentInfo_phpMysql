<?php include 'header.php'; ?>

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

		

		$qry = $obj->data_insert($id,$st_name,$st_dof,$sex,$st_mail,$st_phone);
			if ($qry){
				echo "Successfully Inserted".'</br><a href = "index.php"><input type = "button" value = "View" ></a>';
				

					exit();
			}
			else{
				echo "not posted!";
				}
	}
	
?>

<body>
<style>

table tr,td{
	border:1px solid #5BC0CB;
	
	
}
#container{
	
	width:500px;
	height:400px;
	margin:0 auto;
	text-align:center;
}

</style>

<br>

<div id="container">
<form enctype="multipart/form-data" method="post" class="form-horizontal">
<table style="width:30%">
  <tr>
<h3 style="text-decoration:underline">Student Information</h3>
  </tr>
   <tr>
    <td>Student's Id</td>
    <td><input id="id" name="id" type="text" placeholder="Enter Your Id" required></td>
  </tr>
<tr>
    <td>Student's Name</td>
    <td><input id="name" name="st_name" type="text" placeholder="Enter Your Name" required></td>
  </tr>

  <tr>
    <td>Student's DoF</td>
    <td><input id="name" name="st_dof" type="date"  required></td>
  </tr>

<tr>
    <td>Sex</td>
<td><input type="radio" name="sex" value="Male" checked> Male</td><br>
<td><input type="radio" name="sex" value="Female"> Female</td><br><br>
</tr>

  <tr>
    <td>Email</td>
    <td><input id="contact" name="st_mail" type="text" required></td>
  </tr>
  
   <tr>
    <td>Contact</td>
    <td><input id="email" name="st_phone" type="text" required></td>
  </tr>
<tr>
 <td>
<button id="submit" name="submit" class="btn btn-primary">ADD</button>
 </td>
</tr>

</table>
</form>
</div>
<?php include 'footer.php'; ?>