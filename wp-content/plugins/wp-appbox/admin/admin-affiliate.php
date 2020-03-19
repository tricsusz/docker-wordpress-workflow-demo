<div class="wpa-infobox wpa-notice">
    <p><?php esc_html_e('If you have an affiliate ID for Amazon and Windows Store, you can enter your ID and links will be provided with your affiliate ID attached.', 'wp-appbox'); ?></p>
   	<p><?php esc_html_e('P.S.: If you don\'t want to use own accounts, maybe you want to support the developer? Development takes time and time again. ;-)', 'wp-appbox'); ?></p>
</div>

<h3><?php esc_html_e('Where is Apple Affiliate for Apps?', 'wp-appbox'); ?></h3>


<table class="form-table">

	<tr valign="top">
		<th scope="row" style="font-weight:normal;">	
			<?php printf( esc_html__( 'Unfortunately, Apple has decided to end the affiliate program for apps by October 1, 2018. 😑🖕 %1$sRead more →%2$s', 'wp-appbox' ), '<a href="https://techcrunch.com/2018/08/01/apple-is-ending-its-app-store-affiliate-program-in-october/" target="_blank">', '</a>' ); ?>
		</th>
	</tr>
	
</table>

<hr />

<h3><?php esc_html_e('Amazon Apps: Amazon Associates Program', 'wp-appbox'); ?></h3>

<table class="form-table">

	<tr valign="top" <?php if ( !wpAppbox_checkAmazonAPI() ) echo( ' style="display:none;"' ); ?>>
		<th scope="row" style="font-weight:normal;">	
			<?php printf( esc_html__( 'Official Amazon Product Advertising API is activated and valid. Please change your affiliate settings %1$sin this tab%2$s.', 'wp-appbox' ), '<a href="options-general.php?page=wp-appbox&tab=advanced#amazonapi">', '</a>' ); ?>
		</th>
	</tr>
	
	<tr valign="top" <?php if ( wpAppbox_checkAmazonAPI() ) echo( ' style="display:none;"' ); ?>>
		<th scope="row"><label for="wpAppbox_affiliateAmazonDev">♥ <?php esc_html_e('Support the developer', 'wp-appbox'); ?>:</label></th>
		<td>	
			<label for="wpAppbox_affiliateAmazonDev"><input type="checkbox" name="wpAppbox_affiliateAmazonDev" id="wpAppbox_affiliateAmazonDev" value="1" <?php checked( get_option('wpAppbox_affiliateAmazonDev') ); ?>/> <?php esc_html_e('I don’t have an ID at Amazon Associates Program and want to use the developers ID to support the developer. :-)', 'wp-appbox'); ?></label>
		</td>
	</tr>
	
	<tr valign="top" class="affiliateAmazon" <?php if ( wpAppbox_checkAmazonAPI() || get_option('wpAppbox_affiliateAmazonDev') ) echo( ' style="display:none;"' ); ?>>
		<th scope="row"><label for="wpAppbox_affiliateAmazonID"><?php esc_html_e('Amazon Associates ID', 'wp-appbox'); ?>:</label></th>
		<td>	
			<input type="text" name="wpAppbox_affiliateAmazonID" id="wpAppbox_affiliateAmazonID" value="<?php echo( get_option('wpAppbox_affiliateAmazonID') ); ?>" />
		</td>
	</tr>
	
</table>

<hr />

<h3><?php esc_html_e('Windows Store: Microsoft Private Affiliate Program at Impact', 'wp-appbox'); ?></h3>

<table class="form-table">
	
	<tr valign="top">
		<th scope="row"><label for="wpAppbox_affiliateMicrosoftDev">♥ <?php esc_html_e('Support the developer', 'wp-appbox'); ?>:</label></th>
		<td>	
			<label for="wpAppbox_affiliateMicrosoftDev"><input type="checkbox" name="wpAppbox_affiliateMicrosoftDev" id="wpAppbox_affiliateMicrosoftDev" value="1" <?php checked( get_option('wpAppbox_affiliateMicrosoftDev') ); ?>/> <?php esc_html_e('I don’t have an ID at the Microsoft Private Affiliate Program and want to use the developers ID to support the developer. :-)', 'wp-appbox'); ?></label>
		</td>
	</tr>
	
	<tr valign="top" class="affiliateMicrosoft" <?php if ( get_option('wpAppbox_affiliateMicrosoftDev') ) echo( ' style="display:none;"' ); ?>>
		<th scope="row"><label for="wpAppbox_affiliateMicrosoftProgram"><?php esc_html_e('Country/Program ID', 'wp-appbox'); ?>:</label></th>
		<td>
			<select name="wpAppbox_affiliateMicrosoftProgram" id="wpAppbox_affiliateMicrosoftProgram" class="postform" style="min-width:220px;">
			<?php
			   	global $wpAppbox_MicrosoftPrivateAffiliateProgramm;
			   	if ( isset( $wpAppbox_MicrosoftPrivateAffiliateProgramm ) ):
					foreach ( $wpAppbox_MicrosoftPrivateAffiliateProgramm as $country => $programID ) {
						echo( "<option class=\"level-0\" value=\"" . $programID[0] . "\" " . selected( get_option('wpAppbox_affiliateMicrosoftProgram'), $programID[0] ) . ">$country (ID: " . $programID[0] . ")</option>" );
					}
				endif;
			?>
			</select>
		</td>
	</tr>
	
	<tr valign="top" class="affiliateMicrosoft" <?php if ( get_option('wpAppbox_affiliateMicrosoftDev') ) echo( ' style="display:none;"' ); ?>>
		<th scope="row"><label for="wpAppbox_affiliateMicrosoftID"><?php esc_html_e('Your Site ID', 'wp-appbox'); ?>:</label></th>
		<td>	
			<input type="text" name="wpAppbox_affiliateMicrosoftID" id="wpAppbox_affiliateMicrosoftID" value="<?php echo( get_option('wpAppbox_affiliateMicrosoftID') ); ?>" />
		</td>
	</tr>
	
</table>

<hr />

<h3><?php esc_html_e('Custom affiliate IDs', 'wp-appbox'); ?></h3>

<table class="form-table">

	<tr valign="top">
		<th scope="row"><label for="wpAppbox_userAffiliate"><?php esc_html_e('Activate custom ID', 'wp-appbox'); ?>:</label></th>
		<td>	
			<label for="wpAppbox_userAffiliate"><input type="checkbox" name="wpAppbox_userAffiliate" id="wpAppbox_userAffiliate" value="1" <?php checked(get_option('wpAppbox_userAffiliate') ); ?>/><?php esc_html_e('Each user and author can use his own affiliate IDs. If no ID is specified in the user profile, the global IDs are used.', 'wp-appbox'); ?></label>
		</td>
	</tr>
	
</table>


<script>

	$j=jQuery.noConflict();
	
	$j("#wpAppbox_affiliateAppleDev").click(function () {
		if ( $j(this).attr('checked') ) {
			$j('tr.affiliateApple').hide();
		} else {
			$j('tr.affiliateApple').show();
		}
	} );
	
	<?php if ( !wpAppbox_checkAmazonAPI() ): ?>
	$j("#wpAppbox_affiliateAmazonDev").click(function () {
		if ( $j(this).attr('checked') ) {
			$j('tr.affiliateAmazon').hide();
		} else {
			$j('tr.affiliateAmazon').show();
		}
	} );
	<?php endif; ?>
	
	$j("#wpAppbox_affiliateMicrosoftDev").click(function () {
		if ( $j(this).attr('checked') ) {
			$j('tr.affiliateMicrosoft').hide();
		} else {
			$j('tr.affiliateMicrosoft').show();
		}
	} );
		
</script>