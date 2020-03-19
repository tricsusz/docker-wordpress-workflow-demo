<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
 
</head>
<body <?php body_class(); ?>>

<div id="title"><?php the_custom_logo(); ?>
					<?php if ( is_front_page() && is_home() ) : ?>
						<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                        
					<?php else : ?>
						<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<div class="site-description"><?php echo $description; ?></div>
					<?php endif; ?>
</div>
		<div id="nav-container">
<div id="nav"><div class="menu">
	
    
    <div class="top-bar">
						<div class="menu-wrap">
							<?php wp_nav_menu( array( 'theme_location' => 'header-nav', 'menu_class' => 'nav main-nav clearfix' ) ); ?>
						</div>
					</div><!-- top bar -->

	</div></div><div class="clear"></div>
	
	<?php $header_image = get_header_image();
				if ( $header_image ) : ?>
				<div id="header-container"><img class="header" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width; ?>"  alt=""/></div><?php endif; ?>
