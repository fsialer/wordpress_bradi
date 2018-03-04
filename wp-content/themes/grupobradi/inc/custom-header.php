<?php

function grupobradi_custom_header_setup(){
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'principal_menu' => __( 'Principal Menu','grupobradi' ),
		'social_menu'  => __( 'Social Menu', 'grupobradi' ),
    ) );

    add_filter('nav_menu_link_attributes','class_link',10,3);
    function class_link($atts,$item,$args){
        $class = 'nav-link';
        $atts['class'] = $class;
        return $atts;
    }
    
    add_filter('nav_menu_css_class' , 'class_item' , 10 , 2);
    function class_item($classes, $item){
        if( in_array('menu-item', $classes) ){
             $classes[] = 'nav-item';
        }
     return $classes;
    }

    add_filter('nav_menu_css_class' , 'class_link_active' , 10 , 2);
    function class_link_active($classes, $item){
        if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active';
        }
     return $classes;
    }

}
add_action( 'after_setup_theme', 'grupobradi_custom_header_setup' );