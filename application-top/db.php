<?php
$con = mysqli_connect("localhost","root","dev_root","jst");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
  else
  {

	
  }
?>

<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASSWORD','dev_root');
define('DB_NAME','jst');
class DB_con
{
	public $con;
	function __construct()
	{
		$this->con = mysqli_connect("localhost","root","root","jst");
		if (!$this->con)
		  {
		  die('Could not connect: ' . $this->con->connect_error);
		  }
		  else
		  {
		  }
	}
}
?>
