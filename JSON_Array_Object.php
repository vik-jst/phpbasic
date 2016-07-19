<html>
<head>
 <?php include 'include/header.php'?>
	<script type="text/javascript">
	function abc(){
		var jst=[
					{"name":"vikas","salary":"5000"},
					{"name":"prince","salary":"30000"}
					];
			var text_name="";
		for(var i=0;i<jst.length;i++){
			text_name=text_name+jst[i].name+"<br>"
		}
		document.getElementById('info').innerHTML=text_name;
	}
	</script>
</head>
<body>
	<a class="btn btn-primary btn-sm" onclick="abc()">Click Me</a>
	<a href="JSON.php" class="btn btn-primary btn-sm" >Go Back</a>
	<div id="info"></div>
</body>
</html>