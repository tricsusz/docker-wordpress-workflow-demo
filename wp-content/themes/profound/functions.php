<?php
/**
 * Profound Theme functions and definitions
 * 
 * @package Profound
 * @since 1.0
 */



/**
 * Constant to check whether Profound Premium Active or not.
 * 
 * Returns True only when Premium theme is active.
 * 
 * @since 1.0
 */
define('PROFOUND_PRO', FALSE );



/**
 * Contant for URL: [themeroot]/assets/global/
 * 
 * @since 1.0.8.1
 */
define('PROFOUND_GLOBAL_URL', get_template_directory_uri() . '/assets/global/');



/**
 * Constant for Directory: [themeroot]/includes/
 * 
 * @since 1.0.0
 * 
 */
define('PROFOUND_INCLUDES_DIR' , get_template_directory() . '/includes/' );



/**
 * Customizer call
 */
require_once PROFOUND_INCLUDES_DIR . 'customizer.php';



if( ! function_exists( 'profound_setup' ) ):
/**
 * Sets up theme defaults and registers support for various theme features
 * 
 * @since 1.0
 */
function profound_setup() {
    
    global $content_width;
    
    /**
     * Primary content width according to the design and stylesheet.
     */
    if ( ! isset( $content_width ) ) { $content_width = 890; }
    
    /**
     * Makes profound Theme ready for translation.
     * Translations can be filed in the /languages/ directory
     */
    load_theme_textdomain('profound', get_template_directory() . '/languages');

    /**
     * Add default posts and comments RSS feed links to head.
     */
    add_theme_support('automatic-feed-links');
    
    /**
     * Add custom background.
     * @todo Put E7E7E7 in a variable and then change it according to the skin
     */
    add_theme_support('custom-background', array('default-color' => 'E7E7E7'));
    
    /**
     * Automatically adds title tag
     */
    add_theme_support( "title-tag" );
    
    /**
     * Adds supports for Theme menu.
     * Profound uses wp_nav_menu() in a single location to diaplay one single menu.
     */
    register_nav_menu('primary', __('Primary Menu','profound'));

    /**
     * Add support for Post Thumbnails.
     * Defines a custom name and size for Thumbnails to be used in the theme.
     *
     * Note: In order to use the default theme thumbnail, add_image_size() must be removed
     * and 'profoundThumb' value must be removed from the_post_thumbnail in the loop file.
     */
    add_theme_support('post-thumbnails');
    add_image_size('profoundThumb', 190, 130, true);
    
    /**
     * Adds TinyMCE Editor Stylesheet.
     */
    add_editor_style();
}
endif;
add_action( 'after_setup_theme', 'profound_setup' );



/**
 * Defines menu values and call the menu itself.
 * The menu is registered using register_nav_menu function in the theme setup.
 * 
 * @since 1.0
 */
function profound_nav() {
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container_id' => 'menu',
        'menu_class' => 'sf-menu profound_menu',
        'menu_id' => 'profound_menu',
        'fallback_cb' => 'profound_nav_fallback' // Fallback function in case no menu item is defined.
    ));
}



/**
 * Displays a custom menu in case either no menu is selected or
 * menu does not contains any items or wp_nav_menu() is unavailable.
 * 
 * @since 1.0
 */
function profound_nav_fallback() {
?>
    <div id="menu">
    	<ul class="sf-menu" id="profound_menu">
			<?php
            	wp_list_pages( 'title_li=&sort_column=menu_order&depth=3');
            ?>
        </ul>
    </div>
<?php
}



/**
 * Register sidebars one at right and three footer sidebars in a box.
 * 
 * @since 1.0
 */
function profound_sidebars() {

    // Footerbox Sidebar #1
    register_sidebar(array(
        'name' => __('Right Sidebar', 'profound'),
        'id' => 'right_sidebar',
        'description' => __('Right Sidebar', 'profound'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #1
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #1', 'profound'),
        'id' => 'footerbox_sidebar_1',
        'description' => __('Footerbox Sidebar #1', 'profound'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #2
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #2', 'profound'),
        'id' => 'footerbox_sidebar_2',
        'description' => __('Footerbox Sidebar #2', 'profound'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #3
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #3', 'profound'),
        'id' => 'footerbox_sidebar_3',
        'description' => __('Footerbox Sidebar #3', 'profound'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
    
}
add_action( 'widgets_init', 'profound_sidebars' );



/**
 * Enqueue CSS and JS files
 * 
 * @since 1.0
 */
function profound_enqueue() {
    
    profound_enqueue_font();

    wp_enqueue_style('profound-font-awesome', PROFOUND_ADMIN_CSS_URL . 'font-awesome.4.7.0.css', false, '4.7.0');
    wp_enqueue_style('profound-stylesheet', get_stylesheet_uri(), false, profound_get_theme_info('Version'), 'all' );
    
    // Enqueue (comment-reply )Javascript in case of threaded comments.
    if (is_singular() && comments_open() && get_option('thread_comments')) :
        wp_enqueue_script('comment-reply');
    endif;
    
    wp_enqueue_script('profound-flexslider', PROFOUND_GLOBAL_URL . 'js/jquery.flexslider-min.js', array( 'jquery' ), '2.1.0', true);
    wp_localize_script('profound-flexslider', 'profound_slide_vars', array(
        'slideshowSpeed' => profound_get_option('slide_speed'),
        'animationSpeed' => profound_get_option('slide_ani_speed'),
        'directionNav' => (bool) profound_get_option('disable_slide_nav') ? '' : 'true',
        'smoothHeight' => (bool) profound_get_option('disable_smooth_height') ? '' : 'true',
        'animation' => profound_get_option('slide_animation_type'),
        'direction' => profound_get_option('slide_dir'),
        ));
    wp_enqueue_script('profound-superfish', PROFOUND_GLOBAL_URL . 'js/superfish.min.js', array( 'jquery' ), '1.4.8', true);
    wp_enqueue_script('jquery-color');
    wp_enqueue_script('profound-custom', PROFOUND_GLOBAL_URL . 'js/custom.min.js', array( 'jquery' ), profound_get_theme_info('Version'), true);
}
add_action( 'wp_enqueue_scripts', 'profound_enqueue');



if( !function_exists('profound_enqueue_font') ):
/**
 * Enqueues Fonts
 * 
 * @since 1.0.1.7
 */
function profound_enqueue_font() {
    wp_enqueue_style('profound-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic');
    wp_enqueue_style('profound-lato', '//fonts.googleapis.com/css?family=Lato:400,100italic,100,300,300italic,700,700italic,900,900italic');
}
endif;



/**
 * Returns the theme info from WP_Theme object
 * 
 * @link https://codex.wordpress.org/Function_Reference/wp_get_theme WPORG documentation
 * @param string $property Queried Property
 * @return mixed
 */
function profound_get_theme_info($property){
    $theme = wp_get_theme();
    return $theme->get($property);
}



/**
 * Returns Theme Fonts based on $method
 * 
 * @param string $method 'enqueue'|'customizer'
 * @internal 'enqueue' for enqueueing fonts | 'customizer' for customizer options
 * @return array
 */
function profound_get_fonts($method){
    $fonts = unserialize('a:12:{i:0;a:6:{s:4:"name";s:34:"Arial, Helvetica, "Helvetica Neue"";s:6:"family";s:10:"sans-serif";s:7:"variant";b:0;s:4:"type";s:4:"open";s:9:"shortname";s:5:"arial";s:11:"displayname";s:5:"Arial";}i:1;a:6:{s:4:"name";s:21:""Arial Black", Gadget";s:6:"family";s:10:"sans-serif";s:7:"variant";b:0;s:4:"type";s:4:"open";s:9:"shortname";s:11:"arial-black";s:11:"displayname";s:11:"Arial Black";}i:2;a:6:{s:4:"name";s:22:""Courier New", Courier";s:6:"family";s:9:"monospace";s:7:"variant";b:0;s:4:"type";s:4:"open";s:9:"shortname";s:11:"courier-new";s:11:"displayname";s:11:"Courier New";}i:3;a:6:{s:4:"name";s:38:"Georgia, "Palatino Linotype", Palatino";s:6:"family";s:5:"serif";s:7:"variant";b:0;s:4:"type";s:4:"open";s:9:"shortname";s:7:"georgia";s:11:"displayname";s:7:"Georgia";}i:4;a:6:{s:4:"name";s:4:"Lato";s:6:"family";s:10:"sans-serif";s:7:"variant";s:70:"100,100italic,300,300italic,regular,italic,700,700italic,900,900italic";s:4:"type";s:15:"google-webfonts";s:9:"shortname";s:4:"lato";s:11:"displayname";s:4:"Lato";}i:5;a:6:{s:4:"name";s:38:""Lucida Sans Unicode", "Lucida Grande"";s:6:"family";s:10:"sans-serif";s:7:"variant";b:0;s:4:"type";s:4:"open";s:9:"shortname";s:6:"lucida";s:11:"displayname";s:13:"Lucida Grande";}i:6;a:6:{s:4:"name";s:9:"Open Sans";s:6:"family";s:10:"sans-serif";s:7:"variant";s:70:"300,300italic,regular,italic,600,600italic,700,700italic,800,800italic";s:4:"type";s:15:"google-webfonts";s:9:"shortname";s:8:"opensans";s:11:"displayname";s:9:"Open Sans";}i:7;a:6:{s:4:"name";s:29:""Palatino Linotype", Palatino";s:6:"family";s:5:"serif";s:7:"variant";b:0;s:4:"type";s:4:"open";s:9:"shortname";s:8:"palatino";s:11:"displayname";s:8:"Palatino";}i:8;a:6:{s:4:"name";s:14:"Tahoma, Geneva";s:6:"family";s:10:"sans-serif";s:7:"variant";b:0;s:4:"type";s:4:"open";s:9:"shortname";s:6:"tahoma";s:11:"displayname";s:6:"Tahoma";}i:9;a:6:{s:4:"name";s:24:""Times New Roman", Times";s:6:"family";s:5:"serif";s:7:"variant";b:0;s:4:"type";s:4:"open";s:9:"shortname";s:5:"times";s:11:"displayname";s:15:"Times New Roman";}i:10;a:6:{s:4:"name";s:25:""Trebuchet MS", Helvetica";s:6:"family";s:10:"sans-serif";s:7:"variant";b:0;s:4:"type";s:4:"open";s:9:"shortname";s:12:"trebuchet-ms";s:11:"displayname";s:12:"Trebuchet MS";}i:11;a:6:{s:4:"name";s:15:"Verdana, Geneva";s:6:"family";s:10:"sans-serif";s:7:"variant";b:0;s:4:"type";s:4:"open";s:9:"shortname";s:7:"verdana";s:11:"displayname";s:7:"Verdana";}}');
    
    switch ($method):
        case 'enqueue':
            return $fonts;
            break;

        case 'customizer':
            $customizer_array = array();
            foreach($fonts as $font):
                $customizer_array[$font['shortname']] = $font['displayname'];
            endforeach;
            
            return $customizer_array;
            break;

        default;
            return $fonts;

    endswitch;
}



if( ! function_exists( 'profound_enqueue_ie_script' ) ):
/**
 * Hooks respond.js for IE in the wp_head hook.
 * 
 * @since 1.0
 */
function profound_enqueue_ie_script() {
    echo "\n";
    ?><!--[if lt IE 9]><script type='text/javascript' src='<?php echo PROFOUND_GLOBAL_URL ?>js/respond.min.js'></script><![endif]--><?php
    echo "\n";
    ?><!--[if lt IE 9]><script type='text/javascript' src='<?php echo PROFOUND_GLOBAL_URL ?>js/html5shiv.min.js'></script><![endif]--><?php
    echo "\n";
}
endif;
add_action('wp_head', 'profound_enqueue_ie_script');



/**
 * Defines the number of characters for post excerpts
 * and is added to excerpt_length filter.
 * 
 * @since 1.0
 */
function profound_excerpt_length( $length ) {
	return 43;
}
add_filter( 'excerpt_length', 'profound_excerpt_length' );



/**
 * Defines the text for the (read more) link for post excerpts
 * and is added to excerpt_more filter.
 * 
 * @since 1.0
 */
function profound_auto_excerpt_more( $more ) {
	return '&hellip;' ;
}
add_filter( 'excerpt_more', 'profound_auto_excerpt_more' );



/**
 * Used to return body classes
 * 
 * @param array $classes
 * @return array
 * @since 1.0
 */
function profound_body_class($classes) {
    
    
    if(is_single()):
        
        $classes[] = 'single-template';
        $classes[] = 'post-template';
    
    elseif(is_page()):
        
        $classes[] = 'page-template';
        $classes[] = 'post-template';

    elseif(is_front_page()):
        
        $classes[] = 'home-template';
    
    elseif(is_home()):
        
        $classes[] = 'home-template';
        $classes[] = 'blog-template';
    
    elseif (is_archive()):
        
        $classes[] = 'archive-template';
    
    elseif(is_404()):
        
        $classes[] = 'archive-template';
        $classes[] = 'empty-template';
    
    elseif(is_search()):
        
        $classes[] = 'archive-template';
        $classes[] = 'search-template';
    
    endif;
    
        $classes[] = esc_attr(profound_get_option('skin'));
    
    return $classes;
}
add_filter('body_class', 'profound_body_class');



/**
 * Display slideshow only if any slideshow image exists.
 * 
 * @since 1.0
 * @todo Check HTML structure and CSS classes.
 */
function profound_carousel_featured_slideshow_show(){
    
    $output = '';
    
    for($i = 1; $i <= 3; $i++){
        $slides[$i]['img'] = profound_get_option('featured_slide_img_' . $i);
        $slides[$i]['head'] = profound_get_option('featured_slide_head_' . $i);
    }
        
    $error = array_filter($slides); // Check if array is empty.
        
    if(!empty($error)):
        $output .= '<div id = "featured-container" class = "slider">';
            $output .= '<div class = "flexslider">';
                $output .= '<ul class = "slides">';
                    if(is_array($slides)):
                        foreach ($slides as $slides):
                            if(!empty($slides['img'])):
                                $output .= '<li>';
                                    $output .= '<img src="'.esc_url( $slides['img'] ) .'" />';
                                    if($slides['head']):
                                    $output .= '<div class="flex-caption">';
                                        $output .= '<div class="featured-heading">';
                                            $output .= '<span>';
                                                $output .= esc_html( $slides['head'] );
                                                $output .= '</span>';
                                        $output .= '</div>';
                                    $output .= '</div>';
                                    endif;
                                $output .= '</li>';
                            endif;
                        endforeach;
                    endif;
                $output .= '</ul>';
            $output .= '</div>';
        $output .= '</div>';
    endif;
    
    echo $output;
}



/**
 * Used to display CTA section
 * 
 * @since 1.0
 */
function profound_cta_section_show(){
    ?>
    <?php if(!profound_get_option('disable_featured_section')): ?>
        <div id="cta-bg-section" class="cta-bg-section grid-col-16 clearfix">
            <div id="cta-section" class="cta-section grid-col-16 clearfix">
                <div id="cta-content-section" class="cta-content-section grid-col-16">
                    <div class="cta-image-section"><?php profound_carousel_featured_slideshow_show() ?></div>
                </div>
            </div> <!-- cta section ends -->
        </div>
    <?php endif; ?>

<?php }



/**
 * Checks whether the all the content sections are disabled or not.
 * 
 * @todo Remove this function
 * @since 1.0
 */
function profound_is_home() {
    
    if(profound_get_option('disable_featured_section') && (get_option('show_on_front') == 'posts')){
        add_filter('profound_blog_template_heading_filter', 'profound_is_blog_heading_text', 20);
        return TRUE;
    } else {
        return FALSE;
    }
}



/**
 * Adds text to profound_blog_template_heading_filter used on home.php
 * 
 * @todo Remove this function
 * @return string
 */
function profound_is_blog_heading_text(){
    return '';
}



/**
 * Returns social icons individually
 * 
 * @param string $option Name of option in DB
 * @param string $title
 * @param string $icon Name of icon as in mdf-[icon]
 * @return string
 * 
 * @since 1.0.8.2
 */
function profound_get_social_section_individual_icon($option, $title, $icon) {
    $output = '';

    if(profound_get_option($option)){
        $output .= '<div class="social-icons">';
        $output .= '<a href="'.esc_url(profound_get_option($option)).'" title="'.esc_attr($title).'" target="_blank"><i class="mdf mdf-'.esc_attr($icon).'"></i></a>';
        $output .= '</div>';
    }
    return $output;
    
}



/**
 * Used to display social section
 * 
 * @since 1.0
 */
function profound_social_section_show() {    
    
    if(!profound_get_option('disable_social_section')):

    $output = false;

    $output .= profound_get_social_section_individual_icon('facebook', 'Facebook', 'facebook');
    $output .= profound_get_social_section_individual_icon('twitter', 'Twitter', 'twitter');
    $output .= profound_get_social_section_individual_icon('google-plus', 'Google+', 'google-plus');
    $output .= profound_get_social_section_individual_icon('linkedin', 'Linkedin', 'linkedin');
    $output .= profound_get_social_section_individual_icon('instagram', 'Instagram', 'instagram');
    $output .= profound_get_social_section_individual_icon('pinterest', 'Pinterest', 'pinterest');
    $output .= profound_get_social_section_individual_icon('skype', 'Skype', 'skype');
    $output .= profound_get_social_section_individual_icon('tumblr', 'Tumblr', 'tumblr');
    $output .= profound_get_social_section_individual_icon('rss', 'RSS feed', 'rss');
    
    if($output !== false): ?>
    <div id="social-section" class="social-section">
        <?php echo $output ?>
    </div>
    <?php endif ?>
<?php
    endif;
}



/**
 * Displays the content in case of 404 page, empty search query
 * and any other query which does not output any result.
 * 
 * Both heading and content of the page will be displayed with a
 * search form. Any modification to this module will effect only
 * 404 error or related pages.
 * 
 * @since 1.0
 * @todo Remove this function and use only content file.
 */
function profound_404_show(){
    get_template_part('content/general/404');
}



/**
 * Decides and returns the accurate 'text' to be displayed.
 * 
 * @return string
 * @since 1.0
 */
function profound_date_text() {
    if (is_date()):
        if (is_day()):
            $date_text = __('Day', 'profound');
        elseif (is_month()):
            $date_text = __('Month', 'profound');
        elseif (is_year()):
            $date_text = __('Year', 'profound');
        else:
            $date_text = __('Period', 'profound');
        endif;

        return $date_text;

    endif;
}



/**
 * Displays the navigation links for the archive pages. Is only
 * applicable if the total number of pages is more than 'one'.
 * 
 * @since 1.0
 */
function profound_archive_nav() {
    
    global $wp_query;

    if ($wp_query->max_num_pages > 1 && !profound_get_option('disable_blog_nav')): ?>
        
        <div class="archive-nav grid-col-16">
            <div class="nav-next"><?php previous_posts_link('<span class="meta-nav">&larr;</span> ' . __('Newer posts', 'profound')); ?></div>
            <div class="nav-previous"><?php next_posts_link(__('Older posts', 'profound') . ' <span class="meta-nav">&rarr;</span>'); ?></div>
        </div>
        
<?php endif;
}



/**
 * Displays the navigation links for the posts and pages.
 * 
 * @since 1.0
 */
function profound_post_nav() {
?>
    <div class="post-nav">
        <div class="nav-previous"><?php previous_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Previous post link', 'profound' ) . '</span>' ) ?></div>
        <div class="nav-next"><?php next_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Next post link', 'profound' ) . '</span> %title' ) ?></div>
    </div>
<?php
}



/**
 * Display site title/description or logo
 * 
 * @since 1.0
 */
function profound_logo() {
    
    $logo_img = profound_get_option('logo_img');
            
        if( empty($logo_img)): ?>
        
        <div id="site-title" class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ) . ' | ' . esc_attr( get_bloginfo('description') ) ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name', 'display' )) ?></a>
            </div>
            <?php if(!profound_get_option('disable_site_desc')): ?>
                <div id="site-description" class="site-description"><?php echo esc_html( get_bloginfo( 'description' ) ) ?></div>
            <?php endif; ?>
        <?php else: ?>
        
            <div id="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ) ?>" rel="home"><img src="<?php echo esc_url( profound_get_option('logo_img') ) ?>"/></a>
            </div>

        <?php endif;
}



/**
 * Outputs the Custom CSS code from options into HEAD section of theme.
 * 
 * @since 1.0
 */
function profound_custom_css() {
    $custom_css = profound_get_option('custom_css');
    if(!empty($custom_css)){
        $output = '<style type="text/css">';
        $output .= wp_filter_nohtml_kses(profound_get_option('custom_css'));
        $output .= '</style>';
        
        echo $output;
    }
}
add_action('wp_head', 'profound_custom_css');



/**
 * Template for comments and pingbacks.
 * 
 * @since 1.0
 */
function profound_comment_callback( $comment, $args, $depth ) {

    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ):
        case '' :
        // Proceed with normal comments.
  
        echo '<li '.comment_class('', null, null, false).' id="li-comment-'.get_comment_ID().'">';
            if ($comment->comment_approved == '0') : ?><div class="comment-awaiting"><em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'profound'); ?></em></div><?php endif;

            $profound_get_comment_ID = get_comment_ID();
            $profound_is_comment_reply = get_comment($profound_get_comment_ID)->comment_parent;
            $profound_the_comment_author = get_comment_author(get_comment($profound_get_comment_ID)->comment_parent);
            
            if($profound_is_comment_reply != 0 ) printf('<div class="comment-parent-author"><span>Replied to %s</span></div>', $profound_the_comment_author );

            echo '<div id="comment-'. get_comment_ID().'" class="comment-block-container grid-float-left grid-col-16">';
                echo '<div class="comment-info-container grid-col-4 grid-float-left">';
                    echo '<div class="comment-author vcard">';
                        echo '<div class="comment-author-avatar-container">'. get_avatar($comment, 100).'</div>';
                        echo '<div class="comment-author-info-container">';
                            echo '<div class="comment-author-name">';
                                printf('%s <span class="says"></span>', sprintf('<cite class="fn">%s</cite>', get_comment_author_link()));
                            echo '</div>';
                         echo '</div>';
                    echo '</div><!-- .comment-author .vcard -->';
                echo '</div>';

                echo '<div class="comment-body-container grid-col-12 grid-float-left">';
                    echo '<div class="comment-body">';
                        comment_text();
                    echo '</div>';
                    echo '<div class="comment-meta commentmetadata"><a href="'. esc_url(get_comment_link($comment->comment_ID)).'">';
                        printf(__('%1$s at %2$s', 'profound'), get_comment_date(), get_comment_time());
                    echo '</a></div>';
                    echo '<div class="reply">';
                        comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );
                    echo '</div>';
                    edit_comment_link(__('(Edit)', 'profound'), '<div class="comment-edit">', '</div>');
                echo '</div>';
            echo '</div><!-- #comment-##  -->';

        break;

        case 'pingback' :
        case 'trackback' :
        // Display trackbacks differently than normal comments.
            echo '<li class="post pingback">';
                echo '<p>'.__( 'Pingback:', 'profound' );
                    comment_author_link();
                    edit_comment_link( __( '(Edit)', 'profound' ), ' ' );
                echo '</p>';
        break;

    endswitch;
}



/**
 * Adds text to profound_blog_template_heading_filter used on home.php
 * 
 * @todo Remove this function
 * @return string
 * @since 1.0
 */
function profound_blog_template_heading_text() {
    return '<h1>' . get_bloginfo('name') . ' ' . __('Blog', 'profound') . '</h1>';
}
add_filter('profound_blog_template_heading_filter', 'profound_blog_template_heading_text', 10);



/**
 * Outputs custom CSS code generated by Theme options
 * in the header of the theme.
 * 
 */
function profound_attach_options_style(){

    $output = ''; $style = '';
    $skin = '.' . profound_get_option('skin');
    $fonts = profound_get_fonts('enqueue');
    
    $elements_font = array(
        'font_site_title' => '.site-title a',
        'font_site_desc' => '.site-description',
        'font_body' => 'body',
        'font_featured' => '.flex-caption .featured-heading',
        'font_menu' => '.primarymenu-section a',
        'font_blog_p_title' => '.loop-post-title h1',
        'font_blog_p_meta' => '.loop-post-meta',
        'font_blog_p_content' => '.loop-post-excerpt p',
        //'font_readmore' => '.read-more',
        //'font_bc' => '.breadcrumbs',
        'font_p_title' => '.post-template .post-title h1',
        'font_p_meta' => '.post-template .post-meta',
        'font_p_content' => '.post-content',
        //'font_sidebar_p_title' => '.sidebar-right-section h4.widget-title',
        //'font_sidebar_p_body' => '.sidebar-right-section',
        'font_sidebar_f_title' => '.footerbox-section h4.widget-title',
        'font_sidebar_f_body' => '.footerbox-section, .footerbox-section .widget_text .textwidget',
        'font_footer' => '.copyright',
    );
    
    $elements_fontsize = array(
        'fsize_site_title' => '.site-title a',
        'fsize_site_desc' => '.site-description',
    );
    
    $elements_color = array(
        'color_site_title' => $skin . ' ' . '.site-title a',
        'color_site_desc' => $skin . ' ' . '.site-description',
        'color_blog_p_title' => $skin . ' ' . '.loop-post-title h1 a',
        'color_blog_p_meta' => $skin . ' ' . '.loop-post-meta',
        'color_blog_p_content' => $skin . ' ' . '.loop-post-excerpt p',
        //'color_readmore' => $skin . ' ' . '.read-more a',
        'color_p_title' => $skin . '.post-template .post-title h1',
        'color_p_meta' => $skin . '.post-template .post-meta',
        'color_p_content' => $skin . '.post-template .post-content',
        'color_p_link' => $skin . '.post-template .post-content a:link, .comment-body a:link',
        'color_p_link_v' => $skin . '.post-template .post-content a:visited, .comment-body a:visited',
        'color_p_link_h' => $skin . '.post-template .post-content a:hover, .comment-body a:hover',
    );
    
    $elements_bg_color = array(
        'color_bg_blog_style_date' => $skin . ' ' . '.loop-stylish-date .loop-stylish-date-month',
        //'color_bg_readmore' => $skin . ' ' . '.read-more a',
    );

    foreach ($elements_font as $key => $value) {
        if(profound_get_option($key)) {
            $style .= $value . '{font-family:';
            
            foreach ($fonts as $global_fonts) {
                if($global_fonts['shortname'] == profound_get_option($key)) {
                    $style .= wp_filter_nohtml_kses($global_fonts['name'] .','.$global_fonts['family']);
                }
            }
            $style .= ';}';
        }
    }
    
    $style .= "\n";
    
    foreach ($elements_fontsize as $key => $value) {
        if(profound_get_option($key)) {
            $style .= wp_filter_nohtml_kses($value . '{font-size:'.profound_get_option($key).';}');
        }
    }

    $style .= "\n";
    
    foreach ($elements_color as $key => $value) {
        if(profound_get_option($key)) {
            $style .= wp_filter_nohtml_kses($value . '{color:'.profound_get_option($key).';}');
        }
    }

    $style .= "\n";

    foreach ($elements_bg_color as $key => $value) {
        if(profound_get_option($key)) {
            $style .= wp_filter_nohtml_kses($value . '{background-color:'.profound_get_option($key).';}');
        }
    }
    
    $output .= '<style type="text/css">'. "\n" . wp_kses_stripslashes(wp_filter_nohtml_kses($style)) . "\n" . '</style>' . "\n";
    echo $output;
    
}
add_action('wp_head', 'profound_attach_options_style');


/**
 * Filters profound_blog_heading_title_filter for Homepage
 * 
 * @param string $text
 * @return string
 * @since 1.0.6.2
 */
function profound_blog_heading_title($text){
	
	if(profound_get_option('blog_heading_title')) {
		return profound_get_option('blog_heading_title');
	} else {
		return $text;
	}
}


/**
 * Filter profound_blog_heading_desc_filter for Homepage
 * 
 * @param string $text
 * @return string
 * @since 1.0.6.2
 */
function profound_blog_heading_desc($text){
	
	if(profound_get_option('blog_heading_desc')) {
		return profound_get_option('blog_heading_desc');
	} else {
		return $text;
	}
}

add_filter('profound_blog_heading_title_filter', 'profound_blog_heading_title');
add_filter('profound_blog_heading_desc_filter', 'profound_blog_heading_desc');