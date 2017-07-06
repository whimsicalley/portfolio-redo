<?php
/* Template Name: Full Width */
?>

<?php get_header(); ?>

    <section class="row fullwidth">
        <div class="twelve columns">
            <!-- Begin Loop -->
            <?php if ( function_exists( 'bcn_display' ) ) { bcn_display(); }?>
            <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                }
            }
            ?>
            <!-- End Loop -->
        </div>
    </section>

<?php get_footer(); ?>
