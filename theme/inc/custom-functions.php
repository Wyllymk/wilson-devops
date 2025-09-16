<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Wilson_Devops
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

// Start the session if not already started
function start_session() {
	if ( ! session_id() ) {
		session_start();
	}
}
add_action( 'wp', 'start_session', 1 );

/**
 * Handles form submission for a contact form on the front page.
 *
 * This function processes the form submission when the user submits the form
 * on the front page. It performs security checks with nonce verification and
 * ensures that the form is not submitted by a bot via the honeypot method.
 * The form data is sanitized before it is used, and the message is sent via
 * email to the user with ID 1. The success or error message is stored in the
 * session to be displayed to the user after redirection.
 *
 * @return void
 */
function wilson_devops_handle_form_submission() {
	global $forms_error, $forms_success;

	// Check if it's the front page and a POST request is made with a valid nonce
	if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['submit_mail'] ) && wp_verify_nonce( $_POST['_wpnonce_send_form_data'], 'send_form_data' ) ) {

		// Check for honeypot to avoid spam submissions
		if ( ! empty( $_POST['honeypot'] ) ) {
			return; // Exit if honeypot field is filled (indicating a bot submission)
		}

		// Sanitize and get form data
		$name    = sanitize_text_field( $_POST['name'] );
		$email   = sanitize_email( $_POST['email'] );
		$subject = sanitize_text_field( $_POST['subject'] );
		$message = sanitize_textarea_field( $_POST['message'] );

		// Get the user data for the user with ID 1
		$user = get_userdata( 1 );

		// Check if the user exists and retrieve their email
		if ( $user ) {
			$to = $user->user_email; // Use the email of the user with ID 1
		} else {
			// Fallback email in case the user with ID 1 doesn't exist
			$to = 'wilsonkabatha@gmail.com'; // Set your fallback email address here
		}

		// Prepare email details
		$subject = 'Wilson Devops Form Submission';
		$body    = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";
		$headers = array( 'Content-Type: text/plain; charset=UTF-8', 'From: ' . $email );

		// Send the email
		$sent = wp_mail( $to, $subject, $body, $headers );

		// Optionally, check if the email was sent successfully
		if ( $sent ) {
			$forms_success[] = "Thank you for your message! We'll get back to you soon.";
		} else {
			$forms_error[] = 'Sorry, there was an error sending your message. Please try again later.';
		}

		// Store messages in the session
		$_SESSION['forms_error']   = $forms_error;
		$_SESSION['forms_success'] = $forms_success;

		// Redirect to avoid form resubmission (Page refresh prevention)
		wp_redirect( home_url() );
		exit;
	}
}
add_action( 'template_redirect', 'wilson_devops_handle_form_submission' );

/**
 * Creates the "Home" and "Coming Soon" pages if they don't exist.
 *
 * This function checks if the "Home" and "Coming Soon" pages already exist.
 * If they do exist but have a different slug, it updates them to the correct
 * slug ('home' for the Home page, 'coming-soon' for the Coming Soon page).
 * If the pages do not exist, it creates them with the specified slugs and
 * assigns appropriate templates, and sets the "Home" page as the front page.
 *
 * @return void
 */
function wilson_devops_create_home_page() {
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

/**
 * Create essential pages upon theme activation.
 *
 * This function creates several essential pages (such as Coming Soon, etc.)
 * for the theme. The function checks if each page already exists based on the slug and
 * if it does not, the page is created and associated with the appropriate template.
 */
function wilson_devops_create_pages() {
	// Pages to create
	$pages = array(
		array(
			'title'    => 'Coming Soon',
			'slug'     => 'coming-soon',
			'template' => 'page-templates/page-coming-soon.php',
		),
		array(
			'title'    => 'Contact',
			'slug'     => 'contact',
			'template' => 'page-templates/page-contact.php',
		),
		array(
			'title'    => 'About Me',
			'slug'     => 'about-me',
			'template' => 'page-templates/page-about-me.php',
		),
		array(
			'title'    => 'Services',
			'slug'     => 'services',
			'template' => 'page-templates/page-services.php',
		),
		array(
			'title'    => 'Projects',
			'slug'     => 'projects',
			'template' => 'page-templates/page-projects.php',
		),
		array(
			'title'    => 'Nyeri Club',
			'slug'     => 'nyeri-club',
			'template' => 'page-templates/page-nyeri-club.php',
		),
		array(
			'title'    => 'VMS',
			'slug'     => 'vms',
			'template' => 'page-templates/page-vms.php',
		),
		array(
			'title'    => 'Dejavu Technologies',
			'slug'     => 'dejavu-technologies',
			'template' => 'page-templates/page-dejavu-technologies.php',
		),
		array(
			'title'    => 'FaceShop 254',
			'slug'     => 'faceshop-254',
			'template' => 'page-templates/page-faceshop-254.php',
		),
		array(
			'title'    => 'Gathathi-ini Boys',
			'slug'     => 'gathathiini-boys',
			'template' => 'page-templates/page-gathathiini-boys.php',
		),
		array(
			'title'    => 'Aegeus Inspection',
			'slug'     => 'aegeus-inspection',
			'template' => 'page-templates/page-aegeus-inspection.php',
		),
		array(
			'title'    => 'Aegeus Group',
			'slug'     => 'aegeus-group',
			'template' => 'page-templates/page-aegeus-group.php',
		),
		array(
			'title'    => 'Bet Vault',
			'slug'     => 'bet-vault',
			'template' => 'page-templates/page-bet-vault.php',
		),
		array(
			'title'    => 'Match Funded',
			'slug'     => 'match-funded',
			'template' => 'page-templates/page-match-funded.php',
		),
		array(
			'title'    => 'My Sport Funded',
			'slug'     => 'my-sport-funded',
			'template' => 'page-templates/page-my-sport-funded.php',
		),
		array(
			'title'    => 'My Sport Funded',
			'slug'     => 'my-sport-funded',
			'template' => 'page-templates/page-my-sport-funded.php',
		),
		array(
			'title'    => 'MOFX',
			'slug'     => 'mofx',
			'template' => 'page-templates/page-mofx.php',
		),
		array(
			'title'    => 'Funding Pips',
			'slug'     => 'funding-pips',
			'template' => 'page-templates/page-funding-pips.php',
		),
		array(
			'title'    => 'Pemu Health Supplements',
			'slug'     => 'pemu-health-supplements',
			'template' => 'page-templates/page-pemu-health.php',
		),

	);

	// Loop through each page and create if it doesn't exist
	foreach ( $pages as $page ) {
		$page_exists = get_page_by_path( $page['slug'] );

		if ( ! $page_exists ) {
			$new_page = array(
				'post_title'   => $page['title'],
				'post_content' => '',
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_name'    => $page['slug'],
			);

			$page_id = wp_insert_post( $new_page );

			if ( $page_id && ! is_wp_error( $page_id ) ) {
				update_post_meta( $page_id, '_wp_page_template', $page['template'] );
			}
		}
	}
}

add_action( 'after_switch_theme', 'wilson_devops_create_pages' );


// Automatically set permalinks to 'postname' and timezone to +0300 on theme activation.
function wilson_devops_setup_settings() {
    // Set permalinks to 'postname'
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');
    $wp_rewrite->flush_rules(); // Flush the rewrite rules to apply changes

    // Set the timezone to UTC+3
	update_option('timezone_string', ''); // Clear named timezone
	update_option('gmt_offset', 3); // Set numeric offset to +3
}
add_action('after_switch_theme', 'wilson_devops_setup_settings');