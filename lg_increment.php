<html>

	<head>
		<?php require 'include/header.php';?>
		<style>
		h1 { font-size: 20px; font-weight: bold; }
		</style>
	</head>
	
	<body>
	<div class="content" >
	<a class="btn btn-primary btn-sm" href="index.php">Go Back</a> <?php
		$x = 5;

		echo $x;
		echo "<br />";
		
		echo $x++;

		echo "<br />";
		
		echo $x++;


		echo "<br />";

		echo $x++ + $x++;
		
		echo "<br />";
		echo $x;
		
		echo "<br />";
		
		echo $x-- - $x--;
		echo "<br />";
		echo $x; ?>
	<div>
	</body>
</html> 
