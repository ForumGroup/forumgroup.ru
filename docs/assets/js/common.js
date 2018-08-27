
$(function(){
    $(window).scroll(function() {
        var top = $(document).scrollTop();
        if (top < 150) $("#fixheader").css({top: '0', display: 'none'});
        else $("#fixheader").css({top: '0', position: 'fixed', display: 'flex'});
    });
});