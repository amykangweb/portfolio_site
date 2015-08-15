(function ($) {
  $(document).ready(function(){

  // hide .navbar first
  $(".navbar-brand").hide();

  // fade in .navbar
  $(function () {
    $(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
      if ($(this).scrollTop() > 200) {
        $('.navbar-brand').fadeIn();
      } else {
        $('.navbar-brand').fadeOut();
      }
    });


  });

});
  }(jQuery));
