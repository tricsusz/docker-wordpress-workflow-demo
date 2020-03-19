<?php
/**
 * The homepage file.
 * 
 * @package Profound
 */
get_header() ?>
<div id="content-section" class="content-section blog-page grid-col-16">
<?php if( have_posts() ) : ?>
    <div class="archive-meta-container">
        <div class="archive-head"><?php echo '<h1>'.__('Our Blog', 'profound').'</h1>' ?></div>
        <div class="archive-description"></div>
    </div><!-- Archive Meta Container ends -->

    <div class="inner-content-section grid-float-left">
        <div class="loop-container-section grid-float-left clearfix">
        <?php
            while( have_posts() ): the_post();
                get_template_part( 'loop', 'home' );
            endwhile;
        ?>
        </div><!-- loop-container-section ends -->
        <?php profound_archive_nav();
else :
    profound_404_show();
endif;
?>
    </div><!-- inner-content-section ends -->
<?php get_sidebar() ?>
</div><!-- Content-section ends here -->
<?php get_footer() ?>