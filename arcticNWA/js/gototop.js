$(document).ready(function() {


  var theDocument = $('body, html'),
    backTopBtnLink = $('#back-top a'),
    contactBtn = $('#contactDown');

  // scroll body to 0px on click
  backTopBtnLink.click(function() {
    var self = $(this);
    theDocument.animate({
      scrollTop: 0
    }, 800);
    return false;
  });

  // scroll to contact at bottom of page
  contactBtn.click(function() {
    var self = $(this);
    theDocument.animate({
      scrollTop: $('#services-form').offset().top -150
    }, 800);
    return false;
  });

  $(window).scroll(function() {
    if ($(window).scrollTop() > 200) {
      $('#back-top').show();
    } else {
      $('#back-top').hide();
    }
  });
});
