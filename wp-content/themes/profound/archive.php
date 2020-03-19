<?php
/**
 * Template for displaying archive page.
 * 
 * @package Profound
 */
get_header() ?>
<div id="content-section" class="content-section grid-col-16">        
    <?php if (have_posts()) : ?>
        <div class="archive-meta-container">
            <div class="archive-head">
                <h1><?php
                    if (is_day()) :
                        printf(__('Daily Archives:', 'profound') . ' %s', '<span>' . get_the_date() . '</span>');
                    elseif (is_month()) :
                        printf(__('Monthly Archives:', 'profound') . ' %s', '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'profound')) . '</span>');
                    elseif (is_year()) :
                        printf(__('Yearly Archives:', 'profound') . ' %s', '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'profound')) . '</span>');
                    else :
                        _e('Blog Archives', 'profound');
                    endif; ?></h1>
            </div>
            <div class="archive-description"><?php printf('<p>' . __('Archive of posts published in the specified', 'profound') . ' %s </p>', profound_date_text()) ?></div>
        </div><!-- Archive Meta Container ends -->
            
        <div class="inner-content-section grid-float-left">
            <div class="loop-container-section grid-float-left clearfix">
                <?php while (have_posts()): the_post(); get_template_part('loop', 'archive'); endwhile; ?>
            </div><!-- loop-container-section ends -->
            <?php profound_archive_nav();
        else :
            profound_404_show();
        endif; ?>

        </div> <!-- inner-content-section ends here -->
<?php get_sidebar() ?>
</div><!-- Content-section ends here -->
<?php get_footer() ?>