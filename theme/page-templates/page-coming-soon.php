<?php
/**
 * The template for displaying the coming-soon page
 *
 * This is the template that displays the coming-soon page by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wilson_devops
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

get_header();

?>
<main class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-400 ease-in-out">
    <?php get_template_part( 'template-parts/content/content', 'header' ); ?>

    <!-- Coming Soon Section -->
    <section class="pt-32 pb-20 px-4 relative bg-gray-200 dark:bg-gray-900" id="home">

    </section>

    <?php get_template_part( 'template-parts/content/content', 'footer' ); ?>

</main>

<?php
get_footer();