<?php
/**
 * 404 content part
 * 
 * @package Profound
 * @todo Check front-end display
 * @since 1.0.8.1
 */
?>
<div class="archive-meta-container">
  <div class="archive-head">
    <?php if (is_404()) : ?><h1><?php _e('Ooops! Nothing Found', 'profound'); ?></h1>
    <?php elseif (is_search()) : ?><h1><?php printf(__('Nothing found for:', 'profound').' %s', get_search_query()); ?></h1>
    <?php else : ?><h1><?php printf(__('Nothing found for:', 'profound').' %s', single_term_title('', false)); ?></h1>
    <?php endif; ?>
  </div>
</div><!-- Archive Meta Container ends -->

<div class="archive-loop-container archive-empty">
  <div class="archive-excerpt">
    <p><?php _e('Apologies, but no results were found. Perhaps searching will help find required content.', 'profound'); ?></p>
    <?php get_search_form(); ?>
  </div>
</div>
