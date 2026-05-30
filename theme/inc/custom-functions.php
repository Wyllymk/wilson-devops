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

// Disable XML-RPC
add_filter( 'xmlrpc_enabled', '__return_false' );

// Disable REST API user enumeration
add_filter( 'rest_endpoints', function ( $endpoints ) {
    if ( isset( $endpoints['/wp/v2/users'] ) )        unset( $endpoints['/wp/v2/users'] );
    if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
    return $endpoints;
} );

// Remove query strings from static resources
add_filter( 'script_loader_src', 'wd_remove_query_strings', 15 );
add_filter( 'style_loader_src',  'wd_remove_query_strings', 15 );
function wd_remove_query_strings( $src ) {
    if ( strpos( $src, '?ver=' ) ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}

// Disable block editor CSS on front-end
add_action( 'wp_enqueue_scripts', function () {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' );
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'classic-theme-styles' );
}, 100 );

function wd_is_bot(): bool {
    $ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
    return (bool) preg_match( '/bot|crawl|spider|slurp|mediapartners/i', $ua );
}

/* ──────────────────────────────────────────────
   4. SCHEMA.ORG — PERSON + WEBSITE JSON-LD
   (AI SEO: helps LLMs, SGE, Perplexity understand
    Wilson's identity, skills, and authority)
────────────────────────────────────────────── */
add_action( 'wp_head', 'wd_output_schema_jsonld', 1 );
function wd_output_schema_jsonld() {
    $schema = [
        '@context' => 'https://schema.org',
        '@graph'   => [
            [
                '@type'       => 'Person',
                '@id'         => home_url( '/#person' ),
                'name'        => 'Wilson Mbuthia',
                'alternateName' => 'Wilson DevOps',
                'url'         => home_url( '/' ),
                'jobTitle'    => [
                    'WordPress Architect',
                    'Full Stack Engineer',
                    'AI Integration Specialist',
                ],
                'description' => 'Full Stack WordPress Engineer and AI Specialist based in Nairobi, Kenya. Expert in custom WordPress themes, WooCommerce revenue systems, AI-powered web applications, and performance engineering.',
                'image'       => [
                    '@type' => 'ImageObject',
                    'url'   => WD_URI . '/assets/images/logo.avif',
                ],
                'address' => [
                    '@type'            => 'PostalAddress',
                    'addressLocality'  => 'Nairobi',
                    'addressCountry'   => 'KE',
                ],
                'email'         => 'info@wilsondevops.com',
                'telephone'     => '+254703639230',
                'sameAs'        => [
                    'https://github.com/Wyllymk',
                    'https://www.linkedin.com/in/wilson-mbuthia-k/',
                    'https://twitter.com/WilsonMbuthiaK',
                ],
                'knowsAbout' => [
                    'WordPress Development',
                    'WooCommerce Engineering',
                    'AI Integration',
                    'React',
                    'TypeScript',
                    'Node.js',
                    'PHP',
                    'DevOps',
                    'Core Web Vitals Optimization',
                    'SEO Engineering',
                ],
                'offers' => [
                    '@type'       => 'Offer',
                    'name'        => 'Custom WordPress & AI Engineering Services',
                    'areaServed'  => [ 'KE', 'ZA', 'NG', 'GB', 'US', 'Worldwide' ],
                    'description' => 'Custom WordPress themes, WooCommerce systems, AI chatbots & automation, full stack web applications, performance audits.',
                ],
            ],
            [
                '@type'           => 'WebSite',
                '@id'             => home_url( '/#website' ),
                'url'             => home_url( '/' ),
                'name'            => 'Wilson DevOps',
                'description'     => 'Digital Engineer & AI Specialist — Nairobi, Kenya',
                'publisher'       => [ '@id' => home_url( '/#person' ) ],
                'inLanguage'      => 'en-US',
                'potentialAction' => [
                    '@type'       => 'SearchAction',
                    'target'      => home_url( '/?s={search_term_string}' ),
                    'query-input' => 'required name=search_term_string',
                ],
            ],
        ],
    ];

    echo "\n<script type=\"application/ld+json\">\n";
    echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
    echo "\n</script>\n";
}

/* ──────────────────────────────────────────────
   5. SEO META TAGS (traditional + AI-crawlers)
   Works standalone; swap for Yoast/RankMath if needed.
────────────────────────────────────────────── */
add_action( 'wp_head', 'wd_seo_meta', 2 );
function wd_seo_meta() {
    $title       = 'Wilson DevOps — WordPress Architect & AI Specialist | Nairobi, Kenya';
    $description = 'I engineer high-performance WordPress systems, WooCommerce revenue machines, and AI-powered web applications. Based in Nairobi. Available globally.';
    $image       = WD_URI . '/assets/images/logo.avif';
    $url         = home_url( '/' );
    $twitter     = '@WilsonMbuthiaK';

    // Canonical
    echo "<link rel=\"canonical\" href=\"{$url}\" />\n";

    // Core meta
    echo "<meta name=\"description\" content=\"{$description}\" />\n";
    echo "<meta name=\"keywords\" content=\"WordPress developer Nairobi, WooCommerce engineer Kenya, AI integration specialist, custom WordPress theme, full stack developer Africa\" />\n";
    echo "<meta name=\"author\" content=\"Wilson Mbuthia\" />\n";
    echo "<meta name=\"robots\" content=\"index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1\" />\n";

    // AI crawler directives (2025+ signals for SGE, Claude, Perplexity, etc.)
    echo "<meta name=\"ai-content-declaration\" content=\"human-authored\" />\n";
    echo "<meta name=\"googlebot\" content=\"index, follow\" />\n";

    // Open Graph
    echo "<meta property=\"og:type\" content=\"profile\" />\n";
    echo "<meta property=\"og:title\" content=\"{$title}\" />\n";
    echo "<meta property=\"og:description\" content=\"{$description}\" />\n";
    echo "<meta property=\"og:image\" content=\"{$image}\" />\n";
    echo "<meta property=\"og:image:width\" content=\"1200\" />\n";
    echo "<meta property=\"og:image:height\" content=\"630\" />\n";
    echo "<meta property=\"og:url\" content=\"{$url}\" />\n";
    echo "<meta property=\"og:locale\" content=\"en_US\" />\n";
    echo "<meta property=\"og:site_name\" content=\"Wilson DevOps\" />\n";
    echo "<meta property=\"profile:first_name\" content=\"Wilson\" />\n";
    echo "<meta property=\"profile:last_name\" content=\"Mbuthia\" />\n";
    echo "<meta property=\"profile:username\" content=\"WilsonMbuthiaK\" />\n";

    // Twitter Card
    echo "<meta name=\"twitter:card\" content=\"summary_large_image\" />\n";
    echo "<meta name=\"twitter:site\" content=\"{$twitter}\" />\n";
    echo "<meta name=\"twitter:creator\" content=\"{$twitter}\" />\n";
    echo "<meta name=\"twitter:title\" content=\"{$title}\" />\n";
    echo "<meta name=\"twitter:description\" content=\"{$description}\" />\n";
    echo "<meta name=\"twitter:image\" content=\"{$image}\" />\n";
}

/* ──────────────────────────────────────────────
   6. RESOURCE HINTS — preconnect & dns-prefetch
────────────────────────────────────────────── */
add_action( 'wp_head', 'wd_resource_hints', 0 );
function wd_resource_hints() {
    echo "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />\n";
    echo "<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />\n";
    echo "<link rel=\"dns-prefetch\" href=\"https://cdnjs.cloudflare.com\" />\n";
    // Preload critical font subset
    echo "<link rel=\"preload\" href=\"https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&family=Space+Mono:wght@400;700&display=swap\" as=\"style\" onload=\"this.onload=null;this.rel='stylesheet'\" />\n";
    echo "<noscript><link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&family=Space+Mono:wght@400;700&display=swap\" /></noscript>\n";
}

/* ──────────────────────────────────────────────
   7. SECURITY HEADERS via wp_headers filter
────────────────────────────────────────────── */
add_filter( 'wp_headers', function ( $headers ) {
    $headers['X-Content-Type-Options']  = 'nosniff';
    $headers['X-Frame-Options']         = 'SAMEORIGIN';
    $headers['Referrer-Policy']         = 'strict-origin-when-cross-origin';
    $headers['Permissions-Policy']      = 'camera=(), microphone=(), geolocation=()';
    return $headers;
} );

/* ──────────────────────────────────────────────
   8. CUSTOM IMAGE SIZES
────────────────────────────────────────────── */
add_action( 'after_setup_theme', function () {
    add_image_size( 'wd-og',      1200, 630,  true );
    add_image_size( 'wd-thumb',   800,  500,  true );
    add_image_size( 'wd-thumb-sm', 400, 250,  true );
} );

/* ──────────────────────────────────────────────
   9. DISABLE HEARTBEAT on front-end (CPU/battery)
────────────────────────────────────────────── */
add_action( 'init', function () {
    if ( ! is_admin() ) {
        wp_deregister_script( 'heartbeat' );
    }
} );

/* ──────────────────────────────────────────────
   10. LOAD MODULAR INCLUDES
────────────────────────────────────────────── */
require_once WD_DIR . '/inc/class-wd-walker-nav.php';

/* ──────────────────────────────────────────────
   11. FAVICON / SITE ICON FALLBACK
────────────────────────────────────────────── */
add_action( 'wp_head', function () {
    if ( ! has_site_icon() ) {
        echo '<link rel="icon" href="' . WD_URI . '/assets/favicon/favicon.svg" type="image/svg+xml" />' . "\n";
        echo '<link rel="apple-touch-icon" href="' . WD_URI . '/assets/favicon/apple-touch-icon.png" />' . "\n";
    }
}, 99 );