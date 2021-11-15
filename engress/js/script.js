jQuery(function(){
    jQuery('.toggle').on('click', function () {
        if(jQuery('#header').hasClass('open')) {
            jQuery('#header').removeClass('open');
        }else {
            jQuery('#header').addClass('open');
        }
    })
    jQuery('#mask').on('click',function(){
        jQuery('#header').removeClass('open');
    });
    jQuery('.nav a[href]').on('click',function(event){
        jQuery('.toggle').trigger('click');
    });
});
jQuery(function(){
    jQuery('.ac-parent').on('click',function(){
        jQuery(this).next().slideToggle();
        jQuery(this).toggleClass('open');
        jQuery('.ac-parent').not(this).removeClass('open');
        jQuery('.ac-parent').not(jQuery(this)).next('.ac-child').slideUp();
    });
});