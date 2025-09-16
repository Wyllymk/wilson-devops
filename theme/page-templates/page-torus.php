<?php
/**
 * The template for displaying the Torus Africa project page
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
                    Torus
                </h1>
                <p
                    class="font-manrope text-xl text-center text-text-light-muted dark:text-text-dark-muted max-w-3xl mx-auto mb-8">
                    A premier East African web design agency platform built with WordPress, custom theme, and modern JS.
                    Comprehensive services, agile processes, and client-focused solutions for innovative websites
                    worldwide.
                </p>

                <!-- Tech Stack Pills -->
                <div class="flex flex-wrap justify-center gap-3 mb-8">
                    <span
                        class="px-4 py-2 rounded-full bg-cyber-blue/20 text-cyber-blue dark:bg-cyber-cyan/20 dark:text-cyber-cyan font-manrope text-sm border border-cyber-blue/30">
                        WordPress
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-cyber-coral/20 text-cyber-coral dark:bg-cyber-pink/20 dark:text-cyber-pink font-manrope text-sm border border-cyber-coral/30">
                        Tailwind CSS
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-teal-500/20 text-teal-600 dark:text-teal-400 font-manrope text-sm border border-teal-500/30">
                        GSAP
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-purple-500/20 text-purple-600 dark:text-purple-400 font-manrope text-sm border border-purple-500/30">
                        AlpineJS
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-green-500/20 text-green-600 dark:text-green-400 font-manrope text-sm border border-green-500/30">
                        PHP
                    </span>
                </div>

                <div class="flex justify-center gap-4 z-10 relative">
                    <button x-on:click="window.open('https://torus.africa', '_blank')"
                        class="px-8 py-3 rounded-full bg-gradient-to-r from-cyber-blue to-cyber-coral            dark:from-cyber-cyan dark:to-cyber-pink text-white font-manrope text-lg hover:scale-105 transform transition-all duration-300 drop-shadow-cyber-cyan hover:drop-shadow-2xl cursor-pointer">
                        Live Site
                    </button>

                    <button x-on:click="window.open('https://github.com/wyllymk/torus', '_blank')"
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
                    <div class="text-4xl font-nico text-cyber-blue dark:text-cyber-cyan mb-2 counter" data-target="300">
                        0</div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Websites Delivered</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-cyber-coral/10 to-cyber-pink/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-cyber-coral dark:text-cyber-pink mb-2 counter" data-target="10">
                        0</div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Years in Business</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-teal-500/10 to-green-500/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-teal-600 dark:text-teal-400 mb-2 counter" data-target="99">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-dark-muted">% Client Satisfaction</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-purple-500/10 to-indigo-500/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-purple-600 dark:text-purple-400 mb-2 counter" data-target="50">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Industries Served</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview Section with Interactive Demo -->
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
                        A leading East African design agency platform empowering businesses with custom, responsive
                        websites. Built for creativity, reliability, and scalability with custom WordPress integrations.
                    </p>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        From service showcases and agile processes to client support and interactive
                        prototypes—everything streamlined for innovative web solutions.
                    </p>

                    <!-- Core Features List -->
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-cyber-cyan rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Custom WordPress themes & designs
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-cyber-coral rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Mobile-responsive & e-commerce sites
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                UI/UX design & prototypes
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Ongoing support & maintenance
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
                            <div class="ml-4 text-gray-400 text-sm font-mono">torus.africa</div>
                        </div>

                        <!-- Mock Dashboard Interface -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 space-y-4">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-gray-900 dark:text-white">Active Projects</h3>
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                                    150 Clients
                                </span>
                            </div>

                            <div class="grid grid-cols-3 gap-4">
                                <div class="bg-cyber-blue/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-cyber-blue">300+</div>
                                    <div class="text-xs text-gray-600">Websites Built</div>
                                </div>
                                <div class="bg-cyber-coral/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-cyber-coral">10Y</div>
                                    <div class="text-xs text-gray-600">Experience</div>
                                </div>
                                <div class="bg-teal-500/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-teal-600">99%</div>
                                    <div class="text-xs text-gray-600">Satisfaction</div>
                                </div>
                            </div>

                            <!-- Mock visitor list -->
                            <div class="space-y-2">
                                <div class="flex items-center gap-3 p-2 bg-gray-50 dark:bg-gray-700 rounded">
                                    <div class="w-8 h-8 bg-cyber-cyan rounded-full"></div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium">Corporate Site</div>
                                        <div class="text-xs text-gray-500">Live Launch</div>
                                    </div>
                                    <div class="text-xs text-green-600">Completed</div>
                                </div>
                                <div class="flex items-center gap-3 p-2 bg-gray-50 dark:bg-gray-700 rounded">
                                    <div class="w-8 h-8 bg-cyber-coral rounded-full"></div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium">E-commerce Build</div>
                                        <div class="text-xs text-gray-500">In Design</div>
                                    </div>
                                    <div class="text-xs text-gray-500">Active</div>
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
                            <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                                Frontend Layer
                            </h3>
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                Tailwind CSS, AlpineJS, GSAP for dynamic UIs & animations
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
                                WordPress, Custom Theme, PHP integrations for services & processes
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
                                mySQL, Optimized queries, Secure client data management
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
                    <h4 class="font-oswald text-lg text-cyber-blue dark:text-cyber-cyan mb-2">Responsive Design</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">Mobile-first
                        approach, cross-device compatibility, optimized for all screens</p>
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
                    <h4 class="font-oswald text-lg text-cyber-coral dark:text-cyber-pink mb-2">Agile Process</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Discovery to support phases, iterative development, client collaboration
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
                    <h4 class="font-oswald text-lg text-teal-600 dark:text-teal-400 mb-2">Custom Integrations</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        AWS, Hubspot, Figma workflows, seamless CMS integrations</p>
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
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Optimized for speed, accessibility, scalable for growing businesses
                    </p>
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
                                    Challenge: Custom Responsive Design
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Ensuring seamless mobile responsiveness across diverse devices and industries
                                    required advanced Tailwind utilities and testing.
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
                                    Solution: Tailwind & GSAP Integration
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Leveraged Tailwind for utility-first styling and GSAP for smooth animations,
                                    ensuring fluid experiences on all devices.
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
                                    Challenge: Interactive Prototypes
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Creating clickable animated prototypes for client reviews demanded lightweight JS
                                    without heavy plugins.
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
                                    Solution: AlpineJS & Figma Sync
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Implemented AlpineJS for reactive components and synced with Figma for rapid
                                    prototyping and feedback loops.
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
                                    Challenge: Scalable CMS Integrations
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Integrating with AWS and Hubspot while maintaining WordPress core required robust
                                    custom hooks and security.
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
                                    Solution: PHP Custom Hooks & AWS
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Developed secure PHP extensions with WP cron for integrations, ensuring scalability
                                    and data integrity.
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
                        data-tab="services">
                        Services
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="process">
                        Process
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="tools">
                        Tools
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="support">
                        Support
                    </button>
                </div>

                <!-- Feature Content -->
                <div class="relative">
                    <!-- Services Tab -->
                    <div class="tab-content active" id="services">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-cyber-blue dark:text-cyber-cyan">
                                    Web Design Services
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Comprehensive offerings from corporate sites to e-commerce, all custom-built for
                                    business growth.
                                </p>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">WordPress & custom themes</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-cyber-cyan rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">Mobile-responsive designs</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-cyber-coral rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">E-commerce solutions</span>
                                    </div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl p-6 transform hover:scale-105 transition-all duration-300">
                                    <div class="flex justify-between items-center mb-6">
                                        <h4 class="font-bold text-gray-900 dark:text-white">Service Catalog</h4>
                                        <div class="flex gap-2">
                                            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                            <span class="text-sm text-green-600">Live</span>
                                        </div>
                                    </div>
                                    <div class="space-y-4 text-gray-900 dark:text-white">
                                        <div class="flex justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <span class="text-sm">Corporate Websites</span>
                                            <span class="font-bold text-cyber-blue">Custom</span>
                                        </div>
                                        <div class="flex justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <span class="text-sm">E-commerce</span>
                                            <span class="font-bold text-cyber-coral">Full Stack</span>
                                        </div>
                                        <div class="flex justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                            <span class="text-sm">Landing Pages</span>
                                            <span class="font-bold text-yellow-600">Quick Launch</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Process Tab -->
                    <div class="tab-content hidden" id="process">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-cyber-coral dark:text-cyber-pink">
                                    Agile Design Process
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Structured phases from discovery to support, ensuring efficient and client-aligned
                                    development.
                                </p>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-cyber-coral/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-cyber-coral">1</span>
                                        </div>
                                        <span class="font-manrope">Discovery & Strategy</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-cyber-coral/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-cyber-coral">2</span>
                                        </div>
                                        <span class="font-manrope">Design & Prototype</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-cyber-coral/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-cyber-coral">3</span>
                                        </div>
                                        <span class="font-manrope">Development & Launch</span>
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
                                        <h4 class="font-bold text-gray-900 dark:text-white">Process Flow</h4>
                                    </div>
                                    <div class="space-y-3 text-gray-900 dark:text-white">
                                        <input type="text" placeholder="Project Brief"
                                            class="w-full p-3 border rounded-lg dark:bg-gray-700 dark:border-gray-600">
                                        <button
                                            class="w-full py-3 bg-gradient-to-r from-cyber-coral to-cyber-pink text-white rounded-lg font-manrope hover:scale-105 transition-transform">
                                            Start Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tools Tab -->
                    <div class="tab-content hidden" id="tools">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-teal-600 dark:text-teal-400">
                                    Development Tools
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    State-of-the-art stack including AWS, Figma, and GitHub for collaborative and
                                    efficient workflows.
                                </p>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="p-4 bg-teal-500/10 rounded-lg text-center">
                                        <div class="text-2xl font-bold text-teal-600">AWS</div>
                                        <div class="text-sm text-gray-600">Cloud</div>
                                    </div>
                                    <div class="p-4 bg-purple-500/10 rounded-lg text-center">
                                        <div class="text-2xl font-bold text-purple-600">Figma</div>
                                        <div class="text-sm text-gray-600">Design</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-xl">
                                <h4 class="font-bold text-gray-900 dark:text-white mb-4">Tool Integration</h4>
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
                                        <span>Phase 1</span>
                                        <span>Phase 2</span>
                                        <span>Phase 3</span>
                                        <span>Phase 4</span>
                                        <span>Phase 5</span>
                                        <span>Phase 6</span>
                                        <span>Phase 7</span>
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
                                    Client Support
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Ongoing maintenance, performance monitoring, and training for sustained website
                                    success.
                                </p>
                                <div class="space-y-3">
                                    <div
                                        class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <span class="font-manrope text-sm">Maintenance</span>
                                        <div
                                            class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center">
                                            <span class="text-white text-xs">Ongoing</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <span class="font-manrope text-sm">Monitoring</span>
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
                                        <span class="font-manrope text-sm">Training Provided</span>
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
                                    Support Dashboard
                                </h4>
                                <div class="space-y-4">
                                    <div
                                        class="flex justify-between items-center p-3 border rounded-lg dark:border-gray-600">
                                        <span class="font-manrope text-sm">Auto-Updates</span>
                                        <div class="w-12 h-6 bg-cyber-blue rounded-full relative">
                                            <div
                                                class="w-5 h-5 bg-white rounded-full absolute top-0.5 right-0.5 transition-transform">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-between items-center p-3 border rounded-lg dark:border-gray-600">
                                        <span class="font-manrope text-sm">Alerts</span>
                                        <div class="w-12 h-6 bg-cyber-blue rounded-full relative">
                                            <div
                                                class="w-5 h-5 bg-white rounded-full absolute top-0.5 right-0.5 transition-transform">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-between items-center p-3 border rounded-lg dark:border-gray-600">
                                        <span class="font-manrope text-sm">CMS: WordPress</span>
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
                Ready to Innovate Your Web Presence?
            </h2>
            <p class="font-manrope text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Let's build a custom website like Torus Africa. Creative, responsive, and growth-oriented for your
                business.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
                    class="px-8 py-3 bg-white text-cyber-blue rounded-full font-manrope text-lg hover:scale-105 transform transition-all duration-300 cursor-pointer">
                    Start Your Project
                </a>
                <a href="https://torus.africa" target="_blank"
                    class="px-8 py-3 border-2 border-white text-white rounded-full font-manrope text-lg hover:bg-white/10 hover:-translate-y-0.5 transition-all duration-300 cursor-pointer">
                    Try Live Demo
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer();