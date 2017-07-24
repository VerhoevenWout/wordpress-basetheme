jQuery(function($){

  var templateUrl = '<?= get_bloginfo("template_url"); ?>';

  // FADING LINKS
  setTimeout(function(){
    // Don't forget to make body display none
    $('body').fadeIn(500,  function() {
      typeFirst();
    });
  },500);
  var newLocation;
  $('.fading-link').click(function() {
    event.preventDefault();
    newLocation = this.href;
    $('body').fadeOut(500, newpage);
  });
  function newpage() {
    window.location = newLocation;
  }

  // SCROLL TO ANCHOR
  var $root = $('html, body');
  $('.button').click(function() {
      var topOfObject = $( $.attr(this, 'href') ).offset().top
      $root.animate({
          scrollTop: topOfObject - 0
      }, 1000);
      return false;
  });

  // MIMIC HOVER STATE MOBILE
  $('.individual-work:eq(0)').click(function(event){
    event.preventDefault();
    if (windowWidth > 500) {
      $(this).find('.individual-work-content').toggleClass('individual-work-content-visible');
    }
  });

});
