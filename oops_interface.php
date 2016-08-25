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
if (class_exists('xyz')) {
$obj = new xyz();
$obj ->get_myname();	
} else {
    echo "something went wrong";
}?>
</p>
</div>
</div>
