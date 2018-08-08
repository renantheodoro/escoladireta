<?php

//tira barra admin
function my_function_admin_bar(){
  return false;
}
add_filter( "show_admin_bar" , "my_function_admin_bar");
//===============

//menu
// add_theme_support('menus');

register_nav_menu('menu', 'menu');

//the excerpt
function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');


//Thumbnail
add_theme_support("post-thumbnails");

function new_excerpt_more($more) {
	return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');

add_filter('excerpt_length', 'custom_excerpt_length');
function custom_excerpt_length($length) {
return 25; //Nova quantidade de caracteres do excerpt
}
