<?php
/**
 * Migration Related Commands
 *
 * @package WPOrchestrator\Commands\Migration
 */

namespace WPOrchestrator\Commands\Migration;

use function WPOrchestrator\Utils\get_default_migrations_dir;
use function WPOrchestrator\Utils\get_mustache_template;

/**
 * The Migration New Command
 *
 * @package WPOrchestrator\Commands\Migration
 */
class NewMigration {

	/**
	 * Creates a new migration file.
	 *
	 * @param array $args The command arguments.
	 * @param array $assoc_args The command associative arguments.
	 *
	 * ## OPTIONS
	 *
	 * <name>
	 * : Short migration name.
	 *
	 * [--dir=<dir>]
	 * : Specify a destination directory for the command. Defaults to `wp-content/orchestrator/migrations` directory.
	 * ---
	 * default: wp-content/orchestrator/migrations
	 * ---
	 */
	public function __invoke( $args, $assoc_args ) {
		$dir       = \WP_CLI\Utils\get_flag_value( $assoc_args, 'dir', get_default_migrations_dir() );
		$timestamp = time();
		$name      = sanitize_title( $args[0] );

		$migration_filename = sprintf( '%s-%s.php', $timestamp, $name );
		$migration_file     = \WP_CLI\Utils\mustache_render(
			get_mustache_template( 'migration' ),
			[
				'name' => $args[0],
			]
		);

		var_dump( $migration_file );
	}
}
