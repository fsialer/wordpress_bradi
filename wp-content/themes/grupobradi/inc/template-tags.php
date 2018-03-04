<?php
if ( ! function_exists( 'grupobradi_the_custom_logo' ) ) :
    /**
     * Displays the optional custom logo.
     *
     * Does nothing if the custom logo is not available.
     *
     * @since Twenty Fifteen 1.5
     */
    function grupobradi_the_custom_logo() {
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
    }
    endif;

    
    