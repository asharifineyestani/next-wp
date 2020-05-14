<?php get_header(); ?>
<?php the_post(); ?>

<section class="section section-post-single">
    <div class="display-spacing">
        <Container>
            <div class="max-w-768 div-center">
                <div class="back">
                    <a href="/b">
                        <IoMdArrowBack class="icon"/>
                        <span>برو به وبلاگ</span>
                    </a>
                </div>
                <?php the_title('<h1>', '</h1>'); ?>
                <Row>
                    <Col xl={6} md={6}>
                    <div class="info">
                        <div class="img">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ) , 48 ); ?>
                        </div>
                        <span class="name"><?php the_author(); ?></span>

                        <p>
                            <span class="date"><?php the_date(); ?></span>
<!--                            <span class="read-time">13 min read</span>-->
                        </p>
                    </div>

                    </Col>
                    <Col xl={6} md={6}>

                    </Col>
                </Row>
                <div class="content">
                    <?php

                    the_content();
                    ?>
                </div>
            </div>
    </div>
    </Container>
    </div>
</section>

<?php get_footer(); ?>
