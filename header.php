<!DOCTYPE html>
<html lang="pt-br">
	<meta charset="utf-8">
	<head>

		<title>Escola Direta - Aplicativo para Escolas</title>

		<meta http-equiv="cache-control" content="max-age=0" />
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="expires" content="0" />
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
		<meta http-equiv="pragma" content="no-cache" />

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="robots" content="index,follow">
		<meta name="googlebot" content="index,follow">
		<meta name="Author" content="Incipit Group- http://www.incipit.com.br">
		<link rel="icon" href="favicon.ico" />

		<!-- BIBLIOTECAS -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/libs/materialize.min.css"/>
		<!-- <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/font-awesome.min2.css"> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href="<?php bloginfo('template_directory') ?>/assets/css/libs/material-icons.min.css" rel="stylesheet">

		<!-- ESTILOS -->
		<?php if( is_single() ) : ?>
    	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/single.min.css?v=10"/>
		<?php endif; if ( !is_front_page() ) : ?>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/blog.min.css?=v07"/>
		<?php endif; ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/assets/css/style.min.css?=v35"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500' rel='stylesheet' type='text/css'>

		<!-- BIBLIOTECAS SCRIPTS -->
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/libs/jquery-2.1.1.min.js"></script>
		<!-- <script src="<?php bloginfo('template_directory'); ?>/assets/js/libs/materialize.min.js"></script> -->
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/libs/jquery.tubular.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/libs/jquery.mask.min.js"></script>

    <?php wp_head(); ?>
    </head>

<body>

	<script type="text/javascript">
		// bodyOnReady(function(){
		// 	muda_p_carregado()
		// })
		//
		// function bodyOnReady(funct){
		// //by Micox - based in jquery bindReady and Diego Perini IEContentLoaded
		// 	//flag global para indicar que já rodou e function que roda realmente
		// 	done = false;
		// 	init = function(){ if(!done) { done=true; funct() } }
		// 	var d=document; //apelido para o document
		// 	//pra quem tem o DOMContent (FF)
		// 	if(document.addEventListener){ d.addEventListener("DOMContentLoaded", init, false );}
		//
		// 	if( /msie/i.test( navigator.userAgent ) ){ //IE
		// 		(function () {
		// 			try { // throws errors until after ondocumentready
		// 				d.documentElement.doScroll("left");
		// 			} catch (e) {
		// 				setTimeout(arguments.callee, 10); return;
		// 			}
		// 			// no errors, fire
		// 			init();
		// 		})();
		// 	}
		// 	if ( window.opera ){
		// 		d.addEventListener( "DOMContentLoaded", function () {
		// 			if (done) return;
		// 			//no opera, os estilos só são habilitados no fim do DOMready
		// 			for (var i = 0; i < d.styleSheets.length; i++){
		// 				if (d.styleSheets[i].disabled)
		// 					setTimeout( arguments.callee, 10 ); return;
		// 			}
		// 			// fire
		// 			init();
		// 		}, false);
		// 	}
		// 	if (/webkit/i.test( navigator.userAgent )){ //safari's
		// 		if(done) return;
		// 		//testando o readyState igual a loaded ou complete
		// 		if ( /loaded|complete/i.test(d.readyState)===false ) {
		// 			setTimeout( arguments.callee, 10 );	return;
		// 		}
		// 		init();
		// 	}
		// 	//se nada funfou eu mando a velha window.onload lenta mesmo
		// 	if(!done) window.onload = init
		// }

		$(document).ready(function(){
			muda_p_carregado();
		});
		function muda_p_carregado()
		{
		 document.getElementById("posload").setAttribute("class", "fadeIn");
		 document.getElementById("preload").setAttribute("class", "fadeOut");

		 document.getElementById("preload").style.display = "none";
		}
	</script>

	<style media="screen">
		#posload{overflow-x: hidden; opacity: 0; -webkit-transition: ease 0.5s; transition: ease 0.5s;}
		#posload.fadeIn{opacity: 1}
		#preload{width: 100%; height: 100%; position: fixed; top: 0; left: 0; background: #23939f; display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-transition: ease 0.5s; transition: ease 0.5s; opacity: 1; z-index: 999999999999999;}
		#preload.fadeOut{opacity: 0}
		#preload .spinner-layer {border-color: #fff}
		#preload .preloader-wrapper {margin: auto; display: block}
	</style>

<div id="preload">

    <div class="preloader-wrapper active">
      <div class="spinner-layer">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

    </div>
</div>

<div id="posload">

  <header <?php if( !is_front_page() ) : ?> class="fixed" <?php endif; ?>>

		<div id="logo-header">

			<span>Escola Direta | Aplicativo de comunicação escolar</span>

			<a href="<?php bloginfo('url') ?>">
				<svg width="51px" height="47px" viewBox="0 0 51 47" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				    <defs>
				        <polygon id="path-1" points="0.104490698 46.1770935 46.0618163 46.1770935 46.0618163 0.0103583319 0.104490698 0.0103583319"></polygon>
				        <polygon id="path-3" points="0 0.218837338 0 29.868318 50.9102163 29.868318 50.9102163 0.218837338 0 0.218837338"></polygon>
				    </defs>
				    <g id="Home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
				        <g transform="translate(-22.000000, -12.000000)" id="menu">
				            <g>
				                <g id="Logotipo" transform="translate(22.000000, 12.000000)">
				                    <g id="Group-3" transform="translate(2.372093, 0.095717)">
				                        <mask id="mask-2" fill="white">
				                            <use xlink:href="#path-1"></use>
				                        </mask>
				                        <g id="Clip-2"></g>
				                        <path d="M46.0618163,23.0928521 C46.0618163,35.8422122 35.7724674,46.1772126 23.0829558,46.1772126 C10.3934442,46.1772126 0.104490698,35.8422122 0.104490698,23.0928521 C0.104490698,10.3450807 10.3934442,0.0100803172 23.0829558,0.0100803172 C35.7724674,0.0100803172 46.0618163,10.3450807 46.0618163,23.0928521" id="Fill-1" fill="#fc7e10" mask="url(#mask-2)"></path>
				                    </g>
				                    <path d="M5.71061628,34.9600714 C7.80003488,38.4733837 10.777407,41.3913473 14.3541279,43.3692238 C13.2886628,39.1727894 9.94045349,35.8949953 5.71061628,34.9600714" id="Fill-4" fill="#0CABA5"></path>
				                    <path d="M45.1996791,34.9600714 C43.1070977,38.4733837 40.1297256,41.3913473 36.5561674,43.3692238 C37.6216326,39.1727894 40.9666791,35.8949953 45.1996791,34.9600714" id="Fill-6" fill="#0CABA5"></path>
				                    <path d="M11.0217326,12.6147536 C15.8125698,12.6147536 19.7000349,8.71579503 19.7000349,3.89978493 L2.34303488,3.89978493 C2.34303488,8.71579503 6.22733721,12.6147536 11.0217326,12.6147536" id="Fill-8" fill="#fc7e10"></path>
				                    <path d="M39.8886814,12.6147536 C44.6795186,12.6147536 48.5669837,8.71579503 48.5669837,3.89978493 L31.2099837,3.89978493 C31.2099837,8.71579503 35.094286,12.6147536 39.8886814,12.6147536" id="Fill-10" fill="#fc7e10"></path>
				                    <g id="Group-14" transform="translate(0.000000, 8.145070)">
				                        <mask id="mask-4" fill="white">
				                            <use xlink:href="#path-3"></use>
				                        </mask>
				                        <g id="Clip-13"></g>
				                        <path d="M36.1534256,0.218837338 C31.9425651,0.218837338 28.1472163,2.01044393 25.455286,4.86486127 C22.7629605,2.01044393 18.9676116,0.218837338 14.7567512,0.218837338 C6.62047209,0.218837338 -3.95348839e-05,6.86974491 -3.95348839e-05,15.0433791 C-3.95348839e-05,23.2170132 6.62047209,29.868318 14.7567512,29.868318 C18.9676116,29.868318 22.7629605,28.0763142 25.455286,25.222294 C28.1472163,28.0763142 31.9425651,29.868318 36.1534256,29.868318 C44.2897047,29.868318 50.9102163,23.2170132 50.9102163,15.0433791 C50.9102163,6.86974491 44.2897047,0.218837338 36.1534256,0.218837338" id="Fill-12" fill="#0CABA5" mask="url(#mask-4)"></path>
				                    </g>
				                    <path d="M24.6434372,23.1885687 C24.6434372,28.6738 20.2171116,33.1204476 14.7569488,33.1204476 C9.29678605,33.1204476 4.87046047,28.6738 4.87046047,23.1885687 C4.87046047,17.7033373 9.29678605,13.2566897 14.7569488,13.2566897 C20.2171116,13.2566897 24.6434372,17.7033373 24.6434372,23.1885687" id="Fill-15" fill="#FEFEFE"></path>
				                    <path d="M24.6434372,23.1885687 C24.6434372,28.6738 20.2171116,33.1204476 14.7569488,33.1204476 C9.29678605,33.1204476 4.87046047,28.6738 4.87046047,23.1885687 C4.87046047,17.7033373 9.29678605,13.2566897 14.7569488,13.2566897 C20.2171116,13.2566897 24.6434372,17.7033373 24.6434372,23.1885687" id="Fill-17" fill="#FEFEFE"></path>
				                    <path d="M14.7568698,13.2566102 C9.29670698,13.2566102 4.8703814,17.7032579 4.8703814,23.1884892 C4.8703814,28.6737206 9.29670698,33.1203682 14.7568698,33.1203682 C20.2170326,33.1203682 24.6433581,28.6737206 24.6433581,23.1884892 C24.6433581,17.7032579 20.2170326,13.2566102 14.7568698,13.2566102" id="Fill-19" fill="#FEFEFE"></path>
				                    <path d="M21.9609163,23.3398881 C21.9609163,25.6716377 20.0806372,27.5621381 17.7595442,27.5621381 C15.4384512,27.5621381 13.5550093,25.6716377 13.5550093,23.3398881 C13.5550093,21.0081385 15.4384512,19.1176381 17.7595442,19.1176381 C20.0806372,19.1176381 21.9609163,21.0081385 21.9609163,23.3398881" id="Fill-21" fill="#0CABA5"></path>
				                    <path d="M26.2668977,23.1885687 C26.2668977,28.6738 30.6932233,33.1204476 36.153386,33.1204476 C41.6135488,33.1204476 46.0398744,28.6738 46.0398744,23.1885687 C46.0398744,17.7033373 41.6135488,13.2566897 36.153386,13.2566897 C30.6932233,13.2566897 26.2668977,17.7033373 26.2668977,23.1885687" id="Fill-23" fill="#FEFEFE"></path>
				                    <path d="M36.1534256,13.2566102 C30.6932628,13.2566102 26.2669372,17.7032579 26.2669372,23.1884892 C26.2669372,28.6737206 30.6932628,33.1203682 36.1534256,33.1203682 C41.6135884,33.1203682 46.039914,28.6737206 46.039914,23.1884892 C46.039914,17.7032579 41.6135884,13.2566102 36.1534256,13.2566102" id="Fill-25" fill="#FEFEFE"></path>
				                    <path d="M28.9493791,23.3398881 C28.9493791,25.6716377 30.8296581,27.5621381 33.1507512,27.5621381 C35.4718442,27.5621381 37.355286,25.6716377 37.355286,23.3398881 C37.355286,21.0081385 35.4718442,19.1176381 33.1507512,19.1176381 C30.8296581,19.1176381 28.9493791,21.0081385 28.9493791,23.3398881" id="Fill-27" fill="#0CABA5"></path>
				                    <polygon id="Fill-29" fill="#fc7e10" points="28.0731279 31.2632693 25.4551279 33.893289 22.8371279 31.2632693 25.4551279 28.6324553"></polygon>
				                </g>
				            </g>
				        </g>
				    </g>
				</svg>
			</a>

		</div>

		<!-- <nav> -->
			<a href="javascript:void(0)" id="menuMobile" data-activates="slide-out" class="waves-effect waves-light">
				<i class="material-icons">menu</i>
			</a>
			<ul id="menu" class="menu">
				<?php if( is_front_page() ) : ?>
					<li><a id="btn-sobre" class="waves-effect waves-light">Sobre</a></li>
					<li><a id="btn-aplicativo" class="waves-effect waves-light">Funcionalidades</a></li>
					<li><a id="btn-sistema" class="waves-effect waves-light">Diferenciais</a></li>
					<li><a id="btn-area-blog" class="waves-effect waves-light">Comunidade</a></li>
					<li><a id="btn-contato" class="waves-effect waves-light">Contato</a></li>
				<?php else : ?>
					<li><a href="/#sobre" class="waves-effect waves-light">Sobre</a></li>
					<li><a href="/#aplicativo" class="waves-effect waves-light">Funcionalidades</a></li>
					<li><a href="/#sistema" class="waves-effect waves-light">Diferenciais</a></li>
					<li><a href="<?php bloginfo('url') ?>/comunidade" class="waves-effect waves-light active">Comunidade</a></li>
					<li><a href="/#contato" class="waves-effect waves-light">Contato</a></li>
				<?php endif; ?>

				<span>11 2528.6924</span>
			</ul>
		<!-- </nav> -->

    <div id="links">
			<a href="http://beta.escoladireta.com.br/cadastro" target="_blank">CONTRATAR</a>
      <!-- <a href="http://escoladireta.com.br/admin">MINHA CONTA</a> -->
    </div>

		<div id="filter-menu"></div>

  </header>
