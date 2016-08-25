<html>
<head>
<?php require 'include/header.php';?>
<script type="text/javascript">
	$(document).ready(function(){

		// button selector
		$('button').click(function(){
			$('*').hide();
		});

		// this selector
		$('#hide-me').click(function(){
			$(this).hide();
		});
		
	});
</script>


</head>
<body>
<a href="index.php" class="btn btn-primary btn-sm">Go Back</a>
<h2>This is a heading</h2>
<p class="intro">This is a paragraph.</p>
<p>This is another paragraph.</p>
<button class="intro">Hide All </button>
<button id="hide-me">Hide Me </button>

</body>
</html>