
$(document).on('scroll', function () {
    let position = $(this).scrollTop();
    if(position > 100){
        $('header').addClass('fixed-header');
    }else{
        $('header').removeClass('fixed-header');
    }

})

$('.burger-menu').on('click',function(){
    $('.header-overlay').slideDown(1000);
});
$('.close').on('click',function(){
    $('.header-overlay').slideUp(1000);
});

$('.category a').on('click',function(){
    let cat = $(this).attr('href');
    $('.project').hide()
        .filter(function(){
            return $(this).data('cat') === cat;
    }).fadeIn();
});