<?php

defined('ABSPATH') or die("Play nice!");

// Admin page layout

function replace_admin_menu_icons_css() {
    ?>
    <style>
        #toplevel_page_tito-settings .dashicons-admin-generic:before {content:none;}
        #toplevel_page_tito-settings .wp-menu-image {background-image: url('<?php echo plugins_url('tito/inc/imgs/tito.svg'); ?>') !important;background-position: 10px 8px; background-repeat: no-repeat;background-size:17px 17px;}
        #toplevel_page_tito-settings:hover .wp-menu-image {background-image: url('<?php echo plugins_url('tito/inc/imgs/tito-over.svg'); ?>') !important;}
        #toplevel_page_tito-settings.current .wp-menu-image {background-image: url('<?php echo plugins_url('tito/inc/imgs/tito-on.svg'); ?>') !important;}

    </style>
    <?php
}

add_action( 'admin_head', 'replace_admin_menu_icons_css' );

function tito_settings(){

	global $tito_options;

	ob_start(); ?>
	<div class="wrap">
		<h2>Tito</h2>
		<p>To display your event details on your website, ensure you have created an account and setup an event over<br />on <a href="https://ti.to" target="_blank" title="Tito - link opens in a new tab/browser window">https://ti.to</a> and then come back here with the event details.</p>
		<p>Update your settings with the following details:</p>

		<form method="post" action="options.php">

			<?php settings_fields('tito_settings_group'); ?>

			<h3>Tito settings</h3>

			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row"><label class="description" for="tito_settings[event_path]"><?php _e('Enter the event path','tito_domain'); ?></label></th>
						<td><input id="tito_settings[event_path]" name="tito_settings[event_path]" type="text" value="<?php echo $tito_options['event_path']; ?>" /><p class="description">This will be something like "ultimateconf/2013" (without quotes), provided on your Tito Admin Page</p></td>
					</tr>
					<tr>
						<th scope="row"><label class="description" for="tito_settings[is_button]"><?php _e('Show as a button only','tito_domain'); ?></label></th>
						<td><input id="tito_settings[is_button]" name="tito_settings[is_button]" type="checkbox" <?php if(isset($tito_options['is_button'])) echo "checked ";?>/>
					</tr>
					<tr>
						<th scope="row"><label class="description" for="tito_settings[button_label]"><?php _e('Enter button label','tito_domain'); ?></label></th>
						<td><input id="tito_settings[button_label]" name="tito_settings[button_label]" type="text" value="<?php echo $tito_options['button_label']; ?>" /><p class="description">This is only used if "Show as a button only" is checked</p></td>
					</tr>
					<tr>
						<th scope="row"><label class="description" for="tito_settings[releases]"><?php _e('Enter specific releases','tito_domain'); ?></label></th>
						<td><input id="tito_settings[releases]" name="tito_settings[releases]" type="text" value="<?php echo $tito_options['releases']; ?>" /><p class="description">This will be something like "3elajg6qcxu" (without quotes), provided on your Tito Admin Page</p></td>
					</tr>


				</tbody>
			</table>
			<p class="submit">
				<input type="submit" id="submit" name="submit" class="button button-primary" value="<?php _e('Save settings', 'tito_domain'); ?>" />
			</p>

		</form>
	</div>

	<?php
	echo ob_get_clean();
}

function tito_add_options_link(){
	add_menu_page( 'Tito settings', 'Tito', 'manage_options', 'tito-settings', 'tito_settings', '', '85' );
}

add_action( 'admin_menu','tito_add_options_link');

function tito_register_settings(){
	register_setting( 'tito_settings_group', 'tito_settings' );
}

add_action('admin_init','tito_register_settings');
?>