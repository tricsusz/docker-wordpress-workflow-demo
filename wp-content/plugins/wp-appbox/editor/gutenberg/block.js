/**
* Ein paar Variablen und Konstanten
*
* @since   4.1.0
* @change  n/a
*/

const { __ } = wp.i18n;

var el = wp.element.createElement,
	registerBlockType = wp.blocks.registerBlockType,
	ServerSideRender = wp.components.ServerSideRender,
	TextControl = wp.components.TextControl,
	SelectControl = wp.components.SelectControl,
	PanelBody = wp.components.PanelBody,
	InspectorControls = wp.editor.InspectorControls;


/**
* Registrierung des Blocks mittels JavaScript
*
* @since   4.1.0
* @change  n/a
*/
 
registerBlockType( 'wp-appbox/appbox', {
	
	title: 'WP-Appbox',
	description: __('Showing a widget in different styles for an app'),
	category: 'widgets',
	keywords: [ 'apps', 'software', 'store' ],
	icon: { foreground: '#222222', background: '#f5d6a9', src: 'shortcode' },

	edit: function( props ) {
		return [
		
			el( ServerSideRender, {
				block: 'wp-appbox/appbox',
				attributes: props.attributes,
			} ),
			
			el( InspectorControls, {},
			
				//Panel START
				el( PanelBody, {
					title: __( 'App settings', 'wp-appbox' ),
					className: 'wp-appbox-block-app-settings',
					initialOpen: true,
				},
					el( TextControl, {
						label: __( 'App-ID', 'wp-appbox' ) + ':',
						value: props.attributes.appID,
						placeholder: __( 'ID of the app to be inserted', 'wp-appbox' ),
						onChange: ( value ) => { props.setAttributes( { appID: value } ); },
					} ),
					el( SelectControl, {
						label: __( 'App Store', 'wp-appbox' ) + ':',
						value: props.attributes.storeID,
						options: [
							{ value: 'amazonapps', label: 'Amazon Apps' },
							{ value: 'appstore', label: 'App Store & Mac App Store' },
							{ value: 'chromewebstore', label: 'Chrome Web Store' },
							{ value: 'firefoxaddon', label: 'Firefox Extensions' },
							{ value: 'goodoldgames', label: 'Good Old Games (GOG.com)' },
							{ value: 'googleplay', label: 'Google Play Store' },
							{ value: 'operaaddons', label: 'Opera Add-ons' },
							{ value: 'steam', label: 'Steam' },
							{ value: 'windowsstore', label: 'Windows Store' },
							{ value: 'wordpress', label: 'Wordpress Plugin' },
							{ value: 'xda', label: 'XDA Labs (Android)' },
						],
						onChange: ( value ) => { props.setAttributes( { storeID: value } ); },
					} )
				),
				//Panel ENDE
			
				//Panel START
				el( PanelBody, {
					title: __( 'Banner format', 'wp-appbox' ),
					className: 'wp-appbox-block-banner-format',
					initialOpen: true,
				},
					el( SelectControl, {
						value: props.attributes.style,
						options: [
							{ value: '', label: __('Default settings', 'wp-appbox') },
							{ value: 'simple', label: __('Simple Badge', 'wp-appbox') + ' (' + __('Default', 'wp-appbox') + ')' },
							{ value: 'screenshots', label: __('Screenshots', 'wp-appbox') },
							{ value: 'screenshots-only', label: __('Screenshots Only', 'wp-appbox') },
							{ value: 'compact', label: __('Compact Badge', 'wp-appbox') },
						],
						onChange: ( value ) => { props.setAttributes( { style: value } ); },
					} ) 
				),
				//Panel ENDE
			
			),
			
		];
	},

	save: function() {
		return null;
	},
	
} );