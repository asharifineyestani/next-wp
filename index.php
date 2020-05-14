<?php get_header(); ?>
<style>body {
        background: #f1f1f1;
    }</style>
<section class="section section-post-index blog-grid">
    <div class="display-spacing">
        <div class="container">
            <div class="row mb--30">
                <div class="col-lg-8 col-sm-12 col-xs-12">
                    <?php
                    if (have_posts()) {

                        // Load posts loop.
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content/content');
                        }

                        // Previous/next page navigation.
//                                twentynineteen_the_posts_navigation();

                    } else {

                        // If no content, include the "No posts found" template.
                        get_template_part('template-parts/content/content', 'none');

                    }
                    ?>

                </div>
                <div class="col col-lg-4">
                    <?php //get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

