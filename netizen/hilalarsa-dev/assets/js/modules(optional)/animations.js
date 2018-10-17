// Animations

$(function() {
  $('.arrow-r').on('click', function() {
    //Reset all but the current
    $('.arrow-r').not(this).find('.fa-angle-down').removeClass('rotate-element');
    //Rotate/reset the clicked one
    $(this).find('.fa-angle-down').toggleClass('rotate-element');
  })
})
