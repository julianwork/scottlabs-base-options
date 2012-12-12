<?php
	//create custom plugin menu
	add_action('admin_menu' , 'scottlabs_create_menu');
	
	function scottlabs_create_menu()
	{ //create new submenu
		add_submenu_page( 'themes.php' , 'scottlabs theme options' , 'scottlabs options' , 'administrator' , __FILE__, 'scottlabs_landing_settings_page');
	 //call register settings function
		add_action( 'admin_init' , 'scottlabs_register_settings' );
	}
	function scottlabs_register_settings()
	{ //register the settings
		register_setting( 'scottlabs-settings-group' , 'scottlabs_facebook' );
		register_setting( 'scottlabs-settings-group' , 'scottlabs_twitter' );
		register_setting( 'scottlabs-settings-group' , 'scottlabs_analytics');
		register_setting( 'scottlabs-settings-group' , 'scottlabs_youtube' );
		register_setting( 'scottlabs-settings-group' , 'scottlabs_blog' );
		register_setting( 'scottlabs-settings-group' , 'scottlabs_tripadviser' );
		register_setting( 'scottlabs-settings-group' , 'scottlabs_footeraddress');
		register_setting( 'scottlabs-settings-group' , 'scottlabs_woeid' );
	}
	function scottlabs_settings_page()
	{
	?>
	<div class="wrap">
	<h2> scottlabs theme settings</h2>
	<form id="LandingOptions" method="post" action="options.php">
	<?php settings_fields( 'scottlabs-settings-group' ); ?>
	<table class="form-table">
	
	<!--FAITHBOOK-->
	<tr valign="top">
	<th scope="row">Facebook Link:</th>
	<td>
	<input type="text" name="scottlabs_facebook" value="<?php print get_option('scottlabs_facebook');?>" />
	</td>
	</tr>
	
	<!--TWITTER-->
	<tr valign="top">
	<th scope="row">Twitter Link:</th>
	<td>
	<input type="text" name="scottlabs_twitter" value="<?php print get_option('scottlabs_twitter'); ?>" /> 
	</td>
	</tr>
	
	<!--ANALYTICS FOR GOOGLE-->
	<tr>
	<th scope="row">Google Analytics Code:</th>
	<td>
	<textarea name="scottlabs_analytics"><?php print
	get_option('scottlabs_analytics'); ?></textarea>
	</td>
	</tr>
	</table>
	
	<!--YOUTUBE-->
	<tr valign="top">
	<th scope="row">Youtube link:</th>
	<td>
	<input type="text" name="scottlabs_youtube" value="<?php print get_option('scottlabs_youtube');?>" />
	</td>
	</tr>
	
	<!--BLOG-->
	<tr valign="top">
	<th scope="row">Blog Link:</th>
	<td>
	<input type="text" name="scottlabs_blog" value="<?php print get_option('scottlabs_blog');?>" />
	</td>
	</tr>
	
	<!--TRIPADVISER-->
	<tr valign="top">
	<th scope="row">Trip Adviser Link:</th>
	<td>
	<input type="text" name="scottlabs_tripadviser" value="<?php print get_option('scottlabs_tripadviser');?>" />
	</td>
	</tr>
	
	<!--FOOTER ADDRESS-->
	<tr valign="top">
	<th scope="row">Footer information:</th>
	<td>
	<input type="textarea" name="scottlabs_footeraddress" value="<?php print get_option('scottlabs_footeraddress');?>" />
	</td>
	</tr>
	
	<!--WEATHER LOCATION ID-->
	<tr valign="top">
	<th scope="row">Weather Location ID:</th>
	<td>
	<input type="text" name="scottlabs_woeid" value="<?php print get_option('scottlabs_woeid');?>" />
	</td>
	</tr>
	
				
	<!--SUBMIT YOUR CHANGES TO THE MIGHTY DATABASE RAAAAARRRRRR!!!!!!!!! -->
	<p class="submit">
	<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
	</p>
	</form>
	</div>
	<?php } ?>
	
	
	
	
	
	
	
	