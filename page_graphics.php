<?php
/* Template Name: Graphic Page */
?>

<?php get_header(); ?>

    <section class="row">
        <!-- Begin Full Page Column -->
        <div class="twelve columns">
            <div class="breadcrumbs">
                <?php if ( function_exists( 'bcn_display' ) ) { bcn_display(); } ?>
            </div>
            <h2>Graphics Examples</h2>
            <p>Here you can find examples on some of my graphics work that I've done recently.</p>

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
