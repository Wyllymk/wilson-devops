<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package wilson_devops
 */

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
    if ( is_front_page() && $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['submit_form'] ) && wp_verify_nonce( $_POST['_wpnonce_send_form_data'], 'send_form_data' ) ) {

        // Check for honeypot to avoid spam submissions
        if (!empty($_POST['honeypot'])) {
            return; // Exit if honeypot field is filled (indicating a bot submission)
        }

        // Sanitize and get form data
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);

        // Get the user data for the user with ID 1
        $user = get_userdata(1);

        // Check if the user exists and retrieve their email
        if ($user) {
            $to = $user->user_email; // Use the email of the user with ID 1
        } else {
            // Fallback email in case the user with ID 1 doesn't exist
            $to = 'wilsonkabatha@gmail.com'; // Set your fallback email address here
        }

        // Prepare email details
        $subject = 'New Message from ' . $name;
        $body = "Name: $name\nPhone: $phone\nEmail: $email\n\nMessage:\n$message";
        $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: ' . $email);

        // Send the email
        $sent = wp_mail($to, $subject, $body, $headers);

        // Optionally, check if the email was sent successfully
        if ($sent) {
            $forms_success[] = "Thank you for your message! We'll get back to you soon.";
        } else {
            $forms_error[] = "Sorry, there was an error sending your message. Please try again later.";
        }

        // Store messages in the session
        $_SESSION['forms_error'] = $forms_error;
        $_SESSION['forms_success'] = $forms_success;

        // Redirect to avoid form resubmission (Page refresh prevention)
        wp_redirect(site_url('/'));
        exit;
    }
}
add_action('template_redirect', 'wilson_devops_handle_form_submission');

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
function wilson_devops_create_pages() {
    // Check if the "Home" page exists
    $home_page = get_page_by_title('Home');

    // Ensure the Home page exists with the slug 'home'
    if ($home_page) {
        // If the slug is different, update it to 'home'
        if ($home_page->post_name !== 'home') {
            wp_update_post(array(
                'ID'         => $home_page->ID,
                'post_name'  => 'home',
            ));
        }
    } else {
        // Create the Home page if it doesn't exist
        $home_page = wp_insert_post(array(
            'post_title'   => 'Home',
            'post_content' => '', // Empty content, it will pull from front-page.php
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_name'    => 'home', // Ensure the slug is 'home'
        ));

        // Check if the page was created successfully
        if (!is_wp_error($home_page)) {
            // Set this page as the front page
            update_option('page_on_front', $home_page);
            update_option('show_on_front', 'page');
        }
    }

    // Check if the "Coming Soon" page exists
    $coming_soon_page = get_page_by_title('Coming Soon');

    // Ensure the Coming Soon page exists with the slug 'coming-soon'
    if ($coming_soon_page) {
        // If the slug is different, update it to 'coming-soon'
        if ($coming_soon_page->post_name !== 'coming-soon') {
            wp_update_post(array(
                'ID'         => $coming_soon_page->ID,
                'post_name'  => 'coming-soon',
            ));
        }
    } else {
        // Create the Coming Soon page if it doesn't exist
        $coming_soon_page = wp_insert_post(array(
            'post_title'   => 'Coming Soon',
            'post_content' => '', // Empty content, it will pull from page-coming-soon.php
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_name'    => 'coming-soon', // Ensure the slug is 'coming-soon'
            'page_template' => 'page-templates/page-coming-soon.php', // Set custom template
        ));
    }
}

// Hook the function to run when WordPress initializes (after theme is activated)
add_action('after_switch_theme', 'wilson_devops_create_pages');