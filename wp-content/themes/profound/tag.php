<?php
/**
 * Template for displaying tag archive posts.
 * 
 * @package Profound
 */
get_header() ?>
<div id="content-section" class="content-section grid-col-16">
<?php if( have_posts() ) : ?>
    <div class="archive-meta-container">
        <div class="archive-head"><h1><?php _e( 'Tag Archives', 'profound' ) ?></h1></div>
        <div class="archive-description">
        <?php
            $profound_tag_description = term_description();
            if ( ! empty( $profound_tag_description ) ) {
                echo $profound_tag_description;
            } else {
                printf(__('Archive of posts published in the category:', 'profound') . ' %s', single_term_title( '', false ) );
            }
        ?>
        </div>
    </div>

    <div class="inner-content-section grid-float-left">
    <?php if( have_posts() ) : ?>
        <div class="loop-container-section grid-float-left clearfix">
        <?php
            // Here starts the loop
            while (have_posts()): the_post();
                get_template_part('loop', get_post_format());
            endwhile;
        ?>
        </div><!-- loop-container-section ends -->
    <?php endif;
    profound_archive_nav();
else :
    profound_404_show();

endif ?>

    </div><!-- inner-content-section ends -->
    <?php get_sidebar() ?>
</div><!-- Content-section ends here -->
<?php get_footer() ?>