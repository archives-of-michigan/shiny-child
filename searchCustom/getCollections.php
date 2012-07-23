<?php

function dmGetCollectionListAPI(){
	require("Pest.php");
	require("PestJSON.php"); //Pest is a client for RESTful web services
	$pest = new PestJSON('https://server16317.contentdm.oclc.org/dmwebservices');
	$cats = $pest->get('/index.php?q=dmGetCollectionList/json');
	return $cats;
	die();
}


function getCollectionSelect(){	
	
	$myCats = dmGetCollectionListAPI();

	print '<div id="collectionsBoxes">';

	    foreach ($myCats as $key => $val) {
			$ider = str_replace('/','',$myCats[$key]['alias']);

			echo '<div class="collectionRow"><input type="checkbox" class="collBoxes" name="collectionsSelect" value="'.$myCats[$key]['alias'].'" id="idItem'.$ider.'"';
			
			if ($myCats[$key]['alias'] == '/p129401coll7'){
				echo 'checked';
			}
			
			echo '><span class="collectionsText2"><label for="idItem'.$ider.'">&nbsp;'.$myCats[$key]['name'].'</label></span></div>';	
			
			
		}
	print '</div><p>&nbsp;</p>';
	
	die();
}

?>
