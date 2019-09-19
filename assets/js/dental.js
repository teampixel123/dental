$(".dropdown-desk").hover(function(){
  // alert();
  $(this).addClass('show');
  $('.dropdown-desk-menu').addClass('show');
  }, function(){
    $(this).removeClass('show');
    $('.dropdown-desk-menu').removeClass('show');
  //   setTimeout(function(){$(this).removeClass('show');}, 1000);
  //   setTimeout(function(){$('.dropdown-menu').removeClass('show');}, 1000);
});

// Show go top on scroll
  $(document).scroll(function() {
  if( $(this).scrollTop() > 200 ) {
    $('#go-top').fadeIn();
  } else {
    $('#go-top').fadeOut();
  }
});

// Go to top..
$('#go-top').on( "click", function() {
    $('html, body').animate({scrollTop: 0});
    return false;
});
