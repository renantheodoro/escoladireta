$(document).ready(function(){
  $("#menu li a").click(function(){
    var anchor = $(this).attr("id");

    anchor = anchor.replace('btn-', '');

    if( $('header').hasClass('active') && anchor != 'sistema' ) {
      $("html, body").animate({scrollTop: $("#" + anchor).offset().top - 75}, 400, 'linear');
    } else {
      $("html, body").animate({scrollTop: $("#" + anchor).offset().top}, 400, 'linear');
    }

  });
    $(window).scroll(function(){
      var scroll = $(this).scrollTop();
      var sobreTop = $('#sobre').offset().top - 75;
      var aplicativoTop = $('#aplicativo').offset().top - 240;
      var sistemaTop = $('#sistema').offset().top - 75;
      var blogTop = $('#area-blog').offset().top - 240;
      var contatoTop = $('#contato').offset().top - 240;

      if( scroll < sobreTop + $('#sobre').height() ) {
        $('#menu li a').removeClass("active");
        $("#menu li a#btn-embarque").addClass("active");
      } else if( scroll > aplicativoTop && scroll < aplicativoTop + $('#aplicativo').height() ) {
        $('#menu li a').removeClass("active");
        $("#menu li a#btn-aplicativo").addClass("active");
      } else if( scroll > sistemaTop && scroll < sistemaTop + $('#sistema').height() ) {
        $('#menu li a').removeClass("active");
        $("#menu li a#btn-sistema").addClass("active");
      } else if( scroll > blogTop && scroll < blogTop + $('#area-blog').height() ) {
        $('#menu li a').removeClass("active");
        $("#menu li a#btn-area-blog").addClass("active");
      } else if( scroll >= contatoTop ) {
        $('#menu li a').removeClass("active");
        $("#menu li a#btn-contato").addClass("active");
      }

    });
  $("#banner").height($(window).height() + 10), $("#info-banner").css("top", $(window).height() / 2 - 225);
  var windowHeight = $(window).height();
  if (window.matchMedia('(min-width: 767px)').matches) {
    $(".modal").css("height", windowHeight - 120);
  }

  $(document).ready(function() {
      $(window).scroll(function() {
          scroll = $(this).scrollTop();
          if (scroll >= $('#sobre').offset().top && scroll < $(document).height() - $(window).height() - 330) {
              if ($("#omn-container:hidden")) {
                  $('#omn-container').show();
              }
          } else {
              if ($("#omn-container:visible")) {
                  $('#omn-container').hide();
              }
          }
      });
  });

  //======== ANIMATION SCROLL =======//
  if (window.matchMedia('(min-width: 767px)').matches) {

    //NAV CIRCLE
    $(document).on('click', '.nav-circle li', function(){
      var id = $(this).attr('id');
      id = id.replace('nav-', '');

      var negative = 0;

      switch(id) {
        case 'comunicacao' :
          negative = 105;
          break;
        case 'academico' :
          negative = 105;
          break;
        case 'controle' :
          negative = 105;
          break;
        case 'seguranca' :
          negative = 275;
          break;
        case 'integracao' :
          negative = 455;
          break;
        case 'economia' :
          negative = 455;
          break;
      }

      if( $(this).closest('.nav-circle').attr('id') == 'nav-aplicativo' ) {
        $("html, body").animate({scrollTop: $('#app-' + id).offset().top - 75}, 500, 'linear');
      } else {
        $("html, body").animate({scrollTop: $('#sis-' + id).offset().top - 205}, 500, 'linear');
      }

      $('.nav-circle li span').removeClass('active');
      $(this).find('span').addClass('active');
    });

    $(document).ready(function(){
      $('head').append('<style> .height-def {height: ' + $('#sistema .row').height() + 'px} </style>');
      $('head').append('<style> .col-img {height: ' + $('#aplicativo .row').height() + 'px} </style>');
      $('head').append('<style> #screen-top, #screen-fixed, #screen-bottom {width: ' + $('.col-img').width() + 'px!important} </style>');
      var sis = $('#sis-integracao').offset().top;

      //Troca imagem
      $(document).on('click', '.featureFunction li', function(){
        $(this).closest('.featureFunction').find('li').removeClass('active');
        $(this).addClass('active');
        var data = $(this).attr('data');
        var area = $(this).closest('.app-function').attr('id');
        var area = area.replace('app', '');
        $('.img' + area).attr({
          'src': window.location.href +'wp-content/themes/escoladireta/assets/img/screen-'+ data +'.png',
          'alt' : 'Escola Direta - ' + data.substr(0,1).toUpperCase()+data.substr(1)
        });
      });

      $(window).scroll(function(){
        // APLICATIVO
        /* animação de clique da imagem */
        if(
          $('#screen-fixed').offset().top < $('#app-academico').offset().top - 300
        ) {
          $('#aplicativo img').removeClass('active');
          $('.img-comunicacao').addClass('active');
        } else if(
          $('#screen-fixed').offset().top >= $('#app-academico').offset().top - 300 &&
          $('#screen-fixed').offset().top < $('#app-controle').offset().top - 300
        ) {
          $('#aplicativo img').removeClass('active');
          $('.img-academico').addClass('active');
        } else {
          $('#aplicativo img').removeClass('active');
          $('.img-controle').addClass('active');
        }

        /* animação de scroll */
        if(
          $(this).scrollTop() + ($(window).height() / 2) - 280 >= $('#screen-top').offset().top &&
          $(this).scrollTop() + ($(window).height() / 2) - 280 < $('#screen-bottom').offset().top
        ) {
          if( $('#screen-top').hasClass('active') ) {
            $('#screen-top').removeClass('active');
          }
          if( $('#screen-bottom').hasClass('active') ) {
            $('#screen-bottom').removeClass('active');
          }
          if( !$('#screen-fixed').hasClass('active') ){
            $('#screen-fixed').addClass('active');
          }
        } else if(
          $(this).scrollTop() + ($(window).height() / 2) - 280 >= $('#screen-bottom').offset().top
        ) {
          if( $('#screen-top').hasClass('active') ) {
            $('#screen-top').removeClass('active');
          }
          if( $('#screen-fixed').hasClass('active') ) {
            $('#screen-fixed').removeClass('active');
          }
          if( !$('#screen-bottom').hasClass('active') ){
            $('#screen-bottom').addClass('active');
          }
        }
        else {
          if( !$('#screen-top').hasClass('active') ) {
            $('#screen-top').addClass('active');
          }
          if( $('#screen-fixed').hasClass('active') ){
            $('#screen-fixed').removeClass('active');
          }
          if( $('#screen-bottom').hasClass('active') ){
            $('#screen-bottom').removeClass('active');
          }
        }

        // SISTEMA
        /* animação da troca de imagem */
        if( $('#img-fixed').offset().top < sis - 200 ) {
          $('#img-fixed img').removeClass('active');
          $('#img-fixed #sis-1').addClass('active');
        } else if( $('#img-fixed').offset().top >= sis - 200 && $('#img-fixed').offset().top < sis + 200 ) {
          $('#img-fixed img').removeClass('active');
          $('#img-fixed #sis-2').addClass('active');
        } else {
          $('#img-fixed img').removeClass('active');
          $('#img-fixed #sis-3').addClass('active');
        }

        /* animação de scroll */
        if(
          $(this).scrollTop() + ($(window).height() / 2) - 200 >= $('#img-top').offset().top &&
          $(this).scrollTop() + ($(window).height() / 2) - 200 < $('#img-bottom').offset().top
        ) {
          if( $('#img-top').hasClass('active') ) {
            $('#img-top').removeClass('active');
          }
          if( $('#img-bottom').hasClass('active') ) {
            $('#img-bottom').removeClass('active');
          }
          if( !$('#img-fixed').hasClass('active') ){
            $('#img-fixed').addClass('active');
          }
        } else if(
          $(this).scrollTop() + ($(window).height() / 2) - 200 >= $('#img-bottom').offset().top
        ) {
          if( $('#img-top').hasClass('active') ) {
            $('#img-top').removeClass('active');
          }
          if( $('#img-fixed').hasClass('active') ) {
            $('#img-fixed').removeClass('active');
          }
          if( !$('#img-bottom').hasClass('active') ){
            $('#img-bottom').addClass('active');
          }
        }
        else {
          if( !$('#img-top').hasClass('active') ) {
            $('#img-top').addClass('active');
          }
          if( $('#img-fixed').hasClass('active') ){
            $('#img-fixed').removeClass('active');
          }
          if( $('#img-bottom').hasClass('active') ){
            $('#img-bottom').removeClass('active');
          }
        }

      });

    });

  }

  //Video
  $('#btn-video').hover(function(){
    $(this).toggleClass('active');
  });

  $('#btn-video').click(function(){
    playPause();
    if( $(this).find('i').hasClass('fa-pause') ) {
      $(this).find('i').removeClass('fa-pause').addClass('fa-play')
    } else {
      $(this).find('i').addClass('fa-pause').removeClass('fa-play')
    }
  });

  function playPause() {
      if (document.getElementById('video-desk').paused)
          document.getElementById('video-desk').play();
      else
          document.getElementById('video-desk').pause();
  }

  $(document).ready(function(){
    $('.post-categories span:last-child').css('transform', 'scale(2)');
  });

  // MOBILE
  if (window.matchMedia('(max-width: 767px)').matches) {
    /* Parceiros */
    $(document).on('click', '#parceiros .list-parceiros li a', function(){
      if( $(this).children('.dep-box').length > 0 ) {
        $('.dep-box').removeClass('active');
        $(this).find('.dep-box').addClass('active');
        $('.filter-parceiros').fadeIn();
        $('body').css('overflow', 'hidden');
      }
    });
    $(document).on('click', '.filter-parceiros', function(){
      $('.dep-box').removeClass('active');
      $('.filter-parceiros').fadeOut();
      $('body').css('overflow', 'auto');
    });
  }
});
