<?php
/*
 * Template for displaying search queries.
 * 
 * @package Profound
 */
get_header() ?>
<div id="content-section" class="content-section grid-col-16">
<?php if( have_posts() ) : ?>
    <div class="archive-meta-container">
        <div class="archive-head"><h1><?php _e( 'Search Results', 'profound' ) ?></h1></div>
        <div class="archive-description"><?php printf(__('We have found following content based on your search query:', 'profound') . ' %s.', get_search_query()) ?></div>
    </div>

    <div class="inner-content-section grid-float-left">
        <div class="loop-container-section grid-float-left clearfix">
        <?php while (have_posts()): the_post(); get_template_part('loop', 'archive'); endwhile; ?>
        </div><!-- loop-container-section ends -->
        <?php profound_archive_nav();
else :
    profound_404_show();
endif; ?>
    </div><!-- inner-content-section ends -->
<?php get_sidebar() ?>
</div><!-- Content-section ends here -->
<?php get_footer() ?>