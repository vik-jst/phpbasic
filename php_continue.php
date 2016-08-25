<?php
$players = array( 'Sachin', 'Sehwag', 'Yuvi', 'Dhoni', 'Gilly', 'Gail', 'Afridi' );

foreach( $players as $player) {
	if( $player == in_array( $player, array('Sachin', 'Sehwag') ) ){
		continue; // This will not print Sachin and Sehwag
	}
	echo $player;
	echo '<br>';
}

?>