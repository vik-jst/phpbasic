<html>
<head>
<?php include 'include/header.php';?>
<script src="js/jQuery v1.11.3.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#btn_insert').click(function() {
			var emp_name 	= $('#emp_name').val();
			var desination 	= $('#desination').val();
			var phone 		= $('#phone').val();
			var salary 		= $('#salary').val();
			var user_data =	{
				name : emp_name,
				desi : desination,
				phn : phone,
				sal : salary,
				action:"Insert"
			}
			$.ajax({
				type:"post",
				url:"application-top/functions.php",
			//	dataType:"json",
				data:user_data,//{name:emp_name,desi:desination,phn:phone,sal:salary,action:"Insert"}, //here name is key and emp_name is value
				
				success:function(data) {
				 	console.log(data);
				 	$("#info").html(data+"Inserted");
				},
				complete: function (jqXHR, status) {
    				alert("Local completion callback.");
  				}
			});
			return false;
		});
	//	$('#btn_select').click(function() {
	//		var emp_name	= $( '#emp_name' ).val();
	//		$.ajax({
	//			type:"post",
	//			url:"application-top/functions.php",
	//			data:{name:emp_name,action:"Select"}, //here name is key and emp_name is value
	//			success:function(data) {
	//				console.log(data);
	//				$("#info").html(data);
	//			}	
	//		});
	//	});
	});
</script>
</head>
	<body>
		<form action="" id="insert" >
			<table>
				<li><a href="index.php" class="btn btn-primary btn-sm" >Main</a></li>
				<tr><td>Name</td><td><input type="text" id="emp_name" name="emp_name"/></td></tr>
				<tr><td>Desination</td><td><input type="text" id="desination" name="desination"/></td></tr>
				<tr><td>Phone Number</td><td><input type="text" id="phone" name="phone"/></td></tr>
				<tr><td>Salary</td><td><input type="text" id="salary" name="salary"/></td></tr>
				<tr><td><input type="button" id="btn_insert" name="btn_insert" value="Submit"/></td></tr>
			</table>
		<div id="info"></div>
		</form>
	</body>
</html>
