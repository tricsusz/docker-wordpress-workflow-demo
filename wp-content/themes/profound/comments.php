<?php
/*
 * Template for displaying comments.
 * 
 * @package Profound
 */
?>
<div id="comments" class="comments-section grid-col-12 clearfix">
<?php
if (post_password_required() ):
    echo '<p class="nopassword">'.apply_filters('profound_post_password_protected_comment_text_filter',__( 'This post is password protected. Enter the password to view any comments', 'profound' )).'</p>';
    echo '</div>';
    return;
endif;

if ( have_comments() ):
    echo '<div id="comments-title" class="comments-title">';
        printf( '%1$s ' . _n( 'Comment', 'Comments', get_comments_number(), 'profound' ), number_format_i18n( get_comments_number() ) );
    echo '</div>';
    
    echo '<div class="commentslist clearfix">';
        echo '<ol>';
            wp_list_comments( array( 'callback' => 'profound_comment_callback' ) );
        echo '</ol>';
    echo '</div>';

    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        echo '<div class="comment-navigation">';
    
            echo '<div class="nav-previous">';
                previous_comments_link( apply_filters('profound_comments_nav_older_text_filter',__( 'Older Comments', 'profound' )).' <span class="meta-nav">&rarr;</span>' );
            echo '</div>';
            
            echo '<div class="nav-next">';
                next_comments_link( '<span class="meta-nav">&larr;</span> '.apply_filters('profound_comments_nav_newer_text_filter',__( 'Newer Comments', 'profound' )) );
            echo '</div>';
        echo '</div> <!-- .navigation -->';
    endif;
endif;

if ( !comments_open() && !is_page() ) :
    echo '<p class="nocomments">'.apply_filters('profound_comments_closed_text_filter',__( 'Sorry, Comments are closed.', 'profound' )).'</p>';
endif;

comment_form();
?>
</div>