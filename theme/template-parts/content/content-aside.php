<?php
/**
 * Template part for displaying header for mobile screens
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wilson_Devops
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>
<!-- Sidebar - occupies 1/5 of the width on large screens -->

<aside class="w-full relative flex-shrink-0">
    <div class="flex flex-col h-full">
        <!-- Sidebar Navigation -->
        <nav id="sidebar" class="flex-grow ">
            <ul class="space-y-4 p-4 mt-10 text-gray-950 dark:text-gray-300 text-lg font-semibold">
                <li class="mt-5">
                    <h5 class="uppercase font-normal text-xs font-manrope text-gray-500 dark:text-gray-500">
                        Menu
                    </h5>
                </li>
                <!-- Dashboard Link -->
                <li class="menu-link rounded-lg">
                    <a href="<?php echo esc_url( site_url( '/' ) ); ?>"
                        class="flex items-center p-2 rounded-lg hover:bg-gray-600 dark:hover:bg-gray-700">
                        <span class="menu-item ml-4"><?php esc_html_e( 'Home', 'wilson-devops' ); ?></span>
                    </a>
                </li>
                <li class="menu-link rounded-lg">
                    <a href="<?php echo esc_url( site_url( '/about-me/' ) ); ?>"
                        class="flex items-center p-2 rounded-lg hover:bg-gray-600 dark:hover:bg-gray-700">
                        <span class="menu-item ml-4"><?php esc_html_e( 'About Me', 'wilson-devops' ); ?></span>
                    </a>
                </li>
                <li class="menu-link rounded-lg">
                    <a href="<?php echo esc_url( site_url( '/services/' ) ); ?>"
                        class="flex items-center p-2 rounded-lg hover:bg-gray-600 dark:hover:bg-gray-500">
                        <span class="menu-item ml-4"><?php esc_html_e( 'Services', 'wilson-devops' ); ?></span>
                    </a>
                </li>
                <li class="menu-link rounded-lg">
                    <a href="<?php echo esc_url( site_url( '/projects/' ) ); ?>"
                        class="flex items-center p-2 rounded-lg hover:bg-gray-600 dark:hover:bg-gray-700">
                        <span class="menu-item ml-4"><?php esc_html_e( 'Projects', 'wilson-devops' ); ?></span>
                    </a>
                </li>
                <li class="menu-link rounded-lg">
                    <a href="#contact"
                        class="flex items-center p-2 rounded-lg hover:bg-gray-600 dark:hover:bg-gray-500">
                        <span class="menu-item ml-4"><?php esc_html_e( 'Contact', 'wilson-devops' ); ?></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>