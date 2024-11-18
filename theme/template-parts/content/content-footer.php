<?php
/**
 * Template part for displaying footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Easy_Manage
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

<!-- Footer - stays at the bottom if content doesn't span full height -->
<footer class="bg-gray-100 dark:bg-gray-800 text-center py-4 text-gray-800 dark:text-gray-200">
    <?php
		// Get the current year dynamically
		$wilson_devops_current_year = date('Y');
		// Retrieve the site name dynamically
		$wilson_devops_blog_info = get_bloginfo('name');
		
		// Display the footer content
		echo sprintf(
			'<span>Copyright © %1$s | </span><a href="%2$s" rel="home" class="text-black dark:text-white hover:text-gray-600 dark:hover:text-gray-300">%3$s</a>',
			$wilson_devops_current_year,
			esc_url( home_url( '/' ) ),
			esc_html( $wilson_devops_blog_info )
		);
	?>
</footer>