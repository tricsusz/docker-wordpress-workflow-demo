<?php
/**
 * The template for displaying comments
 *
 * @package neblue
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
  return;
}
?>

<div id="comments" class="comments-area">

  <?php
  // You can start editing here -- including this comment!
  if ( have_comments() ) : ?>
    <ol class="comment-list">
      <?php
        wp_list_comments( array(
          'callback'=>'neblue_list_comments'
        ) );
      ?>
    </ol><!-- .comment-list -->

    <?php neblue_comments_navigation();

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() ) : ?>
      <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'neblue' ); ?></p>
    <?php
    endif;

  endif; // Check for have_comments().
  ?>

</div><!-- #comments -->
<?php
comment_form();
