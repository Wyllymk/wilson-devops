<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Wilson_Devops
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section id="primary">
    <main id="main">
        <div class="flex h-screen bg-gray-100 dark:bg-gray-800 text-black dark:text-white items-center justify-center">

            <!-- Hero Section - Tailwind Component -->
            <section id="scrollspyHero" class="w-full flex justify-center items-center">
                <div class="container mx-auto px-6">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-12">
                        <!-- Text Column -->
                        <div class="lg:w-1/2 mt-20">
                            <h1
                                class="text-4xl md:text-5xl lg:text-6xl font-bold font-oswald mb-4 text-regal-blue dark:text-gray-100">
                                <?php _e( "Oops! We couldn't find that page.", 'wilson-devops' ); ?>
                            </h1>
                            <p class="text-lg md:text-xl mb-8 text-gray-700 dark:text-gray-300">
                                <?php _e( "It looks like the page you're looking for doesn't exist or has been moved. But don't worry, you can still explore our website.", 'wilson-devops' ); ?>
                            </p>
                            <div class="flex gap-4 justify-center lg:justify-start">
                                <a href="<?php echo esc_url( site_url( '/' ) ); ?>"
                                    class="px-8 py-3 rounded-full bg-gradient-to-r from-blue-500 via-purple-600 to-pink-500 text-white font-semibold text-lg hover:scale-105 hover:from-blue-600 hover:via-purple-700 hover:to-pink-600 transition-all transform active:scale-95 focus:ring-4 focus:ring-blue-300 focus:outline-none shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/50 dark:bg-gradient-to-r dark:from-blue-800 dark:via-purple-900 dark:to-pink-700">
                                    <?php _e( 'Go to Homepage', 'wilson-devops' ); ?>
                                </a>
                            </div>

                        </div>

                        <!-- Image Column with Masking -->
                        <div class="text-center h-80 md:h-auto lg:w-1/2 lg:text-right overflow-hidden">
                            <img class="mx-auto lg:mx-0 img-fluid object-cover h-auto max-h-screen" loading="lazy"
                                src="<?php echo get_template_directory_uri() . '/assets/img/Developer.webp'; ?>"
                                alt="<?php esc_attr_e( '404 Error Image', 'wilson-devops' ); ?>" style="
								-webkit-mask-image: url(<?php echo get_template_directory_uri() . '/assets/img/hero-blob.svg'; ?>);
								mask-image: url(<?php echo get_template_directory_uri() . '/assets/img/hero-blob.svg'; ?>);
								-webkit-mask-size: contain;
								mask-size: contain;
								-webkit-mask-repeat: no-repeat;
								mask-repeat: no-repeat;
								-webkit-mask-position: center;
								mask-position: center;
							">
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();