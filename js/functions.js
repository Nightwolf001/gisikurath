$(document)
    .on('click', 'a[href^="#"]', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $('html, body')
            .animate({
                scrollTop: $(target).offset().top}, 'slow', 'swing', function() {});
    });


$(window).bind("scroll", function() {
    if ($(this).scrollTop() > 780) {
        $("#subOverlay").fadeIn();
    } else {
        $("#subOverlay").stop().fadeOut();
    }
});

$(window).bind("scroll", function() {
    if ($(this).scrollTop() > 780) {
        $("#logooverlay").fadeOut();
    } else {
        $("#logooverlay").stop().fadeIn();
    }
});




document.addEventListener('DOMContentLoaded', function () {
  BackgroundCheck.init({
    targets: '.gsk_logo'
  });
});

