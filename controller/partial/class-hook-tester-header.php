<?php
/**
 * Testing header hooks located in the header.php file.
 *
 * @package Hook_Tester/controller/partial
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly.
endif;

/**
 * The class that tests all header hooks.
 *
 * @since 1.0
 */
class Hook_Tester_Header {
	/**
	 * The Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->hook_tester_header_activate();
	}

	/**
	 * Add all header hooks.
	 *
	 * @since 1.0.0
	 */
	public function hook_tester_header_activate() {
		// Hook: hook_before_html.
		add_action( 'hook_before_html', array( $this, 'hook_tester_hook_before_html' ) );
		// Hook: hook_before_header.
		add_action( 'hook_before_header', array( $this, 'hook_tester_hook_before_header' ) );
		// Hook: hook_top_header.
		add_action( 'hook_top_header', array( $this, 'hook_tester_hook_top_header' ) );
		// // Hook: hook_bottom_header.
		add_action( 'hook_bottom_header', array( $this, 'hook_tester_hook_bottom_header' ) );
		// // Hook: hook_bottom_header.
		add_action( 'hook_after_header', array( $this, 'hook_tester_hook_after_header' ) );
		// // Hook: hook_bottom_header.
		add_action( 'hook_before_content', array( $this, 'hook_tester_hook_before_content' ) );
		// // Hook: hook_top_content.
		add_action( 'hook_top_content', array( $this, 'hook_tester_hook_top_content' ) );
	}

	/**
	 * Default output of hook.
	 *
	 * @since 1.0.0
	 * @param string $hook_name is the name of the hook to output.
	 */
	public function hook_tester_default( $hook_name ) {
		echo '<div style="height:50px;width:100%;background-color:#c4004b;text-align:center;">
		<span style="color:#fff;line-height:50px;">' . esc_attr( $hook_name ) . '</span></div>';
	}

	/**
	 * Hook: hook_before_html.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_before_html() {
		$hook_name = 'hook_before_html';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_before_header.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_before_header() {
		$hook_name = 'hook_before_header';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_top_header.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_top_header() {
		$hook_name = 'hook_top_header';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_bottom_header.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_bottom_header() {
		$hook_name = 'hook_bottom_header';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_after_header.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_after_header() {
		$hook_name = 'hook_after_header';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_before_content.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_before_content() {
		$hook_name = 'hook_after_header';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_top_content.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_top_content() {
		$hook_name = 'hook_top_content';
		$this->hook_tester_default( $hook_name );
	}

}
/**
 * Instantiate the class
 *
 * @since 1.0.0
 */
$hook_tester_header = new Hook_Tester_Header();
