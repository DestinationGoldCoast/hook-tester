<?php
/**
 * The controller brings it all together.
 *
 * @package Hook_Tester/controller
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly.
endif;

/**
 * Hook Tester pulls all the things together.
 *
 * @since 1.0.0
 */
class Hook_Tester {

	/**
	 * The constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->hook_tester_partials();
	}

	/**
	 * Include all the partials
	 *
	 * @since 1.0.0
	 */
	public function hook_tester_partials() {
		/**
		 * The class responsible for displaying hooks in the header.
		 */
		require_once 'partial/class-hook-tester-header.php';
		/**
		 * The class responsible for displaying hooks in content.
		 */
		require_once 'partial/class-hook-tester-content.php';
		/**
		 * The class responsible for displaying hooks in content.
		 */
		require_once 'partial/class-hook-tester-sidebar.php';
		/**
		 * The class responsible for displaying hooks in content.
		 */
		require_once 'partial/class-hook-tester-footer.php';
	}

}

/**
 * Instantiate the class
 *
 * @since 1.7.0
 */
$hook_tester = new Hook_Tester();
