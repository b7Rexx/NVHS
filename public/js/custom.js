// Navbar Fixed Top on Scroll
$(function () {
    // Check the initial Poistion of the Sticky Header
    var stickyHeaderTop = $('#stickyheader').offset().top;
    var checkWidth = $(window).width();
    console.log(checkWidth);
    $(window).scroll(function () {
        if ($(window).scrollTop() > stickyHeaderTop && checkWidth > 977) {
            $('#stickyheader').css({position: 'fixed', top: '0px', background: 'linear-gradient(#1f1f3e, #2b4375)'});
        } else {
            $('#stickyheader').css({
                position: 'static', top: '0', background: 'linear-gradient(#1f1f3e, #2b4375)'
            });
        }
    });
});


//Navbar icon animate
var beepOne = $("#beepOnce")[0];
$("#animateIcon")
    .mouseenter(function () {
        beepOne.play();
    });

var rimShotAudio = document.getElementById("beepOnce");

function playRim() {
    rimShotAudio.play();
}

//Navbar search toggle
$('#searchToggle').click(function () {
    $('#search').slideToggle(500);
});

//Homepage gallery image tittle fade in out
$('#fadeContent' + 0).hover(function () {
    $('#fadeImage' + 0).css({opacity: '0.2'});
    $('#fadeTitle' + 0).fadeIn(500);
}, function () {
    $('#fadeImage' + 0).css({opacity: '1'});
    $('#fadeTitle' + 0).fadeOut(200);
});
$('#fadeContent' + 1).hover(function () {
    $('#fadeImage' + 1).css({opacity: '0.2'});
    $('#fadeTitle' + 1).fadeIn(500);
}, function () {
    $('#fadeImage' + 1).css({opacity: '1'});
    $('#fadeTitle' + 1).fadeOut(200);
});
$('#fadeContent' + 2).hover(function () {
    $('#fadeImage' + 2).css({opacity: '0.2'});
    $('#fadeTitle' + 2).fadeIn(500);
}, function () {
    $('#fadeImage' + 2).css({opacity: '1'});
    $('#fadeTitle' + 2).fadeOut(200);
});
$('#fadeContent' + 3).hover(function () {
    $('#fadeImage' + 3).css({opacity: '0.2'});
    $('#fadeTitle' + 3).fadeIn(500);
}, function () {
    $('#fadeImage' + 3).css({opacity: '1'});
    $('#fadeTitle' + 3).fadeOut(200);
});
$('#fadeContent' + 4).hover(function () {
    $('#fadeImage' + 4).css({opacity: '0.2'});
    $('#fadeTitle' + 4).fadeIn(500);
}, function () {
    $('#fadeImage' + 4).css({opacity: '1'});
    $('#fadeTitle' + 4).fadeOut(200);
});
$('#fadeContent' + 5).hover(function () {
    $('#fadeImage' + 5).css({opacity: '0.2'});
    $('#fadeTitle' + 5).fadeIn(500);
}, function () {
    $('#fadeImage' + 5).css({opacity: '1'});
    $('#fadeTitle' + 5).fadeOut(200);
});
$('#fadeContent' + 6).hover(function () {
    $('#fadeImage' + 6).css({opacity: '0.2'});
    $('#fadeTitle' + 6).fadeIn(500);
}, function () {
    $('#fadeImage' + 6).css({opacity: '1'});
    $('#fadeTitle' + 6).fadeOut(200);
});
$('#fadeContent' + 7).hover(function () {
    $('#fadeImage' + 7).css({opacity: '0.2'});
    $('#fadeTitle' + 7).fadeIn(500);
}, function () {
    $('#fadeImage' + 7).css({opacity: '1'});
    $('#fadeTitle' + 7).fadeOut(200);
});


//dropdown toggle
$(document).ready(function () {
    $(".dropdown").hover(function () {
        $(".dropdown-content").fadeIn(100);
    }, function () {
        $(".dropdown-content").fadeOut(100);
    });
});