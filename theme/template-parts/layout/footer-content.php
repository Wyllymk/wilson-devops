<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wilson_Devops
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

<!-- Footer - stays at the bottom if content doesn't span full height -->
<footer class="bg-gray-100 dark:bg-gray-950 text-center py-4 text-gray-950 dark:text-gray-200">
    <?php
		// Get the current year dynamically
		$wilson_devops_current_year = date( 'Y' );
		// Retrieve the site name dynamically
		$wilson_devops_blog_info = get_bloginfo( 'name' );

		// Display the footer content
		printf(
			'<span>Copyright © 2020 - %1$s | </span><a href="%2$s" rel="home" class="text-black dark:text-white hover:text-teal-600 dark:hover:text-teal-300">%3$s</a>',
			$wilson_devops_current_year,
			esc_url( home_url( '/' ) ),
			esc_html( $wilson_devops_blog_info )
		);
	?>
</footer>