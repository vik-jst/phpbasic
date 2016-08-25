<html>

	<head>
		
            <?php include 'include/header.php';?>
                 <style type="text/css">
		.a { background-color: yellow; margin: 15px; width: 700px }
		.b {background-color: green;margin: 10px;  width: 350px }
		.c { background-color: red; margin: 50px; width:50px; border-style:solid; }
		</style>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#addclass').click(function(){
					$('.a').addClass( "b c" );
					$(".a").css({"background-color": "blue", "font-size": "200%"});
				});
			});
		</script>
	</head>
	<body>
		<a id="addclass">click me</a>
		<div class="a">Hello</div>
                <a class="btn btn-primary btn-sm" href="index.php">Go Back</a>
	</body>
</html>
