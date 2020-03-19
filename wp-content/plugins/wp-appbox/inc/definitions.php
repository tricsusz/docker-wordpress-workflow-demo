<?php


/* Für das shice Tabellen-Prefix von WordPress */
/**
* Link-Umwandlung für das Amazon PartnerNet
*/
global $wpdb;


/**
* Ein paar Definitionen #YOLO
*/
define( 'WPAPPBOX_MIN_PHPVERSION', '5.3' );
define( 'WPAPPBOX_PLUGIN_NAME', 'WP-Appbox' ); 
define( 'WPAPPBOX_PLUGIN_VERSION', '4.1.2' );
define( 'WPAPPBOX_DB_VERSION', '1.0.4' );
define( 'WPAPPBOX_PREFIX', 'wpAppbox_' );
define( 'WPAPPBOX_AFFILIATE_AMAZON', 'wpappbox-21' );
define( 'WPAPPBOX_AFFILIATE_MICROSOFT', '1240500' );
define( 'WPAPPBOX_AFFILIATE_MICROSOFT_PROGRAM', '7806' );


/**
* Festlegen der Standard-Einstellungen
*/
global $wpAppbox_optionsDefault;
$wpAppbox_optionsDefault = array(
	'pluginVersion' => WPAPPBOX_PLUGIN_VERSION,
	'defaultStyle' => intval( '1' ),
	'screenshotTabs' => true,
	'colorfulIcons' => false,
	'showRating' => intval( '1' ),
	'downloadCaption' => __('Download', 'wp-appbox'),
	'nofollow' => true,
	'targetBlank' => true,
	'cacheTime' => intval( '720' ),
	'cacheMode' => 'all',
	'cronIntervall' => intval( '30' ),
	'cronCount' => intval( '5' ),
	'blockMissing' => true,
	'blockMissingTime' => intval( '60' ),
	'cachePlugin' => false,
	'imgCache' => false,
	'imgCacheMode' => array( 'appicon' ),
	'imgCacheDelay' => false,
	'imgCacheDelayTime' => intval( '8' ),
	'affiliateAmazonDev' => true,
	'affiliateAmazonID' => '',
	'affiliateMicrosoftDev' => true,
	'affiliateMicrosoftID' => '',
	'affiliateMicrosoftProgram' => '',
	'userAffiliate' => false,
	'defaultButton' => intval( '0' ),
	'autoLinks' => false,
	'utmSource' => false,
	'anonymizeLinks' => false,
	'renderGutenberg' => true,
	'disableDefer' => false,
	'includeCSS' => intval( '0' ),
	'disableFonts' => false,
	'curlTimeout' => intval( '5' ),
	'eOnlyAuthors' => false,
	'eOutput' => false,
	'forceSSL' => false,
	'cacheCronjob' => false,
);


/**
* Ein paar Standard-Einstellungen festlegen
*/

define( 'WPAPPBOX_CACHINGTIME', ( get_option('wpAppbox_cacheTime') != '' ? get_option('wpAppbox_cacheTime') : $wpAppbox_optionsDefault['cacheTime'] ) ); 
define( 'WPAPPBOX_BLOCKMISSINGTIME', ( get_option('wpAppbox_blockMissingTime') != '' ? get_option('wpAppbox_blockMissingTime') : $wpAppbox_optionsDefault['blockMissingTime'] ) ); 

define( 'WPAPPBOX_PLUGIN_BASE_DIR', basename( dirname( __FILE__ ) ) ); // Ornder wp-content/plugins/wp-appbox/
define( 'WPAPPBOX_PLUGIN_BASE_DOMAIN', get_site_url() . '/' . basename( dirname( __FILE__ ) ) ); // http://domain.de/wp-content/...
define( 'WPAPPBOX_PLUGIN_PATH', plugin_dir_path( __FILE__ ) ); // Server-Path
define( 'WPAPPBOX_CACHE_PATH', WP_CONTENT_DIR . '/cache/wp-appbox/' );
define( 'WPAPPBOX_CACHE_DIR', content_url() . '/cache/wp-appbox/' );

			
/**
* Zuweisung Store-ID => Store-Bezeichnung
*/
global $wpAppbox_storeNames;	
$wpAppbox_storeNames = array(	
	'amazonapps' => __( 'Amazon Apps', 'wp-appbox' ),
	'appstore' => __( '(Mac) App Store', 'wp-appbox' ),
	'chromewebstore' => __( 'Chrome Web Store', 'wp-appbox' ),
	'firefoxaddon' => __( 'Firefox Add-ons', 'wp-appbox' ),
	'goodoldgames' => __( 'GOG.com', 'wp-appbox' ),
	'googleplay' => __( 'Google Play Apps', 'wp-appbox' ),
	'operaaddons' => __( 'Opera Add-ons', 'wp-appbox' ),
	'steam' => __( 'Steam', 'wp-appbox' ),
	'windowsstore' => __( 'Windows Store', 'wp-appbox' ),
	'wordpress' => __( 'WordPress Plugins', 'wp-appbox' ),
	'xda' => __( 'XDA Labs', 'wp-appbox' )
);
					
						
/**
* Zuweisung Style-ID => Style-Name...
*/							
global $wpAppbox_styleNames;
$wpAppbox_styleNames = array(
	'0' => 'standard',
	'1' => 'simple',
	'2' => 'compact',
	'3' => 'screenshots',
	'4' => 'screenshots-only'
);
			
			
/**
* ...denn nicht alle Stores können alle Styles anzeigen. FU Chrome Web Store -.-
*/					
global $wpAppbox_storeStyles;
$wpAppbox_storeStyles = array(	
	'amazonapps' => array( 1, 2, 3, 4 ),
	'appstore' => array( 1, 2, 3, 4 ),
	'chromewebstore' => array( 1, 2, 3, 4 ),
	'firefoxaddon' => array( 1, 2, 3, 4 ),
	'goodoldgames' => array( 1, 2, 3, 4 ),
	'googleplay' => array( 1, 2, 3, 4 ),
	'operaaddons' => array( 1, 2, 3, 4 ),
	'steam' => array( 1, 2, 3, 4 ),
	'windowsstore' => array( 1, 2, 3, 4 ),
	'wordpress' => array( 1, 2, 3, 4 ),
	'xda' => array( 1, 2, 3, 4 )
);


global $wpAppbox_MicrosoftPrivateAffiliateProgramm;
$wpAppbox_MicrosoftPrivateAffiliateProgramm = array(
	__( 'US', 'wp-appbox' ) => array( '7593', '433017' ),
	__( 'DACH DE/AT/CH', 'wp-appbox' ) => array( '7806', '439029' ),
	__( 'Canada', 'wp-appbox' ) => array( '7814', '439092' ),
	__( 'Western Europe-South (Spain, Italy, Portugal)', 'wp-appbox' ) => array( '7791', '438819' ),
	__( 'Western Europe-Nordics (Sweden, Norway, Denmark, Finland)', 'wp-appbox' ) => array( '7792', '438829' ),
	__( 'Western Europe-Central (Netherlands, Belgium, Luxembourg)', 'wp-appbox' ) => array( '7793', '438839' ),
	__( 'UK & Ireland (Great Britain, Ireland)', 'wp-appbox' ) => array( '7794', '438863' ),
	__( 'APAC (Malaysia, Korea, Singapore and other countries)', 'wp-appbox' ) => array( '7795', '438865' ),
	__( 'MEA (Saudi Arabia, Israel, South Africa and other countries)', 'wp-appbox' ) => array( '7796', '438868' ),
	__( 'LATAM (Argentina, Mexico, Brazil and other countries)', 'wp-appbox' ) => array( '7803', '439011' ),
	__( 'Japan', 'wp-appbox' ) => array( '7804', '439025' ),
	__( 'India', 'wp-appbox' ) => array( '7805', '439027' ),
	__( 'France', 'wp-appbox' ) => array( '7809', '439033' ),
	__( 'CEE (Czech Republic, Greece, Poland and other countries)', 'wp-appbox' ) => array( '7811', '439077' ),
	__( 'AU/NZ', 'wp-appbox' ) => array( '7815', '439099' ),
	__( 'GCR (Taiwan, Hong Kong, China) ', 'wp-appbox' ) => array( '7808', '439031' ),
);
ksort( $wpAppbox_MicrosoftPrivateAffiliateProgramm );


?>