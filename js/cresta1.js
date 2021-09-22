$(function(){
  $('.toggle').on('click', function() {
    if ($('#header').hasClass('open')) {
      $('#header').removeClass('open');
    } else {
      $('#header').addClass('open');
    }
  });
  $('#mask').on('click', function() {
    $('#header').removeClass('open');
  });
  $('.nav a[href]').on('click', function(event) {
    $('.toggle').trigger('click');
});
});