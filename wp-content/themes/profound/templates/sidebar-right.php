<?php
/**
 * Template Name: Right Sidebar Template
 * 
 * @package Profound
 */
get_header() ?>
<div id="content-section" class="content-section grid-col-16">
<?php if( have_posts() ) : while( have_posts() ): the_post() ?>

    <div class="post-title">
    <?php if ( is_front_page() ): ?>
        <h1 class="front-page"><?php the_title() ?></h1>
    <?php else: ?>
        <h1 class="inner-page"><?php the_title() ?></h1>
    <?php endif; ?>
    </div>

    <div id="post-<?php the_ID() ?>" <?php post_class('inner-content-section  grid-float-left') ?>>
        <div class="post-content">
            <?php the_content() ?>
            <?php wp_link_pages(array('before' => '<div class="post-nav-link"><span>' . __('Pages:', 'profound') . '</span>', 'after' => '</div>')) ?>
        </div>
        <div class="post-below-content"><?php edit_post_link( __( 'Edit', 'profound' ), '<div class="edit-link">', '</div>' ) ?></div>
        
    <?php endwhile;
    
    comments_template( '', true );

endif ?>
        
    </div><!-- inner-content-section ends -->
    <?php get_sidebar() ?>
</div><!-- Content-section ends here -->
<?php get_footer() ?>