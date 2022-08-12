<?php
/**
 * Customizer Separator Control settings for this theme.
 *
 * @package ABC_WP
 * @subpackage CDE_Theme
 * @since CDE Theme 1.0
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	if ( ! class_exists( 'TwentyTwenty_Separator_Control' ) ) {
		/**
		 * Separator Control.
		 *
		 * @since CDE Theme 1.0
		 */
		class TwentyTwenty_Separator_Control extends WP_Customize_Control {
			/**
			 * Render the hr.
			 *
			 * @since CDE Theme 1.0
			 */
			public function render_content() {
				echo '<hr/>';
			}

		}
	}
}
