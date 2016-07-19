<html>

	<head>
		<?php include 'include/header.php';?>
		<script type="text/javascript">
		$(document).ready(function(){
			var i=0;
			$('.add').click(function(){
			$('.add').hide();
			$('.remove').show();
			$('#continue').show();
			$('#qty').show();
			$('#qty').val(i);	
			});
			$('#minus').click(function(){
			i=i-1;
			$('#qty').val(i);
			if(i==0) {
				$('.add').show();
				$('.remove').hide();
				$('#continue').hide();
			}
		});
				$('.adddd').click(function(){
					i=i+1;
					$('#qty').val(i);
				});
			$('#rem').click(function(){
			i=i-1;
			if(i==0)
			{
				$('.add').show();
				$('.remove').hide();
				$('#continue').hide();
				$('#qty').val(i);
			}
		
			});
		});
		</script>
	</head>
	<a class="btn btn-primary btn-sm" href="index.php">Go Back</a>
	<div>
		<img src="images/p1.jpg"/>
	</div>
	<div>
	<input type="label" id="qty" style="display:none"/>
	<div>
	<div>
		<span class="add">
			<a><button>+</button></a>
			<a class="adddd"><button>ADD</button></a>
		</span>
		<span class="remove" style="display:none">
			<a id="minus"><button>-</button></a>
			<a><button id="rem">Remove</button></a>
			<a class="adddd"><button>+</button></a>
		</span>
	</div>
	<div>
		<img src="images/p1.jpg"/>
	</div>

	<div>
		<span class="add">
			<a><button>+</button></a>
			<a class="adddd"><button>ADD</button></a>
		</span>
		<span class="remove" style="display:none">
			<a id="minus"><button>-</button></a>
			<a><button id="rem">Remove</button></a>
			<a class="adddd"><button>+</button></a>
		</span>
	</div>
	

		<button id="continue" style="display:none;">Continue</button>
	<body>
</html>
