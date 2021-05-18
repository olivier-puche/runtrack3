$(function() {
    var i = 2;
    $("#button").click(function() {
        if (i % 2 == 0) {
            $("#divtext").append("<p>le $ est un bon élément monétaire. Le # de twitter est une bonne ID. Il faudra faire le point avec la classe pour cacher cet élément.</p>");
        } else {
            $("#divtext").empty();
        }
        i++;
    })
})