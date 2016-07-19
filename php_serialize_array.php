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
		echo "<h2> Serialize Array  </h2>";
		$players	= array( 'Sachin', 'Sehwag', 'Yuvi', 'Dhoni' );
		echo $serialize = serialize($players);
		echo "<pre>";
		print_r($serialize);
		echo "</pre>";
		echo $unserialize = unserialize($serialize);
		echo "<pre>";
		print_r($unserialize);
		echo "</pre>";
		?>
	<div>
	</body>
</html> 
