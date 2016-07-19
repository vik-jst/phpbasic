<a class="btn btn-primary btn-sm" href="index.php">Go Back</a>
<?php include 'include/header.php';?>
<div class="container">
	<div class="jumbotron">
		<h3>Static</h3>
		<p>Member=(attribute+method)</p>
		Noted:: A class can never be static. Always there is a function or attribute which can be static.
		Difference between a NORMAL  FUNCTION and STATIC FUNCTION is that in case of STATIC we do not need to create
		object to access static member. To access the member of class syntax is classname :: methodname.In case of static
		$this->variablename is not working...So in case of static we use self keyword.. SYNTAX is self::$variable name
<p>
<?php
echo "Output is:";
include 'application-top/classes.php';
car::get_value(25);
car::show_value();
?>
</p>
	</div>

</div>
