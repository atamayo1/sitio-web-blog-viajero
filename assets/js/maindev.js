$(document).ready(function () {
    banner();
    menu();
});

function banner(){
    var fadeSlider = $('.fade-slider');
    fadeSlider.jdSlider({
        isSliding: true,
        isAuto: true,
        isLoop: true,
        isDrag: false,
        interval: 5000,
        isCursor: false,
        speed: 3000
    });
    var alturaBanner = fadeSlider.height();
    $(".bannerEstatico").css({"height":alturaBanner+"px"});

    $(window).scroll(function () {
        var posY = window.pageYOffset;
        //console.log(posY);

        if(posY > alturaBanner){
            $("header").css({"background":"white"});
            $("header .logotipo").css({"filter":"invert(100%)"});
            $("header .fa-bars, header .fa-search").css({"color":"black"});
        }else{
            $("header").css({"background":"rgba(0,0,0,0.5)"});
            $("header .logotipo").css({"filter":"invert(0%)"});
            $("header .fa-bars, header .fa-search").css({"color":"white"});
        }
    });
}

function menu(){
    $(".fa-bars").click(function () {
        $("#menu").fadeIn( "slow" );
    });
    $(".btnClose").click(function () {
        $("#menu").fadeOut( "slow" );
    });
}
