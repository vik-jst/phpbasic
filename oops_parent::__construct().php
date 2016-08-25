<html>

	<head>
	<?php require 'include/header.php';?>
		<style>
		h1 { font-size: 20px; font-weight: bold; }
		</style>
	</head>

	<body>
	<div class="content" >
	<a class="btn btn-primary btn-sm" href="index.php">Go Back</a><?php
	
	class BaseClass {

		function __construct( $name ) {
			print "In BaseClass constructor \n";
			echo $name;
		}

	}

	class SubClass extends BaseClass {
		
		function __construct( $name ) {
			parent::__construct( $name );
			print "<br>"."In SubClass constructor\n";
		}
		

	}
	
	$subClass = new SubClass('vik');
	//$subClass->name();
	?>
	</div>
	</body>
</html>