<?php
/* Template Name: Web Design */
?>

<?php get_header(); ?>

    <section class="row">
        <div class="twelve columns">
            <section>
                <!-- Insert Image Slider here-->
            </section>
            <section>
                <div class="breadcrumbs">
                    <?php if ( function_exists( 'bcn_display' ) ) { bcn_display(); } ?>
                </div>
                <!-- Begin Loop -->
                <?php if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content();
                    }
                }
                ?>
                <!-- End Loop -->
            </section>
        </div>
    </section>

<?php get_footer(); ?>
