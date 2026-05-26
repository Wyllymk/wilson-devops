<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Wilson_Devops
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/* ============================================================
   ANTI-FLASH DARK MODE SCRIPT
   Runs before any CSS/HTML renders to prevent white flash.
============================================================ */
function wilson_devops_antiflash_script() {
	echo '<script id="nm-antiflash">(function(){';
	echo 'var p=localStorage.getItem("wm-t")||"system";';
	echo 'var d=window.matchMedia("(prefers-color-scheme:dark)").matches;';
	echo 'if(p==="dark"||(p==="system"&&d))document.documentElement.classList.add("dark");';
	echo 'document.documentElement.setAttribute("data-p",p);';
	echo '})();</script>' . "\n";
}
add_action( 'wp_head', 'wilson_devops_antiflash_script', 1 );


/**
 * Creates the "Home" page if it doesn't exist.
 *
 * This function checks if the "Home" page already exists.
 * If it does exist but has a different slug, it updates it to the correct
 * slug ('home' for the Home page).
 * If the page do not exist, it creates it with the specified slug and
 * assigns appropriate templates, and sets the "Home" page as the front page.
 *
 * @return void
 */
function wilson_devops_create_home_page() 
{
	// Check if the "Home" page exists using WP_Query
	$home_page_query = new WP_Query(
		array(
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'title'          => 'Home',
			'posts_per_page' => 1,
		)
	);

	// Ensure the Home page exists with the slug 'home'
	if ( $home_page_query->have_posts() ) {
		// If the slug is different, update it to 'home'
		$home_page = $home_page_query->posts[0];
		if ( $home_page->post_name !== 'home' ) {
			wp_update_post(
				array(
					'ID'        => $home_page->ID,
					'post_name' => 'home',
				)
			);
		}
	} else {
		// Create the Home page if it doesn't exist
		$home_page = wp_insert_post(
			array(
				'post_title'   => 'Home',
				'post_content' => '', // Empty content, it will pull from front-page.php
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_name'    => 'home', // Ensure the slug is 'home'
			)
		);

		// Check if the page was created successfully
		if ( ! is_wp_error( $home_page ) ) {
			// Set this page as the front page
			update_option( 'page_on_front', $home_page );
			update_option( 'show_on_front', 'page' );
		}
	}
}

// Hook the function to run when WordPress initializes (after theme is activated)
add_action( 'after_switch_theme', 'wilson_devops_create_home_page' );

// Automatically set permalinks to 'postname' and timezone to +0300 on theme activation.
function wilson_devops_setup_settings() 
{
    // Set permalinks to 'postname'
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');
    $wp_rewrite->flush_rules(); // Flush the rewrite rules to apply changes

    // Set the timezone to UTC+3
	update_option('timezone_string', ''); // Clear named timezone
	update_option('gmt_offset', 3); // Set numeric offset to +3
}
add_action('after_switch_theme', 'wilson_devops_setup_settings');