$(function(){
    $(window).on("scroll",function(){
        const sliderHeight = $(".main-bg").height();
        if(sliderHeight - 30 < $(this).scrollTop()){
            $("#header").addClass("headerColorScroll");
        } else {
            $("#header").removeClass("headerColorScroll");
        }
    });
    $(window).on("scroll",function(){
        const sliderHeight = $(".main-bg-about").height();
        if(sliderHeight - 30 < $(this).scrollTop()){
            $("#header").addClass("headerColorScroll");
        } else {
            $("#header").removeClass("headerColorScroll");
        }
    });
    $(window).on("scroll",function(){
        const sliderHeight = $(".main-bg-contact").height();
        if(sliderHeight - 30 < $(this).scrollTop()){
            $("#header").addClass("headerColorScroll");
        } else {
            $("#header").removeClass("headerColorScroll");
        }
    });
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