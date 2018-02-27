var $ = jQuery.noConflict();
$(document).ready(function () {
    $("#loginform").addClass('form-group admin-login').css("border", "2px solid #000");
    $("#loginform").find('p').addClass('text-center');
    $("#registerform").addClass('form-group admin-login').css("border", "2px solid #000");
    $("#registerform").find('p').addClass('text-center');
    $("#lostpasswordform").addClass('form-group admin-login').css("border", "2px solid #000").attr('size',20);
    $("#lostpasswordform").find('p').addClass('text-center');
    $("#user_login").addClass('form-control').css("box-shadow", "inset 0 0 5px #000");
    $("#user_pass").addClass('form-control').css("box-shadow", "inset 0 0 5px #000");
    $("#user_email").addClass('form-control').css("box-shadow", "inset 0 0 5px #000").attr('size',20);
    $("#wp-submit").removeClass('button button-primary button-large').addClass('btn btn-info btn-rounded btn-lg pr-5 pl-5');
    $(".login form .forgetmenot").addClass('text-center mb-3');
    $(".message").removeClass('message').addClass('alert alert-info text-center');
    $("#nav").addClass('text-center').find('a').addClass('btn btn-success btn-sm btn-rounded text-white pr-5 pl-5');
    $("#backtoblog").addClass('text-center');
});