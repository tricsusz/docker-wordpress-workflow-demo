<?php
/**
 * Template for displaying author archive page.
 * 
 * @package Profound
 */
get_header() ?>

<div id="content-section" class="content-section grid-col-16">
    <?php if ( have_posts() ) : the_post() ?>
        <div class="archive-meta-container">
             <div class="archive-head"><h1 class="page-title author"><?php _e('Author Archives', 'profound') ?></h1></div>
             <div class="archive-description"><?php
                if ( get_the_author_meta( 'description' ) ) :
                     printf( '%s', "<p>" . get_the_author_meta( 'description' ) . "</p>" );
                else :
                     printf(__('Archive of the posts written by author:', 'profound') . ' %s.', get_the_author());
                endif;
                ?>
             </div>
        </div>
					
        <div class="inner-content-section grid-float-left">
            <div class="loop-container-section grid-float-left clearfix">
                <?php rewind_posts();
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