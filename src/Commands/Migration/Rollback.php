<?php
/**
 * Migration Related Commands
 *
 * @package WPOrchestrator\Commands\Migration
 */

namespace WPOrchestrator\Commands\Migration;

/**
 * The Migration Rollback Command
 *
 * @package WPOrchestrator\Commands\Migration
 */
class Rollback {

	/**
	 * Runs the avaliable migration
	 *
	 * ## OPTIONS
	 *
	 * <name>
	 * : Name for the new package. Expects <author>/<package> (e.g. 'wp-cli/scaffold-package').
	 *
	 * [--description=<description>]
	 * : Human-readable description for the package.
	 *
	 * [--homepage=<homepage>]
	 * : Homepage for the package. Defaults to 'https://github.com/<name>'
	 *
	 * [--dir=<dir>]
	 * : Specify a destination directory for the command. Defaults to WP-CLI's `packages/local/` directory.
	 *
	 * [--license=<license>]
	 * : License for the package.
	 * ---
	 * default: MIT
	 * ---
	 */
	public function __invoke() {

	}
}
