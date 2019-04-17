function get_data(call_function,data,response_func){
    var daten = {"function": call_function,"data":data};
    $.ajax({
        url: "/backend/api.php",
		type: "POST",
		data:daten,
        success: function(data) { response_func(data); }
   });
}
function log_response(data){
    var response = $.parseJSON(data);
    console.log(response);
}
