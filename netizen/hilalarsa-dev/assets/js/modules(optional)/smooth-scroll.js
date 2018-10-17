//SMOOTH SCROLL
$(".smooth-scroll").on('click', 'a', function (event) {
    event.preventDefault();
    var elAttr = $(this).attr('href');
    $('body,html').animate({
        scrollTop: $(elAttr).offset().top
    }, 700);
});