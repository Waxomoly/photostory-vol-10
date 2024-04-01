$(document).ready(function(){
    // munculkan pop up foto zoom in 
    $('.gal-item').click(function(){
        $('.card-front> p').css('display','none');
        var imgClicked = $(this).find('img').attr("src");
        var caption = $(this).find('.description p').text();

        if($('.pendukung-pop-up').find('.pop-up-capt')){
            $('.pendukung-pop-up .pop-up-capt').remove();
        }
        $('.pendukung-pop-up').append('<p class="pop-up-capt">'+caption+'</p>');

        $('#pop-up').attr('src',imgClicked);
        $('.pendukung-pop-up').css("transform","translateY(0px)");
    })
    // silang pop up foto pendukung
    $('.pendukung-pop-up div div button').click(function(){
        $('.pendukung-pop-up').css("transform","translateY(-100vh)");
    })
    
    $('.show-desc').on('mouseover',function(){
        $('.show-desc .clickme').css('opacity','0');
    })
    $('.show-desc').on('mouseout',function(){
        $('.show-desc').removeClass('show-desc')
    })
});