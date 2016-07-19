<html>
<head>
<?php include 'include/header.php';?>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "function_upload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$("#targetLayer").html(data);
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
</head>
<body>
<div class="bgColor">
<form id="uploadForm" action="function_upload.php" method="post">
<div id="targetLayer">No Image</div>
<div id="uploadFormLayer">
<label>Upload Image File:</label><br/>
<input name="userImage" type="file" class="inputFile" />
<input type="submit" value="Submit" class="btnSubmit" />
</form>
</div>
</div>
</body>
</html>