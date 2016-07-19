<a class="btn btn-primary btn-sm" href="index.php">Go Back</a>
<?php include 'include/header.php';?>
<div class="container">
	<div class="jumbotron">
	<h3>Abstract Class</h3>
	Abstract class is used in inheritance..we cannot create the object of abstract class..for the function which is declare as abstract inside abstract class ,,we do not write the code for that function..instead the we write the code for that function in the child class..
link is 
	http://www.php5-tutorial.com/classes/abstract-classes/
<p>
<?php
echo "Output is:";
include 'application-top/classes.php';
if (class_exists('Dog')) {
$animal = new Dog(); //creaye the object of dog class 
$animal->name = "Bob";
$animal->age = 7;
echo $animal->Describe();
echo $animal->Greet('Banga');
}
else
{
	echo "something went wrong";
}
?>
</p>
</div>
</div>
