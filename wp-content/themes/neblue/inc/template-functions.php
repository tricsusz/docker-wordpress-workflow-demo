<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package neblue
 */

if (!function_exists('neblue_entry_content')) {
  function neblue_entry_content() {
    $excerpt_type = get_theme_mod('blog_excerpt_type', 'excerpt');
    if ($excerpt_type == 'excerpt') {
      ?>

      <!-- excerpt -->
      <div class="entry-content clearfix">
        <?php the_excerpt(); ?>
      </div>
      <!-- end excerpt -->

      <?php
    } else {
      ?>

      <!-- excerpt (post content) -->
      <div class="entry-content clearfix">
        <?php
        the_content( sprintf(
          wp_kses(
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'neblue' ),
            array(
              'span' => array(
                'class' => array(),
              ),
            )
          ),
          get_the_title()
        ) );
        ?>
      </div>
      <!-- end excerpt (post content) -->

      <?php
    }
  }
}

if (!function_exists('neblue_slider')) {
  function neblue_slider() {
?>
  <div class="slider-wrap">
    <div class="slider-cycle">
      <?php
      for( $i = 1; $i <= 4; $i++ ) {
        $neblue_slider_title = get_theme_mod( 'slider_title'.$i , '' );
        $neblue_slider_text  = get_theme_mod( 'slider_text'.$i  , '' );
        $neblue_slider_image = get_theme_mod( 'slider_image'.$i , '' );
        $neblue_slider_link  = get_theme_mod( 'slider_link'.$i  , '' );
        if( !empty( $neblue_slider_image ) ) {
          ?>
          <section class="featured-slider">
            <div class="slider-image-wrap">
              <img alt="<?php echo esc_attr( $neblue_slider_title ); ?>" src="<?php echo esc_url( $neblue_slider_image ); ?>">
              </div>
              <?php if( !empty( $neblue_slider_title ) || !empty( $neblue_slider_text ) ) { ?>
                <article class="slider-text-box">
                  <div class="inner-wrap">
                    <div class="slider-text-wrap">
<?php if( !empty( $neblue_slider_title )  ) { ?>
<span class="slider-title clearfix">
<a title="<?php echo esc_attr( $neblue_slider_title ); ?>" <?php if(!empty($neblue_slider_link)){ ?> href="<?php echo esc_url( $neblue_slider_link ); ?>"<?php }?>><?php echo esc_html( $neblue_slider_title ); ?></a>
</span>
<?php } ?>
<?php if( !empty( $neblue_slider_text )  ) { ?>
<span class="slider-content"><?php echo esc_html( $neblue_slider_text ); ?></span>
<?php } ?>
                    </div>
                  </div>
              </article>
            <?php } ?>
          </section>
        <?php
        }
      }
      ?>
    </div>
    <nav id="controllers" class="clearfix">
    </nav>
  </div>
<?php
  }
}

if (!function_exists('neblue_page_header')) {
  function neblue_page_header(){
    // author page
    if (is_author()) {
?>
      <header class="page-header">
        <h1 class="page-title"><?php the_archive_title();?></h1>
        <?php if (get_the_author_meta('description')) { ?>
        <div class="archive-description"><?php the_author_meta('description'); ?></div>
        <?php }?>
      </header><!-- .page-header -->
<?php
    // category/tag page
    } else if (is_category() || is_tag()) {
?>
      <header class="page-header">
        <h1 class="page-title"><?php the_archive_title();?></h1>
        <?php if (get_the_archive_description()) { ?>
        <div class="archive-description"><?php the_archive_description();?></div>
        <?php }?>
      </header><!-- .page-header -->
<?php
    // search results page
    } else if (is_search()) { 
?>
      <header class="page-header">
        <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'neblue' ), '<span>' . get_search_query() . '</span>' );?></h1>
      </header><!-- .page-header -->
<?php
    // archive page
    } else if (is_archive()) {
?>
      <header class="page-header">
        <h1 class="page-title"><?php the_archive_title();?></h1>
      </header><!-- .page-header -->
<?php
    }
  }
}

if (!function_exists('neblue_excerpt_length')) {
  function neblue_excerpt_length($length) {
    $excerpt_length = get_theme_mod('blog_excerpt_length', 40);
    if ($excerpt_length) {
      $excerpt_length = intval($excerpt_length);
    } else {
      $excerpt_length = 40;
    }
    return $excerpt_length;
  }
}
add_filter('excerpt_length', 'neblue_excerpt_length');

if (!function_exists('neblue_editor_style')) {
  function neblue_editor_style() {

    // add stylesheets
    add_editor_style(array(
      'assets/css/editor-style.css',
      'assets/font-awesome/css/font-awesome.min.css'
    ));

  }
}
add_action('init', 'neblue_editor_style');
