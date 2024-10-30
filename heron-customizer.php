<?php
/**
 * Heron Customizer Plugin.
 *
 * @link              http://heronthemes.com
 * @since             1.0.0
 * @package           HeronCustomizer
 * @copyright 		  Copyright (C) 2019, HeronThemes - hello@heronthemes.com
 *
 * @wordpress-plugin
 * Plugin Name:       Heron Customizer
 * Plugin URI:        http://heronthemes.com/plugin/heron-customizer
 * Description:       With the Heron Customizer Plugin, you can adjust and create the WordPress theme you want. Although our premium themes are gorgeous, there is no need to stop dreaming. Start designing and think about all the possibilities out there.
 * Version:           1.0.5
 * Author:            HeronThemes
 * Author URI:        http://heronthemes.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       heron-customizer
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) 
{
	die;
}

/**
 * Define constants
 * 
 * @since 1.0.0
 * @package Heron_Customizer/Main
 * @author HeronThemes
 */
if ( ! function_exists( 'add_filter' ) ) 
{
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! defined( 'HERON_CUSTOMIZER_FILE' ) ) 
{
	define( 'HERON_CUSTOMIZER_FILE', __FILE__ );
}

// Load the Heron Customizer plugin.
require_once dirname( HERON_CUSTOMIZER_FILE ) . '/heronCustomizerMain.php'; 