<?php
/**
 * custom stylesheet
 *
 * @package neblue
 */

function neblue_inline_styles() {

  $inline_styles = '';

  $theme_color = esc_attr( get_theme_mod( 'theme_color' ) );
  if ($theme_color) {
    $theme_color = '#'.$theme_color;
    $inline_styles .= '
blockquote {
    border-left: 4px solid '.$theme_color.';
}
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
  background: '.$theme_color.';
}
input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
input[type="number"]:focus,
input[type="tel"]:focus,
input[type="range"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="week"]:focus,
input[type="time"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="color"]:focus,
textarea:focus {
  border:1px solid '.$theme_color.';
}
a {
  color: '.$theme_color.';
}
a:hover,
a:focus,
a:active {
  color: '.$theme_color.';
}
.site-title a:hover,
.site-title a:focus,
.site-title a:active{
  color:'.$theme_color.';
}
.site-social a:hover i,
.site-social a:focus i{
  color: '.$theme_color.';
}
.main-navigation .menu >li >a:hover,
.main-navigation .menu >li >a:focus{
  color:'.$theme_color.';
}
.main-navigation .menu >li ul li a:hover,
.main-navigation .menu >li ul li a:focus{
  color:'.$theme_color.';
}
.menu-toggle{
  color:'.$theme_color.';
}
.responsive-nav >li a:hover,
.responsive-nav >li a:focus{
  color: '.$theme_color.';
}
.about-author-name a:hover{
  color: '.$theme_color.';
}
.entry-title a:hover,
.entry-title a:focus{
  color:'.$theme_color.';
}
.sticky .entry-title,
.sticky .entry-title a{
  color:'.$theme_color.';
}
.entry-footer a:hover,
.entry-footer a:focus{
  color: '.$theme_color.';
}
.sticky .entry-footer {
    background: '.$theme_color.';
}
.more-link:hover,
.more-link:focus{
  background: '.$theme_color.';
}
.widget a:hover,
.widget a:focus{
  color:'.$theme_color.';
}
.widget_tag_cloud a:hover {
  background-color: '.$theme_color.';
}
.comment-meta a:hover,
.comment-meta a:focus{
  color:'.$theme_color.';
}
.comment-meta .fn a:hover,
.comment-meta .fn a:focus{
  color:'.$theme_color.';
}
.comment-form .logged-in-as a:hover,
.comment-form .logged-in-as a:focus{
  color:'.$theme_color.';
}
.post-navigation a:hover,
.post-navigation a:focus{
  color: '.$theme_color.';
}
.pagination .nav-links a:hover,
.pagination .nav-links a:focus{
  background:'.$theme_color.';
}
.pagination .nav-links .current{
  background:'.$theme_color.';
}
.site-info a:hover,
.site-info a:focus{
  color:'.$theme_color.';
}
#back_top {
  background:'.$theme_color.';
}
.slider-title a {
  background: '.$theme_color.';
}
.owl-theme .owl-controls .owl-page:hover span, 
.owl-theme .owl-controls .owl-page:focus span, 
.owl-theme .owl-controls .active span{
  color: '.$theme_color.';
  background-color: '.$theme_color.';
}
.slider-wrap .owl-theme .owl-controls .owl-buttons div {
  color: '.$theme_color.';
}
    ';
  }

  $blog_images_hover_effects = get_theme_mod('blog_images_hover_effects', 0);
  if ($blog_images_hover_effects&&!is_singular()) {
    $inline_styles .= '
.post-media img{
  display: block;
  max-width: 100%;
  width: auto;
  height: auto;
  margin: 0 auto;

  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  -o-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}
.post-media:hover img {
  -webkit-transform: scale(1.04);
  -moz-transform: scale(1.04);
  -ms-transform: scale(1.04);
  -o-transform: scale(1.04);
  transform: scale(1.04);
}
    ';
  }

  wp_add_inline_style('neblue-style', $inline_styles);

}
add_action('wp_enqueue_scripts', 'neblue_inline_styles');
