<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wilson_devops
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

</div><!-- #content -->

<?php get_template_part( 'template-parts/layout/footer', 'content' ); ?>

</div><!-- #page -->

<!--========== SCROLL UP ==========-->

<a href="#top"
	class="scrollup fixed bottom-6 right-6 z-50 p-2 bg-teal-500 text-white rounded-full shadow-lg hover:bg-teal-600 transition-all">
	<svg class="w-7 h-7 transform transition-transform duration-300 fill-current" xmlns="http://www.w3.org/2000/svg"
		width="200" height="200" viewBox="0 0 20 20">
		<g fill="currentColor">
			<path d="m15.36 13.268l-6-5c-1.025-.853.256-2.39 1.28-1.536l6 5c1.024.853-.256 2.39-1.28 1.536Z" />
			<path d="m3.36 11.732l6-5c1.024-.854 2.305.683 1.28 1.536l-6 5c-1.024.854-2.305-.683-1.28-1.536Z" />
		</g>
	</svg>
</a>


<?php wp_footer(); ?>

</body>

</html>