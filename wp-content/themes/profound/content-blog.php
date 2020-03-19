<?php
/**
 * The Blog Content (mostly used on archive pages).
 * 
 * @todo Here sidebar is called in a different way then other archive files. Modify either this or others.
 * @package Profound
 */
?>

<div id="content-section" class="content-section grid-col-16 clearfix">
<?php if(! profound_get_option('disable_blog_heading')): ?>
    <div class="blog-heading-section grid-col-16 clearfix">
        <h2><?php echo apply_filters('profound_blog_heading_title_filter', '') ?></h2>
        <h6><?php echo apply_filters('profound_blog_heading_desc_filter', '') ?></h6>
    </div>
<?php endif; ?>

    <div class="inner-content-section grid-float-left">
        <?php if( have_posts() ) : ?>
        <div class="loop-container-section clearfix"><?php
            // Here starts the loop
            while( have_posts() ): the_post();
                get_template_part( 'loop', 'home' );
            endwhile;
        ?></div>
        <?php
            profound_archive_nav();
        else :
            profound_404_show();
        endif;?>
    </div><!-- inner-content-section ends -->
<?php get_sidebar() ?>
</div><!-- Content-section ends here -->
