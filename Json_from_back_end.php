<html>
<head>
<script src="js/jQuery v1.11.3.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	$('#insert').submit(function(){
		var emp_name=$('#emp_name').val();
		var desination=$('#desination').val();
		var phone=$('#phone').val();
		var salary=$('#salary').val();
		//alert(emp_name);alert(desination);alert(phone);alert(salary);
			$.ajax({
				type:"post",
				url:"application-top/functions.php",
				data:{name:emp_name,desi:desination,phn:phone,sal:salary}, //here nae is key and emp_name is value
				success:function(data){
					obj=jQuery.parseJSON(data);
					console.log(obj);
					$.each( obj, function( key, value ) {
						$('#info').append( value );
  				
					});
			 	//$("#info").html(obj.a); // msg is key of json object whiich is declare in functions.php
				}
		});	
return false;
	});

 });
</script>
</head>
<body>
<form action="" id="insert" >
<table>
<h1></h1>
<li><a href="JSON.php" class="btn btn-primary btn-sm" >Back</a></li>
<tr><td>Name</td><td><input type="text" id="emp_name" name="emp_name"/></td></tr>
<tr><td>Desination</td><td><input type="text" id="desination" name="desination"/></td></tr>
<tr><td>Phone Number</td><td><input type="text" id="phone" name="phone"/></td></tr>
<tr><td>Salary</td><td><input type="text" id="salary" name="salary"/></td></tr>
<tr><td><input type="submit" name="btn" value="Submit"/></td></tr>
</table>
<div id="info"></div>
</form>
</body>
</html>