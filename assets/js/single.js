$(document).ready(function(){

$(window).scroll(function(){

  var windowScrollTop = $(this).scrollTop();
  var bannerHeight = $('.header').height() + 80;

  if( windowScrollTop >= bannerHeight ) {
    $('.aside-fixed').addClass('fixed');
  } else {
    $('.aside-fixed').removeClass('fixed');
  }

});

$(".header .image").css("height", ($(window).height() / 2) + 165);

$(document).on('click', '#share-button', function(){
  $('.addthis_button_expanded').click();
  setTimeout(function(){
  $('#at-expanded-menu-title').text('Compartilhar');
  $('#at-expanded-menu-load-btn').text('CARREGAR MAIS');
  }, 500);
});

$(document).on('click', '.at-menu-close, #filter-share', function(){
  $('#filter-share, #share').fadeOut();
  $('body').css('overflow', 'auto');
});

$('p').each(function(){
  if( $(this).html() == "" ) {
    $(this).remove();
  }
});

});
