<?php
/**
 * Template Name: PremiaBet Portfolio Showcase
 * Description: Portfolio page showcasing PremiaBet sports betting prop platform
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
        class="hero-section pb-24 pt-34 relative overflow-hidden bg-gradient-to-br from-emerald-900/20 via-green-800/10 to-teal-700/10 dark:from-emerald-500/10 dark:via-green-600/10 dark:to-teal-500/10">
        <div class="container mx-auto px-4">
            <div class="relative z-10">
                <div class="flex justify-center items-center mb-4">
                    <span class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted mr-2">Featured
                        Project</span>
                    <div class="flex gap-1">
                        <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.176c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.49 9.397c-.783-.57-.38-1.81.588-1.81h4.176a1 1 0 00.95-.69l1.286-3.97z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.176c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.49 9.397c-.783-.57-.38-1.81.588-1.81h4.176a1 1 0 00.95-.69l1.286-3.97z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.176c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.49 9.397c-.783-.57-.38-1.81.588-1.81h4.176a1 1 0 00.95-.69l1.286-3.97z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.176c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.49 9.397c-.783-.57-.38-1.81.588-1.81h4.176a1 1 0 00.95-.69l1.286-3.97z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.176c.969 0 1.371 1.24.588 1.81l-3.375 2.453a1 1 0 00-.364 1.118l1.286 3.97c.3.921-.755 1.688-1.54 1.118l-3.375-2.453a1 1 0 00-1.175 0l-3.375 2.453c-.784.57-1.838-.197-1.54-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.49 9.397c-.783-.57-.38-1.81.588-1.81h4.176a1 1 0 00.95-.69l1.286-3.97z">
                            </path>
                        </svg>
                    </div>
                    <span class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted ml-2">Sports
                        Betting Platform</span>
                </div>
                <h1 class="font-nico text-5xl md:text-7xl uppercase tracking-wide text-center 
                    text-emerald-600 dark:text-emerald-400 mb-6 animate-pulse">
                    Premia Bet
                </h1>
                <p
                    class="font-manrope text-xl text-center text-text-light-muted dark:text-text-dark-muted max-w-3xl mx-auto mb-8">
                    A sports betting prop firm platform built with WordPress, WooCommerce, and modern web technologies.
                    Features multilingual support (English/Portuguese), video backgrounds, dynamic challenge selection,
                    and automated trader onboarding.
                </p>

                <!-- Tech Stack Pills -->
                <div class="flex flex-wrap justify-center gap-3 mb-8">
                    <span
                        class="px-4 py-2 rounded-full bg-emerald-600/20 text-emerald-600 dark:bg-emerald-400/20 dark:text-emerald-400 font-manrope text-sm border border-emerald-600/30">
                        WordPress
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-green-600/20 text-green-600 dark:bg-green-400/20 dark:text-green-400 font-manrope text-sm border border-green-600/30">
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
                        class="px-4 py-2 rounded-full bg-cyan-500/20 text-cyan-600 dark:text-cyan-400 font-manrope text-sm border border-cyan-500/30">
                        AlpineJS
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-indigo-500/20 text-indigo-600 dark:text-indigo-400 font-manrope text-sm border border-indigo-500/30">
                        Gtranslate
                    </span>
                </div>

                <div class="flex justify-center gap-4 z-10 relative">
                    <button x-on:click="window.open('https://premiabet.org', '_blank')"
                        class="px-8 py-3 rounded-full bg-gradient-to-r from-emerald-600 to-green-600 dark:from-emerald-500 dark:to-green-500 text-white font-manrope text-lg hover:scale-105 transform transition-all duration-300 drop-shadow-2xl cursor-pointer">
                        Live Site
                    </button>
                    <button x-on:click="window.location.href='<?php echo esc_url( home_url( '/contact' ) ); ?>'"
                        class="px-8 py-3 rounded-full border-2 border-emerald-600 text-emerald-600 dark:text-emerald-400 hover:bg-emerald-600/20 relative overflow-hidden transition-all duration-300 hover:-translate-y-0.5 hover:shadow-[0_10px_25px_rgba(0,0,0,0.15)] font-manrope text-lg cursor-pointer">
                        Hire Me
                    </button>
                </div>
            </div>

            <!-- Animated Background Elements -->
            <div class="absolute inset-0 z-0">
                <div class="absolute top-20 left-10 w-32 h-32 bg-emerald-500/10 rounded-full animate-bounce"
                    style="animation-delay: 0s;"></div>
                <div class="absolute top-40 right-20 w-24 h-24 bg-green-400/10 rounded-full animate-bounce"
                    style="animation-delay: 1s;"></div>
                <div class="absolute bottom-20 left-1/4 w-20 h-20 bg-teal-500/10 rounded-full animate-bounce"
                    style="animation-delay: 2s;"></div>
                <div class="absolute bottom-40 right-1/3 w-28 h-28 bg-cyan-400/10 rounded-full animate-bounce"
                    style="animation-delay: 3s;"></div>
            </div>
        </div>
    </section>

    <!-- Key Metrics Section -->
    <section class="py-20 bg-cyber-dark/5 dark:bg-cyber-light/5">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-emerald-600/10 to-green-600/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-emerald-600 dark:text-emerald-400 mb-2 counter"
                        data-target="32">0</div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Sports Leagues</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-green-600/10 to-teal-600/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-green-600 dark:text-green-400 mb-2 counter" data-target="1000">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Markets Available</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-teal-500/10 to-cyan-500/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-teal-600 dark:text-teal-400 mb-2 counter" data-target="2">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Languages</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-cyan-500/10 to-indigo-500/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-cyan-600 dark:text-cyan-400 mb-2 counter" data-target="48">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Hour Setup</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Platform Overview Section -->
    <section class="overview-section py-20">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-5 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    Platform Overview
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-emerald-400/50 dark:bg-emerald-600/50"></span>
            </h2>

            <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                <div class="space-y-6">
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted text-lg">
                        PremiaBet is a sports betting prop firm platform where skilled players get funded to play on
                        their favorite sports. Built entirely with custom WordPress theme, WooCommerce integrations, and
                        modern JavaScript frameworks.
                    </p>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        The platform features immersive video backgrounds, smooth GSAP animations, dynamic pricing
                        tables, multi-step evaluation processes, and full Portuguese translation via Gtranslate for
                        global
                        accessibility.
                    </p>

                    <!-- Core Features List -->
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Video background hero section with smooth parallax effects
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Custom WooCommerce challenge checkout flow
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Dynamic pricing calculator with real-time updates
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-cyan-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Bilingual support (English/Portuguese) with Gtranslate
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
                            <div class="ml-4 text-gray-400 text-sm font-mono">premiabet.org</div>
                        </div>

                        <!-- Mock Dashboard Interface -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 space-y-4">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-gray-900 dark:text-white">Challenge Selection</h3>
                                <span class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-sm">
                                    Live
                                </span>
                            </div>

                            <div class="grid grid-cols-3 gap-4">
                                <div class="bg-emerald-600/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-emerald-600">$10K</div>
                                    <div class="text-xs text-gray-600">Account Size</div>
                                </div>
                                <div class="bg-green-600/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-green-600">20%</div>
                                    <div class="text-xs text-gray-600">Profit Target</div>
                                </div>
                                <div class="bg-teal-500/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-teal-600">80%</div>
                                    <div class="text-xs text-gray-600">Your Split</div>
                                </div>
                            </div>

                            <!-- Mock Challenge Steps -->
                            <div class="space-y-2">
                                <div class="flex items-center gap-3 p-2 bg-gray-50 dark:bg-gray-700 rounded">
                                    <div
                                        class="w-8 h-8 bg-emerald-500 rounded-full flex items-center justify-center text-white text-sm font-bold">
                                        1</div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium">Phase 1 Evaluation</div>
                                        <div class="text-xs text-gray-500">20% profit target</div>
                                    </div>
                                    <div class="text-xs text-green-600">Active</div>
                                </div>
                                <div class="flex items-center gap-3 p-2 bg-gray-50 dark:bg-gray-700 rounded opacity-50">
                                    <div
                                        class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center text-white text-sm font-bold">
                                        2</div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium">Phase 2 Evaluation</div>
                                        <div class="text-xs text-gray-500">20% profit target</div>
                                    </div>
                                    <div class="text-xs text-gray-400">Locked</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Indicators -->
                    <div class="absolute -top-4 right-0 md:-right-4 w-8 h-8 bg-emerald-500 rounded-full animate-ping">
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-green-500 rounded-full animate-pulse"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Features Section -->
    <section class="py-20 bg-cyber-dark/10 dark:bg-cyber-light/10">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    Technical Features
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-emerald-400/50 dark:bg-emerald-600/50"></span>
            </h2>

            <!-- Features Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Feature 1 -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-600/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-emerald-600 dark:text-emerald-400 mb-2">Video Background Hero
                    </h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Immersive autoplay video background with optimized loading and fallback images for mobile
                        devices.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-green-600/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"></path>
                            <path
                                d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-green-600 dark:text-green-400 mb-2">Dynamic Pricing Tables</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Interactive account size selector with real-time price updates and challenge rule displays.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-teal-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.121l1.027 1.027a4 4 0 01-2.171.102l-.47-.1a4 4 0 01-2.565-6.438l1.027-1.027A3 3 0 009 8.172z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-teal-600 dark:text-teal-400 mb-2">GSAP Animations</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Smooth scroll animations, counter animations, and element transitions powered by GSAP.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a18.87 18.87 0 01-1.724 4.78c.29.354.596.696.914 1.026a1 1 0 11-1.44 1.389c-.188-.196-.373-.396-.554-.6a19.098 19.098 0 01-3.107 3.567 1 1 0 01-1.334-1.49 17.087 17.087 0 003.13-3.733 18.992 18.992 0 01-1.487-2.494 1 1 0 111.79-.89c.234.47.489.928.764 1.372.417-.934.752-1.913.997-2.927H3a1 1 0 110-2h3V3a1 1 0 011-1zm6 6a1 1 0 01.894.553l2.991 5.982a.869.869 0 01.02.037l.99 1.98a1 1 0 11-1.79.895L15.383 16h-4.764l-.724 1.447a1 1 0 11-1.788-.894l.99-1.98.019-.038 2.99-5.982A1 1 0 0113 8zm-1.382 6h2.764L13 11.236 11.618 14z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-cyan-600 dark:text-cyan-400 mb-2">Multilingual Ready</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Full English and Portuguese translations with Gtranslate, supporting global trader base.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-indigo-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-indigo-600 dark:text-indigo-400 mb-2">Responsive Design</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Mobile-first Tailwind CSS design with perfect responsive layouts across all devices.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                            <path fill-rule="evenodd"
                                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-purple-600 dark:text-purple-400 mb-2">WooCommerce Integration
                    </h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Custom checkout flows, challenge products, and automated order processing for traders.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Challenges Section -->
    <section class="challenges-section py-20">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    Development Journey
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-emerald-400/50 dark:bg-emerald-600/50"></span>
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
                                    Challenge: Video Performance
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Hero video backgrounds needed to load fast without impacting page speed scores or
                                    mobile experience.
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
                                    Solution: Lazy Loading & Compression
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Implemented lazy loading with poster images, compressed video files, and
                                    mobile-specific fallbacks for optimal performance.
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
                                    Challenge: Dynamic Pricing Logic
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Challenge prices varied by account size and evaluation type, requiring complex
                                    calculation logic with instant updates.
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
                                    Solution: AlpineJS State Management
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Built reactive pricing calculator with AlpineJS, storing price matrices and updating
                                    UI instantly on user selection.
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
                                    Challenge: Portuguese Translation
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Site needed full Portuguese translation including dynamic content, WooCommerce
                                    strings, and custom elements.
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
                                    Solution: Gtranslate Integration
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Configured Gtranslate for complete bilingual support, translated all strings, and
                                    implemented language switcher in navigation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features Showcase -->
    <section class="py-20 bg-gradient-to-br from-emerald-50 to-green-50 dark:from-gray-900 dark:to-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    Key Features Showcase
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-emerald-400/50 dark:bg-emerald-600/50"></span>
            </h2>

            <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Feature 1: Pricing System -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-2xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-emerald-500/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-emerald-600 dark:text-emerald-400">Smart Pricing System</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Interactive pricing tables with account size buttons ($1K to $100K) and evaluation type toggles
                        (2-Step/3-Step). Prices update instantly with smooth transitions.
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div>
                            <span>Real-time price calculations</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div>
                            <span>Dynamic challenge rules display</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div>
                            <span>Smooth UI transitions with GSAP</span>
                        </div>
                    </div>
                </div>

                <!-- Feature 2: Video Background -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-2xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-green-500/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-green-600 dark:text-green-400">Immersive Video Hero</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Full-screen autoplay video background with overlay gradients, optimized for web with compressed
                        formats and mobile fallbacks.
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-1.5 h-1.5 bg-green-500 rounded-full"></div>
                            <span>Lazy loading with poster images</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-1.5 h-1.5 bg-green-500 rounded-full"></div>
                            <span>Mobile-optimized playback</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-1.5 h-1.5 bg-green-500 rounded-full"></div>
                            <span>Gradient overlays for readability</span>
                        </div>
                    </div>
                </div>

                <!-- Feature 3: Smooth Animations -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-2xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-teal-500/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-teal-600 dark:text-teal-400">GSAP Animations</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Scroll-triggered animations, counter animations for stats, and smooth element transitions
                        throughout the site.
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-1.5 h-1.5 bg-teal-500 rounded-full"></div>
                            <span>Counter animations on scroll</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-1.5 h-1.5 bg-teal-500 rounded-full"></div>
                            <span>Fade-in effects for sections</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-1.5 h-1.5 bg-teal-500 rounded-full"></div>
                            <span>Smooth parallax scrolling</span>
                        </div>
                    </div>
                </div>

                <!-- Feature 4: Multilingual -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-2xl">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-cyan-500/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a18.87 18.87 0 01-1.724 4.78c.29.354.596.696.914 1.026a1 1 0 11-1.44 1.389c-.188-.196-.373-.396-.554-.6a19.098 19.098 0 01-3.107 3.567 1 1 0 01-1.334-1.49 17.087 17.087 0 003.13-3.733 18.992 18.992 0 01-1.487-2.494 1 1 0 111.79-.89c.234.47.489.928.764 1.372.417-.934.752-1.913.997-2.927H3a1 1 0 110-2h3V3a1 1 0 011-1zm6 6a1 1 0 01.894.553l2.991 5.982a.869.869 0 01.02.037l.99 1.98a1 1 0 11-1.79.895L15.383 16h-4.764l-.724 1.447a1 1 0 11-1.788-.894l.99-1.98.019-.038 2.99-5.982A1 1 0 0113 8zm-1.382 6h2.764L13 11.236 11.618 14z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-cyan-600 dark:text-cyan-400">Bilingual Platform</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Complete English and Portuguese translations using GTranslate, with language switcher in header
                        navigation.
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-1.5 h-1.5 bg-cyan-500 rounded-full"></div>
                            <span>Full GTranslate integration</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-1.5 h-1.5 bg-cyan-500 rounded-full"></div>
                            <span>Translated WooCommerce strings</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-1.5 h-1.5 bg-cyan-500 rounded-full"></div>
                            <span>SEO-friendly URLs per language</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="py-20 bg-white dark:bg-gray-950">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    Technology Stack
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-emerald-400/50 dark:bg-emerald-600/50"></span>
            </h2>

            <!-- Architecture Diagram -->
            <div class="mb-12">
                <div
                    class="bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 rounded-xl p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Frontend Layer -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-emerald-500 to-green-600 rounded-xl mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h12a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm4 2a1 1 0 000 2h2a1 1 0 100-2H7z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="font-oswald text-xl text-emerald-600 dark:text-emerald-400 mb-2">
                                Frontend Layer
                            </h3>
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                Tailwind CSS, AlpineJS, GSAP for animations and responsive UI
                            </p>
                        </div>

                        <!-- Application Layer -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-green-500 to-teal-600 rounded-xl mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="font-oswald text-xl text-green-600 dark:text-green-400 mb-2">
                                Application Layer
                            </h3>
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                WordPress, WooCommerce APIs, custom hooks for challenge logic
                            </p>
                        </div>

                        <!-- Translation Layer -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-xl mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a18.87 18.87 0 01-1.724 4.78c.29.354.596.696.914 1.026a1 1 0 11-1.44 1.389c-.188-.196-.373-.396-.554-.6a19.098 19.098 0 01-3.107 3.567 1 1 0 01-1.334-1.49 17.087 17.087 0 003.13-3.733 18.992 18.992 0 01-1.487-2.494 1 1 0 111.79-.89c.234.47.489.928.764 1.372.417-.934.752-1.913.997-2.927H3a1 1 0 110-2h3V3a1 1 0 011-1zm6 6a1 1 0 01.894.553l2.991 5.982a.869.869 0 01.02.037l.99 1.98a1 1 0 11-1.79.895L15.383 16h-4.764l-.724 1.447a1 1 0 11-1.788-.894l.99-1.98.019-.038 2.99-5.982A1 1 0 0113 8zm-1.382 6h2.764L13 11.236 11.618 14z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="font-oswald text-xl text-teal-600 dark:text-teal-400 mb-2">Translation Layer</h3>
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                Gtranslate for multilingual support, translated strings and content
                            </p>
                        </div>
                    </div>

                    <!-- Connection Lines -->
                    <div class="hidden md:block relative mt-8">
                        <div class="absolute top-0 left-1/3 w-px h-8 bg-gradient-to-b from-emerald-500 to-green-600">
                        </div>
                        <div class="absolute top-0 right-1/3 w-px h-8 bg-gradient-to-b from-green-600 to-teal-600">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detailed Stack Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
                <!-- WordPress Core -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-600/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-emerald-600 dark:text-emerald-400 mb-2">WordPress</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Custom theme development with hooks, filters, and optimized queries
                    </p>
                </div>

                <!-- WooCommerce -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-green-600/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-green-600 dark:text-green-400 mb-2">WooCommerce</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Custom product types, checkout flows, and challenge management
                    </p>
                </div>

                <!-- Tailwind CSS -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-teal-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm0 4a1 1 0 011-1h12a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V8zm4 2a1 1 0 000 2h2a1 1 0 100-2H7z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-teal-600 dark:text-teal-400 mb-2">Tailwind CSS</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Utility-first CSS framework for rapid, responsive design
                    </p>
                </div>

                <!-- AlpineJS -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-cyan-600 dark:text-cyan-400 mb-2">AlpineJS</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Lightweight JS for reactive pricing and interactive components
                    </p>
                </div>

                <!-- GSAP -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-indigo-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-indigo-600 dark:text-indigo-400 mb-2">GSAP</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Professional-grade animations for counters and scroll effects
                    </p>
                </div>

                <!-- Gtranslate -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7 2a1 1 0 011 1v1h3a1 1 0 110 2H9.578a18.87 18.87 0 01-1.724 4.78c.29.354.596.696.914 1.026a1 1 0 11-1.44 1.389c-.188-.196-.373-.396-.554-.6a19.098 19.098 0 01-3.107 3.567 1 1 0 01-1.334-1.49 17.087 17.087 0 003.13-3.733 18.992 18.992 0 01-1.487-2.494 1 1 0 111.79-.89c.234.47.489.928.764 1.372.417-.934.752-1.913.997-2.927H3a1 1 0 110-2h3V3a1 1 0 011-1zm6 6a1 1 0 01.894.553l2.991 5.982a.869.869 0 01.02.037l.99 1.98a1 1 0 11-1.79.895L15.383 16h-4.764l-.724 1.447a1 1 0 11-1.788-.894l.99-1.98.019-.038 2.99-5.982A1 1 0 0113 8zm-1.382 6h2.764L13 11.236 11.618 14z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-purple-600 dark:text-purple-400 mb-2">Gtranslate</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Complete multilingual support for English and Portuguese
                    </p>
                </div>

                <!-- Video Optimization -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-pink-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-pink-600 dark:text-pink-400 mb-2">Video Tech</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        MP4 compression, lazy loading, and mobile fallback strategies
                    </p>
                </div>

                <!-- MySQL -->
                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-2xl transition-all duration-300">
                    <div class="w-12 h-12 bg-orange-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z">
                            </path>
                            <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z"></path>
                            <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z"></path>
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-orange-600 dark:text-orange-400 mb-2">MySQL</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Optimized database queries for trader data and transactions
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Performance Optimization -->
    <section class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    Performance Optimization
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-emerald-400/50 dark:bg-emerald-600/50"></span>
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 text-center shadow-lg">
                    <div class="text-4xl font-bold text-emerald-600 dark:text-emerald-400 mb-2">95+</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">PageSpeed Score</div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 text-center shadow-lg">
                    <div class="text-4xl font-bold text-green-600 dark:text-green-400 mb-2">1.5s</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Load Time</div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 text-center shadow-lg">
                    <div class="text-4xl font-bold text-teal-600 dark:text-teal-400 mb-2">100%</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Mobile Responsive</div>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 text-center shadow-lg">
                    <div class="text-4xl font-bold text-cyan-600 dark:text-cyan-400 mb-2">A+</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">SEO Grade</div>
                </div>
            </div>

            <div class="max-w-4xl mx-auto mt-12">
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl">
                    <h3 class="text-2xl font-bold mb-6 text-center">Optimization Techniques</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-3">
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 bg-emerald-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-sm">Video compression and lazy loading</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 bg-emerald-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-sm">CSS and JS minification</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 bg-emerald-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-sm">Image optimization with WebP</span>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 bg-emerald-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-sm">Browser caching strategies</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 bg-emerald-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-sm">CDN integration for assets</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 bg-emerald-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-sm">Database query optimization</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Results -->
    <section class="py-20 bg-white dark:bg-gray-950">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    Project Results
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-emerald-400/50 dark:bg-emerald-600/50"></span>
            </h2>

            <div class="max-w-4xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <div
                        class="bg-gradient-to-br from-emerald-50 to-green-50 dark:from-emerald-900/20 dark:to-green-900/20 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-emerald-600 dark:text-emerald-400 mb-4">User Experience</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-emerald-600 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Smooth navigation with intuitive challenge selection</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-emerald-600 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Engaging video background captures attention</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-emerald-600 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Clear call-to-actions drive conversions</span>
                            </li>
                        </ul>
                    </div>

                    <div
                        class="bg-gradient-to-br from-green-50 to-teal-50 dark:from-green-900/20 dark:to-teal-900/20 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-green-600 dark:text-green-400 mb-4">Business Impact</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-green-600 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Streamlined trader onboarding process</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-green-600 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Expanded to Portuguese-speaking markets</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-green-600 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Reduced bounce rate with engaging design</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Client Testimonial -->
                <div class="bg-gradient-to-r from-emerald-500 to-green-600 rounded-2xl p-8 text-white text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 opacity-50" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-xl mb-4 italic">
                        "The platform exceeded our expectations. The video background creates an immersive experience,
                        and the multilingual support opened up new markets for us."
                    </p>
                    <div class="font-bold">PremiaBet Team</div>
                    <div class="text-sm opacity-90">Sports Betting Platform</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-emerald-600 to-green-600 dark:from-emerald-500 dark:to-green-500">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-nico text-4xl md:text-5xl text-white mb-6">
                Ready to Build Your Sports Betting Platform?
            </h2>
            <p class="font-manrope text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Leverage my expertise in WordPress, WooCommerce, and modern web technologies to create a sports betting
                prop firm platform like PremiaBet. Let's build your vision.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
                    class="px-8 py-3 bg-white text-emerald-600 rounded-full font-manrope text-lg hover:scale-105 transform transition-all duration-300 cursor-pointer">
                    Start Your Project
                </a>
                <a href="https://premiabet.org" target="_blank"
                    class="px-8 py-3 border-2 border-white text-white rounded-full font-manrope text-lg hover:bg-white/10 hover:-translate-y-0.5 transition-all duration-300 cursor-pointer">
                    View Live Site
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
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const inc = target / speed;

        if (count < target) {
            counter.innerText = Math.ceil(count + inc);
            setTimeout(() => animateCounter(counter), 1);
        } else {
            counter.innerText = target;
        }
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    });

    counters.forEach(counter => observer.observe(counter));

    // Account Size Button Toggle
    const sizeButtons = document.querySelectorAll('.account-size-btn');
    sizeButtons.forEach(button => {
        button.addEventListener('click', function() {
            sizeButtons.forEach(btn => {
                btn.classList.remove('bg-emerald-500', 'text-white', 'active');
                btn.classList.add('text-emerald-600');
            });
            this.classList.add('bg-emerald-500', 'text-white', 'active');
            this.classList.remove('text-emerald-600');
        });
    });

    // FAQ Toggle
    const faqToggles = document.querySelectorAll('.faq-toggle');
    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('svg');

            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });
});
</script>

<?php get_footer();