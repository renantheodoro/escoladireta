$(document).ready(function(){

  var scroll = 0;
  var scrollCount = 0;

  $(window).scroll(function(){
    scrollAtual = $(this).scrollTop();

      if( scrollAtual < scroll && scrollAtual != 0 ) {
        scrollCount++;
        if( scrollCount > 30 ) {
          $("header").addClass("active");
          scrollCount = 0;
        }
      } else {
        $("header").removeClass("active");
        scrollCount = 0;
      }

    scroll = scrollAtual;
  });

  $(".confira").click(function() {
      $("#planos").addClass("active"), $("#area-planos").addClass("active")
  }), $(".modal-contato i, .filter-modal").click(function() {
      $(".modal-contato").removeClass("active"), $(window).scroll(function() {
          $(this).scrollTop() > $(this).height() - 320 ? $("header").addClass("active") : $("header").removeClass("active")
      })
  }), $(document).on("click", "#menuMobile", function() {
      $("#menu, header #links, #btn-voltar").addClass("active"), $("#filter-menu").fadeIn()
  }), $(document).on("click", "#filter-menu, #menu li, #btn-voltar", function() {
      $("#menu, header #links, #btn-voltar").removeClass("active"), $("#filter-menu").fadeOut()
  }), $(".tabs li").addClass("tab col s3"), $(".date").mask("00/00/0000"), $(".time").mask("00:00:00"), $(".date_time").mask("00/00/0000 00:00:00"), $(".cep").mask("00000-000"), $(".phone").mask("0000-0000"), $(".phone_with_ddd").mask("(00) 00000-0000"), $(".phone_us").mask("(000) 000-0000"), $(".mixed").mask("AAA 000-S0S"), $(".cpf").mask("000.000.000-00", {
      reverse: !0
  }), $(".cnpj").mask("00.000.000/0000-00", {
      reverse: !0
  }), $(".money").mask("0.000,00", {
      reverse: !0
  }), $(".money2").mask("#.##0,00", {
      reverse: !0
  }), $(".ip_address").mask("0ZZ.0ZZ.0ZZ.0ZZ", {
      translation: {
          Z: {
              pattern: /[0-9]/,
              optional: !0
          }
      }
  }), $(".ip_address").mask("099.099.099.099"), $(".percent").mask("##0,00%", {
      reverse: !0
  }), $(".clear-if-not-match").mask("00/00/0000", {
      clearIfNotMatch: !0
  }), $(".placeholder").mask("00/00/0000", {
      placeholder: "__/__/____"
  }), $(".fallback").mask("00r00r0000", {
      translation: {
          r: {
              pattern: /[\/]/,
              fallback: "/"
          },
          placeholder: "__/__/____"
      }
  }), $(".selectonfocus").mask("00/00/0000", {
      selectOnFocus: !0
  });
  var SPMaskBehavior = function(a) {
          return 11 === a.replace(/\D/g, "").length ? "(00) 00000-0000" : "(00) 0000-00009"
      },
      spOptions = {
          onKeyPress: function(a, b, c, d) {
              c.mask(SPMaskBehavior.apply({}, arguments), d)
          }
      };
  $(".sp_celphones").mask(SPMaskBehavior, spOptions),
  $(".card").click(function() {
      $(this).find(".leia").click()
  }), $("#numCartao").focusin(function() {
      $(".cartao #txt-cartao").toggleClass("active")
  }), $("#nomeImpresso").focusin(function() {
      $(".cartao #txt-impresso").toggleClass("active")
  }), $("#dataVal").focusin(function() {
      $(".cartao #txt-val").toggleClass("active")
  }), $("#codSeg").focusin(function() {
      $("#cartao-cod").addClass("active")
  }), $("input").focusout(function() {
      $(".cartao span").removeClass("active"), $("#cartao-cod").removeClass("active")
  }), $(".content-sett ul li a").click(function() {
      $(".payment .content-sett ul li a").removeClass("active"), $(this).addClass("active"), clone = $(this).html(), $("#img-cartao").html(clone), $(".content-sett ul li a").removeClass("active"), $(this).addClass("active")
  }), $(document).on('click', '.openModal', function(a) {
      $(".lean-overlay").fadeIn();
      if (a.preventDefault(a), "" != $("#input_name").val()) {
          var b = $("#input_name").val();
          $("#modal_nome").val(b)
      }
      if ("" != $("#input_email").val()) {
          var c = $("#input_email").val();
          $("#modal_email").val(c)
      }
      $("input").each(function() {
          "" != $(this).val() ? $(this).next().addClass("active") : $(this).next().removeClass("active")
      })
  }),
  $(".modal .rol.active").nextAll().css("top", $(window).height()), $(".next").click(function() {
      $("#modal_register .rol.active").css("top", -$(window).height()).removeClass("active").next().addClass("active")
  }), $(".prev").click(function() {
      $("#modal_register .rol.active").css("top", $(window).height()).removeClass("active").prev().addClass("active")
  }), $(".modal").css("height", $(window).height()), $(".modal .tit-steps svg").css("height", $(window).height() - 150), $(".btn-plan").click(function() {
      $(".btn-plan").removeClass("active"), $(this).addClass("active")
  }), $("select").material_select(), $("section").css("height", $(window).height - 75), window.matchMedia("(max-width: 767px)").matches && $(".modal .area-planos .card .top").click(function() {
      $(".modal .area-planos .card .int").slideUp(), $(this).next().slideDown()
  }), $(document).ready(function() {
      $("img").each(function() {
          // $(this).attr("alt", "AppBoats Aplicativo para Marinas"), $(this).attr("title", "AppBoats Aplicativo para Marinas")
      })
  });

  $(document).on("click", ".modal-overlay", function() {
      resetModal();
  });

  function resetModal() {
    $('#msg-enviada').hide();
    $('#form-contato').show();
  }

  // CHAT //
  var a = window.location.pathname;
  var b = a.split('/');
  if( b[1] =="blog" ) {
    $('head').append('<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory") ?>/assets/css/blog.min.css"/>');
  }


  //light box video
  $(document).on('click', '.openLightBoxVideo', function(){
    $('.lightBoxVideo').fadeIn();
    $('.videoShow').attr('src', 'https://www.youtube.com/embed/xfK-y8C-tuA?rel=0&amp;showinfo=0&autoplay=1');
    $('body').css('overflow', 'hidden');
  });

  $(document).on('click', '.closeLightBoxVideo', function(){
    $('.lightBoxVideo').fadeOut();
    $('.videoShow').attr('src', '');
    $('body').css('overflow', 'auto');
  });

  //Deixando o select branco quando selecionado
  $('.modal .select-dropdown li').click(function(){
    $(this).closest('.select-wrapper').find('input').css('color', '#fff');
  });

  //Insere dados no modal
  $(document).on('click', '.insereDados', function(){
    var nome = $('#input_name').val();
    var email = $('#input_email').val();

    if( nome != '' ) {
      $('#nome').next('label').addClass('active');
    } else {
      $('#nome').val('');
      $('#nome').next('label').removeClass('active');
    }

    if( email != '' ) {
      $('#email').next('label').addClass('active');
    } else {
      $('#email').val('');
      $('#email').next('label').removeClass('active');
    }

    $('input#nome').val(nome);
    $('input#email').val(email);
  });

  $(document).on('click', '.close-modal', function(){
    // $('.modal').modal('close');
    $('.modal-overlay').click();
  });

  $(document).on('click', '.tabs li', function(){
    $(".cat").fadeOut();
    var a = $(this).attr("data-id");
    $("#cat-" + a).fadeIn()
  });

  $("#banner").tubular({
      videoId: "K26oDklf2zw",
      mudo: !0,
      start: 5
  });

  $('.modal').modal();

  // ROLAGEM INFINITA
  var base = '/';
  var baselink = window.location.pathname;
  var route = baselink.replace('/', '');
  var routePath = route.split("/");

  console.log(route);

  if( route == 'comunidade/' ) {
    var c = 5;
    var d = 0;
    var card = $('.list').find('.card').height();
    var initialHeight = (card * c) + (c * 20) + 140;
    $('.list').css('height', initialHeight);

    var total = 0;
    $('#cat-1').find('.card').each(function(){
        total++;
    });

    if( total > c ) {
      c = c + 5;
      ver = true;
    } else {
      ver = false;
      $('.more-wrapper').fadeOut();
    }

    $(document).on('click', '.more', function(){
      if( ver ) {
        c = c + 5;
        if( c < total ) {
          $('.list').css('height', (card * c) + (c * 20) + 140);
        } else {
          d = total - c;
          d = d + c;
          $('.list').css('height', (card * d) + (d * 20));
          ver = false;
          $('.more-wrapper').fadeOut();
        }
      }

    });

    $(document).on('click', '.categories .tabs li', function(){
      var dataId = $(this).attr('data-id');
      total = 0;
      console.log(dataId);
      $('#cat-' + dataId + ' .card').each(function(){
          total++;
      });
      c = 5;
      d = 0;
      if( total > c ) {
        console.log('muitos posts');
        ver = true;
        $('.list').css('height', initialHeight);
        $('.more-wrapper').fadeIn();
      } else {
        console.log('poucos posts');
        ver = false;
        $('.list').css('height', (card * total) + (20 * total));
        $('.more-wrapper').fadeOut();
      }
    });
  }

});
