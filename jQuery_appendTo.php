<html>
<head>
<?php require 'include/header.php';?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.add-p-tag').click(function(){
			$('#shift').appendTo('.intro');
		});
	});
</script>
</head>
<body>
<a href="index.php" class="btn btn-primary btn-sm">Go Back</a>
<p id="shift">Shirt me in div tag</p>
<div class="intro">This is a paragraph.</div>
<button class="add-p-tag">Move P tag in above div</button>
</body>
</html>