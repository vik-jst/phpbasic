<html>
<head>
<?php require 'include/header.php';?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.add-p-tag').click(function(){
			$('.intro').append('<p>Helllooooooo</p>');
		});
	});
</script>
</head>
<body>
<a href="index.php" class="btn btn-primary btn-sm">Go Back</a>
<div class="intro">This is a paragraph.</div>
<button class="add-p-tag">Add P tag in above div</button>
</body>
</html>