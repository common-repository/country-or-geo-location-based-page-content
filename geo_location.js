

//writing the function code to be used after the js is fteched

var myPrettyCode = function()
{
 var mainscript = $.get("https://freegeoip.app/json/", function (response) {
    $("#ip").html("IP: " + response.ip);
    $("#country_code").html(response.country_code);
    if(response.country_code=='IN' || response.country_code=='US' || response.country_code=='SG' || response.country_code=='AU'){
      document.getElementById(response.country_code).style.display = "block";
  }
 
}, "jsonp");
}

//loading js together

loadScript(myPrettyCode);
