<html>

	<head>
		<?php require 'include/header.php';?>
		<style>
		h1 { font-size: 20px; font-weight: bold; }
		</style>
	</head>
	
	<body>
	<div class="content" >
	<a class="btn btn-primary btn-sm" href="index.php">Go Back</a>
	<?php
		echo "<h2> 1 D Array  </h2>";
		$players	= array( 'Sachin', 'Sehwag', 'Yuvi', 'Dhoni' );
	
		echo "<h1>To print all value we have to use loop </h1>";
		
		echo "<pre>";
		print_r($players);
		echo "</pre>";
		foreach($players as $key => $player) {
			echo "$key => $player";
			echo "<br>";
			//echo $key .$player." ";
		}
		
		echo "<h2> 2 D Array With index key </h2>";
		
		$teams	= array(
			'India' => array( 'Sachin', 'Sehwag', 'Yuvi', 'Dhoni' ),
			'Pak'	=> array( 'Afridi', 'Ul Hag', 'Shoib', 'Akram' ),
			'Aus'	=> array( 'Gilly', 'Hyden', 'Max', 'Warner')
		);
		
		echo "<h1> To print all players of teams </h1>";
		
		echo "<pre>";
		print_r( $teams );
		echo "</pre>";
		
		foreach($teams as $key => $team ) {
		//echo "$key => $team";
			foreach( $team as $tea) {
				echo $tea." ";
				echo "<br>";
			}
		}
		
		echo "<h1> To print players of india </h1>";
		
		echo "<pre>";
		print_r( $teams['India'] );
		echo "</pre>";
		
		foreach($teams['India'] as $team) {
			echo $team." ";
		}
		die();
		echo "<h2> 2 D Array Without index key </h2>";
		$teams	= array(
		 array( 'Sachin', 'Sehwag', 'Yuvi', 'Dhoni' ),
		 array( 'Afridi', 'Ul Hag', 'Shoib', 'Akram' ),
		 array( 'Gilly', 'Hyden', 'Max', 'Warner')
		);
		
		echo "<pre>";
		print_r( $teams );
		echo "</pre>";
		
		echo "<h1> To print all players of teams </h1>";
		foreach($teams as $team) {
			foreach($team as $tea) {
				echo $tea." ";
			}
		}
		
		echo "<pre>";
		print_r( $teams['0'] );
		echo "</pre>";
		
		echo "<h1> To print players of india </h1>";
		foreach($teams['0'] as $team) {
			echo $team." ";
		}
		
	?>
	<div>
	</body>
</html> 
