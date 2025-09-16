<?php
/**
 * The template for displaying the VMS project page
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
                <h1 class="font-nico text-5xl md:text-7xl uppercase tracking-wide text-center 
                    text-cyber-blue dark:text-cyber-cyan mb-6 animate-pulse">
                    Visitor Management System
                </h1>
                <p
                    class="font-manrope text-xl text-center text-text-light-muted dark:text-text-dark-muted max-w-3xl mx-auto mb-8">
                    A comprehensive VMS built with WordPress, PHP, MySQL, and JavaScript. Real-time tracking, secure
                    authentication, and intuitive dashboards for modern facilities.
                </p>

                <!-- Tech Stack Pills -->
                <div class="flex flex-wrap justify-center gap-3 mb-8">
                    <span
                        class="px-4 py-2 rounded-full bg-cyber-blue/20 text-cyber-blue dark:bg-cyber-cyan/20 dark:text-cyber-cyan font-manrope text-sm border border-cyber-blue/30">PHP
                        8.2</span>
                    <span
                        class="px-4 py-2 rounded-full bg-cyber-coral/20 text-cyber-coral dark:bg-cyber-pink/20 dark:text-cyber-pink font-manrope text-sm border border-cyber-coral/30">MySQL</span>
                    <span
                        class="px-4 py-2 rounded-full bg-teal-500/20 text-teal-600 dark:text-teal-400 font-manrope text-sm border border-teal-500/30">JavaScript</span>
                    <span
                        class="px-4 py-2 rounded-full bg-purple-500/20 text-purple-600 dark:text-purple-400 font-manrope text-sm border border-purple-500/30">Tailwind</span>
                    <span
                        class="px-4 py-2 rounded-full bg-green-500/20 text-green-600 dark:text-green-400 font-manrope text-sm border border-green-500/30">WordPress</span>
                </div>

                <div class="flex justify-center gap-4 z-10 relative">
                    <button x-on:click="window.open('https://vms.nyericlub.co.ke', '_blank')"
                        class="px-8 py-3 rounded-full bg-gradient-to-r from-cyber-blue to-cyber-coral            dark:from-cyber-cyan dark:to-cyber-pink text-white font-manrope text-lg hover:scale-105 transform transition-all duration-300 drop-shadow-cyber-cyan hover:drop-shadow-2xl cursor-pointer">
                        Live Demo
                    </button>

                    <button x-on:click="window.open('https://github.com/wyllymk/vms', '_blank')"
                        class="px-8 py-3 rounded-full border-2 border-cyber-cyan text-cyber-blue dark:text-cyber-cyan hover:bg-cyber-cyan/20 relative overflow-hidden transition-all duration-300 hover:-translate-y-0.5 hover:shadow-[0_10px_25px_rgba(0,0,0,0.15)] font-manrope text-lg cursor-pointer">
                        View Code
                    </button>

                    <button x-on:click="window.location.href='<?php echo esc_url( home_url( '/contact' ) ); ?>'"
                        class="px-8 py-3 rounded-full border-2 border-cyber-coral text-cyber-coral  dark:text-cyber-pink hover:bg-cyber-coral/20 relative overflow-hidden transition-all duration-300 hover:-translate-y-0.5 hover:shadow-[0_10px_25px_rgba(0,0,0,0.15)] font-manrope text-lg cursor-pointer">
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
                    <div class="text-4xl font-nico text-cyber-blue dark:text-cyber-cyan mb-2 counter" data-target="500">
                        0</div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Daily Visitors Tracked
                    </div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-cyber-coral/10 to-cyber-pink/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-cyber-coral dark:text-cyber-pink mb-2 counter"
                        data-target="99.8">0</div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">% System Uptime</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-teal-500/10 to-green-500/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-teal-600 dark:text-teal-400 mb-2 counter" data-target="15">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Active Organizations</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-purple-500/10 to-indigo-500/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-purple-600 dark:text-purple-400 mb-2 counter" data-target="2">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Seconds Avg Check-in</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section with Interactive Demo -->
    <section class="overview-section py-20">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-5 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'System Overview', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>

            <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                <div class="space-y-6">
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted text-lg">
                        A modern visitor management solution designed for corporate offices, co-working spaces, and
                        facilities requiring secure visitor tracking. Built with performance and security as core
                        principles.
                    </p>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        The system handles everything from visitor registration and host notifications to real-time
                        analytics and compliance reporting. Features include badge printing, photo capture, and
                        automated workflows.
                    </p>

                    <!-- Core Features List -->
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-cyber-cyan rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">Real-time visitor
                                tracking and analytics</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-cyber-coral rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">Automated host
                                notifications via email/SMS</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">Digital badge
                                printing and photo capture</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">Compliance
                                reporting and audit trails</span>
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
                            <div class="ml-4 text-gray-400 text-sm font-mono">vms-dashboard.local</div>
                        </div>

                        <!-- Mock Dashboard Interface -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 space-y-4">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-gray-900 dark:text-white">Today's Visitors</h3>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">23
                                    Active</span>
                            </div>

                            <div class="grid grid-cols-3 gap-4">
                                <div class="bg-cyber-blue/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-cyber-blue">47</div>
                                    <div class="text-xs text-gray-600">Check-ins</div>
                                </div>
                                <div class="bg-cyber-coral/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-cyber-coral">24</div>
                                    <div class="text-xs text-gray-600">Check-outs</div>
                                </div>
                                <div class="bg-teal-500/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-teal-600">12</div>
                                    <div class="text-xs text-gray-600">VIP</div>
                                </div>
                            </div>

                            <!-- Mock visitor list -->
                            <div class="space-y-2">
                                <div class="flex items-center gap-3 p-2 bg-gray-50 dark:bg-gray-700 rounded">
                                    <div class="w-8 h-8 bg-cyber-cyan rounded-full"></div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium">John Doe</div>
                                        <div class="text-xs text-gray-500">Meeting with Sarah</div>
                                    </div>
                                    <div class="text-xs text-green-600">Active</div>
                                </div>
                                <div class="flex items-center gap-3 p-2 bg-gray-50 dark:bg-gray-700 rounded">
                                    <div class="w-8 h-8 bg-cyber-coral rounded-full"></div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium">Jane Smith</div>
                                        <div class="text-xs text-gray-500">Delivery - Reception</div>
                                    </div>
                                    <div class="text-xs text-gray-500">Checked out</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating indicators -->
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
                            <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">Frontend Layer
                            </h3>
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">HTML5, CSS3,
                                JavaScript, Tailwind, AlpineJS for responsive UI</p>
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
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">WordPress,
                                PHP 8.2, MVC Architecture, RESTful APIs
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
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">MySQL 8.0,
                                Optimized queries, Data encryption</p>
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
                    <h4 class="font-oswald text-lg text-cyber-blue dark:text-cyber-cyan mb-2">Security First</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">End-to-end
                        encryption, secure authentication, role-based access control</p>
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
                    <h4 class="font-oswald text-lg text-cyber-coral dark:text-cyber-pink mb-2">Multi-tenant</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">Support multiple
                        organizations with isolated data and custom branding</p>
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
                    <h4 class="font-oswald text-lg text-teal-600 dark:text-teal-400 mb-2">Real-time Analytics</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">Live dashboards,
                        visitor trends, automated reports and insights</p>
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
                    <h4 class="font-oswald text-lg text-purple-600 dark:text-purple-400 mb-2">High Performance</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">Optimized queries,
                        caching layer, sub-second response times</p>
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
                                <h3 class="font-oswald text-xl text-red-500 mb-3">Challenge: Real-time Updates</h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Multiple reception desks needed instant visitor status updates. Traditional page
                                    refreshes created poor user experience and data inconsistency issues.
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
                                <h3 class="font-oswald text-xl text-green-500 mb-3">Solution: WebSocket Integration</h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Implemented WebSocket connections with fallback polling. Real-time dashboard updates
                                    across all devices. Custom event broadcasting for visitor status changes.
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
                                <h3 class="font-oswald text-xl text-red-500 mb-3">Challenge: Photo & Badge Printing</h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Browser security restrictions prevented direct camera access. Thermal printer
                                    integration required specific formatting and print job management.
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
                                <h3 class="font-oswald text-xl text-green-500 mb-3">Solution: Canvas API & Print Service
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Built HTML5 Canvas photo capture with getUserMedia API. Created custom print service
                                    with ESC/POS commands for thermal printers. Automated badge templates.
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
                                <h3 class="font-oswald text-xl text-red-500 mb-3">Challenge: Multi-tenant Architecture
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Different organizations needed isolated data, custom branding, and unique workflows.
                                    Single codebase needed to serve multiple clients securely.
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
                                <h3 class="font-oswald text-xl text-green-500 mb-3">Solution: Dynamic Configuration
                                    System</h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Created tenant-aware middleware with database isolation. Dynamic theme engine for
                                    custom branding. Configurable workflow engine for different business rules.
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
                        data-tab="dashboard">
                        Dashboard
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="checkin">
                        Check-in Flow
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="analytics">
                        Analytics
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="settings">
                        Admin Panel
                    </button>
                </div>

                <!-- Feature Content -->
                <div class="relative">
                    <!-- Dashboard Tab -->
                    <div class="tab-content active" id="dashboard">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-cyber-blue dark:text-cyber-cyan">Real-time
                                    Dashboard</h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Live visitor tracking with instant updates. Monitor check-ins, view visitor photos,
                                    and manage host notifications from one central location.
                                </p>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">Live status updates</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-cyber-cyan rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">Photo verification</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-cyber-coral rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">Host notifications</span>
                                    </div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl p-6 transform hover:scale-105 transition-all duration-300">
                                    <div class="flex justify-between items-center mb-6">
                                        <h4 class="font-bold text-gray-900 dark:text-white">Live Dashboard</h4>
                                        <div class="flex gap-2">
                                            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                            <span class="text-sm text-green-600">Live</span>
                                        </div>
                                    </div>
                                    <div class="space-y-4 text-gray-900 dark:text-white">
                                        <div class="flex justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <span class="text-sm">Active Visitors</span>
                                            <span class="font-bold text-cyber-blue counter" data-target="23">0</span>
                                        </div>
                                        <div class="flex justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <span class="text-sm">Today's Check-ins</span>
                                            <span class="font-bold text-cyber-coral counter" data-target="47">0</span>
                                        </div>
                                        <div class="flex justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <span class="text-sm">Pending Approvals</span>
                                            <span class="font-bold text-yellow-600 counter" data-target="3">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Check-in Tab -->
                    <div class="tab-content hidden" id="checkin">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-cyber-coral dark:text-cyber-pink">Streamlined
                                    Check-in</h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Simple 3-step process gets visitors checked in quickly. Photo capture, host
                                    selection, and badge printing happen automatically.
                                </p>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-cyber-coral/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-cyber-coral">1</span>
                                        </div>
                                        <span class="font-manrope">Enter visitor details</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-cyber-coral/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-cyber-coral">2</span>
                                        </div>
                                        <span class="font-manrope">Capture photo & select host</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-cyber-coral/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-cyber-coral">3</span>
                                        </div>
                                        <span class="font-manrope">Print badge & notify host</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-xl">
                                    <div class="flex items-center gap-3 mb-4">
                                        <div
                                            class="w-12 h-12 bg-cyber-coral/20 rounded-full flex items-center justify-center">
                                            <svg class="w-6 h-6 text-cyber-coral" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <h4 class="font-bold text-gray-900 dark:text-white">New Visitor Check-in</h4>
                                    </div>
                                    <div class="space-y-3 text-gray-900 dark:text-white">
                                        <input type="text" placeholder="Full Name"
                                            class="w-full p-3 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
                                        <input type="email" placeholder="Email Address"
                                            class="w-full p-3 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
                                        <select
                                            class="w-full p-3 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
                                            <option>Select Host</option>
                                            <option>Sarah Johnson - Marketing</option>
                                            <option>Mike Chen - Engineering</option>
                                        </select>
                                        <button
                                            class="w-full py-3 bg-gradient-to-r from-cyber-coral to-cyber-pink text-white rounded-lg font-manrope hover:scale-105 transition-transform">
                                            Start Check-in Process
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Analytics Tab -->
                    <div class="tab-content hidden" id="analytics">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-teal-600 dark:text-teal-400">Powerful Analytics
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Comprehensive insights into visitor patterns, peak hours, and facility usage. Export
                                    reports for compliance and planning.
                                </p>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="p-4 bg-teal-500/10 rounded-lg text-center">
                                        <div class="text-2xl font-bold text-teal-600">1,247</div>
                                        <div class="text-sm text-gray-600">Monthly Visitors</div>
                                    </div>
                                    <div class="p-4 bg-purple-500/10 rounded-lg text-center">
                                        <div class="text-2xl font-bold text-purple-600">2.3m</div>
                                        <div class="text-sm text-gray-600">Avg Visit Duration</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-xl">
                                <h4 class="font-bold text-gray-900 dark:text-white mb-4">Visitor Trends</h4>
                                <div class="space-y-4">
                                    <!-- Mock Chart -->
                                    <div
                                        class="h-32 bg-gradient-to-r from-teal-100 to-purple-100 dark:from-teal-900 dark:to-purple-900 rounded-lg flex items-end justify-around p-4">
                                        <div class="w-8 bg-teal-500 rounded-t" style="height: 60%;"></div>
                                        <div class="w-8 bg-teal-500 rounded-t" style="height: 80%;"></div>
                                        <div class="w-8 bg-teal-500 rounded-t" style="height: 40%;"></div>
                                        <div class="w-8 bg-teal-500 rounded-t" style="height: 90%;"></div>
                                        <div class="w-8 bg-teal-500 rounded-t" style="height: 70%;"></div>
                                        <div class="w-8 bg-teal-500 rounded-t" style="height: 50%;"></div>
                                        <div class="w-8 bg-teal-500 rounded-t" style="height: 85%;"></div>
                                    </div>
                                    <div class="flex justify-between text-xs text-gray-500">
                                        <span>Mon</span>
                                        <span>Tue</span>
                                        <span>Wed</span>
                                        <span>Thu</span>
                                        <span>Fri</span>
                                        <span>Sat</span>
                                        <span>Sun</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Settings Tab -->
                    <div class="tab-content hidden" id="settings">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-purple-600 dark:text-purple-400">Admin Control</h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Complete administrative control with user management, system settings, and
                                    customization options. Role-based permissions ensure security.
                                </p>
                                <div class="space-y-3">
                                    <div
                                        class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <span class="font-manrope text-sm">User Management</span>
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
                                        <span class="font-manrope text-sm">Custom Branding</span>
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
                                        <span class="font-manrope text-sm">API Integration</span>
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
                                <h4 class="font-bold text-gray-900 dark:text-white mb-4">System Configuration</h4>
                                <div class="space-y-4">
                                    <div
                                        class="flex justify-between items-center p-3 border rounded-lg dark:border-gray-600">
                                        <span class="font-manrope text-sm">Auto Check-out</span>
                                        <div class="w-12 h-6 bg-cyber-blue rounded-full relative">
                                            <div
                                                class="w-5 h-5 bg-white rounded-full absolute top-0.5 right-0.5 transition-transform">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-between items-center p-3 border rounded-lg dark:border-gray-600">
                                        <span class="font-manrope text-sm">Photo Required</span>
                                        <div class="w-12 h-6 bg-cyber-blue rounded-full relative">
                                            <div
                                                class="w-5 h-5 bg-white rounded-full absolute top-0.5 right-0.5 transition-transform">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-between items-center p-3 border rounded-lg dark:border-gray-600">
                                        <span class="font-manrope text-sm">Host Notifications</span>
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
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-cyber-blue to-cyber-coral dark:from-cyber-cyan dark:to-cyber-pink">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-nico text-4xl md:text-5xl text-white mb-6">
                Ready to Streamline Your Visitor Management?
            </h2>
            <p class="font-manrope text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Let's build a custom VMS solution for your organization. Secure, scalable, and tailored to your needs.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
                    class="px-8 py-3 bg-white text-cyber-blue rounded-full font-manrope text-lg hover:scale-105 transform transition-all duration-300 cursor-pointer">
                    Start Your Project
                </a>
                <a href="https://vms.nyericlub.co.ke" target="_blank"
                    class="px-8 py-3 border-2 border-white text-white rounded-full font-manrope text-lg hover:bg-white/10 transition-all duration-300 cursor-pointer">
                    Try Live Demo
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer();