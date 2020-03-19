<?php
/**
 * Theme Customizer Options
 *
 * @since 1.0.0
 */

require_once 'customizer_constants.php';
require_once 'customizer_extended.php';

/**
 * Contains options array for theme customizer
 * 
 * @param string $type
 * @return array
 */
function profound_customizer_options($type){
    
    $options = array();
    $sections = array();
    $panels = array();
    $num_by_hundred = array('100'=>'100', '200'=>'200', '300'=>'300', '400'=>'400', '500'=>'500', '600'=>'600', '700'=>'700', '800'=>'800', '900'=>'900', '1000'=>'1000', '1100'=>'1100', '1200'=>'1200', '1300'=>'1300', '1400'=>'1400', '1500'=>'1500', '1600'=>'1600', '1700'=>'1700', '1800'=>'1800', '1900'=>'1900', '2000'=>'2000', '2100'=>'2100', '2200'=>'2200', '2300'=>'2300', '2400'=>'2400', '2500'=>'2500', '2600'=>'2600', '2700'=>'2700', '2800'=>'2800', '2900'=>'2900', '3000'=>'3000', '3100'=>'3100', '3200'=>'3200', '3300'=>'3300', '3400'=>'3400', '3500'=>'3500', '3600'=>'3600', '3700'=>'3700', '3800'=>'3800', '3900'=>'3900', '4000'=>'4000', '4100'=>'4100', '4200'=>'4200', '4300'=>'4300', '4400'=>'4400', '4500'=>'4500', '4600'=>'4600', '4700'=>'4700', '4800'=>'4800', '4900'=>'4900', '5000'=>'5000', '5100'=>'5100', '5200'=>'5200', '5300'=>'5300', '5400'=>'5400', '5500'=>'5500', '5600'=>'5600', '5700'=>'5700', '5800'=>'5800', '5900'=>'5900', '6000'=>'6000', '6100'=>'6100', '6200'=>'6200', '6300'=>'6300', '6400'=>'6400', '6500'=>'6500', '6600'=>'6600', '6700'=>'6700', '6800'=>'6800', '6900'=>'6900', '7000'=>'7000', '7100'=>'7100', '7200'=>'7200', '7300'=>'7300', '7400'=>'7400', '7500'=>'7500', '7600'=>'7600', '7700'=>'7700', '7800'=>'7800', '7900'=>'7900', '8000'=>'8000', '8100'=>'8100', '8200'=>'8200', '8300'=>'8300', '8400'=>'8400', '8500'=>'8500', '8600'=>'8600', '8700'=>'8700', '8800'=>'8800', '8900'=>'8900', '9000'=>'9000', '9100'=>'9100', '9200'=>'9200', '9300'=>'9300', '9400'=>'9400', '9500'=>'9500', '9600'=>'9600', '9700'=>'9700', '9800'=>'9800', '9900'=>'9900', '10000'=>'10000');
    $font_size = array('0px' => '0px', '1px' => '1px', '2px' => '2px', '3px' => '3px', '4px' => '4px', '5px' => '5px', '6px' => '6px', '7px' => '7px', '8px' => '8px', '9px' => '9px', '10px' => '10px', '11px' => '11px', '12px' => '12px', '13px' => '13px', '14px' => '14px', '15px' => '15px', '16px' => '16px', '17px' => '17px', '18px' => '18px', '19px' => '19px', '20px' => '20px', '21px' => '21px', '22px' => '22px', '23px' => '23px', '24px' => '24px', '25px' => '25px', '26px' => '26px', '27px' => '27px', '28px' => '28px', '29px' => '29px', '30px' => '30px', '31px' => '31px', '32px' => '32px', '33px' => '33px', '34px' => '34px', '35px' => '35px', '36px' => '36px', '37px' => '37px', '38px' => '38px', '39px' => '39px', '40px' => '40px', '41px' => '41px', '42px' => '42px', '43px' => '43px', '44px' => '44px', '45px' => '45px', '46px' => '46px', '47px' => '47px', '48px' => '48px', '49px' => '49px', '50px' => '50px', '51px' => '51px', '52px' => '52px', '53px' => '53px', '54px' => '54px', '55px' => '55px', '56px' => '56px', '57px' => '57px', '58px' => '58px', '59px' => '59px', '60px' => '60px', '61px' => '61px', '62px' => '62px', '63px' => '63px', '64px' => '64px', '65px' => '65px', '66px' => '66px', '67px' => '67px', '68px' => '68px', '69px' => '69px', '70px' => '70px', '71px' => '71px', '72px' => '72px', '73px' => '73px', '74px' => '74px', '75px' => '75px', '76px' => '76px', '77px' => '77px', '78px' => '78px', '79px' => '79px', '80px' => '80px', '81px' => '81px', '82px' => '82px', '83px' => '83px', '84px' => '84px', '85px' => '85px', '86px' => '86px', '87px' => '87px', '88px' => '88px', '89px' => '89px', '90px' => '90px', '91px' => '91px', '92px' => '92px', '93px' => '93px', '94px' => '94px', '95px' => '95px', '96px' => '96px', '97px' => '97px', '98px' => '98px', '99px' => '99px', '100px' => '100px');
    
    $panels[] = array(
        'id' => 'profound_panel_general',
        'title' => __('General','profound'),
        'description' => '',
        'priority' => 10,
    );

    $sections[] = array(
        'id' => 'profound_section_general_blogheading',
        'title' => __('Blog Heading','profound'),
        'description' => '',
        'panel' => 'profound_panel_general',
        'priority' => 100,
        'shortname' => 'section_general_blogheading',
    );

    $options[] = array(
        'id' => 'blog_heading_title',
        'default' => 'Our Daily News',
        'label' => __('Blog Heading (Homepage)', 'profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_general_blogheading',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'blog_heading_desc',
        'default' => 'You can modify this text and many more settings using Theme Options.',
        'label' => __('Blog Description (Homepage)', 'profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_general_blogheading',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $panels[] = array(
        'id' => 'profound_panel_header',
        'title' => __('Header','profound'),
        'description' => '',
        'priority' => 15,
    );

    $sections[] = array(
        'id' => 'profound_section_header_logo',
        'title' => __('Site Logo','profound'),
        'description' => '',
        'panel' => 'profound_panel_header',
        'priority' => 100,
        'shortname' => 'section_header_logo',
    );

    $options[] = array(
        'id' => 'logo_img',
        'default' => false,
        'label' => __('Site Logo','profound'),
        'description' => '',
        'type' => 'media_upload',
        'sanitize_type' => 'media_upload',
        'section' => 'section_header_logo',
        'extended_class' => 'WP_Customize_Image_Control',
        'transport' => 'refresh'
    );

    $panels[] = array(
        'id' => 'profound_panel_slideshow',
        'title' => __('Slideshow','profound'),
        'description' => '',
        'priority' => 20,
    );

    $sections[] = array(
        'id' => 'profound_section_slideshow_1',
        'title' => __('Slide #1','profound'),
        'description' => '',
        'panel' => 'profound_panel_slideshow',
        'priority' => 100,
        'shortname' => 'section_slideshow_1',
    );

    $options[] = array(
        'id' => 'featured_slide_img_1',
        'default' => PROFOUND_GLOBAL_URL . 'images/photographer.jpg',
        'label' => __('Slideshow Image #1','profound'),
        'description' => '',
        'type' => 'media_upload',
        'sanitize_type' => 'media_upload',
        'section' => 'section_slideshow_1',
        'extended_class' => 'WP_Customize_Image_Control',
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_head_1',
        'default' => 'Elegant and Stylish Theme',
        'label' => __('Slideshow Heading #1', 'profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_slideshow_1',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'profound_section_slideshow_2',
        'title' => __('Slide #2','profound'),
        'description' => '',
        'panel' => 'profound_panel_slideshow',
        'priority' => 120,
        'shortname' => 'section_slideshow_2',
    );

    $options[] = array(
        'id' => 'featured_slide_img_2',
        'default' => false,
        'label' => __('Slideshow Image #2','profound'),
        'description' => '',
        'type' => 'media_upload',
        'sanitize_type' => 'media_upload',
        'section' => 'section_slideshow_2',
        'extended_class' => 'WP_Customize_Image_Control',
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_head_2',
        'default' => '',
        'label' => __('Slideshow Heading #2', 'profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_slideshow_2',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'profound_section_slideshow_3',
        'title' => __('Slide #3','profound'),
        'description' => '',
        'panel' => 'profound_panel_slideshow',
        'priority' => 140,
        'shortname' => 'section_slideshow_3',
    );

    $options[] = array(
        'id' => 'featured_slide_img_3',
        'default' => false,
        'label' => __('Slideshow Image #3','profound'),
        'description' => '',
        'type' => 'media_upload',
        'sanitize_type' => 'media_upload',
        'section' => 'section_slideshow_3',
        'extended_class' => 'WP_Customize_Image_Control',
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_slide_head_3',
        'default' => '',
        'label' => __('Slideshow Heading #3', 'profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_slideshow_3',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'profound_section_slideshow_settings',
        'title' => __('Settings','profound'),
        'description' => '',
        'panel' => 'profound_panel_slideshow',
        'priority' => 140,
        'shortname' => 'section_slideshow_settings',
    );

    $options[] = array(
        'id' => 'slide_speed',
        'default' => '5000',
        'label' => __('Slideshow Speed','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => $num_by_hundred,
        'sanitize_type' => 'select',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'slide_ani_speed',
        'default' => '700',
        'label' => __('Slideshow Animation Speed','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => $num_by_hundred,
        'sanitize_type' => 'select',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'disable_slide_nav',
        'default' => false,
        'label' => __('Hide Navigation','profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'disable_smooth_height',
        'default' => true,
        'label' => __('Smooth Height','profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'slide_animation_type',
        'default' => 'fade',
        'label' => __('Animation Type','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => array('fade' => 'fade', 'slide' => 'slide'),
        'sanitize_type' => 'select',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'slide_dir',
        'default' => 'horizontal',
        'label' => __('Slideshow Direction','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => array('horizontal' => 'horizontal', 'vertical' => 'vertical'),
        'sanitize_type' => 'select',
        'section' => 'section_slideshow_settings',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $panels[] = array(
        'id' => 'profound_panel_layout',
        'title' => __('Layout','profound'),
        'description' => '',
        'priority' => 25,
    );

    $sections[] = array(
        'id' => 'profound_section_layout_global',
        'title' => __('Global','profound'),
        'description' => '',
        'panel' => 'profound_panel_layout',
        'priority' => 100,
        'shortname' => 'section_layout_global',
    );
    
    //See if "Wide Mode" can also be added
    $options[] = array(
        'id' => 'viewport',
        'default' => 'boxed',
        'label' => __('Select Layout','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => array(
            'boxed' => __('Boxed Mode', 'profound'),
        ),
        'sanitize_type' => 'select',
        'section' => 'section_layout_global',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'disable_blog_heading',
        'default' => true,
        'label' => __('Hide Blog Heading (Homepage)','profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_global',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'profound_section_layout_header',
        'title' => __('Header','profound'),
        'description' => '',
        'panel' => 'profound_panel_layout',
        'priority' => 110,
        'shortname' => 'section_layout_header',
    );

    $options[] = array(
        'id' => 'disable_header',
        'default' => false,
        'label' => __('Hide Header','profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_header',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'disable_site_desc',
        'default' => false,
        'label' => __('Hide Site Description','profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_header',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'profound_section_layout_footer',
        'title' => __('Footer','profound'),
        'description' => '',
        'panel' => 'profound_panel_layout',
        'priority' => 120,
        'shortname' => 'section_layout_footer',
    );

    $options[] = array(
        'id' => 'footer_name',
        'default' => '',
        'label' => __('Company Name', 'profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_layout_footer',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'disable_footer',
        'default' => false,
        'label' => __('Hide Footer','profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_footer',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'show_copyright',
        'default' => true,
        'label' => __('Show Copyright','profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_footer',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'profound_section_layout_blog',
        'title' => __('Blog','profound'),
        'description' => '',
        'panel' => 'profound_panel_layout',
        'priority' => 130,
        'shortname' => 'section_layout_blog',
    );

    $options[] = array(
        'id' => 'disable_thumb',
        'default' => false,
        'label' => __('Hide Thumbnail','profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_blog',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'disable_blog_p_meta',
        'default' => false,
        'label' => __('Hide Post Meta','profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_blog',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'disable_blog_p_meta_comments',
        'default' => false,
        'label' => __('Hide Post Meta (Comments)','profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_blog',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'disable_blog_nav',
        'default' => false,
        'label' => __('Hide Bottom Navigation','profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_blog',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'profound_section_layout_posts',
        'title' => __('Posts','profound'),
        'description' => '',
        'panel' => 'profound_panel_layout',
        'priority' => 140,
        'shortname' => 'section_layout_posts',
    );

    $options[] = array(
        'id' => 'disable_post_meta',
        'default' => false,
        'label' => __('Hide Meta','profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_posts',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'profound_section_layout_menu',
        'title' => __('Menu','profound'),
        'description' => '',
        'panel' => 'profound_panel_layout',
        'priority' => 150,
        'shortname' => 'section_layout_menu',
    );

    $options[] = array(
        'id' => 'disable_menu',
        'default' => false,
        'label' => __('Hide Menu','profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_menu',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'profound_section_layout_slideshow',
        'title' => __('Slideshow','profound'),
        'description' => '',
        'panel' => 'profound_panel_layout',
        'priority' => 160,
        'shortname' => 'section_layout_slideshow',
    );

    $options[] = array(
        'id' => 'disable_featured_section',
        'default' => false,
        'label' => __('Hide Featured Section','profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_slideshow',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'profound_section_layout_social',
        'title' => __('Social','profound'),
        'description' => '',
        'panel' => 'profound_panel_layout',
        'priority' => 170,
        'shortname' => 'section_layout_social',
    );

    $options[] = array(
        'id' => 'disable_social_section',
        'default' => false,
        'label' => __('Disable Social Section', 'profound'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_layout_social',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $panels[] = array(
        'id' => 'profound_panel_colors',
        'title' => __('Colors','profound'),
        'description' => '',
        'priority' => 30,
    );

    $sections[] = array(
        'id' => 'profound_section_colors_global',
        'title' => __('Global','profound'),
        'description' => '',
        'panel' => 'profound_panel_colors',
        'priority' => 100,
        'shortname' => 'section_colors_global',
    );

    $sections[] = array(
        'id' => 'profound_section_colors_skin',
        'title' => __('Skins','profound'),
        'description' => '',
        'panel' => 'profound_panel_colors',
        'priority' => 110,
        'shortname' => 'section_colors_skin',
    );

    //See if more skins can also be added.
    $options[] = array(
        'id' => 'skin',
        'default' => 'white',
        'label' => __('Select Skin','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => array(
            'white' => __('Classic White', 'profound'),
        ),
        'sanitize_type' => 'select',
        'section' => 'section_colors_skin',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $sections[] = array(
        'id' => 'profound_section_colors_header',
        'title' => __('Header','profound'),
        'description' => '',
        'panel' => 'profound_panel_colors',
        'priority' => 120,
        'shortname' => 'section_colors_header',
    );

    $options[] = array(
        'id' => 'color_site_title',
        'default' => '#555555',
        'label' => __('Site Title','profound'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_header',
        'extended_class' => 'WP_Customize_Color_Control',
        'transport' => 'postMessage'
    );
    
    $options[] = array(
        'id' => 'color_site_desc',
        'default' => '#555555',
        'label' => __('Site Description','profound'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_header',
        'extended_class' => 'WP_Customize_Color_Control',
        'transport' => 'postMessage'
    );

    $sections[] = array(
        'id' => 'profound_section_colors_posts',
        'title' => __('Page/Posts','profound'),
        'description' => '',
        'panel' => 'profound_panel_colors',
        'priority' => 130,
        'shortname' => 'section_colors_posts',
    );

    $options[] = array(
        'id' => 'color_p_title',
        'default' => '#000000',
        'label' => __('Post Title','profound'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_posts',
        'extended_class' => 'WP_Customize_Color_Control',
        'transport' => 'postMessage'
    );

    $options[] = array(
        'id' => 'color_p_content',
        'default' => '#000000',
        'label' => __('Post Content','profound'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_posts',
        'extended_class' => 'WP_Customize_Color_Control',
        'transport' => 'postMessage'
    );

    $options[] = array(
        'id' => 'color_p_meta',
        'default' => '#000000',
        'label' => __('Post Meta (Only Posts)','profound'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_posts',
        'extended_class' => 'WP_Customize_Color_Control',
        'transport' => 'postMessage'
    );

    $options[] = array(
        'id' => 'color_p_link',
        'default' => '#0000ff',
        'label' => __('Links (unvisited)','profound'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_posts',
        'extended_class' => 'WP_Customize_Color_Control',
        'transport' => 'postMessage'
    );

    $options[] = array(
        'id' => 'color_p_link_v',
        'default' => '#5757ff',
        'label' => __('Links (visited)','profound'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_posts',
        'extended_class' => 'WP_Customize_Color_Control',
        'transport' => 'postMessage'
    );

    $options[] = array(
        'id' => 'color_p_link_h',
        'default' => '#0000a8',
        'label' => __('Links (hover)','profound'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_posts',
        'extended_class' => 'WP_Customize_Color_Control',
        'transport' => 'postMessage'
    );

    $sections[] = array(
        'id' => 'profound_section_colors_blog',
        'title' => __('Blog','profound'),
        'description' => '',
        'panel' => 'profound_panel_colors',
        'priority' => 140,
        'shortname' => 'section_colors_blog',
    );

    $options[] = array(
        'id' => 'color_blog_p_title',
        'default' => '#444444',
        'label' => __('Post Title','profound'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_blog',
        'extended_class' => 'WP_Customize_Color_Control',
        'transport' => 'postMessage'
    );

    $options[] = array(
        'id' => 'color_blog_p_meta',
        'default' => '#000000',
        'label' => __('Post Meta','profound'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_blog',
        'extended_class' => 'WP_Customize_Color_Control',
        'transport' => 'postMessage'
    );

    $options[] = array(
        'id' => 'color_blog_p_content',
        'default' => '#000000',
        'label' => __('Post Content','profound'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_blog',
        'extended_class' => 'WP_Customize_Color_Control',
        'transport' => 'postMessage'
    );

    $options[] = array(
        'id' => 'color_bg_blog_style_date',
        'default' => '#ec6a00',
        'label' => __('Date Background','profound'),
        'description' => '',
        'type' => 'color',
        'sanitize_type' => 'color',
        'section' => 'section_colors_blog',
        'extended_class' => 'WP_Customize_Color_Control',
        'transport' => 'postMessage'
    );

    $sections[] = array(
        'id' => 'profound_section_colors_custom_css',
        'title' => __('Custom CSS','profound'),
        'description' => '',
        'panel' => 'profound_panel_colors',
        'priority' => 150,
        'shortname' => 'section_colors_custom_css',
    );

    $options[] = array(
        'id' => 'custom_css',
        'default' => '',
        'label' => __('Custom CSS', 'profound'),
        'description' => '',
        'type' => 'textarea',
        'sanitize_type' => 'nohtml',
        'section' => 'section_colors_custom_css',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $panels[] = array(
        'id' => 'profound_panel_fonts',
        'title' => __('Fonts','profound'),
        'description' => '',
        'priority' => 35,
    );

    $sections[] = array(
        'id' => 'profound_section_fonts_header',
        'title' => __('Header','profound'),
        'description' => '',
        'panel' => 'profound_panel_fonts',
        'priority' => 100,
        'shortname' => 'section_fonts_header',
    );

    $options[] = array(
        'id' => 'font_site_title',
        'default' => 'lato',
        'label' => __('Site Title','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => profound_get_fonts('customizer'),
        'sanitize_type' => 'select',
        'section' => 'section_fonts_header',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'font_site_desc',
        'default' => 'opensans',
        'label' => __('Site Description','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => profound_get_fonts('customizer'),
        'sanitize_type' => 'select',
        'section' => 'section_fonts_header',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'fsize_site_title',
        'default' => '40px',
        'label' => __('Site Title (Size)','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => $font_size,
        'sanitize_type' => 'select',
        'section' => 'section_fonts_header',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'fsize_site_desc',
        'default' => '12px',
        'label' => __('Site Description (Size)','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => $font_size,
        'sanitize_type' => 'select',
        'section' => 'section_fonts_header',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $sections[] = array(
        'id' => 'profound_section_fonts_body',
        'title' => __('Body','profound'),
        'description' => '',
        'panel' => 'profound_panel_fonts',
        'priority' => 110,
        'shortname' => 'section_fonts_body',
    );

    $options[] = array(
        'id' => 'font_body',
        'default' => 'opensans',
        'label' => __('Body Font','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => profound_get_fonts('customizer'),
        'sanitize_type' => 'select',
        'section' => 'section_fonts_body',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'font_menu',
        'default' => 'lato',
        'label' => __('Menu','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => profound_get_fonts('customizer'),
        'sanitize_type' => 'select',
        'section' => 'section_fonts_body',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'font_featured',
        'default' => 'lato',
        'label' => __('Slideshow','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => profound_get_fonts('customizer'),
        'sanitize_type' => 'select',
        'section' => 'section_fonts_body',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $sections[] = array(
        'id' => 'profound_section_fonts_blog',
        'title' => __('Blog','profound'),
        'description' => '',
        'panel' => 'profound_panel_fonts',
        'priority' => 120,
        'shortname' => 'section_fonts_blog',
    );
    
    $options[] = array(
        'id' => 'font_blog_p_title',
        'default' => 'opensans',
        'label' => __('Post Title','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => profound_get_fonts('customizer'),
        'sanitize_type' => 'select',
        'section' => 'section_fonts_blog',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'font_blog_p_meta',
        'default' => 'opensans',
        'label' => __('Post Meta','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => profound_get_fonts('customizer'),
        'sanitize_type' => 'select',
        'section' => 'section_fonts_blog',
        'extended_class' => false,
        'transport' => 'refresh',
    );
    
    $options[] = array(
        'id' => 'font_blog_p_content',
        'default' => 'opensans',
        'label' => __('Post Content','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => profound_get_fonts('customizer'),
        'sanitize_type' => 'select',
        'section' => 'section_fonts_blog',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $sections[] = array(
        'id' => 'profound_section_fonts_posts',
        'title' => __('Posts/Pages','profound'),
        'description' => '',
        'panel' => 'profound_panel_fonts',
        'priority' => 130,
        'shortname' => 'section_fonts_posts',
    );

    $options[] = array(
        'id' => 'font_p_title',
        'default' => 'lato',
        'label' => __('Post Title','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => profound_get_fonts('customizer'),
        'sanitize_type' => 'select',
        'section' => 'section_fonts_posts',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'font_p_meta',
        'default' => 'lato',
        'label' => __('Post Meta','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => profound_get_fonts('customizer'),
        'sanitize_type' => 'select',
        'section' => 'section_fonts_posts',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'font_p_content',
        'default' => 'opensans',
        'label' => __('Post Content','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => profound_get_fonts('customizer'),
        'sanitize_type' => 'select',
        'section' => 'section_fonts_posts',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $sections[] = array(
        'id' => 'profound_section_fonts_sidebars',
        'title' => __('Sidebars','profound'),
        'description' => '',
        'panel' => 'profound_panel_fonts',
        'priority' => 140,
        'shortname' => 'section_fonts_sidebars',
    );

    $options[] = array(
        'id' => 'font_sidebar_f_title',
        'default' => 'lato',
        'label' => __('Widget Title (Footerbox)','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => profound_get_fonts('customizer'),
        'sanitize_type' => 'select',
        'section' => 'section_fonts_sidebars',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $options[] = array(
        'id' => 'font_sidebar_f_body',
        'default' => 'lato',
        'label' => __('Widget Body (Footerbox)','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => profound_get_fonts('customizer'),
        'sanitize_type' => 'select',
        'section' => 'section_fonts_sidebars',
        'extended_class' => false,
        'transport' => 'refresh',
    );

    $sections[] = array(
        'id' => 'profound_section_fonts_footer',
        'title' => __('Footer','profound'),
        'description' => '',
        'panel' => 'profound_panel_fonts',
        'priority' => 150,
        'shortname' => 'section_fonts_footer',
    );

    $options[] = array(
        'id' => 'font_footer',
        'default' => 'lato',
        'label' => __('Footer Text','profound'),
        'description' => '',
        'type' => 'select',
        'choices' => profound_get_fonts('customizer'),
        'sanitize_type' => 'select',
        'section' => 'section_fonts_footer',
        'extended_class' => false,
        'transport' => 'refresh',
    );


    $panels[] = array(
        'id' => 'profound_panel_social',
        'title' => __('Social','profound'),
        'description' => '',
        'priority' => 40,
    );

    $sections[] = array(
        'id' => 'profound_section_social_profiles',
        'title' => __('Social Profiles','profound'),
        'description' => '',
        'panel' => 'profound_panel_social',
        'priority' => 100,
        'shortname' => 'section_social_profiles',
    );

    $options[] = array(
        'id' => 'facebook',
        'default' => '',
        'label' => __('Facebook', 'profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'twitter',
        'default' => '',
        'label' => __('Twitter','profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'google-plus',
        'default' => '',
        'label' => __('Google+', 'profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'linkedin',
        'default' => '',
        'label' => __('Linkedin', 'profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'instagram',
        'default' => '',
        'label' => __('Instagram', 'profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'pinterest',
        'default' => '',
        'label' => __('Pinterest', 'profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'skype',
        'default' => '',
        'label' => __('Skype', 'profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'tumblr',
        'default' => '',
        'label' => __('Tumblr', 'profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'rss',
        'default' => '',
        'label' => __('RSS','profound'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'profound_section_about',
        'title' => __('About Profound Theme','profound'),
        'description' => '',
        'panel' => '',
        'priority' => 160,
        'shortname' => 'section_about',
    );

    $options[] = array(
        'id' => 'important_links',
        'default' => '',
        'label' => __('','profound'),
        'description' => '',
        'type' => 'important_links',
        'sanitize_type' => 'none',
        'section' => 'section_about',
        'extended_class' => 'Profound_Customize_Important_Links_Control',
        'transport' => 'refresh'
    );


    switch($type):
        case 'panels':
            return $panels;
        case 'sections':
            return $sections;
        case 'options':
            return $options;
        default:
            return;
    endswitch;
}

/**
 * Build Theme Customizer Options
 * 
 * @param type $wp_customize
 */
function profound_customizer_setup($wp_customize) {
    
    /**
     * Exit if $wp_customize does not exist.
     */
    if( !isset($wp_customize)) {
        return;
    }
    
    $panels = profound_customizer_options('panels');
    $sections = profound_customizer_options('sections');
    $options = profound_customizer_options('options');
    
    foreach($panels as $panel) {
        $wp_customize->add_panel($panel['id'], array(
            'title' => $panel['title'],
            'description' => $panel['description'],
            'theme_supports' => '',
            'capability' => 'edit_theme_options',
            'priority' => $panel['priority'],
        ));
    }
    
    foreach($sections as $section) {
        $wp_customize->add_section($section['id'], array(
            'title' => $section['title'],
            'description' => $section['description'],
            'panel' => $section['panel'],
            'priority' => $section['priority'],
        ));
    }
    
    foreach($options as $option) {
        $wp_customize->add_setting('profound['.$option['id'].']', array(
            'type' => 'option',
            'default' => $option['default'],
            'capability' => 'edit_theme_options',
            'sanitize_callback' => profound_get_sanitize_filter($option['sanitize_type']),
            'transport' => $option['transport'],
        ));

        if (!$option['extended_class']) {
            $wp_customize->add_control('profound[' . $option['id'] . ']', array(
                'label' => $option['label'],
                'description' => $option['description'],
                'type' => $option['type'],
                'section' => profound_get_sections($option['section']),
                'setting' => $option['id'],
                'choices' => array_key_exists('choices', $option) ? $option['choices'] : false,
            ));
        } else {
            $wp_customize->add_control(new $option['extended_class'](
                $wp_customize, 'profound[' . $option['id'] . ']', array(
                'label' => $option['label'],
                'description' => $option['description'],
                'section' => profound_get_sections($option['section']),
                'setting' => $option['id'],
                'choices' => array_key_exists('choices', $option) ? $option['choices'] : false,
                )
            ));
        }
    }
	
    // WP Defaults
    $wp_customize->get_section('title_tagline')->panel = 'profound_panel_general';
    $wp_customize->get_section('static_front_page')->panel = 'profound_panel_general';
    $wp_customize->get_control('background_color')->section = 'profound_section_colors_global';
    $wp_customize->get_control('background_image')->section = 'profound_section_colors_global';
    $wp_customize->remove_section('background_image');
}
add_action( 'customize_register', 'profound_customizer_setup' );



/**
 * Enqueue Customizer Live Preview Scripts
 * 
 * @todo complete this
 */
function profound_live_preview_scripts(){
    wp_enqueue_script('profound-themecustomizer-live-preview', PROFOUND_ADMIN_JS_URL . 'customizer.js', array('jquery', 'customize-preview'),'', true);
}
add_action('customize_preview_init','profound_live_preview_scripts');



/**
 * Enqueue admin panel CSS - (Primarily for customizer)
 *
 * @since 1.0
 */
function profound_admin_panel_style() {
    wp_enqueue_style('profound-admin-panel-css', PROFOUND_ADMIN_CSS_URL . 'admin.css');
    wp_enqueue_script('profound-admin-panel-js', PROFOUND_ADMIN_JS_URL . 'admin.js', array('jquery'), '1.0.0', TRUE);
}
add_action( 'admin_enqueue_scripts', 'profound_admin_panel_style' );



/**
 * Gets the value of an option.
 * Also sets caching for default options.
 * 
 * @global array $profound_options Options cache.
 * @param string $id Option ID
 * @return string Option Value
 */
function profound_get_option($id = NULL) {
    global $profound_options;
    
    // Global array exists. Get value from memory
    if($profound_options && array_key_exists($id, $profound_options)) {
        return $profound_options[$id];
    } else {
        
        // No value in Memory. Try fetching from DB
        $saved_options = get_option('profound');
        
        if($saved_options && array_key_exists($id, $saved_options)){
            
            $profound_options = $saved_options;
            return $profound_options[$id];
            
        } else {
            
            // No value in Memory or DB. Get it from default options.
            $sane_options = profound_customizer_options('options');
            $profound_options = array();
            
            foreach($sane_options as $options) {
                if($id == $options['id'] ){
                    $profound_options[$options['id']] = $options['default'];
                    break;
                }                
            }

            return $profound_options[$id];

        }
    }
}


/**
 * Returns sanitization filter functions
 * 
 * @param string $type The type of input to be sanitized
 * @return string Sanitization function name
 */
function profound_get_sanitize_filter($type){
    $filters = array(
        'html' => 'profound_sanitize_html',
        'nohtml' => 'profound_sanitize_nohtml', // Only Text
        'url' => 'profound_sanitize_url',
        'checkbox' => 'profound_sanitize_checkbox',
        'select' => 'profound_sanitize_select',
        'color' => 'profound_sanitize_hex_color',
        'media_upload' => 'profound_sanitize_media_upload',
        'none' => 'profound_sanitize_none'
    );

    return $filters[$type];
}


/**
 * Returns the section based on shortname
 * 
 * @param string $shortname
 * @return string
 */
function profound_get_sections($shortname) {
    $sections = profound_customizer_options('sections');
    foreach ($sections as $section) {
        if($section['shortname'] == $shortname){
            return $section['id'];
        }
    }
}


/**
 * Sanitization Function for No HTML content (only text)
 *
 * @param string $nohtml
 * @return string
 */
function profound_sanitize_nohtml($nohtml) {
    return wp_filter_nohtml_kses( $nohtml );
}


/**
 * Sanitization Function for only HTML content
 *
 * @param string $html
 * @return string
 */
function profound_sanitize_html($html) {
    return wp_filter_post_kses( $html );
}


/**
 * Sanitization Function for URL
 * 
 * @param string $url
 * @return string
 */
function profound_sanitize_url($url){
    return esc_url_raw($url);
}


/**
 * Sanitization Function for Checkbox
 * 
 * @param boolean $checked
 * @return boolean
 */
function profound_sanitize_checkbox($checked){
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}


/**
 * Sanitization Function for Select
 * 
 * @param string $input
 * @param WP_Customize_Setting $input
 * @return string
 */
function profound_sanitize_select($input, $setting){

    // Sanitizes input
    $input = sanitize_key( $input );
    
    // Get list of choices from the control associated with the setting.
    $choices = $setting->manager->get_control( $setting->id )->choices;
    
    // If the input is a valid key, return it; otherwise, return the default.
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

}
/**
 * Sanitization Function for Hex Colors
 * 
 * @param string HEX color to sanitize
 * @param WP_Customize_Setting Setting instance
 */
function profound_sanitize_hex_color($hex_color, $setting){
    // Sanitize $input as a hex value without the hash prefix.
    $hex_color = sanitize_hex_color($hex_color);

    // If $input is a valid hex value, return it; otherwise, return the default.
    return ( ( $hex_color ) ? $hex_color : $setting->default );
}

/**
 * Sanitization Function for Image Upload via Media Manager
 * 
 * @param string Image filename
 * @param WP_Customize_Setting Setting instance
 * @return string The image filename if the extension is allowed; otherwise, the setting default.
 */
function profound_sanitize_media_upload( $image, $setting ) {

    /*
     * Array of valid image file types.
     *
     * The array includes image mime types that are included in wp_get_mime_types()
     */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );

    // Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );

    // If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}


/**
 * Sanitizes nothing (Used for Theme Upgrade Text)
 */
function profound_sanitize_none(){
    return;
}