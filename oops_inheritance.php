<a class="btn btn-primary btn-sm" href="index.php">Go Back</a>
<?php include 'include/header.php';?>
<div class="container">
	<div class="jumbotron">
	<h3>Interface</h3>
	In interface we jsut decalre the function but we do not write the code in interface and by the default the function are abstract..the class which implements that interface define that function 
<p>
<?php
echo "Output is:";
include 'application-top/classes.php';
$obj=new son();
$obj->get_nature('love');
//$obj->get_own_nature('hate');
$obj->show_all();
?>
</p>
</div>
</div>
