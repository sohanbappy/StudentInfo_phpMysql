<?php
class cls_func{
	
	public function con(){
		$connect = new dbconfig();
		return $connect->connection();
	}
	public function view_result_db(){
		$result = $this->con()->query("Select * from student_info");
		return $result;
	}
	public function data_insert($id,$st_name,$st_dof,$sex,$st_mail,$st_phone){
		$result = $this->con()->query("INSERT INTO student_info(id,st_name,st_dof,sex,st_mail,st_phone) VALUES('$id','$st_name','$st_dof','$sex','$st_mail','$st_phone')");
		return $result;
	}
	public function data_update($id,$st_name,$st_dof,$sex,$st_mail,$st_phone){
		$result = $this->con()->query("UPDATE student_info set st_name='$st_name',st_dof='$st_dof',sex='$sex', st_mail='$st_mail',st_phone='$st_phone' where id='$id'");
		return $result;
	}

public function edit_result_db($id){
		$result = $this->con()->query("Select * from student_info where id='$id'");
		return $result;
	}

	public function delete_result_db($id){
		$result = $this->con()->query("Delete from student_info where id='$id'");
		return $result;
	}

	}
	?>
	