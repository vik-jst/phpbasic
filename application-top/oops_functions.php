<?php
include_once 'crudclass.php';
if(isset($_POST['submit']))
    {
 		$emp_name=$_POST['first_name'];
 		$desination=$_POST['destination'];
		$phone=$_POST['salary'];
		$salary=$_POST['phone'];
		echo $emp_name;
 		$obj=new CRUD();
 		$obj->create($emp_name,$desination,$salary,$phone);
 	}

?>