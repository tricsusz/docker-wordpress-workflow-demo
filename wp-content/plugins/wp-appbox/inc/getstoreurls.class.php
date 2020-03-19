<?php 


/* ID => Bezeichnung */
$wpAppbox_storeURL_languages = array(
	'0' => __('Use own URL', 'wp-appbox'),
	'1' => array( 'code' => 'de-DE', 'name' =>__('Germany', 'wp-appbox') ),
	'2' => array( 'code' => 'en-US', 'name' =>__('United States', 'wp-appbox') ),
	'3' => array( 'code' => 'en-GB', 'name' =>__('United Kingdom', 'wp-appbox') ),
	'4' => array( 'code' => 'fr-FR', 'name' =>__('France', 'wp-appbox') ),
	'5' => array( 'code' => 'es-ES', 'name' =>__('Spain', 'wp-appbox') ),
	'6' => array( 'code' => 'ru-RU', 'name' =>__('Russia', 'wp-appbox') ),
	'7' => array( 'code' => 'tr-TR', 'name' =>__('Turkey', 'wp-appbox') ),
	'8' => array( 'code' => 'it-IT', 'name' =>__('Italy', 'wp-appbox') ),
	'9' => array( 'code' => 'de-AT', 'name' =>__('Austria', 'wp-appbox') ),
	'10' => array( 'code' => 'de-CH', 'name' =>__('Switzerland', 'wp-appbox') ),
	'11' => array( 'code' => 'ja', 'name' =>__('Japan', 'wp-appbox') ),
	'12' => array( 'code' => 'pl-PL', 'name' =>__('Poland', 'wp-appbox') ),
	'13' => array( 'code' => 'en-AU', 'name' =>__('Australia', 'wp-appbox') )
);
	
	
/* Stores ohne Möglichkeit des Sprachwechsels */
$wpAppbox_storeURL_noLanguages = array( 'wordpress', 'goodoldgames', 'xda' );
	
	
/* Regionen für die Amazon Product Advertising API */
$wpAppbox_amaAPIregions = array(
	__('Brazil', 'wp-appbox') => 'com.br',
	__('Canada', 'wp-appbox') => 'ca',
	__('China', 'wp-appbox') => 'cn',
	__('France', 'wp-appbox') => 'fr',
	__('Germany', 'wp-appbox') => 'de',
	__('India', 'wp-appbox') => 'in',
	__('Italy', 'wp-appbox') => 'it',
	__('Japan', 'wp-appbox') => 'co.jp',
	__('Mexico', 'wp-appbox') => 'com.mx',
	__('Spain', 'wp-appbox') => 'es',
	__('United Kingdom', 'wp-appbox') => 'co.uk',
	__('United States', 'wp-appbox') => 'com'
);
	
	
/* Die URLs der Stores und Länder */
$wpAppbox_storeURL = array(	
	'amazonapps' => array(
		'1' => 'https://www.amazon.de/gp/product/{APPID}/?ie=UTF8',
		'2' => 'https://www.amazon.com/gp/product/{APPID}/?ie=UTF8',
		'3' => 'https://www.amazon.co.uk/gp/product/{APPID}/?ie=UTF8',
		'4' => 'https://www.amazon.fr/gp/product/{APPID}/?ie=UTF8',
		'5' => 'https://www.amazon.es/gp/product/{APPID}/?ie=UTF8',
		'8' => 'https://www.amazon.it/gp/product/{APPID}/?ie=UTF8',
		'11' => 'https://www.amazon.co.jp/gp/product/{APPID}/?ie=UTF8'
	),
	'appstore' => array(
		'1' => 'https://itunes.apple.com/de/app/id{APPID}',
		'2' => 'https://itunes.apple.com/app/id{APPID}',
		'3' => 'https://itunes.apple.com/gb/app/id{APPID}',
		'4' => 'https://itunes.apple.com/fr/app/id{APPID}',
		'5' => 'https://itunes.apple.com/es/app/id{APPID}',
		'6' => 'https://itunes.apple.com/ru/app/id{APPID}',
		'7' => 'https://itunes.apple.com/tr/app/id{APPID}',
		'8' => 'https://itunes.apple.com/it/app/id{APPID}',
		'9' => 'https://itunes.apple.com/at/app/id{APPID}',
		'10' => 'https://itunes.apple.com/ch/app/id{APPID}',
		'11' => 'https://itunes.apple.com/jp/app/id{APPID}'
	),
	'chromewebstore' => array(
		'1' => 'https://chrome.google.com/webstore/detail/{APPID}?hl=de',
		'2' => 'https://chrome.google.com/webstore/detail/{APPID}?hl=en',
		'3' => 'https://chrome.google.com/webstore/detail/{APPID}?hl=en',
		'4' => 'https://chrome.google.com/webstore/detail/{APPID}?hl=fr',
		'5' => 'https://chrome.google.com/webstore/detail/{APPID}?hl=es',
		'6' => 'https://chrome.google.com/webstore/detail/{APPID}?hl=ru',
		'7' => 'https://chrome.google.com/webstore/detail/{APPID}?hl=tr',
		'8' => 'https://chrome.google.com/webstore/detail/{APPID}?hl=it',
		'9' => 'https://chrome.google.com/webstore/detail/{APPID}?hl=au',
		'10' => 'https://chrome.google.com/webstore/detail/{APPID}?hl=ch'
	),
	'firefoxaddon' => array(
		'1' => 'https://addons.mozilla.org/de/firefox/addon/{APPID}/',
		'2' => 'https://addons.mozilla.org/en-US/firefox/addon/{APPID}/',
		'4' => 'https://addons.mozilla.org/fr/firefox/addon/{APPID}/',
		'5' => 'https://addons.mozilla.org/es/firefox/addon/{APPID}/',
		'6' => 'https://addons.mozilla.org/ru/firefox/addon/{APPID}/',
		'8' => 'https://addons.mozilla.org/it/firefox/addon/{APPID}/'
	),
	'goodoldgames' => array(
		'1' => 'http://www.gog.com/game/{APPID}'
	),
	'googleplay' => array(
		'1' => 'https://play.google.com/store/apps/details?id={APPID}&hl=de&gl=de',
		'2' => 'https://play.google.com/store/apps/details?id={APPID}&hl=en&gl=us',
		'3' => 'https://play.google.com/store/apps/details?id={APPID}&hl=en&gl=uk',
		'4' => 'https://play.google.com/store/apps/details?id={APPID}&hl=fr&gl=fr',
		'5' => 'https://play.google.com/store/apps/details?id={APPID}&hl=es&gl=es',
		'6' => 'https://play.google.com/store/apps/details?id={APPID}&hl=ru&gl=ru',
		'7' => 'https://play.google.com/store/apps/details?id={APPID}&hl=tr&gl=tr',
		'8' => 'https://play.google.com/store/apps/details?id={APPID}&hl=it&gl=it',
		'9' => 'https://play.google.com/store/apps/details?id={APPID}&hl=de&gl=at',
		'10' => 'https://play.google.com/store/apps/details?id={APPID}&hl=de&gl=ch',
		'13' => 'https://play.google.com/store/apps/details?id={APPID}&hl=en&gl=au'
	),
	'operaaddons' => array(
		'1' => 'https://addons.opera.com/de/extensions/details/{APPID}/',
		'2' => 'https://addons.opera.com/en/extensions/details/{APPID}/',
		'3' => 'https://addons.opera.com/en-gb/extensions/details/{APPID}/',
		'4' => 'https://addons.opera.com/fr/extensions/details/{APPID}/',
		'5' => 'https://addons.opera.com/es/extensions/details/{APPID}/',
		'6' => 'https://addons.opera.com/ru/extensions/details/{APPID}/',
		'7' => 'https://addons.opera.com/tr/extensions/details/{APPID}/',
		'8' => 'https://addons.opera.com/it/extensions/details/{APPID}/'
	),
	'steam' => array(
		'1' => 'https://store.steampowered.com/api/appdetails/?appids={APPID}&cc=de&l=german',
		'2' => 'https://store.steampowered.com/api/appdetails/?appids={APPID}&cc=us&l=english',
		'3' => 'https://store.steampowered.com/api/appdetails/?appids={APPID}&cc=uk&l=english',
		'4' => 'https://store.steampowered.com/api/appdetails/?appids={APPID}&cc=fr&l=french',
		'5' => 'https://store.steampowered.com/api/appdetails/?appids={APPID}&cc=es&l=spanish',
		'6' => 'https://store.steampowered.com/api/appdetails/?appids={APPID}&cc=ru&l=russian',
		'7' => 'https://store.steampowered.com/api/appdetails/?appids={APPID}&cc=tr&l=turkey',
		'8' => 'https://store.steampowered.com/api/appdetails/?appids={APPID}&cc=it&l=italian',
		'11' => 'https://store.steampowered.com/api/appdetails/?appids={APPID}&cc=jp&l=japanese'
	),
	'windowsstore' => array(
		'1' => 'https://www.microsoft.com/de-de/store/p/app/{APPID}',
		'2' => 'https://www.microsoft.com/en-us/store/p/app/{APPID}',
		'3' => 'https://www.microsoft.com/en-gb/store/p/app/{APPID}',
		'4' => 'https://www.microsoft.com/fr-fr/store/p/app/{APPID}',
		'5' => 'https://www.microsoft.com/es-es/store/p/app/{APPID}',
		'6' => 'https://www.microsoft.com/ru-ru/store/p/app/{APPID}',
		'7' => 'https://www.microsoft.com/tr-tr/store/p/app/{APPID}',
		'8' => 'https://www.microsoft.com/it-it/store/p/app/{APPID}',
		'9' => 'https://www.microsoft.com/de-at/store/p/app/{APPID}',
		'10' => 'https://www.microsoft.com/de-ch/store/p/app/{APPID}',
		'12' => 'https://www.microsoft.com/pl-pl/store/p/app/{APPID}'
	),
	'wordpress' => array(
		'1' => 'https://wordpress.org/plugins/{APPID}/'
	),
	'xda' => array(
		'1' => 'https://labs.xda-developers.com/store/app/{APPID}'
	),
);


?>