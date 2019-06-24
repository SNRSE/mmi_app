var today = new Date();

function load2(url) {
    $.ajax({
        url: url,
        cache: false,
        dataType: "html",
        success: function (data) {
            loaddata(data);
        }
    });
}

function loaddata(data) {
    console.log(data);
    $("#result").empty;
    $("#result").html(data);
}
//Globale Variablen
var placeholder = {};
var pageid = 0
placeholder["username"] = " Jonas 2";

function isMobile() {
    try {
        document.createEvent("TouchEvent");
        return true;
    } catch (e) {
        return false;
    }
}

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
    } else {
        showpage(GetURLParameter("page"));
    }
    var userid = localStorage['userid'];
    if (!isMobile()) {
        $("#nav_test").load("nav/pc.html");
    } else {
        $("#nav_test").load("nav/mobile.html");
    }
});

function replaceplacehodler() {
    $(".replace").each(function () {
        var rp = $(this).data("replace-with");
        $(this).text(placeholder[rp]);
    })
}


function showpage(page) {
    switch (page) {
        case "home":

            $("#event").css('color', 'black');
            $("#home").css('color', 'black');
            $("#actions").css('color', 'black');
            $("#profile").css('color', 'black');

            $("#home").css('color', 'red');
            load2("sites/Home.html");
            break;
        case "event":

            $("#event").css('color', 'black');
            $("#home").css('color', 'black');
            $("#actions").css('color', 'black');
            $("#profile").css('color', 'black');

            $("#event").css('color', 'red');
            load2("sites/Event.html" + "?test=hallo");
            break;
        case "action":

            $("#event").css('color', 'black');
            $("#home").css('color', 'black');
            $("#actions").css('color', 'black');
            $("#profile").css('color', 'black');

            $("#actions").css('color', 'red');
            load2("sites/Action.html");
            break;
        case "profile":

            $("#event").css('color', 'black');
            $("#home").css('color', 'black');
            $("#actions").css('color', 'black');
            $("#profile").css('color', 'black');

            $("#profile").css('color', 'red');
            load2("sites/Profile.html");
            break;
        case "qr":
            load2("sites/qr.html");
            break;
        default:
            console.log("Page does not exist");
            load2("sites/Error404.html");
    }
}
