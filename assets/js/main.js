/*function clickPHPtoJS(event){
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
}*/

//Globale Variablen
var placeholder = {};
var pageid = 0
placeholder["username"] = " Jonas 2";


function GetURLParameter(sParam) {
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) {
            return sParameterName[1];
        }
    }
}

$(document).ready(function () {
    
    if (typeof GetURLParameter("page") === 'undefined') {
        showpage("home");
    } else {showpage(GetURLParameter("page"));
    }
    
        $("#nav_test").load("nav/mobile.html",alert("test"))
    
    $("#home").click(function () {
        showpage("home");
    })
    $("#event").click(function () {
        showpage("event");
    })
    $("#action").click(function () {
        showpage("action");
    })
    $("#profile").click(function () {
        showpage("profile");
    })

});

function replaceplacehodler() {
    $(".replace").each(function () {
        var rp = $(this).data("replace-with");
        $(this).text(placeholder[rp]);
    })
}

function idtopage(id) {
    id = id % 5;
    switch (id) {
        case 0:
            return "qr";
            break;
        case 1:
            return "home";
            break;
        case 2:
            return "event";
            break;
        case 3:
            return "action";
            break;
        case 4:
            return "profile";
            break;
        default:
            return "home";

    }
}

function showpage(page) {
    switch (page) {
        case "home":
            $("#result").empty;
            $("#result").load("sites/Home.html", replaceplacehodler());
            break;
        case "event":
            $("#result").empty;
            $("#result").load("sites/Event.html", replaceplacehodler());
            break;
        case "action":
            $("#result").empty;
            $("#result").load("sites/Action.html", replaceplacehodler());
            break;
        case "profile":
            $("#result").empty;
            $("#result").load("sites/Profile.html", replaceplacehodler());
            break;
        case "qr":
            $("#result").empty;
            $("#result").load("sites/Qr.html", replaceplacehodler());
            break;
        default:
            console.log("Page does not exist");
            $("#result").empty;
            $("#result").load("sites/Error404.html");
    }
}
