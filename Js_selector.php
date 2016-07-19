<html>

	<head>
		<?php require 'include/header.php';?>
	<script type="text/javascript">
	$(document).ready(function(){
	
		$('a[href="#"]').click(function(){
		alert('hello');

		});

	});
	</script>
	
	</head>

	<body>
		<ul>
		<li><a href="index.php" class="btn btn-primary btn-sm" >Main</a></li>
			<li><a href="Javascript.php">Javascript</a></li>
		
		</ul>
		<a id="ab" href="#">clcik</a>
	</body>
</html>