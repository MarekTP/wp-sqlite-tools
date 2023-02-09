<?php
/**
 * Plugin Name:       WP SQLite Tools
 * Plugin URI:        https://github.com/MarekTP/wp-sqlite-tools
 * Description:       Tools for SQLite integratin into WordPress. Data migration (MariaDB/MySQL <-> SQLite), VACUUM, set any Pragmas
 * Version:           0.5.0
 * Requires PHP:      5.6
 * Requires at least: 6.0
 * Author:            Marek "MarekTP" Olšavský
 * Author URI:        https://olsavsky.cz
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-sqlite-tools
 * Domain Path:       /languages
 */

 if (!defined('ABSPATH')) {
	exit;
}

/**
 * WP SQLite Tools Class
 * @class WPSQLiteTools
 */

 class WPSQLiteTools {
    public function __construct()
    {
        if (is_plugin_active('')) //check if SQLite is enabled
        {
            register_activation_hook( __FILE__, array( $this, 'activation' ) );
            register_deactivation_hook( __FILE__, array( $this, 'deactivation' ) );
            register_uninstall_hook(__FILE__, array($this, 'uninstall'));
        }
    }

    public function __destruct()
    {
        //
    }

    public function activation()
    {
        //
    }

    public function deactivation()
    {

    }

    public function uninstall(){
        //
    }


 }

 function WPSQLiteTools() {
	static $inst;

	// first call to instance() initializes the plugin
	if ( (null === $inst) || !($inst instanceof WPSQLiteTools) )
	{
		$instance = WPSQLiteTools::instance();
	}
	return $instance;
}

 $wst = WPSQLiteTools();