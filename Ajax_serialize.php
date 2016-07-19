<html>
	<head>
		<?php include 'include/header.php';?>
		<style>
		.a { background-color: yellow; margin: 15px; width: 700px }
		.b { background-color: green;  margin:10px;  width: 350px }
		.c { background-color: green;  margin:50px;  width: 50px; border-style:solid; }
		#result { border: 2px solid #008000; height: auto;  padding: 0 0 0 15px; width: auto; }
		</style>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#abc').click(function(){
				   // var str = $(this ).serialize();
				   // console.log(str);
				    var fname=$('#fname').val();
					var lname=$('#lname').val();
					var email=$('#email').val();
							$.ajax({
							url:'Ajax_serialize_data_retrive.php',
							data:{ fname:fname, lname:lname, email:email },
							type:'post',
							success:function(data){
								console.log(data);
								$("#result").html(data);
							}
						});		

				return false;		
			});	
		});
		</script>
	</head>
	<body>
	 <form action="#" id="input_form">
        First name: <input type="text" name="firstname" id="fname"/><br />
        Last name:  <input type="text" name="last name" id="lname"/><br />
        Email: <input type="text" name="email" id="email"/><br />
     	<input type="submit" value="send" id="abc" name="submit" />   
	<div id="result"></div>
    </form>
     

	<a class="btn btn-primary btn-sm" href="index.php">Go Back</a>
	</body>
</html>
