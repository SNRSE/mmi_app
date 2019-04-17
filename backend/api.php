<?php
 $function = $_POST["function"];
 $data = $_POST["data"];
$auth = true;
if($auth == true) {
 if (function_exists($function)== true){
 $response = $function($data);
 } else{
	 $response = array (
						"sucess" => false,
						"error"  => $function);}
}else{
	$response = array (
						"sucess" => false,
						"error"  => "Nicht authentifiziert");
}
// codieren der Daten
echo(json_encode($response));

#Functionen :
 function get_version($fdata){
	 $response = array (
						"sucess" => true,
						"version"  => "0.1");
     return($response);
 }
 function get_userdata($fdata){
	 $response = array (
						"sucess" => true,
                        "id"  => "1",
						"username"  => "Max",
                        "name"  => "Max Musterman",
                        "alter"  => "13",
                        "ort"  => "Metzingen",
                        "punkte"  => "120"
     );
     return($response);
 }
?>