function get_server_data(call_function,data){
    var daten = {"function": call_function,"data":data};
    $.ajax({
        url: "/back/api.php",
		type: "POST",
		data:daten,
        success: function(data) { response_server_data(data); }
   });
}
function response_server_data(data){
    var response = $.parseJSON(data);
    console.log(response);
}