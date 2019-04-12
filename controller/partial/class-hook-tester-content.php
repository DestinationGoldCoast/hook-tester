<?php
/**
 * Testing content hooks located in an array of files.
 *
 * @package Hook_Tester/controller/partial
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly.
endif;

/**
 * The class that tests all content hooks.
 *
 * @since 1.0
 */
class Hook_Tester_Content {
	/**
	 * The Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->hook_tester_content_activate();
	}

	/**
	 * Add all header hooks.
	 *
	 * @since 1.7.0
	 */
	public function hook_tester_content_activate() {
		// Hook: hook_before_page_main.
		add_action( 'hook_before_page_main', array( $this, 'hook_tester_hook_before_page_main' ) );
		// Hook: hook_before_page_main.
		add_action( 'hook_top_page_main', array( $this, 'hook_tester_hook_top_page_main' ) );
		// Hook: hook_bottom_page_main.
		add_action( 'hook_bottom_page_main', array( $this, 'hook_tester_hook_bottom_page_main' ) );
		// Hook: hook_after_page_main.
		add_action( 'hook_after_page_main', array( $this, 'hook_tester_hook_after_page_main' ) );
	}

	/**
	 * Default output of hook.
	 *
	 * @since 1.0.0
	 * @param string $hook_name is the name of the hook to output.
	 */
	public function hook_tester_default( $hook_name ) {
		echo '<div style="height:50px;width:100%;background-color:#218fa3;text-align:center;">
		<span style="color:#fff;line-height:50px;">' . esc_attr( $hook_name ) . '</span></div>';
	}

	/**
	 * Hook: hook_before_page_main.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_before_page_main() {
		$hook_name = 'hook_before_page_main';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_top_page_main.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_top_page_main() {
		$hook_name = 'hook_top_page_main';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_bottom_page_main.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_bottom_page_main() {
		$hook_name = 'hook_bottom_page_main';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_after_page_main.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_after_page_main() {
		$hook_name = 'hook_after_page_main';
		$this->hook_tester_default( $hook_name );
	}

}
/**
 * Instantiate the class
 *
 * @since 1.0.0
 */
$hook_tester_content = new Hook_Tester_Content();
