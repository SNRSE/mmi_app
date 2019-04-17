<?php
 $function = $_POST["funktion"];
 $data = $_POST["data"];
$auth = true;
if($auth == true) {
 if (function_exists($function)== true){
 $response = $function($data);
 } else{
     $er = "Funktion does not exist" + $function
	 $response = array (
						"sucess" => false,
						"error"  => $er);}
}else{
	$response = array (
						"sucess" => false,
						"error"  => "Nicht authentifiziert");
}
// codieren der Daten
echo(json_encode($response));
 function get_version(){
	 $response = array (
						"sucess" => true,
						"version"  => "0.1");
 }
?>