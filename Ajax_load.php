<!DOCTYPE html>
<html>
<head>
<title>Load Method</title><?php

include 'include/header.php';?>
<script type="text/javascript">
	$( document ).ready( function (){
		$('#btn_first').click(function(){
			$('#load_at').load('article.html #palyers li', function( response, status, xhr ) {
					console.log( response );
					console.log( status );
					console.log( xhr );
				});
		});
	});
</script>	
</head>
<body>
<div>
<input type="button" id="btn_first" value="Load Data">
</div>
<ol id="load_at"></ol>
</body>
</html>