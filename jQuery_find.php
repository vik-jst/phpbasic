<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php require 'include/header.php';?>
<style type="text/css">
	.simple{
	background-color: powderblue;
    border: 1px solid red;
    height: 150px;
    margin: 40px;
    padding: 0 0 10px 25px;
    width: 300px;
    border-radius: 15px;
	}

</style>
<script type="text/javascript">
	$(document).ready(function(){
		
		$('.find-parent').click(function(){
			$('.level-1').find('.item-iii').text("good");
		});
		
		$('.change-color').click(function(){
			$('p,div').find('span').text('Helllo');
		});
	});
</script>
</head>
<body>
<div class="simple">
	<ul class="level-1">
		<li class="item-i">level-1 I</li>
		<li class="item-ii">II
			<ul class="level-2">
				<li class="item-a">A</li>
				<li class="item-b">B
					<ul class="level-3">
						<li class="item-1">1</li>
						<li class="item-2">2</li>
						<li class="item-3">3</li>
					</ul>
				</li>
				<li class="item-c">C</li>
			</ul>
		</li>
		<li class="item-iii">III</li>
	</ul>
	<button class="find-parent">Click</button>
</div>
<div class="simple">
	<p><span>Hello</span>, how are you?</p>
	<p>Me? I'm <span>good</span>.</p>
	<div>Did you <span>eat</span> yet?</div>
	<button class="change-color">Click</button>
</div>
</body>
</html>