<?php 
$item=$_POST['search'];
if(isset($item)){
   $con=mysqli_connect("localhost","root","admin","mms_db");
   
   $select="SELECT * FROM `mms_tb` WHERE id='$item'";
   $sql2=mysqli_query($con,$select);
   while($data=mysqli_fetch_array($sql2)){

   	    echo $data['id']."<br>";}
}
 ?>
  <!DOCTYPE html>
 <html>
 <head>
 	<title>searching</title>
 </head>
 <body>
 
 <form action="roni.php" method="post">
  <input type="text" name="search">
  <input type="submit" name="submit" value="SEARCH">
 </form>
 </body>
 </html>