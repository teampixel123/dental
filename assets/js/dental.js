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

$('.book-appointment').click(function(){
  if ( $('.sideslider').css('marginRight') == '-45px' ){
    $(".sideslider").animate({
      'marginRight': '-=270px'
    }, 1000);
    } else {
      $(".sideslider").animate({
        'marginRight': '+=270px'
      }, 1000);
    }
})
$('.appointment-close').click(function(){
  $(".sideslider").animate({
    'marginRight': '-=270px'
  }, 1000);
})

// Go to top..
$('#go-top').on( "click", function() {
    $('html, body').animate({scrollTop: 0});
    return false;
});
