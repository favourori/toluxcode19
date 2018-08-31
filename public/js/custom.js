var href = location.href;
var navlinks = $(".nav-item .nav-link");
// console.log(navlinks);
$(navlinks).each(function (index, element) {
    if ($(element).attr('href') == href || $(element).attr('href') == location.pathname) {

        $(element.parentNode).addClass('active');
    } else {
        $(element.parentNode).removeClass('active');
    }
});


var href_user = location.href;
var navlinks = $(".navdashboard > ul > li > a");
$(navlinks).each(function (index, element) {
    if ($(element).attr('href') == href_user || $(element).attr('href') == location.pathname) {
        $(element).addClass('active');
    } else {
        $(element).removeClass('active');
    }
});

var navlinks = $("ul > li > a");
var href_user = location.href;
// console.log(location);
$(navlinks).each(function (index, element) {
    // console.log(href_user);
    if ($(element).attr('href') == href_user) {

        $(element.parentNode).addClass('active');
    } else {
        $(element.parentNode).removeClass('active');
    }
});

// console.log(navlinks);

var productHeight = $("#product-info").height();

if (productHeight != undefined || productHeight != null) {
    // console.log($(window).width());
    var newHeight = 536 - productHeight;
    if ($(window).width() > 992)
        $("#description-col").css('margin-top', newHeight);
}