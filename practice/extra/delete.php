<?php 
include('header2.php');
?>
<html>
<title>data project</title>
<head><h1>Data Project</h1></head>
<body>
<button onclick="goBack()">Go Back</button>


<script>
function goBack() {
    window.history.back();
}
</script>
<form method="post">
<input type="text" name="Student_ID">
<input type="submit" value="delete" name="delete">

<?php
if(isset($_POST['delete'])){
require ("connect.php");
$id=$_POST['Student_ID'];
$sql = "DELETE FROM stu_tb where Student_ID='$id'";
$result = $connect->query($sql);
         if(!$result){
	       die("<h1>Fail!</h1>");
                   }
           else{
	         echo ("<h1>Item Deleted!</h1>");
               }
     } 
else {
    die ("<h1>Need Delete Item!</h1>");
}
$connect->close();
?>
</table> 
</body>
</html>
