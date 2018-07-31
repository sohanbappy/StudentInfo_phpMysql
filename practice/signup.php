
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

<form action="signin.php" method="POST">

<label ><b>Fast Name: <b></label>
<input type="text" name="f_name" required /><br><br>

<label ><b>Last Name: <b></label>
<input type="text" name="l_name"  maxlength="10" required /><br><br>

<label ><b>Email: <b></label>
<input type="text" name="user_email"  required /><br><br>

<label><b>User Name: <b></label>
<input type="text" name="user_name" placeholder="maximum 10 letters" maxlength="10" required /><br><br>

<label for="password"><b> Password: <b></label>
<input type="password" name="user_password"  maxlength="10" required /><br><br>

 <input type="submit" value="Sign Up" id="submit" />
 </form>
<html>

 <?php include('footer.php');
 ?>
