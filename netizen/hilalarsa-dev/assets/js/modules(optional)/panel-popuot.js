//Collapse other tabs for popout 
$(function () {
    var active = true;

    $('#accordion').on('show.bs.collapse', function () {
        if (active) $('#accordion .in').collapse('hide');
    });

});
