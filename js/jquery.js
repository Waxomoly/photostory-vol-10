$(document).ready(function(){
    $('#carouselExampleFade').on('slid.bs.carousel', function () {  
        var src = $('.active').find('img').attr('src');
        $('.photocarousel').css('background-image','url('+src+')')
      });  
});