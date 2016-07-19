<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
?>
<html>
<head>
</head>
<body>
<?php
	include 'application-top/functions.php';
	$link=menu();
	echo $link['menu_slug'];
	?>
	<form  method="post" action="">
	<table>
	<tr>
	<td>Menu</td><td><input type="text" name="menu"></td>
	</tr>
	<tr>
	<td><input type="submit" name="menu_select"></td>
	</tr>
	</table>
	</form>
	
</body>
</html>