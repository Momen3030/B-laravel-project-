$(function() {
    
  

    // Dropdown toggle
  $('.dropdown-toggle-notification').click(function() {
    $(this).next('.dropdownULNotification').toggle( 200 );
    
  });

  $(document).click(function(e) {
    var target = e.target;
    if (!$(target).is('.dropdown-toggle-notification') && !$(target).parents().is('.dropdown-toggle-notification')) {
      $('.dropdownULNotification').hide() ;
    }
  });
});
