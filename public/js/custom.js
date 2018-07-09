var href = location.pathname;
var navlinks = $(".nav-item .nav-link");
$(navlinks).each(function (index, element) {
    if ($(element).attr('href') == href) {
        $(element.parentNode).addClass('active');
    } else {
        $(element.parentNode).removeClass('active');
    }
});
