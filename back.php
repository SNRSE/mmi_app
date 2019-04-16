<?php
 $function = $_POST["funktion"];
 $data = $_POST["data"];
$auth = true;
if($auth == true) {
 if (function_exists($function)== true){
	 echo("hi");
 $response = $function($data);
 } else{
	 echo("false");
	 $response = array (
						"sucess" => false,
						"error"  => "Funktion does not exist");}
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