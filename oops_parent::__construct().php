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
	
	class BaseClass {

		function __construct() {
			print "In BaseClass constructor\n";
		}

	}

	class SubClass extends BaseClass {
		
		function __construct() {
			parent::__construct();
			print "<br>"."In SubClass constructor\n";
		}

	}

	$subClass = new SubClass();
	?>
	</div>
	</body>
</html>