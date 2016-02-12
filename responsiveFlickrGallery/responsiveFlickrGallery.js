var content = $('.generateIframe');
$(window).on('resize', function(){
    var height = $('#responsiveGallery').height();
    content.height(height);
}).trigger('resize');