function clickPHPtoJS(event){
        // Minimal:-)
		$daten = { "function" : "get_version"};
   $.ajax({
        url: "/back/api.php",
		type: "POST",
		data:$daten,
        success: function(data) { clickPHPtoJSResponse(data); }
   });
}
 
function clickPHPtoJSResponse(data) {
   // Antwort des Server ggf. verarbeiten
   var response = $.parseJSON(data);
   var nummer = response.version;
   console.log(response);
   alert("Mein Ergebnis bei AxxG-AJAX: " + nummer);
}
$(document).ready(function () {
   $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
});