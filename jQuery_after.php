<html>
<head>
<?php require 'include/header.php';?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.add-p-tag').click(function(){
			$('#shift,.intro').after('<p>I m added</p>');
			//$('.intro').after('<p>I m added</p>');
		});
	});
</script>
</head>
<body>
<a href="index.php" class="btn btn-primary btn-sm">Go Back</a>
<p id="shift">I am Shift TAG</p>
<div class="intro">This is a paragraph.</div>
<button class="add-p-tag">Add something after Shift TAG </button>
</body>
</html>