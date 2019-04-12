<?php
/**
 * Testing sidebar hooks located in sidebar.php.
 *
 * @package Hook_Tester/controller/partial
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly.
endif;

/**
 * The class that tests all sidebar hooks.
 *
 * @since 1.0
 */
class Hook_Tester_Sidebar {
	/**
	 * The Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->hook_tester_sidebar_activate();
	}

	/**
	 * Add all sidebar hooks.
	 *
	 * @since 1.7.0
	 */
	public function hook_tester_sidebar_activate() {
		// hook_before_aside.
		add_action( 'hook_before_aside', array( $this, 'hook_tester_hook_before_aside' ) );
		// hook_top_aside.
		add_action( 'hook_top_aside', array( $this, 'hook_tester_hook_top_aside' ) );
		// hook_bottom_aside.
		add_action( 'hook_bottom_aside', array( $this, 'hook_tester_hook_bottom_aside' ) );
		// hook_after_aside.
		add_action( 'hook_after_aside', array( $this, 'hook_tester_hook_after_aside' ) );
	}

	/**
	 * Default output of hook.
	 *
	 * @since 1.0.0
	 * @param string $hook_name is the name of the hook to output.
	 */
	public function hook_tester_default( $hook_name ) {
		echo '<div style="height:50px;width:100%;background-color:#b5b0a9;text-align:center;">
		<span style="color:#fff;line-height:50px;">' . esc_attr( $hook_name ) . '</span></div>';
	}

	/**
	 * Hook: hook_before_aside.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_before_aside() {
		$hook_name = 'hook_before_aside';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_top_aside.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_top_aside() {
		$hook_name = 'hook_top_aside';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_bottom_aside.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_bottom_aside() {
		$hook_name = 'hook_bottom_aside';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_after_aside.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_after_aside() {
		$hook_name = 'hook_after_aside';
		$this->hook_tester_default( $hook_name );
	}

}
/**
 * Instantiate the class
 *
 * @since 1.0.0
 */
$hook_tester_sidebar = new Hook_Tester_Sidebar();
