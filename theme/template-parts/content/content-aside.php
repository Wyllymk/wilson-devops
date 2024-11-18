<?php
/**
 * Template part for displaying header for mobile screens
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wilson_devops
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>
<!-- Sidebar - occupies 1/5 of the width on large screens -->

<aside class="w-full relative flex-shrink-0">
	<div class="flex flex-col h-full">
		<!-- Sidebar Navigation -->
		<nav id="sidebar" class="flex-grow ">
			<ul class="space-y-4 p-4 mt-10 text-gray-900 dark:text-gray-300 text-lg font-semibold">
				<li>
					<h5 class="uppercase font-normal text-xs font-manrope text-gray-500 dark:text-gray-500">
						Menu
					</h5>
				</li>
				<!-- Dashboard Link -->
				<li class="menu-link rounded-lg">
					<a href="#" class="flex items-center p-2 rounded-lg hover:bg-gray-600 dark:hover:bg-gray-700">
						<span class="menu-item ml-4"><?php esc_html_e( 'Home', 'wilson-devops' ); ?></span>
					</a>
				</li>
				<li class="menu-link rounded-lg">
					<a href="#about" class="flex items-center p-2 rounded-lg hover:bg-gray-600 dark:hover:bg-gray-700">
						<span class="menu-item ml-4"><?php esc_html_e( 'About', 'wilson-devops' ); ?></span>
					</a>
				</li>
				<li class="menu-link rounded-lg">
					<a href="#services"
						class="flex items-center p-2 rounded-lg hover:bg-gray-600 dark:hover:bg-gray-500">
						<span class="menu-item ml-4"><?php esc_html_e( 'Services', 'wilson-devops' ); ?></span>
					</a>
				</li>
				<li class="menu-link rounded-lg">
					<a href="#projects"
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
