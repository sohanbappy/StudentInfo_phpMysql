<?php include 'header.php'; ?>

<?php
require_once('functions/dbconfig.php');				
	require_once('functions/functions.php');						
	$obj = new cls_func();


$qry=$obj->delete_result_db($_GET['id']);
if($qry)
{
	echo"Delete Successful".'</br></br></br></br></br>
	<a href = "display.php"><input type = "button" value = "View" ></a></br></br></br>';
	

}
?>
<?php include 'footer.php'; ?>
