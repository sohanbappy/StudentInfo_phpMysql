<?php 
require_once('functions/dbconfig.php');       
  require_once('functions/functions.php');            
  $obj = new cls_func();						
	$obj = new cls_func();	
	$qry=$obj->view_result_db();
 
	
	$i=0;
?>


<?php include 'header.php'; ?>
<div>
<article>
  <h1>Student Personal Information</h1>
  	<table border="1" class="table" width="100%" style="background-color:#ffffcc";>
  <tr>
    <th>ID</th>
    <th>Name</th> 
    <th>Date-of-Birth</th>
    <th>Sex</th>
    <th>E-mail</th>
    <th>Phone</th>
    <th colspan="2">Action</th>
    
  </tr>
  <?php
  while($rec=$qry->fetch_assoc())							
						{
  ?>
  <tr>
    <td><?php echo $rec['id']; ?></td>
    <td><?php echo $rec['st_name']; ?></td>
    <td><?php echo $rec['st_dof']; ?></td>
    <td><?php echo $rec['sex']; ?></td>
    <td><?php echo $rec['st_mail']; ?></td>
    <td><?php echo $rec['st_phone']; ?></td>
	<td><a href='edit.php?id=<?php echo $rec['id']?>'> Update</a></td>
    <td><a href='delete.php?id=<?php echo $rec['id']?>'> Delete</a></td>

  </tr>
<?php
$i++;
						}
?>
</table>
</br>
<a href = "student.php"><input type = "button" value = "Insert New"></a>
  </article>
</div>

<?php include 'footer.php'; ?>
