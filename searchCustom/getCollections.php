<?php
require("dBug.php");
require("Pest.php");
require("PestJSON.php"); //Pest is a client for RESTful web services

function dmGetCollectionListAPI(){
	$pest = new PestJSON('https://server16317.contentdm.oclc.org/dmwebservices');
	$cats = $pest->get('/index.php?q=dmGetCollectionList/json');
	return $cats;
}

$myCats = dmGetCollectionListAPI();
/*new dBug($myCats);*/

print '<select id="collectionsSelect" multiple size="12" >';

    foreach ($myCats as $key => $val) {
	
		print '<option value="'.$myCats[$key]['alias'].'">'.$myCats[$key]['name'].'</option>';
	
	}
print '</select>';
?>
