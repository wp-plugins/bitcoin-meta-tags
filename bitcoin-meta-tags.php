<?php
/**
 * Plugin Name: Bitcoin Meta Tags
 * Description: Adds Bitcoin meta tags to your site.  &nbsp;&nbsp; Donate: 1N6WuXttwKCLH971uZKjMYMtxz1Ta6UQjE
 * Version: 1.0
 * Author: Josh Koberstein
 * Author URI: http://www.joshkoberstein.com/
 */

/*  Copyright 2014  Josh Koberstein  (email : josh.koberstein@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class BitcoinMetaTags {

	private $_plugin;

	public function __construct()
	{
		$this->_plugin = plugin_basename( __FILE__ );
	}

	public function init() {
		$plugin = __FILE__;
		add_action( 'admin_init', array( $this, 'settings_api_init' ) );
		add_action( 'wp_head', array( $this, 'output_meta_tag') );
		add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), array( $this, 'plugin_settings_link' ) );
	}

	public function settings_api_init() {

		add_settings_field(
			'bitcoin_address',
			'Bitcoin Address',
			array( $this, 'bitcoin_address_field_callback' ),
			'general',
			'default',
			array( 'label_for' => 'bitcoin_address' )
		);

		register_setting(
			'general',
			'bitcoin_address'
		);

	}

	public function bitcoin_address_field_callback() {
		$value = get_option('bitcoin_address');
		echo '<input name="bitcoin_address" type="text" id="bitcoin_address" value="' . htmlspecialchars($value) . '" class="regular-text">';
		echo '<p class="description">This address will be placed in hidden meta tags so that your site can accept Bitcoin tips.</p>';
	}

	public function output_meta_tag() {
		$value = get_option('bitcoin_address');
		if($value)
		{
			echo '<meta name="bitcoin" content="' . htmlspecialchars($value) . '" />' . PHP_EOL;
			echo '<link rel="bitcoin" href="bitcoin:' . htmlspecialchars($value) . '" />';
		}
	}

	public function plugin_settings_link( $links ) {
		echo 'test';
		$settings_link = '<a href="options-general.php">Settings</a>';
		array_push( $links, $settings_link );
		return $links;
	}

}

$bitcoinMetaTags = new BitcoinMetaTags();
$bitcoinMetaTags->init();