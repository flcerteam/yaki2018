/* <![CDATA[ */
jQuery(document).ready(function($) {

    'use strict';

    // setTimeout(function() {
    //     $('#slide-bottom-popup').modal();
    // }, 1000); // milliseconds

    $(".alert-bottom").show();

    $(".alert-close-btn").click(function() {
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    });
    //     setTimeout(function(){
    // $(".alert-top").hide();
    // }, 2000);

});