$(document).ready(function(){
    const $submitBtn = $("submit")
    $("#form text,#form textarea").on("change",function(){
        if(
            $('#form input[type="text"]').val() !=="" &&
            $('#form input[type="checkbox"]').val() !=="" &&
            $('#form #privacycheck').prop('checked') === true
        ) {
            $submitBtn.prop('disabled',false);
        } else {
            $submitBtn.prop('disabled',true);
        }
    });
});

AOS.init();

$(function(){
    $('a[href^="#"]').click(function(){
        let adjust = 90;
        let speed = 500;
        let type = 'swing';
        let href = $(this).attr("href");
        let target = $(href == '#' || href == "" ? 'html' : href)
        let position = target.offset().top- adjust;
        $("html,body").animate({scrollTop:position},speed,"swing");
        return false;
    });
});

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
