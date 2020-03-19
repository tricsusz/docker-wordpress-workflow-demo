<?php
/**
 * The main template file.
 * 
 * @package Profound
 */
get_header() ?>

<div id="content-section" class="content-section grid-col-16">
    <div class="inner-content-section grid-float-left">
    <?php if( have_posts() ) : ?>
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
    endif;
    ?>
    </div><!-- inner-content-section ends -->
<?php get_sidebar() ?>
</div><!-- Content-section ends here -->
<?php get_footer() ?>