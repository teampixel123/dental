$(".dropdown").hover(function(){
  // alert();
  $(this).addClass('show');
  $('.dropdown-menu').addClass('show');
  }, function(){
    $(this).removeClass('show');
    $('.dropdown-menu').removeClass('show');
  //   setTimeout(function(){$(this).removeClass('show');}, 1000);
  //   setTimeout(function(){$('.dropdown-menu').removeClass('show');}, 1000);
});
