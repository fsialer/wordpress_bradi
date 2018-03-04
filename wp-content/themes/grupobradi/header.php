<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body  <?php body_class();?> >
    <!-- MENU -->
<div class="container-fluid">
		<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		  <button class="navbar-toggler navbar-toggler-right " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#">
                <?php
                grupobradi_the_custom_logo();
                ?>                     
		  </a>
				<?php
            wp_nav_menu( array(
								'theme_location' => 'principal_menu',
								'container' => 'div',
								'container_class' => 'collapse navbar-collapse',
								'container_id' => 'navbarSupportedContent',
								'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>'
                ));
        ?>
		</nav>
</div>		
<!-- MENU -->
