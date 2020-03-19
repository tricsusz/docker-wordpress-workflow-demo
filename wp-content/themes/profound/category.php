<?php
/**
 * Template for displaying category archive posts.
 * 
 * @package Profound
 */
get_header() ?>
<div id="content-section" class="content-section grid-col-16">
    <?php if( have_posts() ) : ?>
        <div class="archive-meta-container">
            <div class="archive-head"><h1><?php _e( 'Category Archives', 'profound' ) ?></h1></div>
            <div class="archive-description"><?php
               $profound_category_description = term_description();
                   if ( ! empty( $profound_category_description ) ) {
                       echo '<span>' . $profound_category_description . '</span>';
                   } else {
                       printf(__('Archive of posts published in the category:','profound') . ' %s',single_cat_title( '', false ));
                   }
               ?>
            </div>
        </div>
					
        <div class="inner-content-section grid-float-left">
            <div class="loop-container-section grid-float-left clearfix">
                <?php
                    while (have_posts()): the_post();
                        get_template_part('loop', 'archive');
                    endwhile;
                ?>
            </div>
            <?php profound_archive_nav();
    else :
        profound_404_show();
    endif ?>
        </div><!-- inner-content-section ends -->

<?php get_sidebar() ?>
</div><!-- Content-section ends here -->
<?php get_footer() ?>