switch(window.location.origin){
    case 'http://myielts.vn':
        var HOSTNAME = 'http://myielts.vn/';
        break;
    default:
        var HOSTNAME = 'http://localhost/myielts/';
}
$(document).ready(function(){
    "use strict";

});

$(window).scroll(function () {
    //if you hard code, then use console
    //.log to determine when you want the
    //nav bar to stick.
    'use strict';
    if ($(window).scrollTop() > 150) {
        $('.nav_side').addClass('nav_side_fix');
    }
    if ($(window).scrollTop() < 150) {
        $('.nav_side').removeClass('nav_side_fix');
    }
});