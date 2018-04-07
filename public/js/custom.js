// Navbar Fixed Top on Scroll
$(function () {
    // Check the initial Poistion of the Sticky Header
    var stickyHeaderTop = $('#stickyheader').offset().top;
    var checkWidth = $(window).width();
    $(window).scroll(function () {
        if ($(window).scrollTop() > stickyHeaderTop && checkWidth > 977) {
            $('#stickyheader').css({position: 'fixed', top: '0px', background: '#25499f'});
        } else {
            $('#stickyheader').css({position: 'static', top: '0px', background: 'linear-gradient(#1f1f3e, #24335d)'
            });
        }
    });
});