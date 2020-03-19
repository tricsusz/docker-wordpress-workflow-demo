<?php
/**
 * Template part for displaying posts
 *
 * @package neblue
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if (has_post_thumbnail()) {?> 
  <div class="post-media">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_post_thumbnail();?></a>
  </div>
  <?php }?>

  <div class="post-content">
    <?php neblue_entry_header();?>

    <?php neblue_entry_content();?>
      
    <?php neblue_entry_footer(); ?>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
