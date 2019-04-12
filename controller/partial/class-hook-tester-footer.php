<?php
/**
 * Testing footer hooks located in footer.php.
 *
 * @package Hook_Tester/controller/partial
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly.
endif;

/**
 * The class that tests all footer hooks.
 *
 * @since 1.0
 */
class Hook_Tester_Footer {
	/**
	 * The Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->hook_tester_footer_activate();
	}
	/**
	 * Add all header hooks.
	 *
	 * @since 1.7.0
	 */
	public function hook_tester_footer_activate() {
		// hook_bottom_content.
		add_action( 'hook_bottom_content', array( $this, 'hook_tester_hook_bottom_content' ) );
		// hook_after_content.
		add_action( 'hook_after_content', array( $this, 'hook_tester_hook_after_content' ) );
		// hook_after_content.
		add_action( 'hook_before_footer', array( $this, 'hook_tester_hook_before_footer' ) );
		// hook_top_footer.
		add_action( 'hook_top_footer', array( $this, 'hook_tester_hook_top_footer' ) );
		// hook_bottom_footer.
		add_action( 'hook_bottom_footer', array( $this, 'hook_tester_hook_bottom_footer' ) );
		// hook_after_footer.
		add_action( 'hook_after_footer', array( $this, 'hook_tester_hook_after_footer' ) );
		// hook_after_html.
		add_action( 'hook_after_html', array( $this, 'hook_tester_hook_after_html' ) );
	}

	/**
	 * Default output of hook.
	 *
	 * @since 1.0.0
	 * @param string $hook_name is the name of the hook to output.
	 */
	public function hook_tester_default( $hook_name ) {
		echo '<div style="height:50px;width:100%;background-color:#747e79;text-align:center;">
		<span style="color:#fff;line-height:50px;">' . esc_attr( $hook_name ) . '</span></div>';
	}

	/**
	 * Hook: hook_bottom_content.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_bottom_content() {
		$hook_name = 'hook_bottom_content';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_after_content.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_after_content() {
		$hook_name = 'hook_after_content';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_before_footer.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_before_footer() {
		$hook_name = 'hook_before_footer';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_top_footer.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_top_footer() {
		$hook_name = 'hook_top_footer';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_bottom_footer.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_bottom_footer() {
		$hook_name = 'hook_bottom_footer';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_after_footer.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_after_footer() {
		$hook_name = 'hook_after_footer';
		$this->hook_tester_default( $hook_name );
	}

	/**
	 * Hook: hook_after_html.
	 *
	 * @since 1.0.0
	 * @var string $hook_name set to hook.
	 */
	public function hook_tester_hook_after_html() {
		$hook_name = 'hook_after_html';
		$this->hook_tester_default( $hook_name );
	}

}

/**
 * Instantiate the class
 *
 * @since 1.0.0
 */
$hook_tester_footer = new Hook_Tester_Footer();
