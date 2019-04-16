<?php
 $function = $_POST["funktion"];
  $data = $_POST["data"];
if($auth == true) {
 if (function_exists($function_name)){
 $response = $function($data);
 } else{
	 $response = array (
						"sucess" => false,
						"error"  => "Funktion does not exist");
}else{
	$response = array (
						"sucess" => false,
						"error"  => "Nicht authentifiziert");
}
// codieren der Daten
print_r(json_encode($response));
 
?>