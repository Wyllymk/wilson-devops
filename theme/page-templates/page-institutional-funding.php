<?php
/**
 * The template for displaying the Institutional Funding project page
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
        class="hero-section pb-24 pt-34 relative overflow-hidden bg-gradient-to-br from-cyber-dark/20 via-cyber-blue/10 to-cyber-coral/10 dark:from-cyber-light/10 dark:via-cyber-cyan/10 dark:to-cyber-pink/10">
        <div class="container mx-auto px-4">
            <div class="relative z-10">
                <div class="flex justify-center items-center mb-4">
                    <span
                        class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted mr-2">Excellent</span>
                    <div class="flex gap-1">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.176c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.49 9.397c-.783-.57-.38-1.81.588-1.81h4.176a1 1 0 00.95-.69l1.286-3.97z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.176c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.49 9.397c-.783-.57-.38-1.81.588-1.81h4.176a1 1 0 00.95-.69l1.286-3.97z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.176c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.49 9.397c-.783-.57-.38-1.81.588-1.81h4.176a1 1 0 00.95-.69l1.286-3.97z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.176c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.49 9.397c-.783-.57-.38-1.81.588-1.81h4.176a1 1 0 00.95-.69l1.286-3.97z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.176c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.49 9.397c-.783-.57-.38-1.81.588-1.81h4.176a1 1 0 00.95-.69l1.286-3.97z">
                            </path>
                        </svg>
                    </div>
                    <span class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted ml-2">436 reviews
                        on Trustpilot</span>
                </div>
                <h1 class="font-nico text-5xl md:text-7xl uppercase tracking-wide text-center 
                    text-cyber-blue dark:text-cyber-cyan mb-6 animate-pulse">
                    Institutional Funding
                </h1>
                <p
                    class="font-manrope text-xl text-center text-text-light-muted dark:text-text-dark-muted max-w-3xl mx-auto mb-8">
                    A high-performance prop trading platform built with WordPress, WooCommerce, and modern JS. Custom
                    challenges, tailored checkouts, lightning-fast payouts, and global support for serious traders.
                </p>

                <!-- Tech Stack Pills -->
                <div class="flex flex-wrap justify-center gap-3 mb-8">
                    <span
                        class="px-4 py-2 rounded-full bg-cyber-blue/20 text-cyber-blue dark:bg-cyber-cyan/20 dark:text-cyber-cyan font-manrope text-sm border border-cyber-blue/30">
                        WordPress
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-cyber-coral/20 text-cyber-coral dark:bg-cyber-pink/20 dark:text-cyber-pink font-manrope text-sm border border-cyber-coral/30">
                        WooCommerce
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-teal-500/20 text-teal-600 dark:text-teal-400 font-manrope text-sm border border-teal-500/30">
                        GSAP
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-purple-500/20 text-purple-600 dark:text-purple-400 font-manrope text-sm border border-purple-500/30">
                        Tailwind CSS
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-green-500/20 text-green-600 dark:text-green-400 font-manrope text-sm border border-green-500/30">
                        AlpineJS
                    </span>
                </div>

                <div class="flex justify-center gap-4 z-10 relative">
                    <button x-on:click="window.open('https://institutionalfunding.ro', '_blank')"
                        class="px-8 py-3 rounded-full bg-gradient-to-r from-cyber-blue to-cyber-coral dark:from-cyber-cyan dark:to-cyber-pink text-white font-manrope text-lg hover:scale-105 transform transition-all duration-300 drop-shadow-cyber-cyan hover:drop-shadow-2xl cursor-pointer">
                        Live Site
                    </button>
                    <button x-on:click="window.open('https://github.com/wyllymk/institutional-funding', '_blank')"
                        class="px-8 py-3 rounded-full border-2 border-cyber-cyan text-cyber-blue dark:text-cyber-cyan hover:bg-cyber-cyan/20 relative overflow-hidden transition-all duration-300 hover:-translate-y-0.5 hover:shadow-[0_10px_25px_rgba(0,0,0,0.15)] font-manrope text-lg cursor-pointer">
                        View Code
                    </button>
                    <button x-on:click="window.location.href='<?php echo esc_url( home_url( '/contact' ) ); ?>'"
                        class="px-8 py-3 rounded-full border-2 border-cyber-coral text-cyber-coral dark:text-cyber-pink hover:bg-cyber-coral/20 relative overflow-hidden transition-all duration-300 hover:-translate-y-0.5 hover:shadow-[0_10px_25px_rgba(0,0,0,0.15)] font-manrope text-lg cursor-pointer">
                        Hire Me
                    </button>
                </div>
            </div>

            <!-- Animated Background Elements -->
            <div class="absolute inset-0 z-0">
                <div class="absolute top-20 left-10 w-32 h-32 bg-cyber-cyan/10 rounded-full animate-bounce"
                    style="animation-delay: 0s;"></div>
                <div class="absolute top-40 right-20 w-24 h-24 bg-cyber-coral/10 rounded-full animate-bounce"
                    style="animation-delay: 1s;"></div>
                <div class="absolute bottom-20 left-1/4 w-20 h-20 bg-cyber-blue/10 rounded-full animate-bounce"
                    style="animation-delay: 2s;"></div>
                <div class="absolute bottom-40 right-1/3 w-28 h-28 bg-cyber-pink/10 rounded-full animate-bounce"
                    style="animation-delay: 3s;"></div>

                <!-- Floating Icons -->
                <div class="absolute top-1/4 left-1/4 opacity-20">
                    <svg class="w-16 h-16 text-cyber-cyan animate-spin" style="animation-duration: 8s;"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="absolute top-1/3 right-1/4 opacity-20">
                    <svg class="w-20 h-20 text-cyber-coral animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Metrics Section -->
    <section class="py-20 bg-cyber-dark/5 dark:bg-cyber-light/5">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-cyber-blue/10 to-cyber-cyan/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-cyber-blue dark:text-cyber-cyan mb-2 counter"
                        data-target="10000">
                        0</div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Registered Traders</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-cyber-coral/10 to-cyber-pink/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-cyber-coral dark:text-cyber-pink mb-2 counter"
                        data-target="400000">0</div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">In Treasury ($)</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-teal-500/10 to-green-500/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-teal-600 dark:text-teal-400 mb-2 counter" data-target="190">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-dark-muted">Countries Served</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-purple-500/10 to-indigo-500/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-purple-600 dark:text-purple-400 mb-2 counter" data-target="24">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Hour Payouts</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Platform Overview Section -->
    <section class="overview-section py-20">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-5 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Platform Overview', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>

            <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                <div class="space-y-6">
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted text-lg">
                        Institutional Funding is a robust prop trading platform designed for scalability and trader
                        success. Built with WordPress and WooCommerce, it offers seamless challenge selection, secure
                        payouts, and global accessibility.
                    </p>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        With custom integrations, real-time dashboards, and a focus on user experience, this platform
                        empowers traders to achieve their financial goals effortlessly.
                    </p>

                    <!-- Core Features List -->
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-cyber-cyan rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Custom challenge selection with dynamic pricing
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-cyber-coral rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Lightning-fast payout processing
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Global payment gateway integrations
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Trader-friendly dashboards & analytics
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Interactive Dashboard Preview -->
                <div class="relative">
                    <div class="bg-gray-900 rounded-xl p-4 transform hover:scale-105 transition-all duration-300">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            <div class="ml-4 text-gray-400 text-sm font-mono">institutionalfunding.ro</div>
                        </div>

                        <!-- Mock Dashboard Interface -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 space-y-4">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-gray-900 dark:text-white">Trader Dashboard</h3>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                                    10,000+ Active Traders
                                </span>
                            </div>

                            <div class="grid grid-cols-3 gap-4">
                                <div class="bg-cyber-blue/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-cyber-blue">$500K</div>
                                    <div class="text-xs text-gray-600">Total Funded</div>
                                </div>
                                <div class="bg-cyber-coral/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-cyber-coral">24h</div>
                                    <div class="text-xs text-gray-600">Payout Speed</div>
                                </div>
                                <div class="bg-teal-500/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-teal-600">4.9/5</div>
                                    <div class="text-xs text-gray-600">Trustpilot</div>
                                </div>
                            </div>

                            <!-- Mock Trader List -->
                            <div class="space-y-2">
                                <div class="flex items-center gap-3 p-2 bg-gray-50 dark:bg-gray-700 rounded">
                                    <div class="w-8 h-8 bg-cyber-cyan rounded-full"></div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium">Pro Trader</div>
                                        <div class="text-xs text-gray-500">$10K Funded</div>
                                    </div>
                                    <div class="text-xs text-green-600">Active</div>
                                </div>
                                <div class="flex items-center gap-3 p-2 bg-gray-50 dark:bg-gray-700 rounded">
                                    <div class="w-8 h-8 bg-cyber-coral rounded-full"></div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium">Scalper Elite</div>
                                        <div class="text-xs text-gray-500">Phase 1</div>
                                    </div>
                                    <div class="text-xs text-yellow-500">Pending</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Indicators -->
                    <div class="absolute -top-4 right-0 md:-right-4 w-8 h-8 bg-green-500 rounded-full animate-ping">
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-cyber-cyan rounded-full animate-pulse"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Architecture Section -->
    <section class="py-20 bg-cyber-dark/10 dark:bg-cyber-light/10">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Technical Architecture', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>

            <!-- Architecture Diagram -->
            <div class="mb-12">
                <div
                    class="bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 rounded-xl p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Frontend Layer -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-cyber-blue to-cyber-cyan rounded-xl mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h12a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm4 2a1 1 0 000 2h2a1 1 0 100-2H7z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                                Frontend Layer
                            </h3>
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                Tailwind CSS, AlpineJS, GSAP for smooth animations and responsive UI
                            </p>
                        </div>

                        <!-- Application Layer -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-cyber-coral to-cyber-pink rounded-xl mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="font-oswald text-xl text-cyber-coral dark:text-cyber-pink mb-2">
                                Application Layer
                            </h3>
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                WordPress, WooCommerce APIs, custom hooks for challenge and payout logic
                            </p>
                        </div>

                        <!-- Database Layer -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-teal-500 to-green-500 rounded-xl mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z">
                                    </path>
                                    <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z">
                                    </path>
                                    <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z"></path>
                                </svg>
                            </div>
                            <h3 class="font-oswald text-xl text-teal-600 dark:text-teal-400 mb-2">Database Layer</h3>
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                MySQL, optimized queries for trader data and secure transaction logs
                            </p>
                        </div>
                    </div>

                    <!-- Connection Lines -->
                    <div class="hidden md:block relative mt-8">
                        <div class="absolute top-0 left-1/3 w-px h-8 bg-gradient-to-b from-cyber-blue to-cyber-coral">
                        </div>
                        <div class="absolute top-0 right-1/3 w-px h-8 bg-gradient-to-b from-cyber-coral to-teal-500">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technical Features Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-cyber-blue transition-all duration-300">
                    <div class="w-12 h-12 bg-cyber-blue/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-cyber-blue" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-cyber-blue dark:text-cyber-cyan mb-2">Secure Transactions</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">Encrypted payment
                        processing with Stripe and PayPal, ensuring trader trust.</p>
                </div>

                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-cyber-coral transition-all duration-300">
                    <div class="w-12 h-12 bg-cyber-coral/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-cyber-coral" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-cyber-coral dark:text-cyber-pink mb-2">Dynamic Challenges</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">Custom pricing
                        models and challenge rules integrated with WooCommerce.</p>
                </div>

                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-cyber-teal transition-all duration-300">
                    <div class="w-12 h-12 bg-teal-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-teal-600 dark:text-teal-400 mb-2">Global Accessibility</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">Multi-currency
                        support and localized trader experiences.</p>
                </div>

                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-cyber-purple transition-all duration-300">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-purple-600 dark:text-purple-400 mb-2">Performance Optimized</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">Caching and
                        optimized queries for 10,000+ concurrent users.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Challenges & Solutions -->
    <section class="challenges-section py-20">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Development Journey', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>

            <!-- Challenge & Solution Pairs -->
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
                                    Challenge: Dynamic Pricing
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Standard WooCommerce lacked flexibility for dynamic challenge pricing and add-on
                                    bundles tailored to trader preferences.
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
                                    Solution: Custom WooCommerce Hooks
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Developed custom WooCommerce endpoints and AlpineJS-driven interfaces for real-time
                                    pricing updates and seamless add-on integration.
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
                                    Challenge: Fast Payouts
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Ensuring 24-hour payouts with secure, compliant, and auditable transaction processes
                                    across multiple gateways.
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
                                    Solution: Automated Gateway Integration
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Built WP cron jobs with Stripe and PayPal APIs, secure logging, and real-time trader
                                    notifications for seamless payouts.
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
                                    Challenge: Scalability
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Handling high traffic and concurrent users without compromising performance or user
                                    experience.
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
                                    Solution: Optimized Infrastructure
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Implemented caching, CDN integration, and optimized MySQL queries to support 10,000+
                                    concurrent traders.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Features Demo -->
    <section
        class="py-20 bg-gradient-to-br from-cyber-dark/5 via-cyber-blue/5 to-cyber-coral/5 dark:from-cyber-light/5 dark:via-cyber-cyan/5 dark:to-cyber-pink/5">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Interactive Features', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>

            <!-- Feature Tabs -->
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-wrap justify-center gap-4 mb-12" id="featureTabs">
                    <button
                        class="px-6 py-3 rounded-full bg-cyber-blue text-white font-manrope transition-all duration-300 tab-active"
                        data-tab="challenges">
                        Challenges
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="payouts">
                        Payouts
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="dashboard">
                        Dashboard
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="support">
                        Support
                    </button>
                </div>

                <!-- Feature Content -->
                <div class="relative">
                    <!-- Challenges Tab -->
                    <div class="tab-content active" id="challenges">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-cyber-blue dark:text-cyber-cyan">
                                    Challenge Selection
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Traders select from a range of challenges with customizable account sizes, profit
                                    targets, and flexible rules.
                                </p>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">Flexible account sizes</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-cyber-cyan rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">Customizable profit targets</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-cyber-coral rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">Instant checkout integration</span>
                                    </div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl p-6 transform hover:scale-105 transition-all duration-300">
                                    <div class="flex justify-between items-center mb-6">
                                        <h4 class="font-bold text-gray-900 dark:text-white">Challenge Filter</h4>
                                        <div class="flex gap-2">
                                            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                            <span class="text-sm text-green-600">Live</span>
                                        </div>
                                    </div>
                                    <div class="space-y-4 text-gray-900 dark:text-white">
                                        <div class="flex justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <span class="text-sm">Account Size</span>
                                            <span class="font-bold text-cyber-blue">$50K</span>
                                        </div>
                                        <div class="flex justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <span class="text-sm">Profit Target</span>
                                            <span class="font-bold text-cyber-coral">8%</span>
                                        </div>
                                        <div class="flex justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <span class="text-sm">Price</span>
                                            <span class="font-bold text-yellow-600">$399</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payouts Tab -->
                    <div class="tab-content hidden" id="payouts">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-cyber-coral dark:text-cyber-pink">
                                    Payout Management
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Automated payout processing with real-time tracking for traders, supporting both
                                    bank transfers and cryptocurrency withdrawals.
                                </p>
                                <div class="space-y-3">
                                    <div
                                        class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <span class="font-manrope text-sm">Pending</span>
                                        <div
                                            class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center">
                                            <span class="text-white text-xs">5</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <span class="font-manrope text-sm">Processed</span>
                                        <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <span class="font-manrope text-sm">Total Paid</span>
                                        <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-xl">
                                <h4 class="font-bold text-gray-900 dark:text-white mb-4">
                                    Payout Queue
                                </h4>
                                <div class="space-y-4">
                                    <div
                                        class="flex justify-between items-center p-3 border rounded-lg dark:border-gray-600">
                                        <span class="font-manrope text-sm">Auto-Process</span>
                                        <div class="w-12 h-6 bg-cyber-blue rounded-full relative">
                                            <div
                                                class="w-5 h-5 bg-white rounded-full absolute top-0.5 right-0.5 transition-transform">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-between items-center p-3 border rounded-lg dark:border-gray-600">
                                        <span class="font-manrope text-sm">Email Alerts</span>
                                        <div class="w-12 h-6 bg-cyber-blue rounded-full relative">
                                            <div
                                                class="w-5 h-5 bg-white rounded-full absolute top-0.5 right-0.5 transition-transform">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-between items-center p-3 border rounded-lg dark:border-gray-600">
                                        <span class="font-manrope text-sm">Gateway: Crypto</span>
                                        <div class="w-12 h-6 bg-gray-300 rounded-full relative">
                                            <div
                                                class="w-5 h-5 bg-white rounded-full absolute top-0.5 left-0.5 transition-transform">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dashboard Tab -->
                    <div class="tab-content hidden" id="dashboard">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-teal-600 dark:text-teal-400">
                                    Trader Dashboard
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Real-time analytics for traders, including performance metrics, payout history, and
                                    challenge progress.
                                </p>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="p-4 bg-teal-500/10 rounded-lg text-center">
                                        <div class="text-2xl font-bold text-teal-600">85%</div>
                                        <div class="text-sm text-gray-600">Challenge Completion</div>
                                    </div>
                                    <div class="p-4 bg-purple-500/10 rounded-lg text-center">
                                        <div class="text-2xl font-bold text-purple-600">$15K</div>
                                        <div class="text-sm text-gray-600">Total Earnings</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-xl">
                                <h4 class="font-bold text-gray-900 dark:text-white mb-4">Performance Trends</h4>
                                <div class="space-y-4">
                                    <!-- Mock Chart -->
                                    <div
                                        class="h-32 bg-gradient-to-r from-teal-100 to-purple-100 dark:from-teal-900 dark:to-purple-900 rounded-lg flex items-end justify-around p-4">
                                        <div class="w-8 bg-teal-500 rounded-t" style="height: 70%;"></div>
                                        <div class="w-8 bg-teal-500 rounded-t" style="height: 90%;"></div>
                                        <div class="w-8 bg-teal-500 rounded-t" style="height: 50%;"></div>
                                        <div class="w-8 bg-teal-500 rounded-t" style="height: 80%;"></div>
                                        <div class="w-8 bg-teal-500 rounded-t" style="height: 60%;"></div>
                                        <div class="w-8 bg-teal-500 rounded-t" style="height: 75%;"></div>
                                        <div class="w-8 bg-teal-500 rounded-t" style="height: 95%;"></div>
                                    </div>
                                    <div class="flex justify-between text-xs text-gray-500">
                                        <span>Week 1</span>
                                        <span>Week 2</span>
                                        <span>Week 3</span>
                                        <span>Week 4</span>
                                        <span>Week 5</span>
                                        <span>Week 6</span>
                                        <span>Week 7</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Support Tab -->
                    <div class="tab-content hidden" id="support">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-purple-600 dark:text-purple-400">
                                    Global Support
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    24/7 trader support with integrated ticketing system and live chat for seamless
                                    issue resolution.
                                </p>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-purple-500/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-purple-600">1</span>
                                        </div>
                                        <span class="font-manrope">Submit ticket</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-purple-500/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-purple-600">2</span>
                                        </div>
                                        <span class="font-manrope">Live chat support</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-purple-500/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-purple-600">3</span>
                                        </div>
                                        <span class="font-manrope">Resolution tracking</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-xl">
                                    <div class="flex items-center gap-3 mb-4">
                                        <div
                                            class="w-12 h-12 bg-purple-500/20 rounded-full flex items-center justify-center">
                                            <svg class="w-6 h-6 text-purple-600" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <h4 class="font-bold text-gray-900 dark:text-white">Support Portal</h4>
                                    </div>
                                    <div class="space-y-3 text-gray-900 dark:text-white">
                                        <input type="text" placeholder="Enter your issue"
                                            class="w-full p-3 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
                                        <button
                                            class="w-full py-3 bg-gradient-to-r from-purple-500 to-indigo-500 text-white rounded-lg font-manrope hover:scale-105 transition-transform">
                                            Submit Ticket
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-cyber-blue to-cyber-coral dark:from-cyber-cyan dark:to-cyber-pink">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-nico text-4xl md:text-5xl text-white mb-6">
                Ready to Build Your Prop Trading Platform?
            </h2>
            <p class="font-manrope text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Leverage my expertise to create a scalable, secure, and trader-focused platform like Institutional
                Funding. Let's bring your vision to life.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
                    class="px-8 py-3 bg-white text-cyber-blue rounded-full font-manrope text-lg hover:scale-105 transform transition-all duration-300 cursor-pointer">
                    Start Your Project
                </a>
                <a href="https://institutionalfunding.ro" target="_blank"
                    class="px-8 py-3 border-2 border-white text-white rounded-full font-manrope text-lg hover:bg-white/10 hover:-translate-y-0.5 transition-all duration-300 cursor-pointer">
                    Try Live Demo
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); 