<?php
<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text, der gesendet wird, falls der Benutzer auf Abbrechen drückt';
    exit;
} else {
    echo "<p>Hallo {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>Sie gaben {$_SERVER['PHP_AUTH_PW']} als Passwort ein.</p>";

 $function = $_POST["funktion"];
 $data = $_POST["data"];
$auth = true;
if($auth == true) {
 if (function_exists($function)== true){
 $response = $function($data);
 } else{
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
}
?>