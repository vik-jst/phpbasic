<html>
	<head>
		<?php include 'include/header.php';?>
	</head>
	<body>
<form action="application-top/oops_functions.php" method="POST">
	<table>
	<a href="oops_crud.php" class="btn btn-primary btn-sm" >Go Back</a>
	<tr><td>Name</td><td><input type="text" name="first_name"/></td></tr>
	<tr><td>Destination</td><td><input type="text" name="destination"/></td></tr>
	<tr><td>Salary</td><td><input type="text" name="salary"/></td></tr>
	<tr><td>Phone</td><td><input type="text" name="phone"/></td></tr>
	<tr><td><input type="submit" name="submit" value="submit"/></td></tr>
	</table>
	</form>
	</body>
</html>