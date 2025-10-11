<?php
/**
 * The template for displaying the Blu Sky project page
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
        class="hero-section pb-24 pt-34 relative overflow-hidden bg-gradient-to-br from-cyber-dark/20 via-blue-600/10 to-sky-400/10 dark:from-cyber-light/10 dark:via-blue-500/10 dark:to-sky-300/10">
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
                    text-blue-600 dark:text-sky-400 mb-6 animate-pulse">
                    Blu Sky
                </h1>
                <p
                    class="font-manrope text-xl text-center text-text-light-muted dark:text-text-dark-muted max-w-3xl mx-auto mb-8">
                    A modern proprietary trading platform built with WordPress, featuring custom evaluations, flexible
                    payouts, and unlimited trading potential. Empowering traders with up to $200,000 in capital.
                </p>

                <!-- Tech Stack Pills -->
                <div class="flex flex-wrap justify-center gap-3 mb-8">
                    <span
                        class="px-4 py-2 rounded-full bg-blue-600/20 text-blue-600 dark:bg-sky-400/20 dark:text-sky-400 font-manrope text-sm border border-blue-600/30">
                        WordPress
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-teal-500/20 text-teal-600 dark:text-teal-400 font-manrope text-sm border border-teal-500/30">
                        Tailwind CSS
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-purple-500/20 text-purple-600 dark:text-purple-400 font-manrope text-sm border border-purple-500/30">
                        AlpineJS
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-green-500/20 text-green-600 dark:text-green-400 font-manrope text-sm border border-green-500/30">
                        GSAP
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-orange-500/20 text-orange-600 dark:text-orange-400 font-manrope text-sm border border-orange-500/30">
                        Custom Theme
                    </span>
                </div>

                <div class="flex justify-center gap-4 z-10 relative">
                    <button x-on:click="window.open('https://darkcyan-chamois-734702.hostingersite.com', '_blank')"
                        class="px-8 py-3 rounded-full bg-gradient-to-r from-blue-600 to-sky-400 text-white font-manrope text-lg hover:scale-105 transform transition-all duration-300 drop-shadow-2xl cursor-pointer">
                        Live Site
                    </button>
                    <button x-on:click="window.location.href='<?php echo esc_url( home_url( '/contact' ) ); ?>'"
                        class="px-8 py-3 rounded-full border-2 border-sky-400 text-blue-600 dark:text-sky-400 hover:bg-sky-400/20 relative overflow-hidden transition-all duration-300 hover:-translate-y-0.5 hover:shadow-[0_10px_25px_rgba(0,0,0,0.15)] font-manrope text-lg cursor-pointer">
                        Hire Me
                    </button>
                </div>
            </div>

            <!-- Animated Background Elements -->
            <div class="absolute inset-0 z-0">
                <div class="absolute top-20 left-10 w-32 h-32 bg-blue-600/10 rounded-full animate-bounce"
                    style="animation-delay: 0s;"></div>
                <div class="absolute top-40 right-20 w-24 h-24 bg-sky-400/10 rounded-full animate-bounce"
                    style="animation-delay: 1s;"></div>
                <div class="absolute bottom-20 left-1/4 w-20 h-20 bg-blue-500/10 rounded-full animate-bounce"
                    style="animation-delay: 2s;"></div>
                <div class="absolute bottom-40 right-1/3 w-28 h-28 bg-sky-300/10 rounded-full animate-bounce"
                    style="animation-delay: 3s;"></div>
            </div>
        </div>
    </section>

    <!-- Key Metrics Section -->
    <section class="py-20 bg-cyber-dark/5 dark:bg-cyber-light/5">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-blue-600/10 to-sky-400/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-blue-600 dark:text-sky-400 mb-2 counter" data-target="200000">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Max Capital ($)</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-green-500/10 to-emerald-400/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-green-600 dark:text-emerald-400 mb-2 counter" data-target="14">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Days Payout</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-purple-500/10 to-violet-400/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-purple-600 dark:text-violet-400 mb-2">∞</div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Time Limits</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-orange-500/10 to-amber-400/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-orange-600 dark:text-amber-400 mb-2">4.9/5</div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Trustpilot Score</div>
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
                <span class="absolute top-2 -right-2 w-12 h-9 bg-sky-400/50 dark:bg-sky-600/50"></span>
            </h2>

            <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                <div class="space-y-6">
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted text-lg">
                        Blu Sky is a proprietary trading platform built from the ground up using WordPress and custom
                        theme development. Traders access up to $200,000 in capital through a streamlined evaluation
                        process.
                    </p>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        The platform features no time limits, flexible payout schedules starting at 14 days, and daily
                        coaching through an exclusive Discord community. Built with Tailwind CSS, AlpineJS, and GSAP for
                        smooth animations and responsive design.
                    </p>

                    <!-- Core Features List -->
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Up to $200,000 trading capital
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Fast payouts every 14 days
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                No time limits on challenges
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Free daily coaching via Discord
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
                            <div class="ml-4 text-gray-400 text-sm font-mono">blusky.com</div>
                        </div>

                        <!-- Mock Dashboard Interface -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 space-y-4">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-gray-900 dark:text-white">Trader Dashboard</h3>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                                    Funded
                                </span>
                            </div>

                            <div class="grid grid-cols-3 gap-4">
                                <div class="bg-blue-600/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-blue-600">$105K</div>
                                    <div class="text-xs text-gray-600">Balance</div>
                                </div>
                                <div class="bg-green-500/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-green-600">+25%</div>
                                    <div class="text-xs text-gray-600">Profit</div>
                                </div>
                                <div class="bg-purple-500/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-purple-600">14d</div>
                                    <div class="text-xs text-gray-600">Next Payout</div>
                                </div>
                            </div>

                            <!-- Mock Progress Bar -->
                            <div class="space-y-2">
                                <div class="flex justify-between text-sm">
                                    <span class="text-gray-600">Phase Progress</span>
                                    <span class="text-blue-600 font-bold">Funded</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-gradient-to-r from-blue-600 to-sky-400 h-2 rounded-full"
                                        style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Indicators -->
                    <div class="absolute -top-4 right-0 md:-right-4 w-8 h-8 bg-green-500 rounded-full animate-ping">
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-blue-600 rounded-full animate-pulse"></div>
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
                <span class="absolute top-2 -right-2 w-12 h-9 bg-sky-400/50 dark:bg-sky-600/50"></span>
            </h2>

            <!-- Architecture Diagram -->
            <div class="mb-12">
                <div
                    class="bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 rounded-xl p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Frontend Layer -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-blue-600 to-sky-400 rounded-xl mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h12a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm4 2a1 1 0 000 2h2a1 1 0 100-2H7z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="font-oswald text-xl text-blue-600 dark:text-sky-400 mb-2">
                                Frontend Layer
                            </h3>
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                Tailwind CSS for responsive design, AlpineJS for interactivity, GSAP for smooth
                                animations
                            </p>
                        </div>

                        <!-- Application Layer -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-purple-500 to-violet-400 rounded-xl mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="font-oswald text-xl text-purple-600 dark:text-violet-400 mb-2">
                                Application Layer
                            </h3>
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                Custom WordPress theme with evaluation logic, payout management, and trader progress
                                tracking
                            </p>
                        </div>

                        <!-- Database Layer -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-400 rounded-xl mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z">
                                    </path>
                                    <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z">
                                    </path>
                                    <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z"></path>
                                </svg>
                            </div>
                            <h3 class="font-oswald text-xl text-green-600 dark:text-emerald-400 mb-2">Database Layer
                            </h3>
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                MySQL for trader data, challenge metrics, payout history, and performance analytics
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technical Features Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-cyber-blue transition-all duration-300">
                    <div class="w-12 h-12 bg-blue-600/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-blue-600 dark:text-sky-400 mb-2">No Time Limits</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">Trade at your own
                        pace with zero pressure from countdown timers.</p>
                </div>

                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-cyber-coral transition-all duration-300">
                    <div class="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-green-600 dark:text-emerald-400 mb-2">Fast Payouts</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">Receive payouts
                        every 14 days once funded, with flexible withdrawal options.</p>
                </div>

                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-cyber-teal transition-all duration-300">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-purple-600 dark:text-violet-400 mb-2">Free Coaching</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">Daily coaching
                        sessions in exclusive Discord community for all traders.</p>
                </div>

                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-cyber-purple transition-all duration-300">
                    <div class="w-12 h-12 bg-orange-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-orange-600 dark:text-amber-400 mb-2">Scalable Capital</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">Grow from $25K to
                        over $1M as you hit performance milestones.</p>
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
                <span class="absolute top-2 -right-2 w-12 h-9 bg-sky-400/50 dark:bg-sky-600/50"></span>
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
                                    Challenge: Custom Evaluation System
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Building a flexible evaluation system with multiple phases, profit targets, and no
                                    time constraints while tracking trader progress in real-time.
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
                                    Solution: Custom WordPress Architecture
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Developed custom post types, meta boxes, and database tables for trader evaluation
                                    tracking. Implemented dynamic phase progression logic with real-time updates.
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
                                    Challenge: Smooth Animations
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Creating engaging, smooth animations for trader dashboards and progress indicators
                                    without impacting performance.
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
                                    Solution: GSAP Integration
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Integrated GSAP for high-performance animations with ScrollTrigger for scroll-based
                                    effects. Combined with AlpineJS for reactive state management.
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
                                    Challenge: Responsive Design
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Ensuring flawless responsive design across all devices while maintaining visual
                                    consistency and performance.
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
                                    Solution: Tailwind CSS Framework
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Utilized Tailwind CSS utility classes for mobile-first responsive design. Created
                                    custom components with consistent spacing and breakpoints.
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
        class="py-20 bg-gradient-to-br from-cyber-dark/5 via-blue-600/5 to-sky-400/5 dark:from-cyber-light/5 dark:via-blue-500/5 dark:to-sky-300/5">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Key Features', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-sky-400/50 dark:bg-sky-600/50"></span>
            </h2>

            <!-- Feature Tabs -->
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-wrap justify-center gap-4 mb-12" id="featureTabs">
                    <button
                        class="px-6 py-3 rounded-full bg-blue-600 text-white font-manrope transition-all duration-300 tab-active"
                        data-tab="evaluation">
                        Evaluation Process
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="pricing">
                        Pricing Plans
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="dashboard">
                        Trader Dashboard
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="support">
                        Support System
                    </button>
                </div>

                <!-- Feature Content -->
                <div class="relative">
                    <!-- Evaluation Tab -->
                    <div class="tab-content active" id="evaluation">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-blue-600 dark:text-sky-400">
                                    Three-Phase Evaluation
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Traders progress through Phase 1, Phase 2, and finally receive funding. Each phase
                                    has specific profit targets with no time limits.
                                </p>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-blue-600 rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">Phase 1: Prove your skills</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-sky-400 rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">Phase 2: Refine your strategy</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">Funded: Trade with capital</span>
                                    </div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl p-6 transform hover:scale-105 transition-all duration-300">
                                    <div class="flex justify-between items-center mb-6">
                                        <h4 class="font-bold text-gray-900 dark:text-white">Evaluation Progress</h4>
                                        <div class="flex gap-2">
                                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                                            <span class="text-sm text-blue-600">Phase 1</span>
                                        </div>
                                    </div>
                                    <div class="space-y-4 text-gray-900 dark:text-white">
                                        <div class="p-4 bg-blue-600/10 rounded-lg border-l-4 border-blue-600">
                                            <div class="text-sm text-gray-600 mb-1">Current Phase</div>
                                            <div class="text-xl font-bold">Phase 1</div>
                                        </div>
                                        <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <div class="flex justify-between text-sm mb-2">
                                                <span>Profit Target</span>
                                                <span class="font-bold">8%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2">
                                                <div class="bg-gradient-to-r from-blue-600 to-sky-400 h-2 rounded-full"
                                                    style="width: 65%"></div>
                                            </div>
                                        </div>
                                        <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <div class="text-sm text-gray-600 mb-1">Time Limit</div>
                                            <div class="text-lg font-bold text-green-600">No Limit</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing Tab -->
                    <div class="tab-content hidden" id="pricing">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-green-600 dark:text-emerald-400">
                                    Flexible Pricing Plans
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Choose from multiple account sizes starting at $25K. One-time payment with no
                                    recurring fees or hidden charges.
                                </p>
                                <div class="space-y-3">
                                    <div
                                        class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <span class="font-manrope text-sm">$25K Account</span>
                                        <span class="font-bold text-blue-600">$499</span>
                                    </div>
                                    <div
                                        class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <span class="font-manrope text-sm">No Activation Fee</span>
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
                                        <span class="font-manrope text-sm">Powerful Integrations</span>
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
                                <div class="text-center mb-6">
                                    <div class="text-4xl font-bold text-blue-600 mb-2">$499</div>
                                    <div class="text-sm text-gray-600">One-time payment</div>
                                </div>
                                <div class="space-y-3 mb-6">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-sm">No activation fee</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-sm">No time limit</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="text-sm">Powerful integrations</span>
                                    </div>
                                </div>
                                <button
                                    class="w-full py-3 bg-gradient-to-r from-blue-600 to-sky-400 text-white rounded-lg font-manrope hover:scale-105 transition-transform">
                                    Get Funded
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Dashboard Tab -->
                    <div class="tab-content hidden" id="dashboard">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-purple-600 dark:text-violet-400">
                                    Comprehensive Dashboard
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Track your progress, view account balance, monitor profit targets, and manage
                                    payouts from a single interface.
                                </p>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="p-4 bg-blue-600/10 rounded-lg text-center">
                                        <div class="text-2xl font-bold text-blue-600">Real-time</div>
                                        <div class="text-sm text-gray-600">Updates</div>
                                    </div>
                                    <div class="p-4 bg-green-500/10 rounded-lg text-center">
                                        <div class="text-2xl font-bold text-green-600">24/7</div>
                                        <div class="text-sm text-gray-600">Access</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-xl">
                                <h4 class="font-bold text-gray-900 dark:text-white mb-4">Account Overview</h4>
                                <div class="space-y-4">
                                    <div class="p-4 bg-gradient-to-r from-blue-600/10 to-sky-400/10 rounded-lg">
                                        <div class="text-sm text-gray-600 mb-1">Account Balance</div>
                                        <div class="text-2xl font-bold text-blue-600">$105,670.20</div>
                                        <div class="text-sm text-green-600 mt-1">+25% profit</div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <div class="text-xs text-gray-600 mb-1">Phase</div>
                                            <div class="text-lg font-bold">Funded</div>
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <div class="text-xs text-gray-600 mb-1">Next Payout</div>
                                            <div class="text-lg font-bold">14 days</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Support Tab -->
                    <div class="tab-content hidden" id="support">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-orange-600 dark:text-amber-400">
                                    Community Support
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Access free daily coaching through exclusive Discord community. Get answers to your
                                    questions and improve your trading strategies.
                                </p>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-orange-500/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-orange-600">1</span>
                                        </div>
                                        <span class="font-manrope">Join Discord community</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-orange-500/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-orange-600">2</span>
                                        </div>
                                        <span class="font-manrope">Attend daily coaching sessions</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-orange-500/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-orange-600">3</span>
                                        </div>
                                        <span class="font-manrope">Get personalized guidance</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-xl">
                                    <div class="flex items-center gap-3 mb-4">
                                        <div
                                            class="w-12 h-12 bg-orange-500/20 rounded-full flex items-center justify-center">
                                            <svg class="w-6 h-6 text-orange-600" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z">
                                                </path>
                                                <path
                                                    d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z">
                                                </path>
                                            </svg>
                                        </div>
                                        <h4 class="font-bold text-gray-900 dark:text-white">Discord Coaching</h4>
                                    </div>
                                    <div class="space-y-3 text-gray-900 dark:text-white">
                                        <div class="p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <div class="text-sm font-medium mb-1">Daily Sessions</div>
                                            <div class="text-xs text-gray-600">Free for all members</div>
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <div class="text-sm font-medium mb-1">Strategy Reviews</div>
                                            <div class="text-xs text-gray-600">Expert feedback</div>
                                        </div>
                                        <button
                                            class="w-full py-3 bg-gradient-to-r from-orange-500 to-amber-400 text-white rounded-lg font-manrope hover:scale-105 transition-transform">
                                            Join Community
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

    <!-- FAQ Section -->
    <section class="py-20 bg-cyber-dark/10 dark:bg-cyber-light/10">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Everything You Need to Know', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-sky-400/50 dark:bg-sky-600/50"></span>
            </h2>

            <div class="max-w-4xl mx-auto space-y-4">
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                    <h3 class="font-oswald text-lg text-gray-900 dark:text-white mb-2">
                        Is this an easy way to make money?
                    </h3>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Yes, this is an easy way to make money, but it requires knowledge, skill, and consistent effort.
                        Success will depend on your dedication and trading strategies.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                    <h3 class="font-oswald text-lg text-gray-900 dark:text-white mb-2">
                        Does the monthly evaluation fee go away after I pass my evaluation?
                    </h3>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        No, the evaluation fee is non-refundable and applies regardless of the outcome of your
                        evaluation. It covers the cost of reviewing your progress.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                    <h3 class="font-oswald text-lg text-gray-900 dark:text-white mb-2">
                        Why should I go with BluSky over the other prop firms?
                    </h3>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        BluSky offers competitive terms, flexible evaluation processes, and transparent fee structures.
                        Our personalized coaching and support make us stand out in the industry.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                    <h3 class="font-oswald text-lg text-gray-900 dark:text-white mb-2">
                        How does the FREE coaching work?
                    </h3>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Coaching is available daily in our BluSky members only Discord Room, where we review trading
                        strategies, address questions, and provide guidance to improve your performance.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg">
                    <h3 class="font-oswald text-lg text-gray-900 dark:text-white mb-2">
                        If I'm doing well at the brokerage, can I get more contracts?
                    </h3>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Yes, if you're consistently performing well, you may qualify for additional contracts and more
                        capital to trade.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack Showcase -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Technology Stack', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-sky-400/50 dark:bg-sky-600/50"></span>
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div
                    class="p-6 rounded-xl bg-gradient-to-br from-blue-600/10 to-blue-400/5 hover:scale-105 transition-transform duration-300">
                    <div class="w-16 h-16 bg-blue-600/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="font-oswald text-xl text-blue-600 dark:text-sky-400 mb-3">WordPress</h3>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Custom theme built from scratch with optimized performance and SEO-friendly structure.
                    </p>
                </div>

                <div
                    class="p-6 rounded-xl bg-gradient-to-br from-teal-500/10 to-teal-400/5 hover:scale-105 transition-transform duration-300">
                    <div class="w-16 h-16 bg-teal-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h12a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm4 2a1 1 0 000 2h2a1 1 0 100-2H7z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="font-oswald text-xl text-teal-600 dark:text-teal-400 mb-3">Tailwind CSS</h3>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Utility-first CSS framework for rapid UI development with mobile-first responsive design.
                    </p>
                </div>

                <div
                    class="p-6 rounded-xl bg-gradient-to-br from-purple-500/10 to-purple-400/5 hover:scale-105 transition-transform duration-300">
                    <div class="w-16 h-16 bg-purple-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="font-oswald text-xl text-purple-600 dark:text-violet-400 mb-3">AlpineJS</h3>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Lightweight JavaScript framework for reactive components and interactive UI elements.
                    </p>
                </div>

                <div
                    class="p-6 rounded-xl bg-gradient-to-br from-green-500/10 to-green-400/5 hover:scale-105 transition-transform duration-300">
                    <div class="w-16 h-16 bg-green-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="font-oswald text-xl text-green-600 dark:text-emerald-400 mb-3">GSAP</h3>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Professional-grade animation library for smooth, performant transitions and effects.
                    </p>
                </div>

                <div
                    class="p-6 rounded-xl bg-gradient-to-br from-orange-500/10 to-orange-400/5 hover:scale-105 transition-transform duration-300">
                    <div class="w-16 h-16 bg-orange-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z">
                            </path>
                            <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z"></path>
                            <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z"></path>
                        </svg>
                    </div>
                    <h3 class="font-oswald text-xl text-orange-600 dark:text-amber-400 mb-3">MySQL</h3>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Optimized database structure for trader evaluations, progress tracking, and analytics.
                    </p>
                </div>

                <div
                    class="p-6 rounded-xl bg-gradient-to-br from-indigo-500/10 to-indigo-400/5 hover:scale-105 transition-transform duration-300">
                    <div class="w-16 h-16 bg-indigo-500/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="font-oswald text-xl text-indigo-600 dark:text-indigo-400 mb-3">Custom APIs</h3>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        RESTful APIs for trader authentication, evaluation management, and payout processing.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-sky-400">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-nico text-4xl md:text-5xl text-white mb-6">
                Ready to Build Your Trading Platform?
            </h2>
            <p class="font-manrope text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Leverage my expertise to create a modern, scalable trading platform with custom evaluations and seamless
                user experience. Let's turn your vision into reality.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
                    class="px-8 py-3 bg-white text-blue-600 rounded-full font-manrope text-lg hover:scale-105 transform transition-all duration-300 cursor-pointer">
                    Start Your Project
                </a>
                <a href="https://darkcyan-chamois-734702.hostingersite.com" target="_blank"
                    class="px-8 py-3 border-2 border-white text-white rounded-full font-manrope text-lg hover:bg-white/10 hover:-translate-y-0.5 transition-all duration-300 cursor-pointer">
                    Try Live Demo
                </a>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Counter Animation
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const updateCounter = () => {
            current += step;
            if (current < target) {
                counter.textContent = Math.floor(current).toLocaleString();
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target.toLocaleString();
            }
        };

        updateCounter();
    });

    // Tab Switching
    const tabButtons = document.querySelectorAll('[data-tab]');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetTab = button.getAttribute('data-tab');

            // Remove active class from all buttons
            tabButtons.forEach(btn => {
                btn.classList.remove('bg-blue-600', 'text-white', 'tab-active');
                btn.classList.add('bg-gray-200', 'text-gray-700');
            });

            // Add active class to clicked button
            button.classList.remove('bg-gray-200', 'text-gray-700');
            button.classList.add('bg-blue-600', 'text-white', 'tab-active');

            // Hide all tab contents
            tabContents.forEach(content => {
                content.classList.remove('active');
                content.classList.add('hidden');
            });

            // Show target tab content
            const targetContent = document.getElementById(targetTab);
            if (targetContent) {
                targetContent.classList.remove('hidden');
                targetContent.classList.add('active');
            }
        });
    });
});
</script>

<?php get_footer();