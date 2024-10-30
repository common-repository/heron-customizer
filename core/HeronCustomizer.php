<?php

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 * 
 * @category  Heron
 * @since 	  1.0.0
 * @package   HeronCustomizer\Core
 * @author    Thijs Moens <hello@heronthemes.com>
 * @copyright 2019 HeronThemes
 * @link      https://heronthemes.com/plugin/heron-customizer
 */

class HeronCustomizer 
{

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      HeronCustomizerLoader   
	 */
	protected $pluginLoader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string 
	 */
	protected $pluginName;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string 
	 */
	protected $pluginVersion;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() 
	{
		if ( defined( 'HERON_CUSTOMIZER_PLUGIN_VERSION' ) ) 
		{
			$this->pluginVersion = HERON_CUSTOMIZER_PLUGIN_VERSION;
		} 
		else 
		{
			$this->pluginVersion = '1.0.0';
		}
		$this->pluginName = 'heron-customizer';

		$this->loadDependencies();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function loadDependencies() 
	{

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'core/HeronCustomizerLoader.php';

		/**
		 * The class responsible for loading the framework and initiating the required classes.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) .  'inc/customizer/framework.php';

		$this->pluginLoader = new HeronCustomizerLoader();

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function runPlugin() 
	{
		$this->pluginLoader->runPlugin();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function getPluginName() 
	{
		return $this->pluginName;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    HeronCustomizerLoader 
	 */
	public function getLoader() 
	{
		return $this->pluginLoader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function getVersion() 
	{
		return $this->pluginVersion;
	}

}
