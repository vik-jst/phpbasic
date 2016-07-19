<html>

	<head>
		<?php require 'include/header.php';?>
		<style>
		h1 { font-size: 20px; font-weight: bold; }
		</style>
	</head>
	
	<body>
	<div class="content" >
	<a class="btn btn-primary btn-sm" href="index.php">Go Back</a>
	<?php
	$sachin = array( 'Odi' => '182000', 't20' => '1500', 'test' =>'15000' );
	echo "<pre>";
	print_r( $sachin );
	echo "</pre>";
	$sachin_obj = (object) $sachin;
	echo $sachin_obj->t20;
	?>
	<a href="http://www.richardcastera.com/blog/php-convert-array-to-object-with-stdclass">More Info of array of aoject</a>
	</body>
</html> 
