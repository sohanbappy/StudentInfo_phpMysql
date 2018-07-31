<?php
include('header.php');
?>

<html>

<style>
h1{
	
	text-decoration:underline;
}
label
{
	text-align:center;
	
}
#submit{
	border:2px solid red;
}
</style>
<h1>Fill all the blanks</h1>

<form action="logon.php" method="POST">

<label for="user_name"><b>User Name: <b></label><input type="text" name="user_name" placeholder="maximum 10 letters" maxlength="10" required /><br><br>

<label for="user_password"><b> Password: <b></label><input type="password" name="user_password" placeholder="6-8 letters" maxlength="8" required /><br><br>

 <input type="submit" value="Log In" id="submit" />
<html>

 <?php include('footer.php');
 ?>
