/* ROTATING CARDS */
$('.rotate-btn').on('click', function () {
    var cardId = $(this).attr('data-card');
    $('#' + cardId).toggleClass('flipped');

});
