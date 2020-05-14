<?php

/*
 * Enqueues scripts and styles
 */

function theme_enqueue_scripts()
{


    wp_enqueue_style('font-awesome', THEME_PATH . '/assets/css/font-awesome.min.css', array(), '4.7.0');

    wp_enqueue_style('next-style', get_stylesheet_uri(), array(), THEME_VERSION);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

/*
 * Admin Enqueue Scripts
 */

function next_admin_enqueue_scripts($hook)
{


}

add_action('admin_enqueue_scripts', 'next_admin_enqueue_scripts');

