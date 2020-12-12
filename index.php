<?php
/**
 * WP Orchestrator
 *
 * @package WPOrchestrator
 * @author      Nícholas André
 * @copyright   2020 Nícholas André
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 *
 * Plugin Name: WP Orchestrator
 * Plugin URI:  https://github.com/nicholasio/wp-orchestrator
 * Description:
 * Version:     1.0.0
 * Author:      Nícholas André
 * Text Domain: wporchestrator
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

define( 'WP_ORCHESTRATOR_VERSION', '0.1' );
define( 'WP_ORCHESTRATOR_PATH', plugin_dir_path( __FILE__ ) );

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
} else {
	return;
}

$orchestrator = new \WPOrchestrator\Plugin();
$orchestrator->init();
