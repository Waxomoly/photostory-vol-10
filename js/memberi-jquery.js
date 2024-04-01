$(document).ready(function(){
    //navbar muncul
    $('#nav-btn').click(function(){
        $('.mynavbar').attr("data-visible",true)
    });
    // close navbar
    $('.logo_silang>button').click(function(){
        $('.mynavbar').attr("data-visible",false)
    })
    $('.mynavbar div a').click(function(){
        $('.mynavbar').attr("data-visible",false)
    })
    // close navbar when click outside mynarbar
    // munculkan pop up foto pendukung close up
    $('.pendukung').click(function(){
        $('.card-front> p').css('display','none');
        var imgClicked = $(this).attr("src");
        $('#pop-up').attr('src',imgClicked);
        $('.pendukung-pop-up').css("transform","translateY(0px)");
    })
    // silang pop up foto pendukung
    $('.pendukung-pop-up div div button').click(function(){
        $('.pendukung-pop-up').css("transform","translateY(-100vh)");
    })
    
    // appear on show screen element
    //silang scroll up/down
    $('.notif button').click(function(){
        $('.notif').addClass('begone')
    })
    
});