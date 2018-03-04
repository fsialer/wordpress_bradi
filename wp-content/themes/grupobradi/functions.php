<?php
function grupo_bradi_css(){   
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('animate','https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
    wp_enqueue_style('flaticon',get_template_directory_uri().'/css/flaticon.css');
    wp_enqueue_style('fonts','https://fonts.googleapis.com/css?family=Ubuntu');
    wp_enqueue_style('styles',get_template_directory_uri().'/css/styles.css');
}

add_action('wp_enqueue_scripts','grupo_bradi_css');

function grupo_bradi_js(){   
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.2.1.slim.min.js');
    wp_enqueue_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
    wp_enqueue_script('bootstrapjs','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
    wp_enqueue_script('unpkg','https://unpkg.com/scrollreveal/dist/scrollreveal.min.js');
    wp_enqueue_script('fontawesome','https://use.fontawesome.com/releases/v5.0.6/js/all.js');
    wp_enqueue_script('prueba1',get_template_directory_uri().'/js/prueba1.js');
}

add_action('init','grupo_bradi_js');

add_action( 'widgets_init', 'my_register_sidebars');

function my_register_sidebars(){
    register_sidebar( 
        array(
            'id'=>'primary',
            'name'=>__('Sidebar Servicio'),
            'description'=>__('A short description of the sidebar'),
            'before_widget'=>'<div class="card"><div class="card-body text-center">',
            'after_widget'=>'</div></div>',
            'before_title'=>'<h4 class="card-title text-center text-danger">',
            'after_title'=>'</h4>'
        )
    );
    register_sidebar( 
        array(
            'id'=>'secondary',
            'name'=>__('Sidebar galeria'),
            'description'=>__('A short description of the sidebar'),
            'before_widget'=>'<div class="col-sm">',
            'after_widget'=>'</div>',
        )
    );
}



require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';

