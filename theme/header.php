<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wilson_Devops
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" type="image/png"
        href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png"
        href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/svg+xml"
        href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.svg" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Wilson Devops" />
    <meta name="application-name" content="Wilson Devops" />
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/site.webmanifest" />
    <meta name="google-site-verification" content="JfBfOEVgeyTxHCjGkZ9DbE0MfmYhGZTCq5TZJ13UeiM" />
    <meta name="description" content="Full Stack WordPress Engineer and AI Specialist. Nairobi, Kenya." />
    <meta name="keywords"
        content="WordPress Developer, Custom Themes, Custom Plugins, Full-Scale Websites, AI, AI Kenya, Web Solutions, Nairobi, Kenya">
    <meta name="author" content="Wilson Devops">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <div id="page">
        <a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'wilson-devops' ); ?></a>

        <!-- ══ AMBIENT BACKDROP ══ -->
        <div aria-hidden="true" class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
            <div
                class="absolute inset-0 bg-grid-dots bg-[size:48px_48px] opacity-0 dark:opacity-[0.28] [mask-image:radial-gradient(ellipse_at_center,black_30%,transparent_75%)]">
            </div>
            <div id="amb-a"
                class="absolute -top-44 left-1/2 h-[640px] w-[1120px] -translate-x-1/2 rounded-full bg-violet/[0.06] dark:bg-violet/[0.28] blur-[150px] will-change-transform">
            </div>
            <div id="amb-b"
                class="absolute top-[36%] -right-44 h-[540px] w-[740px] rounded-full bg-blue/[0.04] dark:bg-blue/[0.20] blur-[150px] will-change-transform">
            </div>
            <div
                class="absolute bottom-0 -left-44 h-[500px] w-[700px] rounded-full bg-lilac/[0.04] dark:bg-lilac/[0.16] blur-[150px]">
            </div>
            <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.04]" style="
          background-image: url(&quot;data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22200%22 height=%22200%22><filter id=%22n%22><feTurbulence type=%22fractalNoise%22 baseFrequency=%22.9%22 numOctaves=%224%22 stitchTiles=%22stitch%22/></filter><rect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23n)%22/></svg>&quot;);
        "></div>
        </div>

        <!-- ══ CURSOR ══ -->
        <div id="cursor"
            class="pointer-events-none fixed left-0 top-0 z-[70] hidden h-8 w-8 -translate-x-1/2 -translate-y-1/2 rounded-full border border-blue/70 transition-[width,height,border-color,opacity] duration-150 md:block">
        </div>
        <div id="cursorDot"
            class="pointer-events-none fixed left-0 top-0 z-[70] hidden h-[7px] w-[7px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-blue md:block">
        </div>

        <?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

        <div id="content">