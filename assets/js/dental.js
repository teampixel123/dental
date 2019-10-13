// Active Menu...
  $(document).ready(function() {
      var url = window.location.href;
      var activePage = url;
      $('.nav-item').removeClass('active');
      // alert(activePage);
      $('.nav-item a').each(function () {
          var linkPage = this.href;
          if (activePage == linkPage) {
              $(this).closest(".nav-item").addClass("active");
          }
      });
  });


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
    $('#wa-sticky').fadeIn();
  } else {
    $('#go-top').fadeOut();
    $('#wa-sticky').fadeOut();
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

// whatsapp change link if mobile...
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    document.getElementById("wa-sticky").href = "https://api.whatsapp.com/send?phone=+919158995505";   //change url
    document.getElementById("wa-sticky").target = "_blank";     //change target
}



// Admin......
$('.view-blog').click(function(){
  event.stopPropagation();
  event.stopImmediatePropagation();
  $('.form-view-blog').submit();
});

$('.edit-blog').click(function(){
  event.stopPropagation();
  event.stopImmediatePropagation();
  $('.form-edit-blog').submit();
});
