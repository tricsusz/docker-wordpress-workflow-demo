<?php
/**
 * Custom template widgets for this theme
 *
 * @package neblue
 */
 
function neblue_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'neblue' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'neblue' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'neblue_widgets_init' );
