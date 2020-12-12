<?php
/**
 * WP Orchestrator utilities functions
 *
 * @package WPOrchestrator\Utils
 */

namespace WPOrchestrator\Utils;

/**
 * Returns the migrations directory.
 *
 * @return string
 */
function get_default_migrations_dir() {
	/**
	 * Filters out the default migrations directory.
	 */
	return apply_filters(
		'wp_orchestrator_default_migrations_dir',
		WP_CONTENT_DIR . '/orchestrator/migrations'
	);
}

/**
 * Returns the path of a mustache template
 *
 * @param string $template_name The template name.
 *
 * @return string
 */
function get_mustache_template( $template_name ) {
	return sprintf( WP_ORCHESTRATOR_PATH . 'templates/%s.mustache', $template_name );
}
