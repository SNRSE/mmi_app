<?php
session_start();
?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#b91d47">
	<meta name="theme-color" content="#f20601">
	<!-- Aktuallisiert die Website alle 20 Sekunden -->
<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
<?php 
$date = $_GET["date"];
$debug = $_GET["debug"];
$date = $_GET["date"];
$NMK = $_GET["NMK"];
$MAH = $_GET["MAH"];
$Passwort = $_GET["Passwort"];
if ($MAH != "on" AND $NMK != "on" ){
	$MAH = "on";};
if (empty($date)){
	$date = date("Y-m-d");
}
?>
    <title>Monitor Der NMK für den <?php 
	
	;echo $date; ?> </title>
  </head>

  <body>
  <?php 
	if ($Passwort == "NMK") {?>
<style>
#text{
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 30px;    color: white;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
}
#vl{
    border-left: 6px solid green;
	margin: 3px;
	height: 10%; 
}
</style>
<?php 
$file = __FILE__ ;
$filename = substr($file, 21)
?>
  <div id="body">
 <!-- <div id="myElement">-->

  <div class="container">
  <div class="row">
    <div class="col">
 <?php

		#require("/var/www/nmk/display/termine_alberhaus_app.inc");
		require("/var/www/nmk/display/termine_app.inc");
		echo $content; 
	 ?>
<center>
     <form action="<?php echo $filename ?>" method="get" name="myform" id="myform">
Datum <input type="date" name="date" value=<?php echo $date;?> > 
<!--    <select name="Monitor" size="5">
      <option>on</option>
      <option>off</option>
    </select> -->
<input type="submit">
</form> 
</center>
  <hr>
<hr>

</div>
<div id="overlay">
  <div id="text">   
  <center>
  <form action="<?php echo $filename ?>" method="get" name="myform2" id="myform2">
Datum <input type="date"  id="243" onchange="send()" name="date" value=<?php echo $date;?> > 
<div class="checkbox">
  <label>
    <input type="checkbox" name="MAH" <?php if ($MAH=="on") echo "checked";?> data-toggle="toggle">
    MAH
  </label>
</div>
<div class="checkbox ">
  <label>
    <input type="checkbox" name="NMK"  <?php if ($NMK=="on") echo "checked";?> data-toggle="toggle">
   NMK
  </label>
</div>
<input type="text" name="Passwort" value=<?php echo $Passwort;?> >
 <input type="submit">
<!--    <select name="Monitor" size="5">
      <option>on</option>
      <option>off</option>
    </select> -->
</form>
 </center> </div>
</div>
<!--</div>-->
<!-- JS for Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <!-- script für gesten -->
  <script src="hammer.min.js"></script>
  <script>
  var myElement = document.getElementById('myElement');
  var pressed =0;
// create a simple instance
// by default, it only adds horizontal recognizers
var mc = new Hammer(body);
// listen to events...
mc.on("swiperight", function(ev) {
	var date = document.myform.date.value;
	var msec = Date.parse(date);
	var d = new Date(msec);
	var result = new Date(d);
	var days = 1;
	
 result.setDate(d.getDate() - days);
	document.myform.date.value  = result.toISOString().substring(0, 10);
	document.getElementById("myform").submit();
	//window.alert(result.toISOString().substring(0, 10));
});
mc.on("swipeleft", function(ev) {
	var datel = document.myform.date.value;
	var msecl = Date.parse(datel);
	var dl = new Date(msecl);
	var resultl = new Date(dl);
	var daysl = 1;
	
 resultl.setDate(dl.getDate() + daysl);
	document.myform.date.value  = resultl.toISOString().substring(0, 10);
	//window.alert(result.toISOString().substring(0, 10));
	document.getElementById("myform").submit();
});

mc.on("press", function(ev) {
document.getElementById("overlay").style.display = "block";
});
function send() {
	document.getElementById("myform").submit();
	document.getElementById("myform2").submit();
};
  </script>
	<?php };
	if ($Passwort != "NMK") {?>
	<center>
	<form action="<?php echo $filename ?>" method="get" name="myform" id="myform">
	<input type="text" name="Passwort" value=<?php echo $Passwort;?> >
 <input type="submit">
 <?php };?>
 </center>
  </body>

</html>
