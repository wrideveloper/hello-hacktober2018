//Preloading script

$(document).ready(function () {
    $('#preloader-markup').load("mdb-addons/preloader.html", function () {
        $(window).load(function () {
            $('#mdb-preloader').fadeOut('slow');
        });
    });
});