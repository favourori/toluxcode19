var href = location.href;
var navlinks = $(".nav-item .nav-link");
$(navlinks).each(function (index, element) {
    if ($(element).attr('href') == href) {
        $(element.parentNode).addClass('active');
    } else {
        $(element.parentNode).removeClass('active');
    }
});


var href_user = location.href;
var navlinks = $(".navdashboard > ul > li > a");
$(navlinks).each(function (index, element) {
    if ($(element).attr('href') == href_user) {
        $(element).addClass('active');
    } else {
        $(element).removeClass('active');
    }
});

var navlinks = $("ul > li > a");
var href_user = location.href;
// console.log(location);
$(navlinks).each(function (index, element) {
    console.log(href_user);
    if ($(element).attr('href') == href_user) {

        $(element.parentNode).addClass('active');
    } else {
        $(element.parentNode).removeClass('active');
    }
});

// console.log(navlinks);
