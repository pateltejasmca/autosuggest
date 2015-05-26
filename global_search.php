<?php
$display_json = array();
$json_arr = array();
 
$json_arr["id"] = "1";
$json_arr["value"] = "Test";
$json_arr["label"] = "Test";
array_push($display_json, $json_arr);
	
$jsonWrite = json_encode($display_json); //encode that search data
print $jsonWrite;
exit;

?>
