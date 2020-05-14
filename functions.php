<?php

define( 'THEME_VERSION'   , '1.0.0' );
define( 'THEME_NAME'      , 'next' );
define( 'SERVER_PATH'     , get_template_directory() );
define( 'THEME_PATH'      , get_template_directory_uri() );

require_once( SERVER_PATH . '/includes/functions/theme-scripts.php'   );



/*------------------/
 * Theme Setup
**------------------*/

if ( !function_exists( 'next_setup' ) ) :

    function next_setup ()
    {

        /*
         * Enable support for Post Thumbnails on posts and pages.
         */

        add_theme_support( 'post-thumbnails' );
    }
endif;
add_action( 'after_setup_theme', 'next_setup' );
