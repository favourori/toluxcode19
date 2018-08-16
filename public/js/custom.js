var href = location.pathname;
var navlinks = $(".nav-item .nav-link");
$(navlinks).each(function (index, element) {
    if ($(element).attr('href') == href) {
        $(element.parentNode).addClass('active');
    } else {
        $(element.parentNode).removeClass('active');
    }
});


var href_user = location.pathname;
var navlinks = $(".navdashboard > ul > li > a");
$(navlinks).each(function (index, element) {
    if ($(element).attr('href') == href_user) {
        $(element).addClass('active');
    } else {
        $(element).removeClass('active');
    }
});

