$(".main-navigation").hover(function (e) {
    $(this).addClass('animated pulse');
});

$(".main-navigation").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function () {
    $(this).removeClass('animated pulse');
});