<?php
  if(isset($_POST['stu_name'])||isset($_POST['stu_class'])||isset($_POST['stu_email']))
    {
    	$name=$_POST['stu_name'];
    	echo $name;
        echo "heloo";
        die();
    	include 'db.php';
		$emp_name=$_POST['name'];
		$desination=$_POST['desi'];
		$phone=$_POST['phn'];
		$salary=$_POST['sal'];
	
		//$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
		//print_r(json_encode($arr));
		//$error=array("msg"=>"inserted","msg1"=>"secondarugment");
		//$abc=json_encode($error, JSON_PRETTY_PRINT);
		//return $abc;
		//print_r($abc);
		$query="insert into employee(emp_name, destination, salary, phone) values('$emp_name','$desination','$salary','$phone');";
		
		if($con->query($query)){
			echo "inserted";
		}
		else
		{
			echo "error". $con->error;
		}
    } 	
?>