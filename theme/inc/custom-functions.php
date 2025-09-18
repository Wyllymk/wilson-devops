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
 * Contact Form Handler
 * Add this to your theme's functions.php file
 */

// Enqueue scripts for contact form
function wilson_contact_form_scripts() 
{
    if (is_page_template('contact-page.php') || is_page('contact')) {
        wp_enqueue_script(
            'contact-form-handler',
            get_template_directory_uri() . '/js/contact.min.js',
            array('jquery'),
            '1.0.0',
            true
        );
        
        wp_localize_script('contact-form-handler', 'contact_ajax', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('contact_form_nonce'),
            'messages' => array(
                'sending' => __('Sending message...', 'wilson-devops'),
                'success' => __('Message sent successfully! I\'ll get back to you soon.', 'wilson-devops'),
                'error' => __('Something went wrong. Please try again.', 'wilson-devops'),
                'required_fields' => __('Please fill in all required fields.', 'wilson-devops'),
                'invalid_email' => __('Please enter a valid email address.', 'wilson-devops')
            )
        ));
    }
}
add_action('wp_enqueue_scripts', 'wilson_contact_form_scripts');

// Handle AJAX form submission for logged in and non-logged in users
add_action('wp_ajax_submit_contact_form', 'handle_contact_form_submission');
add_action('wp_ajax_nopriv_submit_contact_form', 'handle_contact_form_submission');

function handle_contact_form_submission() 
{
    // Verify nonce for security
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'contact_form_nonce')) {
        wp_send_json_error(array(
            'message' => __('Security verification failed. Please refresh the page and try again.', 'wilson-devops')
        ));
    }

    // Honeypot spam protection
    if (!empty($_POST['honeypot'])) {
        wp_send_json_error(array(
            'message' => __('Spam detected.', 'wilson-devops')
        ));
    }

    // Sanitize and validate form data
    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validation
    $errors = array();
    
    if (empty($name)) {
        $errors[] = __('Name is required.', 'wilson-devops');
    }
    
    if (empty($email)) {
        $errors[] = __('Email is required.', 'wilson-devops');
    } elseif (!is_email($email)) {
        $errors[] = __('Please enter a valid email address.', 'wilson-devops');
    }
    
    if (empty($message)) {
        $errors[] = __('Message is required.', 'wilson-devops');
    }

    // Rate limiting check
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $rate_limit_key = 'contact_form_' . md5($user_ip);
    $submission_count = get_transient($rate_limit_key);
    
    if ($submission_count && $submission_count >= 3) {
        wp_die(json_encode(array(
            'success' => false,
            'message' => __('Too many submissions. Please wait before sending another message.', 'wilson-devops')
        )));
    }

    if (!empty($errors)) {
        wp_die(json_encode(array(
            'success' => false,
            'message' => implode(' ', $errors)
        )));
    }

    // Prepare email
    $to = get_option('admin_email'); 
    $email_subject = $subject ? '[Contact Form] ' . $subject : '[Contact Form] New Message from ' . $name;

    // Build HTML email body with your theme colors
    $email_body = '
    <html>
    <head>
      <style>
        body {
            font-family: Arial, sans-serif;
            background: var(--color-background, #f5f7fa); /* fallback to cyber-light */
            color: var(--color-text-light, #1a202c);
            padding: 20px;
        }
        .container {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        h2 {
            color: var(--color-cyber-cyan, #00d4ff);
            margin-top: 0;
        }
        .field {
            margin-bottom: 12px;
        }
        .label {
            font-weight: bold;
            color: var(--color-nav-blue, #605c8d);
        }
        .value {
            margin-left: 5px;
            color: var(--color-text-light, #1a202c);
        }
        .message-box {
            padding: 12px;
            background: var(--color-cyber-light, #f5f7fa);
            border-radius: 6px;
            border: 1px solid var(--color-text-light-muted, #718096);
            white-space: pre-line;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: var(--color-text-dark-muted, #a0aec0);
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
        a {
            color: var(--color-cyber-blue, #007bff);
            text-decoration: none;
        }
      </style>
    </head>
    <body>
      <div class="container">
        <h2>📩 New Contact Form Submission</h2>
        <div class="field"><span class="label">Name:</span><span class="value">'.esc_html($name).'</span></div>
        <div class="field"><span class="label">Email:</span><span class="value">'.esc_html($email).'</span></div>
        <div class="field"><span class="label">Subject:</span><span class="value">'.esc_html($subject).'</span></div>
        <div class="field"><span class="label">Message:</span>
          <div class="message-box">'.nl2br(esc_html($message)).'</div>
        </div>
        <div class="footer">
          Sent from <a href="'.home_url().'" target="_blank">'.get_bloginfo('name').'</a><br>
          IP Address: '.$user_ip.'<br>
          Date: '.current_time('mysql').'
        </div>
      </div>
    </body>
    </html>';

    // Email headers
    $headers = array();
    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = 'From: '.get_bloginfo('name').' <'.get_option('admin_email').'>';
    $headers[] = 'Reply-To: '.$name.' <'.$email.'>';

    // Send email
    $mail_sent = wp_mail($to, $email_subject, $email_body, $headers);

    if ($mail_sent) {
        $new_count = $submission_count ? $submission_count + 1 : 1;
        set_transient($rate_limit_key, $new_count, 3600); // 1 hour

        error_log("Contact form submission from {$name} ({$email}) - Subject: {$subject}");

        wp_die(json_encode(array(
            'success' => true,
            'message' => __('Thank you for your message! I\'ll get back to you within 24 hours.', 'wilson-devops')
        )));
    } else {
        error_log("Failed to send contact form email from {$name} ({$email})");
        
        wp_send_json_error(array(
            'message' => __('Failed to send message. Please try again or contact me directly via social media.', 'wilson-devops')
        ));

    }
}

// Optional: Add contact form settings to WordPress admin
function wilson_contact_form_admin_menu() 
{
    add_options_page(
        'Contact Form Settings',
        'Contact Form',
        'manage_options',
        'contact-form-settings',
        'wilson_contact_form_admin_page'
    );
}
add_action('admin_menu', 'wilson_contact_form_admin_menu');

function wilson_contact_form_admin_page() 
{
    if (isset($_POST['save_settings'])) {
        update_option('wilson_contact_email', sanitize_email($_POST['contact_email']));
        update_option('wilson_contact_subject_prefix', sanitize_text_field($_POST['subject_prefix']));
        echo '<div class="notice notice-success"><p>Settings saved!</p></div>';
    }
    
    $contact_email = get_option('wilson_contact_email', get_option('admin_email'));
    $subject_prefix = get_option('wilson_contact_subject_prefix', '[Wilson Devops]');
    ?>
<div class="wrap">
    <h1>Contact Form Settings</h1>
    <form method="post" action="">
        <table class="form-table">
            <tr>
                <th scope="row">Contact Email</th>
                <td>
                    <input type="email" name="contact_email" value="<?php echo esc_attr($contact_email); ?>"
                        class="regular-text" />
                    <p class="description">Where contact form submissions will be sent.</p>
                </td>
            </tr>
            <tr>
                <th scope="row">Subject Prefix</th>
                <td>
                    <input type="text" name="subject_prefix" value="<?php echo esc_attr($subject_prefix); ?>"
                        class="regular-text" />
                    <p class="description">Prefix added to email subjects.</p>
                </td>
            </tr>
        </table>
        <?php submit_button('Save Settings', 'primary', 'save_settings'); ?>
    </form>

    <h2>Recent Submissions</h2>
    <p>Check your server error logs for submission records.</p>
</div>
<?php
}

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

/**
 * Create essential pages upon theme activation.
 *
 * This function creates several essential pages (such as Coming Soon, etc.)
 * for the theme. The function checks if each page already exists based on the slug and
 * if it does not, the page is created and associated with the appropriate template.
 */
function wilson_devops_create_pages() 
{
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
			'title'    => 'VMS',
			'slug'     => 'vms',
			'template' => 'page-templates/page-vms.php',
		),
		array(
			'title'    => 'Nyeri Club',
			'slug'     => 'nyeri-club',
			'template' => 'page-templates/page-nyeri-club.php',
		),		
		array(
			'title'    => 'The Funded Way',
			'slug'     => 'funded-way',
			'template' => 'page-templates/page-funded-way.php',
		),
		array(
			'title'    => 'Torus',
			'slug'     => 'torus',
			'template' => 'page-templates/page-torus.php',
		),
		array(
			'title'    => 'Institutional Funding',
			'slug'     => 'institutional-funding',
			'template' => 'page-templates/page-institutional-funding.php',
		),		
		array(
			'title'    => 'Backed Sports',
			'slug'     => 'backed-sports',
			'template' => 'page-templates/page-backed-sports.php',
		)
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