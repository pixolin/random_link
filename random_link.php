<?php
/**
 * Plugin Name: Random Link Button
 * Description: Add a button with random links
 * Plugin URI: https://
 * Author: Bego Mario Garde
 * Author URI: https://pixolin.de
 * Version: 1.0.0
 * License: GPL2
 * Text Domain: randomlink
 * Domain Path: languages
 */

/*
	Copyright (C) 2018  Bego Mario Garde  <pixolin@pixolin.de>

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
// namespace Pixolin\random_link;

// Make sure this file is only run from within WordPress.
defined( 'ABSPATH' ) or die();

add_action( 'wp_enqueue_scripts', 'random_link_script' );
function random_link_script() {
	wp_enqueue_script( 'random_link', plugins_url( 'js/random_link.js', __FILE__ ), array(), '1.0', true );
}



add_shortcode( 'random_link', 'random_link_shortcode' );
function random_link_shortcode() {
	$links        = array(
		'https://wordpress.org',
		'https://de.wordpress.org',
		'https://wordpress.com',
		'https://mozilla.org',
		'https://apache.org',
		'https://gnu.org',
	);
	$random_index = array_rand( $links, 1 );
	return '<a id="randomlink" href="' . $links[ $random_index ] . '" class="button" onclick="changeLink" target="_blank">Überraschung!</a>';
}
