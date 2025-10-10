<?php
/**
 * The template for displaying the WooCommerce project page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wilson_Devops
 */
defined('ABSPATH') || exit;

get_header();
?>

<main
    class="min-h-screen bg-cyber-light dark:bg-cyber-dark text-gray-900 dark:text-white transition-colors duration-400 ease-in-out">

    <!-- Sidebar Navigation (Mobile) -->
    <div id="navMenu" class="transform translate-x-full opacity-0 w-64 py-4 px-4 z-40 fixed md:hidden top-0 h-full 
        bg-cyber-light/90 dark:bg-cyber-dark/90 backdrop-blur-md drop-shadow-cyber-cyan 
        transition-all duration-400 ease-in-out">
        <?php get_template_part('template-parts/content/content', 'aside'); ?>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 top-0 h-screen z-30 bg-black/70 hidden"></div>

    <!-- Hero Section -->
    <section
        class="hero-section pb-24 pt-34 relative overflow-hidden bg-gradient-to-br from-cyber-dark/20 via-purple-500/10 to-pink-500/10 dark:from-cyber-light/10 dark:via-purple-600/10 dark:to-pink-600/10">
        <div class="container mx-auto px-4">
            <div class="relative z-10">
                <h1 class="font-nico text-5xl md:text-7xl uppercase tracking-wide text-center 
                    text-purple-600 dark:text-purple-400 mb-6 animate-pulse">
                    Prop Funded
                </h1>
                <p
                    class="font-manrope text-xl text-center text-text-light-muted dark:text-text-dark-muted max-w-3xl mx-auto mb-8">
                    Custom WooCommerce theme built from Figma designs. Performance-optimized checkout, custom coupon
                    system, and mobile-first responsive design. Green scores across all PageSpeed metrics.
                </p>

                <!-- Tech Stack Pills -->
                <div class="flex flex-wrap justify-center gap-3 mb-8">
                    <span
                        class="px-4 py-2 rounded-full bg-purple-500/20 text-purple-600 dark:text-purple-400 font-manrope text-sm border border-purple-500/30">
                        WordPress
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-pink-500/20 text-pink-600 dark:text-pink-400 font-manrope text-sm border border-pink-500/30">
                        WooCommerce
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-blue-500/20 text-blue-600 dark:text-blue-400 font-manrope text-sm border border-blue-500/30">
                        Figma
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-green-500/20 text-green-600 dark:text-green-400 font-manrope text-sm border border-green-500/30">
                        GitHub
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-orange-500/20 text-orange-600 dark:text-orange-400 font-manrope text-sm border border-orange-500/30">
                        SEO Optimized
                    </span>
                </div>

                <div class="flex justify-center gap-4 z-10 relative flex-wrap">
                    <button x-on:click="window.open('https://darkorchid-zebra-985147.hostingersite.com/', '_blank')"
                        class="px-8 py-3 rounded-full bg-gradient-to-r from-purple-600 to-pink-600 dark:from-purple-500 dark:to-pink-500 text-white font-manrope text-lg hover:scale-105 transform transition-all duration-300 drop-shadow-2xl cursor-pointer">
                        Live Store
                    </button>

                    <button x-on:click="window.open('https://github.com/wyllymk/prop-funded', '_blank')"
                        class="px-8 py-3 rounded-full border-2 border-purple-500 text-purple-600 dark:text-purple-400 hover:bg-purple-500/20 relative overflow-hidden transition-all duration-300 hover:-translate-y-0.5 hover:shadow-xl font-manrope text-lg cursor-pointer">
                        View Code
                    </button>

                    <button x-on:click="window.location.href='<?php echo esc_url( home_url( '/contact' ) ); ?>'"
                        class="px-8 py-3 rounded-full border-2 border-pink-500 text-pink-600 dark:text-pink-400 hover:bg-pink-500/20 relative overflow-hidden transition-all duration-300 hover:-translate-y-0.5 hover:shadow-xl font-manrope text-lg cursor-pointer">
                        Hire Me
                    </button>
                </div>
            </div>

            <!-- Animated Background Elements -->
            <div class="absolute inset-0 z-0">
                <div class="absolute top-20 left-10 w-32 h-32 bg-purple-500/10 rounded-full animate-bounce"
                    style="animation-delay: 0s;"></div>
                <div class="absolute top-40 right-20 w-24 h-24 bg-pink-500/10 rounded-full animate-bounce"
                    style="animation-delay: 1s;"></div>
                <div class="absolute bottom-20 left-1/4 w-20 h-20 bg-blue-500/10 rounded-full animate-bounce"
                    style="animation-delay: 2s;"></div>
            </div>
        </div>
    </section>

    <!-- Key Metrics Section -->
    <section class="py-20 bg-cyber-dark/5 dark:bg-cyber-light/5">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-green-500/10 to-teal-500/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-green-600 dark:text-green-400 mb-2 counter" data-target="95">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Desktop Speed</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-green-500/10 to-teal-500/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-green-600 dark:text-green-400 mb-2 counter" data-target="92">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Mobile Speed</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-purple-500/10 to-pink-500/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-purple-600 dark:text-purple-400 mb-2 counter" data-target="100">
                        0</div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">SEO Score</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-blue-500/10 to-indigo-500/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-blue-600 dark:text-blue-400 mb-2 counter" data-target="100">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Accessibility</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="overview-section py-20">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-5 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Project Overview', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-purple-400/50 dark:bg-purple-600/50"></span>
            </h2>

            <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                <div class="space-y-6">
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted text-lg">
                        Full-stack WooCommerce store built from pixel-perfect Figma designs. Custom theme development
                        with performance optimization, custom checkout flow, and advanced coupon system.
                    </p>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        Achieved green scores (90%+) on all PageSpeed Insights metrics for both mobile and desktop.
                        SEO-optimized architecture with structured data and semantic HTML.
                    </p>

                    <!-- Core Features List -->
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Custom WooCommerce theme from Figma
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Performance-optimized checkout
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Custom coupon validation system
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Mobile-first responsive design
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Store Preview -->
                <div class="relative">
                    <div class="bg-gray-900 rounded-xl p-4 transform hover:scale-105 transition-all duration-300">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            <div class="ml-4 text-gray-400 text-sm font-mono">
                                https://darkorchid-zebra-985147.hostingersite.com/</div>
                        </div>

                        <!-- Mock Store Interface -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 space-y-4">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-gray-900 dark:text-white">Store Metrics</h3>
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm flex items-center gap-2">
                                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                    Live
                                </span>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-purple-500/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-purple-600">1.2s</div>
                                    <div class="text-xs text-gray-600">Load Time</div>
                                </div>
                                <div class="bg-green-500/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-green-600">95+</div>
                                    <div class="text-xs text-gray-600">Speed Score</div>
                                </div>
                            </div>

                            <!-- Mock Performance Indicators -->
                            <div class="space-y-2">
                                <div
                                    class="flex items-center gap-3 p-2 bg-green-50 dark:bg-green-900/20 rounded border border-green-200 dark:border-green-800">
                                    <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium">Mobile Performance</div>
                                        <div class="text-xs text-gray-500">Optimized for all devices</div>
                                    </div>
                                    <div class="text-xs text-green-600 font-bold">92%</div>
                                </div>
                                <div
                                    class="flex items-center gap-3 p-2 bg-green-50 dark:bg-green-900/20 rounded border border-green-200 dark:border-green-800">
                                    <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium">SEO Rating</div>
                                        <div class="text-xs text-gray-500">Perfect score achieved</div>
                                    </div>
                                    <div class="text-xs text-green-600 font-bold">100%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating indicators -->
                    <div class="absolute -top-4 right-0 md:-right-4 w-8 h-8 bg-green-500 rounded-full animate-ping">
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-purple-500 rounded-full animate-pulse"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Process Section -->
    <section class="py-20 bg-cyber-dark/10 dark:bg-cyber-light/10">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Design to Development', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-purple-400/50 dark:bg-purple-600/50"></span>
            </h2>

            <!-- Process Timeline -->
            <div class="max-w-4xl mx-auto">
                <div class="space-y-8">
                    <!-- Step 1 -->
                    <div class="flex gap-6">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold">
                            1
                        </div>
                        <div class="flex-1">
                            <h3 class="font-oswald text-xl text-purple-600 dark:text-purple-400 mb-2">Figma Analysis
                            </h3>
                            <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Analyzed design files, extracted assets, documented spacing and typography systems.
                                Created component breakdown for efficient development workflow.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex gap-6">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-full flex items-center justify-center text-white font-bold">
                            2
                        </div>
                        <div class="flex-1">
                            <h3 class="font-oswald text-xl text-pink-600 dark:text-pink-400 mb-2">Custom Theme
                                Development</h3>
                            <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Built WordPress theme from scratch. Pixel-perfect implementation of Figma designs with
                                semantic HTML5 and modern CSS architecture.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex gap-6">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center text-white font-bold">
                            3
                        </div>
                        <div class="flex-1">
                            <h3 class="font-oswald text-xl text-blue-600 dark:text-blue-400 mb-2">WooCommerce
                                Customization</h3>
                            <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Custom checkout flow with optimized form validation. Built advanced coupon system with
                                real-time validation and discount calculations.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex gap-6">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center text-white font-bold">
                            4
                        </div>
                        <div class="flex-1">
                            <h3 class="font-oswald text-xl text-green-600 dark:text-green-400 mb-2">Performance
                                Optimization</h3>
                            <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Image optimization, lazy loading, CSS/JS minification, database query optimization.
                                Achieved 90%+ scores on PageSpeed Insights.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Features Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Technical Implementation', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-purple-400/50 dark:bg-purple-600/50"></span>
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Custom Theme -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-purple-600 dark:text-purple-400 mb-2">Custom Theme</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Built from Figma with component-based architecture. Modular PHP templates and reusable CSS
                        components.
                    </p>
                </div>

                <!-- WooCommerce -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-pink-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-pink-600 dark:text-pink-400 mb-2">Custom Checkout</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Optimized checkout flow with real-time validation. Custom payment gateway integration and order
                        processing.
                    </p>
                </div>

                <!-- Coupon System -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                                clip-rule="evenodd" />
                            <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z" />
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-blue-600 dark:text-blue-400 mb-2">Advanced Coupons</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Custom coupon validation with AJAX. Multi-tier discounts, usage limits, and expiration handling.
                    </p>
                </div>

                <!-- Performance -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-green-600 dark:text-green-400 mb-2">Performance Tuning</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Image optimization, lazy loading, CSS/JS minification. Caching strategies and database
                        optimization.
                    </p>
                </div>

                <!-- SEO -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-orange-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                            <path fill-rule="evenodd"
                                d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-orange-600 dark:text-orange-400 mb-2">SEO Optimization</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Semantic HTML, structured data, meta tags. Open Graph and Twitter Card implementation.
                    </p>
                </div>

                <!-- Responsive Design -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-indigo-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z" />
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-indigo-600 dark:text-indigo-400 mb-2">Mobile-First Design</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Responsive across all devices. Touch-optimized interface and progressive enhancement approach.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- PageSpeed Insights Section -->
    <section
        class="py-20 bg-gradient-to-br from-green-500/5 via-teal-500/5 to-blue-500/5 dark:from-green-600/5 dark:via-teal-600/5 dark:to-blue-600/5">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Performance Metrics', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-green-400/50 dark:bg-green-600/50"></span>
            </h2>

            <div class="max-w-5xl mx-auto">
                <!-- Desktop Performance -->
                <div class="mb-12">
                    <h3 class="font-oswald text-2xl text-gray-900 dark:text-white mb-6 text-center">Desktop Performance
                    </h3>
                    <div class="grid md:grid-cols-4 gap-6">
                        <div class="text-center">
                            <div class="relative w-32 h-32 mx-auto mb-4">
                                <svg class="transform -rotate-90 w-32 h-32">
                                    <circle cx="64" cy="64" r="56" stroke="#e5e7eb" stroke-width="8" fill="none" />
                                    <circle cx="64" cy="64" r="56" stroke="#10b981" stroke-width="8" fill="none"
                                        stroke-dasharray="351.86" stroke-dashoffset="17.59"
                                        class="transition-all duration-1000" />
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <span class="text-3xl font-bold text-green-600">95</span>
                                </div>
                            </div>
                            <div class="font-manrope text-sm text-gray-600 dark:text-gray-400">Performance</div>
                        </div>

                        <div class="text-center">
                            <div class="relative w-32 h-32 mx-auto mb-4">
                                <svg class="transform -rotate-90 w-32 h-32">
                                    <circle cx="64" cy="64" r="56" stroke="#e5e7eb" stroke-width="8" fill="none" />
                                    <circle cx="64" cy="64" r="56" stroke="#10b981" stroke-width="8" fill="none"
                                        stroke-dasharray="351.86" stroke-dashoffset="0"
                                        class="transition-all duration-1000" />
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <span class="text-3xl font-bold text-green-600">100</span>
                                </div>
                            </div>
                            <div class="font-manrope text-sm text-gray-600 dark:text-gray-400">Accessibility</div>
                        </div>

                        <div class="text-center">
                            <div class="relative w-32 h-32 mx-auto mb-4">
                                <svg class="transform -rotate-90 w-32 h-32">
                                    <circle cx="64" cy="64" r="56" stroke="#e5e7eb" stroke-width="8" fill="none" />
                                    <circle cx="64" cy="64" r="56" stroke="#10b981" stroke-width="8" fill="none"
                                        stroke-dasharray="351.86" stroke-dashoffset="0"
                                        class="transition-all duration-1000" />
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <span class="text-3xl font-bold text-green-600">100</span>
                                </div>
                            </div>
                            <div class="font-manrope text-sm text-gray-600 dark:text-gray-400">Best Practices</div>
                        </div>

                        <div class="text-center">
                            <div class="relative w-32 h-32 mx-auto mb-4">
                                <svg class="transform -rotate-90 w-32 h-32">
                                    <circle cx="64" cy="64" r="56" stroke="#e5e7eb" stroke-width="8" fill="none" />
                                    <circle cx="64" cy="64" r="56" stroke="#10b981" stroke-width="8" fill="none"
                                        stroke-dasharray="351.86" stroke-dashoffset="0"
                                        class="transition-all duration-1000" />
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <span class="text-3xl font-bold text-green-600">100</span>
                                </div>
                            </div>
                            <div class="font-manrope text-sm text-gray-600 dark:text-gray-400">SEO</div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Performance -->
                <div>
                    <h3 class="font-oswald text-2xl text-gray-900 dark:text-white mb-6 text-center">Mobile Performance
                    </h3>
                    <div class="grid md:grid-cols-4 gap-6">
                        <div class="text-center">
                            <div class="relative w-32 h-32 mx-auto mb-4">
                                <svg class="transform -rotate-90 w-32 h-32">
                                    <circle cx="64" cy="64" r="56" stroke="#e5e7eb" stroke-width="8" fill="none" />
                                    <circle cx="64" cy="64" r="56" stroke="#10b981" stroke-width="8" fill="none"
                                        stroke-dasharray="351.86" stroke-dashoffset="28.15"
                                        class="transition-all duration-1000" />
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <span class="text-3xl font-bold text-green-600">92</span>
                                </div>
                            </div>
                            <div class="font-manrope text-sm text-gray-600 dark:text-gray-400">Performance</div>
                        </div>

                        <div class="text-center">
                            <div class="relative w-32 h-32 mx-auto mb-4">
                                <svg class="transform -rotate-90 w-32 h-32">
                                    <circle cx="64" cy="64" r="56" stroke="#e5e7eb" stroke-width="8" fill="none" />
                                    <circle cx="64" cy="64" r="56" stroke="#10b981" stroke-width="8" fill="none"
                                        stroke-dasharray="351.86" stroke-dashoffset="0"
                                        class="transition-all duration-1000" />
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <span class="text-3xl font-bold text-green-600">100</span>
                                </div>
                            </div>
                            <div class="font-manrope text-sm text-gray-600 dark:text-gray-400">Accessibility</div>
                        </div>

                        <div class="text-center">
                            <div class="relative w-32 h-32 mx-auto mb-4">
                                <svg class="transform -rotate-90 w-32 h-32">
                                    <circle cx="64" cy="64" r="56" stroke="#e5e7eb" stroke-width="8" fill="none" />
                                    <circle cx="64" cy="64" r="56" stroke="#10b981" stroke-width="8" fill="none"
                                        stroke-dasharray="351.86" stroke-dashoffset="0"
                                        class="transition-all duration-1000" />
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <span class="text-3xl font-bold text-green-600">100</span>
                                </div>
                            </div>
                            <div class="font-manrope text-sm text-gray-600 dark:text-gray-400">Best Practices</div>
                        </div>

                        <div class="text-center">
                            <div class="relative w-32 h-32 mx-auto mb-4">
                                <svg class="transform -rotate-90 w-32 h-32">
                                    <circle cx="64" cy="64" r="56" stroke="#e5e7eb" stroke-width="8" fill="none" />
                                    <circle cx="64" cy="64" r="56" stroke="#10b981" stroke-width="8" fill="none"
                                        stroke-dasharray="351.86" stroke-dashoffset="0"
                                        class="transition-all duration-1000" />
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <span class="text-3xl font-bold text-green-600">100</span>
                                </div>
                            </div>
                            <div class="font-manrope text-sm text-gray-600 dark:text-gray-400">SEO</div>
                        </div>
                    </div>
                </div>

                <!-- Performance Optimization Details -->
                <div class="mt-12 grid md:grid-cols-3 gap-6">
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow-lg">
                        <h4 class="font-oswald text-lg text-gray-900 dark:text-white mb-3">Load Time</h4>
                        <div class="text-3xl font-bold text-green-600 mb-2">1.2s</div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">First Contentful Paint</p>
                    </div>
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow-lg">
                        <h4 class="font-oswald text-lg text-gray-900 dark:text-white mb-3">Interactivity</h4>
                        <div class="text-3xl font-bold text-green-600 mb-2">2.1s</div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Time to Interactive</p>
                    </div>
                    <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow-lg">
                        <h4 class="font-oswald text-lg text-gray-900 dark:text-white mb-3">Page Size</h4>
                        <div class="text-3xl font-bold text-green-600 mb-2">850KB</div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Total Transfer Size</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Challenges Section -->
    <section class="challenges-section py-20">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Development Challenges', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-purple-400/50 dark:bg-purple-600/50"></span>
            </h2>

            <div class="space-y-16">
                <!-- Challenge 1 -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-oswald text-xl text-red-500 mb-3">
                                    Challenge: Figma to Code Accuracy
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Converting complex Figma designs to pixel-perfect code while maintaining
                                    responsiveness across all device sizes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-oswald text-xl text-green-500 mb-3">
                                    Solution: Component System
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Built reusable component library matching Figma specs. CSS custom properties for
                                    spacing and colors. Browser dev tools for precision alignment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Challenge 2 -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-oswald text-xl text-red-500 mb-3">
                                    Challenge: Performance vs Features
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Balancing rich WooCommerce features with strict performance requirements for 90%+
                                    PageSpeed scores.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-oswald text-xl text-green-500 mb-3">
                                    Solution: Strategic Optimization
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Image lazy loading, critical CSS inlining, deferred JavaScript loading. Database
                                    query optimization and object caching. Removed unnecessary WooCommerce scripts.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Challenge 3 -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-oswald text-xl text-red-500 mb-3">
                                    Challenge: Custom Checkout UX
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Building intuitive checkout flow with real-time coupon validation without page
                                    reloads or performance hits.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-oswald text-xl text-green-500 mb-3">
                                    Solution: AJAX Architecture
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Custom AJAX endpoints for coupon validation. Optimistic UI updates with error
                                    handling. Form state management for smooth user experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Showcase -->
    <section
        class="py-20 bg-gradient-to-br from-purple-500/5 via-pink-500/5 to-blue-500/5 dark:from-purple-600/5 dark:via-pink-600/5 dark:to-blue-600/5">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Key Features', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-purple-400/50 dark:bg-purple-600/50"></span>
            </h2>

            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Feature 1 -->
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="flex items-start gap-4 mb-4">
                            <div
                                class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-oswald text-xl text-gray-900 dark:text-white mb-2">Figma-Based Design
                                </h3>
                                <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                    Pixel-perfect implementation of Figma designs. Component-based architecture with
                                    design system integration.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="flex items-start gap-4 mb-4">
                            <div
                                class="w-12 h-12 bg-pink-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-oswald text-xl text-gray-900 dark:text-white mb-2">Custom Theme Code
                                </h3>
                                <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                    Clean, maintainable code structure. Custom post types, template parts, and WordPress
                                    best practices.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="flex items-start gap-4 mb-4">
                            <div
                                class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                                    <path fill-rule="evenodd"
                                        d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-oswald text-xl text-gray-900 dark:text-white mb-2">WooCommerce
                                    Integration</h3>
                                <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                    Custom product templates, cart functionality, and checkout process. Payment gateway
                                    integration.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="flex items-start gap-4 mb-4">
                            <div
                                class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                                        clip-rule="evenodd" />
                                    <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-oswald text-xl text-gray-900 dark:text-white mb-2">Advanced Coupon
                                    System</h3>
                                <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                    Real-time validation with AJAX. Multi-tier discounts, usage restrictions, and
                                    expiration management.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 5 -->
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="flex items-start gap-4 mb-4">
                            <div
                                class="w-12 h-12 bg-orange-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-oswald text-xl text-gray-900 dark:text-white mb-2">Performance Optimized
                                </h3>
                                <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                    Green scores on PageSpeed Insights. Image optimization, lazy loading, and efficient
                                    resource management.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 6 -->
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="flex items-start gap-4 mb-4">
                            <div
                                class="w-12 h-12 bg-indigo-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-oswald text-xl text-gray-900 dark:text-white mb-2">GitHub Integration
                                </h3>
                                <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                    Version controlled codebase. Collaborative development workflow with documented
                                    deployment process.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="py-20 bg-cyber-dark/5 dark:bg-cyber-light/5">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Technology Stack', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-purple-400/50 dark:bg-purple-600/50"></span>
            </h2>

            <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-8">
                <!-- Frontend -->
                <div>
                    <h3 class="font-oswald text-xl text-purple-600 dark:text-purple-400 mb-4">Frontend</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span class="font-manrope">HTML5 & CSS3</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span class="font-manrope">JavaScript (ES6+)</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span class="font-manrope">Tailwind CSS</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span class="font-manrope">Figma Integration</span>
                        </div>
                    </div>
                </div>

                <!-- Backend -->
                <div>
                    <h3 class="font-oswald text-xl text-pink-600 dark:text-pink-400 mb-4">Backend</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
                            <span class="font-manrope">WordPress 6.x</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
                            <span class="font-manrope">WooCommerce</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
                            <span class="font-manrope">PHP 8.x</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <div class="w-2 h-2 bg-pink-500 rounded-full"></div>
                            <span class="font-manrope">MySQL Database</span>
                        </div>
                    </div>
                </div>

                <!-- Tools & Optimization -->
                <div>
                    <h3 class="font-oswald text-xl text-blue-600 dark:text-blue-400 mb-4">Tools & Optimization</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span class="font-manrope">Git & GitHub</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span class="font-manrope">Image Optimization</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span class="font-manrope">SEO Tools</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                            <span class="font-manrope">PageSpeed Tools</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results & Impact -->
    <section
        class="py-20 bg-gradient-to-br from-green-500/10 to-teal-500/10 dark:from-green-600/10 dark:to-teal-600/10">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Results & Impact', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-green-400/50 dark:bg-green-600/50"></span>
            </h2>

            <div class="max-w-4xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-8 shadow-lg">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-16 h-16 bg-green-500/20 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-green-600">90%+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">All Performance Scores</div>
                            </div>
                        </div>
                        <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                            Achieved green scores across all PageSpeed metrics for both mobile and desktop performance.
                        </p>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl p-8 shadow-lg">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-purple-600">100%</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Design Accuracy</div>
                            </div>
                        </div>
                        <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                            Pixel-perfect conversion from Figma designs to fully functional WordPress theme.
                        </p>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl p-8 shadow-lg">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-16 h-16 bg-blue-500/20 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-blue-600">1.2s</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Average Load Time</div>
                            </div>
                        </div>
                        <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                            Fast page loads with optimized assets and efficient code architecture.
                        </p>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl p-8 shadow-lg">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-16 h-16 bg-pink-500/20 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                                    <path
                                        d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-pink-600">Custom</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400">Checkout Experience</div>
                            </div>
                        </div>
                        <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                            Streamlined checkout process with real-time validation and advanced coupon system.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-purple-600 to-pink-600 dark:from-purple-500 dark:to-pink-500">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-nico text-4xl md:text-5xl text-white mb-6">
                Need a High-Performance WooCommerce Store?
            </h2>
            <p class="font-manrope text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Custom theme development from Figma designs. Performance optimization, SEO implementation, and
                WooCommerce customization for your online store.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
                    class="px-8 py-3 bg-white text-purple-600 rounded-full font-manrope text-lg hover:scale-105 transform transition-all duration-300 cursor-pointer">
                    Start Your Project
                </a>
                <a href="https://darkorchid-zebra-985147.hostingersite.com/" target="_blank"
                    class="px-8 py-3 border-2 border-white text-white rounded-full font-manrope text-lg hover:bg-white/10 hover:-translate-y-0.5 transition-all duration-300 cursor-pointer">
                    View Live Store
                </a>
                <a href="https://github.com/wyllymk/prop-funded" target="_blank"
                    class="px-8 py-3 border-2 border-white text-white rounded-full font-manrope text-lg hover:bg-white/10 hover:-translate-y-0.5 transition-all duration-300 cursor-pointer">
                    View Source Code
                </a>
            </div>
        </div>
    </section>

</main>

<script>
// Counter Animation
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

    const animateCounter = (counter) => {
        const animate = () => {
            const value = +counter.getAttribute('data-target');
            const data = +counter.innerText;
            const time = value / speed;

            if (data < value) {
                counter.innerText = Math.ceil(data + time);
                setTimeout(animate, 1);
            } else {
                counter.innerText = value;
            }
        };

        animate();
    };

    // Intersection Observer for counters
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });

    // Circle progress animation
    const circles = document.querySelectorAll('svg circle:last-child');
    const circleObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.transition = 'stroke-dashoffset 1.5s ease-in-out';
            }
        });
    }, {
        threshold: 0.5
    });

    circles.forEach(circle => {
        circleObserver.observe(circle);
    });
});
</script>

<?php get_footer();