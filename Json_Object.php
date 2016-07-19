<html>
<head>
 <?php include 'include/header.php';?>
	<script type="text/javascript">
	function xyz(){
	$('#info').html("");
	var students = [	{
		   					"name" : "Steve",
		   					"age" :  "29",
		   					"gender" : "male"
						},
						{
						   "name" : "Peter",
						   "age" : "32",
						   "gender" : "male"
						},
						{
						   "name" : "Sophie",
						   "age" : "27",
						   "gender" : "female"
						}
					];
		var stu_count = students.length;
		console.log(students);
		console.log(JSON.stringify(students));
		var i;
		for( i=0; i<stu_count; i++ ) {
			$( '#info' ).append( students[i].name + "<br>" );
		}
	}
	function abc(){
		var company={ "name":"Jst", "employes":"30" };
		document.getElementById('info').innerHTML=company.name;
	}
	</script>
</head>
<body>
	<a class="btn btn-primary btn-sm" onclick="abc()">Click Me</a>
	<a class="btn btn-primary btn-sm" onclick="xyz()">Click Me</a>
	<a href="index.php" class="btn btn-primary btn-sm" >Go Back</a>
	<div id="info"></div>
	</body>
</html>