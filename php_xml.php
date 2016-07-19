<?php
$xmldata = simplexml_load_file( 'movies.xml' ) or die("Error: Cannot create object");
echo "<pre>";
print_r( $xmldata->children() );
echo "</pre>";
foreach($xmldata->children()  as $xmldat){

	echo $xmldat->name;
}
//print_r($xmldata->movie[0])
?>
