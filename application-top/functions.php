<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

	$action=$_POST['action'];

	if($action=="Insert"){
    	insert();
	}

    function insert() {
	    include 'db.php';
	    if( isset( $_POST['name'] ) ) {
	    	
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
			
			if( $con->query( $query ) ) {
				//echo "Inserted";
			} else {
				echo "error". $con->error;
			}
	    } 	

	}
  
?>