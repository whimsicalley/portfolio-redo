<?php
/* Template Name: Graphic Page */
?>

<?php get_header(); ?>

        <!-- Begin Full Page Column -->
        <div class="full-width-graphics-img">
            <img src="<?php echo get_bloginfo('template_url') ?>/imgs/sj_magazine.jpg"/>
        </div>
    <div class="container">
    <section class="row">
        <div class="twelve columns content">
            <div class="breadcrumbs">
                <?php if ( function_exists( 'bcn_display' ) ) { bcn_display(); } ?>
            </div>
            <h2>Graphics Examples</h2>
            <div class="row">
                <!-- Begin Loop for posts? Hopefully? -->
                <?php query_posts('cat=5'); ?> <!--telling it which category to select & show-->
                <?php
                    if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        <!-- Start Individual Post Column -->
                        <div class="three columns posts">
                            <a href="<?php the_permalink(); ?>">
                            <?php
                                if ( has_post_thumbnail() ) {
                                the_post_thumbnail('thumbnail');
                                }
                            ?></a>
                        </div>
                        <!--End Post Column -->
                    <?php
                    } //end while
                    } //end if
                ?>
                <!-- End Loop -->
            </div>
            <!-- End Page -->
        </div>
    </section>

<?php get_footer(); ?>
