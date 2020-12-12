<?php
/**
 * The WPOrchestrator class
 *
 * @package WPOrchestrator
 */

namespace WPOrchestrator;

use WP_CLI;
use WPOrchestrator\Commands\Migration;

/**
 * The main WPOrchestrator class,
 * reesponsible for bootstraping the plugin
 */
class Plugin {

	/**
	 * Builds the command name for WPOrchestrator commands
	 *
	 * @param string $command The command name
	 * @param string $subcomand The subcommand name
	 *
	 * @return string
	 */
	private function get_command_name( string $command, string $subcomand ) {
		return sprintf( 'orchestrator %s:%s', $command, $subcomand );
	}

	/**
	 * Checks whether WP_CLI is avaliable or not.
	 *
	 * @return bool
	 */
	private function has_wp_cli() {
		return defined( 'WP_CLI' ) && WP_CLI;
	}

	/**
	 * Initializes the WPOrchestrator plugin
	 *
	 * @return void
	 */
	public function init() {
		if ( $this->has_wp_cli() ) {
			\WP_CLI::add_command( $this->get_command_name( 'migration', 'new' ), Migration\NewMigration::class );
			\WP_CLI::add_command( $this->get_command_name( 'migration', 'run' ), Migration\Run::class );
			\WP_CLI::add_command( $this->get_command_name( 'migration', 'rollback' ), Migration\Rollback::class );
			\WP_CLI::add_command( $this->get_command_name( 'migration', 'reset' ), Migration\Reset::class );
		}
	}
}
