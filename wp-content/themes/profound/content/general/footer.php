<?php
/**
 * Footer template
 * 
 * @package Profound
 * @since 1.0.8.1
 */

if(!profound_get_option('disable_footer')): ?>
<footer class="footer-bg-section grid-col-16 clearfix">
    <div id="footer-section" class="footer-section grid-col-16">
    <?php if(profound_get_option('show_copyright')): ?><div id="copyright" class="copyright"><?php _e( 'Copyright', 'profound' ) ?> <?php echo date( 'Y' ) ?> <?php if( profound_get_option('footer_name') ) { echo esc_html( profound_get_option('footer_name') ); } ?> | <?php _e( 'Powered by', 'profound' ) ?> <a href="http://www.wordpress.org">WordPress</a> | <?php _e( 'Profound theme by', 'profound' ) ?> <a href="http://www.mudthemes.com/" target="_blank">mudThemes</a></div><?php endif ?>
    <?php profound_social_section_show() ?>
    </div>
</footer>
<?php endif; ?>