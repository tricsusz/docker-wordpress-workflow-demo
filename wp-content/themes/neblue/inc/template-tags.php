<?php
/**
 * Custom template tags for this theme
 *
 * @package neblue
 */

if (!function_exists('neblue_entry_header')) {
  function neblue_entry_header() {
    echo '<header class="entry-header clearfix">';

    if ( is_singular() ) {
      the_title( '<h1 class="entry-title">', '</h1>' );
    } else {
      the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    }

    echo '</header><!-- .entry-header -->';
  }
}

if (!function_exists('neblue_entry_footer')) {
  function neblue_entry_footer() {
    $show_date = get_theme_mod('blog_show_date', 1);
    $show_categories = get_theme_mod('blog_show_categories', 1);
    $show_comments_counter = get_theme_mod('blog_show_comments_counter', 1);
    $show_tags = get_theme_mod('blog_show_tags', 1);

    if ($show_date || $show_categories || $show_comments_counter || $show_tags) {
    echo '<footer class="entry-footer clearfix">';
      if ( 'post' === get_post_type() ) {

        if ($show_date || $show_categories || $show_comments_counter){
        echo '<div class="entry-meta clearfix">';

        if ($show_date) {
          $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
          if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
          }

          $time_string = sprintf( $time_string,
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( 'c' ) ),
            esc_html( get_the_modified_date() )
          );

          $posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';
          
          echo '<span class="posted-on"><i class="fa fa-calendar"></i> ' . $posted_on . '</span>'; // WPCS: XSS OK.
        }
        
        if ($show_categories) {
          $categories_list = get_the_category_list( esc_html__( ', ', 'neblue' ) );
          if ( $categories_list ) {
            echo '<span class="cat-links"><i class="fa fa-list"></i> ' . $categories_list. '</span>';
          }
        }

        if ($show_comments_counter) {
          if (! post_password_required() ) {
            if (comments_open()) {
              echo '<span class="comments-link"><i class="fa fa-comments"></i> <a href="'.get_the_permalink().'#comments">';
              comments_number(esc_html__('No Comments', 'neblue'), esc_html__('1 Comment', 'neblue'), esc_html__('% Comments', 'neblue'));
              echo '</a></span>';
            } else if (get_comments_number()) { 
              echo '<span class="comments-link"><i class="fa fa-comments"></i> <a href="'.get_the_permalink().'#comments">';
              comments_number('', esc_html__('1 Comment', 'neblue'), esc_html__('% Comments', 'neblue'));
              echo '</a></span>'; 
            }
          }
        }

        echo '</div><!-- .entry-meta -->';
        }
      }

      if(is_single()){
        if($show_tags){
          $tags_list = get_the_tag_list( '', __( ', ', 'neblue' ) );
          if ( $tags_list ) {
            echo '<div class="tags-links" ';
            if ($show_date || $show_categories || $show_comments_counter){
            echo 'style="border-top: 1px solid #dddddd;"';
            }
            echo '><i class="fa fa-tags"></i> ' .  $tags_list . '</div>';
          }
        }
      }
    echo '</footer><!-- .entry-footer -->';
    }
  }
}

function neblue_posts_navigation() {
  the_posts_navigation(array(
    'prev_text' => '<i class="fa fa-caret-left"></i> '.esc_html__('Older posts','neblue'),
    'next_text'  => esc_html__('Newer posts','neblue').' <i class="fa fa-caret-right"></i>'       
  ));
}

function neblue_post_navigation(){
  the_post_navigation( array(
        'prev_text' => '<i class="fa fa-caret-left"></i> %title',
        'next_text' => '%title <i class="fa fa-caret-right"></i>'
  ) );
}

function neblue_comments_navigation(){
  the_comments_navigation(array(
    'prev_text' => '<i class="fa fa-caret-left"></i> '.esc_html__( 'Older comments' ,'neblue'),
    'next_text' => esc_html__( 'Newer comments' ,'neblue').' <i class="fa fa-caret-right"></i>'
  ));
}

function neblue_posts_pagination(){
  the_posts_pagination(array(
    'prev_text' => '<i class="fa fa-caret-left"></i>',
    'next_text' => '<i class="fa fa-caret-right"></i>'
  ));
}

if (!function_exists('neblue_about_the_author')) {
  function neblue_about_the_author() {
    $author_ID = get_the_author_meta('ID');
    $author_email = get_the_author_meta('user_email');
    $author_display_name = get_the_author_meta('display_name');
    $author_posts_url = get_author_posts_url($author_ID);
    ?>
    <div class="about-author clearfix">
      <div class="about-author-avatar">
        <a href="<?php echo esc_url($author_posts_url); ?>">
          <?php echo get_avatar($author_email, '60', '', esc_attr($author_display_name)); ?>
        </a>
      </div>
      <div class="about-author-bio-wrap">
        <div class="about-author-name">
          <?php the_author_posts_link(); ?>
          <span>(<?php the_author_posts(); esc_html_e(' Posts', 'neblue'); ?>)</span>
        </div>
        <div class="about-author-bio">
          <?php the_author_meta('description'); ?>
        </div>
        <a href="<?php echo esc_url($author_posts_url); ?>" class="about-author-link">
          <?php esc_html_e('View all author&rsquo;s posts', 'neblue'); ?><i class="fa fa-caret-right"></i>
        </a>
      </div>
    </div>
    <?php
  }
}
