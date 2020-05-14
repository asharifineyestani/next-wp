<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



    <div class="avatar">

        <?php the_post_thumbnail(); ?>

        <?php
        if (is_sticky() && is_home() && !is_paged()) {
            printf('<span class="sticky-post">%s</span>', _x('Featured', 'post', 'next'));
        }
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
        endif;
        ?>


    </div>
    <div class="content">
        <div class="info">
            <div class="img">
                <?php echo get_avatar( get_the_author_meta( 'ID' ) , 48 ); ?>
            </div>
            <p>
<!--                <span class="name">--><?php //the_author_posts_link(); ?><!--</span>-->
                <span class="name"><?php the_author(); ?></span>
                <span class="date"><?php the_date(); ?></span>
            </p>
        </div>
        <p><?php the_excerpt(); ?></p>
    </div>


</article>







