$(function(){
    $('.js-open').click(function () {
        $('#overlay, .modal-window').fadeIn();
        $("body").addClass("no-scroll");
      });
      $('.close,#overlay').click(function () {
        $('#overlay, .modal-window').fadeOut();
        $("body").removeClass("no-scroll"); 
      });
    });
    
    flatpickr("#flatpickr",{
      'locale': 'ja',
      minDate:"today",
      mode:"range",
      dateFormat: "Y-m-d",
    });

$(function(){
  $(window).on("scroll",function(){
    if ($(window).scrollTop()> 78){
      $('#header').addClass('header-change');
    }else {
      $('#header').removeClass('header-change')
    }
  })
})

AOS.init({
  delay:400,
})
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

$(function(){
  $('#tab-other').hide();
  $('.sectionlist').on('click',function(){
    $('.sectionlist').removeClass('active');
    $(this).addClass('active');
    $('.tab-wrapper').not($($(this).attr('href'))).hide();
    $($(this).attr('href')).show();
  });
})