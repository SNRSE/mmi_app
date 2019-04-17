function call_server(call_function,data){
    var daten = {"function": call_function,"data":data};
    $.ajax({
        url: "/backend/api.php",
		type: "POST",
		data:daten,
        success: function(data) { response_server_data(data); }
   });
}
function response_server_data(data){
    var response = $.parseJSON(data);
    console.log(response);
}
function call_server_demo(call_function,data){
    var daten = {"function": call_function,"data":data};
    $.ajax({
        url: "/backend/api.php",
		type: "POST",
		data:daten,
        success: function(data) { alert(data); }
   });
}