<?php
include_once 'db.php';
class CRUD
{
	public $con;
	public $result;
	public $row;
	public function __construct()
	{
		$db = new DB_con();
		$this->con = $db->con;
	}
	 public function create($emp_name,$desination,$salary,$phone)
	 {	 	
	 	$query="insert into employee(emp_name, destination, salary, phone) values('$emp_name','$desination','$salary','$phone');";
		if ($this->con->query($query) === TRUE)
		{
		echo "New record created successfully";
		} 
		else 
		{
		    echo "Error: " . $query . "<br>" . $this->con->error;
		}
	 }

	//  public function update($emp_name,$desination,$salary,$phone,$id)
	//  {
	//  	$query="update employee set emp_name='$emp_name', destination='$desination',salary='$salary',phone="$phone" where emp_id='$id'";
	// 	if($this->con->query($query)==TRUE)
	// 	{
	// 	echo "Updated successfully";
	// 	} 
	// 	else
	// 	{
	// 	    echo "Error: " . $query . "<br>" . $this->con->error;
	// 	}

	// }	
		public function get_id($id)
		{
			$query="select emp_id from employee where emp_id='$id'";
			$this->result = $this->con->query($query);
			if ($this->result->num_rows > 0) 
			{
			 $this->row = $this->result->fetch_assoc();
			 return  $this->row["emp_id"];
				 
			} 
			else
			 {
			    echo "0 results";
			}
		} 


		public function read()
		{
			$query="select * from employee";
			$this->result = $this->con->query($query);
			if ($this->result->num_rows > 0) 
			{
				
				 while($this->row = $this->result->fetch_assoc())
				 {
				 
				return $this->row;
				 }
			} 
			
		}

}
?>