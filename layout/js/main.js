$(function () {

//---------------------------------------------------------------------\\
  /* Making Buttons Like Links */
  $('*[goto]').click(function () {

    var goToLink = $(this).attr('goto');

    window.location.href = goToLink;

  });
//---------------------------------------------------------------------\\

  /* Close Notifications of registertion errors */
  $('.register #first-stage .reg-output .error-login i').click(function () {
    $(this).parent().hide();
  });

//---------------------------------------------------------------------\\

  /* Closing Right Navigation Bar By two ways */
  $('.overlay-navright, .nav-right .close-nav').click(function () {
    $(this).fadeOut(300);
    $('.right-nav').animate({
      right: '-500px'
    }, 600);
  });

//---------------------------------------------------------------------\\

  /* Open Right Navigation Bar */
  $('#user-nav .open-navright').click(function () {
    // Showing overlay with fade effect
    $('.overlay-navright').fadeIn(300);
    // Opening it
    $('.right-nav').animate({
      right: '0'
    }, 450);
  });

});
