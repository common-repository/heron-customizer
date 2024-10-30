<?php

/**
 * Heron Customizer plugin file.
 * 
 * @category  Heron
 * @since 	  1.0.0
 * @package   HeronCustomizer\Main
 * @author    Thijs Moens <hello@heronthemes.com>
 * @copyright 2019 HeronThemes
 * @link      https://heronthemes.com/plugin/heron-customizer
 */
if ( ! function_exists( 'add_filter' ) ) 
{
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

/**
 * Define constants.
 * 
 * @since 1.0.0
 */

 /**
 * {@internal Nobody should be able to overrule the real version number as this can cause
 *            serious issues with the options, so no if ( ! defined() ).}}
 */
define( 'HERON_CUSTOMIZER_PLUGIN_VERSION', '1.0.3' );

if ( ! defined( 'HERON_CUSTOMIZER_PATH' ) ) 
{
	define( 'HERON_CUSTOMIZER_PATH', plugin_dir_path( HERON_CUSTOMIZER_FILE ) );
}

if ( ! defined( 'HERON_CUSTOMIZER_BASENAME' ) ) 
{
	define( 'HERON_CUSTOMIZER_BASENAME', plugin_basename( HERON_CUSTOMIZER_FILE ) );
}

if ( ! defined( 'HERON_CUSTOMIZER_URI' ) ) 
{
	define( 'HERON_CUSTOMIZER_URI', plugin_dir_url ( HERON_CUSTOMIZER_FILE ) );
}

/* ***************************** PLUGIN (DE-)ACTIVATION *************************** */

/**
 * The code that runs during plugin activation.
 * 
 * @since 1.0.0
 */
function activateHeronCustomizer() 
{
	include_once HERON_CUSTOMIZER_PATH . 'core/HeronCustomizerActivator.php';
	HeronCustomizerActivator::activatePlugin();
}

/**
 * The code that runs during plugin deactivation.
 * 
 * @since 1.0.0
 */
function deactivateHeronCustomizer() 
{
	include_once HERON_CUSTOMIZER_PATH . 'core/HeronCustomizerDeactivator.php';
	HeronCustomizerDeactivator::deactivatePlugin();
}
register_activation_hook( HERON_CUSTOMIZER_FILE, 'activateHeronCustomizer' );
register_deactivation_hook( HERON_CUSTOMIZER_FILE, 'deactivateHeronCustomizer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 * 
 * @since 1.0.0
 */
require HERON_CUSTOMIZER_PATH . '/core/HeronCustomizer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since 1.0.0
 */
function runHeronCustomizer() 
{
	$plugin = new HeronCustomizer();
	$plugin->runPlugin();
}
runHeronCustomizer();