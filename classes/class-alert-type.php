<?php
namespace WP_Stream;

abstract class Alert_Type {

	public $plugin;

	/**
	 * Class constructor.
	 *
	 * @param Plugin $plugin Plugin object.
	 * @return void
	 */
	public function __construct( $plugin ) {
		$this->plugin = $plugin;
	}

	/**
	 *	Alert receipients about the new record
	 *
	 * @param int   $record_id Record ID.
	 * @param array $recordarr Record details.
	 * @param array $options Alert options.
	 */
	abstract public function alert( $record_id, $recordarr, $options );

	/**
	 * Display settings form for configuration individual alerts
	 *
	 * @param Alert   $alert Alert currently being worked on.
	 * @param WP_Post $post Post details.
	 */
	public function display_settings_form( $alert, $post ) {
		return;
	}

	/**
	 * Process settings form for configuration individual alerts
	 *
	 * @param Alert   $alert Alert currently being worked on.
	 * @param WP_Post $post Post details.
	 */
	public function process_settings_form( $alert, $post ) {
		return;
	}

	/**
	 * Allow connectors to determine if their dependencies is satisfied or not
	 *
	 * @return bool
	 */
	public function is_dependency_satisfied() {
		return true;
	}
}