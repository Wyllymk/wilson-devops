<?php
/**
 * The template for displaying the AI Prop project page
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
                    AI Prop
                </h1>
                <p
                    class="font-manrope text-xl text-center text-text-light-muted dark:text-text-dark-muted max-w-3xl mx-auto mb-8">
                    AI-powered prop trading evaluation platform. Automated challenge grading, intelligent risk analysis,
                    real-time trader metrics, and machine learning insights for smarter prop firm operations.
                </p>

                <!-- Tech Stack Pills -->
                <div class="flex flex-wrap justify-center gap-3 mb-8">
                    <span
                        class="px-4 py-2 rounded-full bg-cyber-blue/20 text-cyber-blue dark:bg-cyber-cyan/20 dark:text-cyber-cyan font-manrope text-sm border border-cyber-blue/30">
                        Python
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-cyber-coral/20 text-cyber-coral dark:bg-cyber-pink/20 dark:text-cyber-pink font-manrope text-sm border border-cyber-coral/30">
                        TensorFlow
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-teal-500/20 text-teal-600 dark:text-teal-400 font-manrope text-sm border border-teal-500/30">
                        React
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-purple-500/20 text-purple-600 dark:text-purple-400 font-manrope text-sm border border-purple-500/30">
                        FastAPI
                    </span>
                    <span
                        class="px-4 py-2 rounded-full bg-green-500/20 text-green-600 dark:text-green-400 font-manrope text-sm border border-green-500/30">
                        PostgreSQL
                    </span>
                </div>

                <div class="flex justify-center gap-4 z-10 relative">
                    <button x-on:click="window.open('https://aiprop.com', '_blank')"
                        class="px-8 py-3 rounded-full bg-gradient-to-r from-cyber-blue to-cyber-coral dark:from-cyber-cyan dark:to-cyber-pink text-white font-manrope text-lg hover:scale-105 transform transition-all duration-300 drop-shadow-cyber-cyan hover:drop-shadow-2xl cursor-pointer">
                        Live Platform
                    </button>

                    <button x-on:click="window.open('https://github.com/wyllymk/ai-prop', '_blank')"
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
                        <path d="M13 7H7v6h6V7z" />
                        <path fill-rule="evenodd"
                            d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="absolute top-1/3 right-1/4 opacity-20">
                    <svg class="w-20 h-20 text-cyber-coral animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
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
                        data-target="50000">0</div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Trades Analyzed</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-cyber-coral/10 to-cyber-pink/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-cyber-coral dark:text-cyber-pink mb-2 counter"
                        data-target="98.5">0</div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">% Accuracy Rate</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-teal-500/10 to-green-500/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-teal-600 dark:text-teal-400 mb-2 counter" data-target="5">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-dark-muted">Second Processing</div>
                </div>
                <div
                    class="text-center p-6 rounded-xl bg-gradient-to-br from-purple-500/10 to-indigo-500/10 hover:scale-105 transition-transform duration-300">
                    <div class="text-4xl font-nico text-purple-600 dark:text-purple-400 mb-2 counter" data-target="24">0
                    </div>
                    <div class="font-manrope text-text-light-muted dark:text-text-dark-muted">Hour Monitoring</div>
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
                        Next-gen prop firm evaluation powered by machine learning. Automates challenge grading,
                        detects rule violations, predicts trader success rates, and provides actionable insights.
                    </p>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        From real-time risk monitoring and pattern detection to AI-driven trader assessments,
                        everything optimized for intelligent prop trading operations.
                    </p>

                    <!-- Core Features List -->
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-cyber-cyan rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                AI-powered trade evaluation
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-cyber-coral rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Automated rule compliance checks
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-teal-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Predictive success modeling
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                            <span class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                Real-time anomaly detection
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
                            <div class="ml-4 text-gray-400 text-sm font-mono">aiprop.com/dashboard</div>
                        </div>

                        <!-- Mock AI Dashboard Interface -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 space-y-4">
                            <div class="flex justify-between items-center">
                                <h3 class="font-bold text-gray-900 dark:text-white">AI Analysis Live</h3>
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm flex items-center gap-2">
                                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                    Processing
                                </span>
                            </div>

                            <div class="grid grid-cols-3 gap-4">
                                <div class="bg-cyber-blue/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-cyber-blue">2,340</div>
                                    <div class="text-xs text-gray-600">Trades/Day</div>
                                </div>
                                <div class="bg-cyber-coral/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-cyber-coral">5.2s</div>
                                    <div class="text-xs text-gray-600">Avg Process</div>
                                </div>
                                <div class="bg-teal-500/10 p-3 rounded-lg text-center">
                                    <div class="text-2xl font-bold text-teal-600">98.5%</div>
                                    <div class="text-xs text-gray-600">Accuracy</div>
                                </div>
                            </div>

                            <!-- Mock AI Analysis Results -->
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
                                        <div class="text-sm font-medium">Rule Compliance</div>
                                        <div class="text-xs text-gray-500">All parameters passed</div>
                                    </div>
                                    <div class="text-xs text-green-600 font-bold">Pass</div>
                                </div>
                                <div
                                    class="flex items-center gap-3 p-2 bg-yellow-50 dark:bg-yellow-900/20 rounded border border-yellow-200 dark:border-yellow-800">
                                    <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium">Risk Pattern</div>
                                        <div class="text-xs text-gray-500">Watch for overtrading</div>
                                    </div>
                                    <div class="text-xs text-yellow-600 font-bold">Alert</div>
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
                        <!-- AI/ML Layer -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-cyber-blue to-cyber-cyan rounded-xl mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 7H7v6h6V7z" />
                                    <path fill-rule="evenodd"
                                        d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                                AI/ML Layer
                            </h3>
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                TensorFlow models, pattern recognition, predictive analytics
                            </p>
                        </div>

                        <!-- API Layer -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-cyber-coral to-cyber-pink rounded-xl mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="font-oswald text-xl text-cyber-coral dark:text-cyber-pink mb-2">
                                API Layer
                            </h3>
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                FastAPI, RESTful endpoints, WebSocket streams
                            </p>
                        </div>

                        <!-- Data Layer -->
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-teal-500 to-green-500 rounded-xl mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z" />
                                    <path
                                        d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z" />
                                    <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z" />
                                </svg>
                            </div>
                            <h3 class="font-oswald text-xl text-teal-600 dark:text-teal-400 mb-2">Data Layer</h3>
                            <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                                PostgreSQL, time-series data, Redis caching
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
                            <path d="M13 7H7v6h6V7z" />
                            <path fill-rule="evenodd"
                                d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-cyber-blue dark:text-cyber-cyan mb-2">ML Models</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        TensorFlow neural nets for trade pattern classification and risk scoring
                    </p>
                </div>

                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-cyber-coral transition-all duration-300">
                    <div class="w-12 h-12 bg-cyber-coral/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-cyber-coral" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-cyber-coral dark:text-cyber-pink mb-2">Real-time Processing</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Stream processing with WebSockets, sub-second trade evaluation
                    </p>
                </div>

                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-cyber-teal transition-all duration-300">
                    <div class="w-12 h-12 bg-teal-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-teal-600 dark:text-teal-400 mb-2">Anomaly Detection</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        AI flags suspicious trading patterns, rule violations, behavioral anomalies
                    </p>
                </div>

                <div
                    class="p-6 rounded-xl bg-cyber-light/30 dark:bg-cyber-dark/30 hover:drop-shadow-cyber-purple transition-all duration-300">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                        </svg>
                    </div>
                    <h4 class="font-oswald text-lg text-purple-600 dark:text-purple-400 mb-2">Predictive Analytics</h4>
                    <p class="font-manrope text-sm text-text-light-muted dark:text-text-dark-muted">
                        Success probability scoring, risk forecasting, trader behavior prediction
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
                                    Challenge: Model Accuracy
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Training ML models to detect rule violations with 98%+ accuracy across diverse
                                    trading
                                    styles while avoiding false positives.
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
                                    Solution: Multi-Model Ensemble
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Built ensemble architecture combining LSTM networks for pattern recognition with
                                    rule-based validators. Training on 50K+ labeled trades.
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
                                    Challenge: Real-Time Processing
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Processing thousands of trades per second with sub-5s latency while running
                                    complex AI evaluations.
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
                                    Solution: Async Processing Pipeline
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Implemented FastAPI with async workers, Redis message queue, and model caching.
                                    Achieved 5.2s average processing time.
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
                                    Challenge: Data Management
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Storing and querying millions of trades with millisecond precision for accurate
                                    analysis and compliance auditing.
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
                                    Solution: Time-Series Optimization
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    PostgreSQL with TimescaleDB extension for time-series data. Partitioning,
                                    indexing, and Redis caching for instant queries.
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
                    <?php esc_html_e( 'AI Features', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>

            <!-- Feature Tabs -->
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-wrap justify-center gap-4 mb-12" id="featureTabs">
                    <button
                        class="px-6 py-3 rounded-full bg-cyber-blue text-white font-manrope transition-all duration-300 tab-active"
                        data-tab="analysis">
                        Trade Analysis
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="detection">
                        Rule Detection
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="prediction">
                        Predictions
                    </button>
                    <button
                        class="px-6 py-3 rounded-full bg-gray-200 text-gray-700 font-manrope hover:bg-gray-300 transition-all duration-300"
                        data-tab="insights">
                        Insights
                    </button>
                </div>

                <!-- Feature Content -->
                <div class="relative">
                    <!-- Analysis Tab -->
                    <div class="tab-content active" id="analysis">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-cyber-blue dark:text-cyber-cyan">
                                    Automated Trade Analysis
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    AI evaluates every trade against challenge rules. Instant feedback on profit
                                    targets,
                                    drawdown limits, and trading consistency.
                                </p>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">Rule compliance scoring</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-cyber-cyan rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">Risk metric calculation</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-2 h-2 bg-cyber-coral rounded-full animate-pulse"></div>
                                        <span class="font-manrope text-sm">Performance benchmarking</span>
                                    </div>
                                </div>
                            </div>
                            <div class="relative">
                                <div
                                    class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl p-6 transform hover:scale-105 transition-all duration-300">
                                    <div class="flex justify-between items-center mb-6">
                                        <h4 class="font-bold text-gray-900 dark:text-white">Analysis Results</h4>
                                        <div class="flex gap-2">
                                            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                            <span class="text-sm text-green-600">Processing</span>
                                        </div>
                                    </div>
                                    <div class="space-y-4 text-gray-900 dark:text-white">
                                        <div
                                            class="flex justify-between p-3 bg-green-50 dark:bg-green-900/20 rounded-lg border border-green-200 dark:border-green-800">
                                            <span class="text-sm">Profit Target</span>
                                            <span class="font-bold text-green-600">85% Complete</span>
                                        </div>
                                        <div
                                            class="flex justify-between p-3 bg-blue-50 dark:bg-blue-900/20 rounded-lg border border-blue-200 dark:border-blue-800">
                                            <span class="text-sm">Max Drawdown</span>
                                            <span class="font-bold text-cyber-blue">Safe (2.1%)</span>
                                        </div>
                                        <div
                                            class="flex justify-between p-3 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg border border-yellow-200 dark:border-yellow-800">
                                            <span class="text-sm">Trading Days</span>
                                            <span class="font-bold text-yellow-600">7 of 10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Detection Tab -->
                    <div class="tab-content hidden" id="detection">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-cyber-coral dark:text-cyber-pink">
                                    Rule Violation Detection
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    ML models detect subtle rule violations. Pattern matching identifies revenge
                                    trading,
                                    overleveraging, and consistency breaches.
                                </p>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-cyber-coral/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-cyber-coral">1</span>
                                        </div>
                                        <span class="font-manrope">Trade ingestion</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-cyber-coral/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-cyber-coral">2</span>
                                        </div>
                                        <span class="font-manrope">Pattern analysis</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="w-8 h-8 bg-cyber-coral/20 rounded-full flex items-center justify-center">
                                            <span class="text-sm font-bold text-cyber-coral">3</span>
                                        </div>
                                        <span class="font-manrope">Violation flagging</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-xl">
                                    <h4 class="font-bold text-gray-900 dark:text-white mb-4">Detection Log</h4>
                                    <div class="space-y-3">
                                        <div
                                            class="p-3 bg-red-50 dark:bg-red-900/20 rounded-lg border border-red-200 dark:border-red-800">
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="text-sm font-bold text-red-600">Max Daily Loss</span>
                                                <span class="text-xs text-red-600">Violation</span>
                                            </div>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">Exceeded by $120</p>
                                        </div>
                                        <div
                                            class="p-3 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg border border-yellow-200 dark:border-yellow-800">
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="text-sm font-bold text-yellow-600">Consistency Rule</span>
                                                <span class="text-xs text-yellow-600">Warning</span>
                                            </div>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">Approaching threshold
                                            </p>
                                        </div>
                                        <div
                                            class="p-3 bg-green-50 dark:bg-green-900/20 rounded-lg border border-green-200 dark:border-green-800">
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="text-sm font-bold text-green-600">Lot Size Limit</span>
                                                <span class="text-xs text-green-600">Pass</span>
                                            </div>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">Within parameters</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Prediction Tab -->
                    <div class="tab-content hidden" id="prediction">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-teal-600 dark:text-teal-400">
                                    Success Prediction
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    ML models predict trader success probability based on historical patterns,
                                    consistency
                                    metrics, and risk management behavior.
                                </p>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="p-4 bg-teal-500/10 rounded-lg text-center">
                                        <div class="text-2xl font-bold text-teal-600">78%</div>
                                        <div class="text-sm text-gray-600">Success Rate</div>
                                    </div>
                                    <div class="p-4 bg-purple-500/10 rounded-lg text-center">
                                        <div class="text-2xl font-bold text-purple-600">High</div>
                                        <div class="text-sm text-gray-600">Confidence</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-xl">
                                <h4 class="font-bold text-gray-900 dark:text-white mb-4">Prediction Model</h4>
                                <div class="space-y-4">
                                    <div class="space-y-2">
                                        <div class="flex justify-between text-sm">
                                            <span class="text-gray-600 dark:text-gray-400">Risk Management</span>
                                            <span class="font-bold text-green-600">92%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 92%"></div>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <div class="flex justify-between text-sm">
                                            <span class="text-gray-600 dark:text-gray-400">Consistency</span>
                                            <span class="font-bold text-yellow-600">68%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 68%"></div>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <div class="flex justify-between text-sm">
                                            <span class="text-gray-600 dark:text-gray-400">Win Rate</span>
                                            <span class="font-bold text-cyan-600">84%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="bg-cyan-500 h-2 rounded-full" style="width: 84%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Insights Tab -->
                    <div class="tab-content hidden" id="insights">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-oswald text-2xl text-purple-600 dark:text-purple-400">
                                    AI-Driven Insights
                                </h3>
                                <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                                    Actionable recommendations based on trading patterns. Identifies strengths,
                                    weaknesses,
                                    and opportunities for improvement.
                                </p>
                                <div class="space-y-3">
                                    <div
                                        class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <span class="font-manrope text-sm">Best Performance</span>
                                        <span class="text-xs text-cyan-600 font-bold">London Session</span>
                                    </div>
                                    <div
                                        class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <span class="font-manrope text-sm">Risk Tendency</span>
                                        <span class="text-xs text-green-600 font-bold">Conservative</span>
                                    </div>
                                    <div
                                        class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <span class="font-manrope text-sm">Trade Duration</span>
                                        <span class="text-xs text-purple-600 font-bold">Short-term</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-xl">
                                <h4 class="font-bold text-gray-900 dark:text-white mb-4">Insights Feed</h4>
                                <div class="space-y-4">
                                    <div
                                        class="p-3 border rounded-lg dark:border-gray-600 bg-blue-50 dark:bg-blue-900/10">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-4 h-4 text-cyber-blue" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span class="text-sm font-bold text-cyber-blue">Insight</span>
                                        </div>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            Your win rate increases 15% when you limit trades to 3 per day
                                        </p>
                                    </div>
                                    <div
                                        class="p-3 border rounded-lg dark:border-gray-600 bg-green-50 dark:bg-green-900/10">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span class="text-sm font-bold text-green-600">Strength</span>
                                        </div>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            Excellent position sizing. Keep maintaining 1-2% risk per trade
                                        </p>
                                    </div>
                                    <div
                                        class="p-3 border rounded-lg dark:border-gray-600 bg-yellow-50 dark:bg-yellow-900/10">
                                        <div class="flex items-center gap-2 mb-2">
                                            <svg class="w-4 h-4 text-yellow-600" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span class="text-sm font-bold text-yellow-600">Watch</span>
                                        </div>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            Trading frequency spikes on losing days. Consider taking breaks
                                        </p>
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
                Build Your AI-Powered Prop Platform
            </h2>
            <p class="font-manrope text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Transform your prop firm with intelligent automation. Custom ML models, real-time analysis, and
                predictive insights for smarter trading operations.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
                    class="px-8 py-3 bg-white text-cyber-blue rounded-full font-manrope text-lg hover:scale-105 transform transition-all duration-300 cursor-pointer">
                    Start Your Project
                </a>
                <a href="https://aiprop.com" target="_blank"
                    class="px-8 py-3 border-2 border-white text-white rounded-full font-manrope text-lg hover:bg-white/10 hover:-translate-y-0.5 transition-all duration-300 cursor-pointer">
                    View Live Demo
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

    counters.forEach(counter => {
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
    });

    // Tab functionality
    const tabs = document.querySelectorAll('[data-tab]');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('data-tab');

            tabs.forEach(t => {
                t.classList.remove('bg-cyber-blue', 'text-white', 'tab-active');
                t.classList.add('bg-gray-200', 'text-gray-700');
            });

            tab.classList.remove('bg-gray-200', 'text-gray-700');
            tab.classList.add('bg-cyber-blue', 'text-white', 'tab-active');

            contents.forEach(content => {
                content.classList.add('hidden');
                content.classList.remove('active');
            });

            const targetContent = document.getElementById(target);
            if (targetContent) {
                targetContent.classList.remove('hidden');
                targetContent.classList.add('active');
            }
        });
    });
});
</script>

<?php get_footer();