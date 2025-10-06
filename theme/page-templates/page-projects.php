<?php
/**
 * The template for displaying the projects page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wilson_Devops
 */
defined('ABSPATH') || exit;

get_header();
?>

<main class="min-h-screen bg-cyber-light dark:bg-cyber-dark transition-colors duration-400 ease-in-out">

    <!-- Sidebar Navigation (Mobile) -->
    <div id="navMenu" class="transform translate-x-full opacity-0 w-64 py-4 px-4 z-40 fixed md:hidden top-0 h-full 
        bg-cyber-light/90 dark:bg-cyber-dark/90 backdrop-blur-md drop-shadow-cyber-cyan 
        transition-all duration-400 ease-in-out">
        <?php get_template_part('template-parts/content/content', 'aside'); ?>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 top-0 h-screen z-30 bg-black/70 hidden"></div>

    <!-- Projects Hero Section -->
    <section
        class="min-h-screen flex items-center justify-center relative overflow-hidden bg-gradient-to-br from-cyber-light via-white to-gray-100 dark:from-cyber-dark dark:via-gray-900 dark:to-black">
        <!-- Animated Code Background -->
        <div class="absolute inset-0 opacity-25 md:opacity-50 overflow-hidden">
            <div class="absolute top-20 left-10 animate-pulse">
                <pre class="text-cyber-cyan text-sm font-mono transform rotate-12">
                    <code>
                    const developer = {
                        name: "Wilson",
                        passion: "innovation",
                        status: "coding..."
                    };
                    </code>
                </pre>
            </div>
            <div class="absolute top-70 md:top-40 right-20 animate-bounce">
                <pre class="text-cyber-pink text-xs font-mono transform -rotate-6">
                    <code>
                        &lt;div className="creative-mind"&gt;
                            &lt;h1&gt;Building Dreams&lt;/h1&gt;
                        &lt;/div&gt;
                    </code>
                </pre>
            </div>
            <div class="absolute bottom-40 md:bottom-52 left-0 md:left-42 animate-pulse">
                <pre class="text-cyber-blue text-sm font-mono transform rotate-6">
                    <code>
                    function createMagic() {
                        return code + creativity;
                    }
                    </code>
                </pre>
            </div>
        </div>
        <!-- Animated Background Pattern -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle at 2px 2px, rgba(0, 255, 255, 0.3) 1px, transparent 0); background-size: 40px 40px; animation: float 20s linear infinite;">
            </div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 text-center z-10 relative">
            <h1 class="font-nico text-5xl md:text-8xl lg:text-9xl font-black uppercase tracking-wide mb-6 
                bg-gradient-to-r from-cyber-cyan via-cyber-blue to-cyber-pink bg-clip-text text-transparent
                animate-pulse drop-shadow-cyber-cyan">
                My Projects
            </h1>
            <p
                class="font-manrope text-xl md:text-2xl text-text-light-muted dark:text-text-dark-muted max-w-3xl mx-auto mb-8 leading-relaxed">
                A showcase of my work crafted with passion, precision, and cutting-edge tech. Each project represents
                innovation solving real-world challenges.
            </p>
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-20 left-20 w-4 h-4 bg-cyber-cyan rounded-full opacity-60 animate-ping"></div>
        <div class="absolute top-40 right-32 w-3 h-3 bg-cyber-pink rounded-full opacity-40 animate-pulse"></div>
        <div class="absolute bottom-32 left-40 w-2 h-2 bg-cyber-blue rounded-full opacity-80 animate-bounce"></div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce cursor-pointer"
            onclick="document.querySelector('.filter-section').scrollIntoView({behavior: 'smooth'})">
            <svg class="w-6 h-6 text-cyber-cyan" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 16l-6-6h12l-6 6z" />
            </svg>
        </div>
    </section>

    <section x-data="projectFilter()">
        <!-- Projects Filter Section -->
        <section
            class="pt-12 pb-6 sticky top-10 z-20 bg-cyber-light/95 dark:bg-cyber-dark/95 backdrop-blur-xl border-b border-gray-200/20 dark:border-gray-700/20">
            <div class="container mx-auto px-4">
                <!-- Search Bar -->
                <div class="relative max-w-lg mx-auto mb-8">
                    <input type="text" x-model="search" @input="filterProjects" placeholder="Search projects..." class="w-full p-4 pr-12 rounded-full bg-white/80 dark:bg-gray-800/80 
                    border-2 border-gray-200 dark:border-gray-700 
                    focus:border-cyber-cyan dark:focus:border-cyber-cyan 
                    text-text-light dark:text-text-dark 
                    placeholder-text-light-muted dark:placeholder-text-dark-muted 
                    focus:outline-none transition-all duration-300 
                    focus:drop-shadow-cyber-cyan focus:scale-105">
                    <svg class="absolute right-4 top-1/2 transform -translate-y-1/2 w-6 h-6 text-cyber-cyan"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                    </svg>
                </div>

                <!-- Categories -->
                <div class="flex flex-wrap justify-center gap-4">
                    <button @click="setCategory('all')"
                        :class="{ 'bg-gradient-to-r from-cyber-cyan to-cyber-blue text-white shadow-lg drop-shadow-cyber-cyan scale-105': activeCategory === 'all', 
                              'bg-white/80 dark:bg-gray-800/80 text-text-light dark:text-text-dark hover:bg-gray-100 dark:hover:bg-gray-700': activeCategory !== 'all' }"
                        class="px-3 py-1.5 md:px-6 md:py-3 rounded-full font-manrope font-semibold border-2 border-transparent
                    hover:border-cyber-cyan hover:drop-shadow-cyber-cyan transition-all duration-300 
                    transform hover:scale-105 cursor-pointer">
                        All
                    </button>
                    <button @click="setCategory('wordpress')"
                        :class="{ 'bg-gradient-to-r from-cyber-cyan to-cyber-blue text-white shadow-lg drop-shadow-cyber-cyan scale-105': activeCategory === 'wordpress', 
                              'bg-white/80 dark:bg-gray-800/80 text-text-light dark:text-text-dark hover:bg-gray-100 dark:hover:bg-gray-700': activeCategory !== 'wordpress' }"
                        class="px-3 py-1.5 md:px-6 md:py-3 rounded-full font-manrope font-semibold border-2 border-transparent
                    hover:border-cyber-cyan hover:drop-shadow-cyber-cyan transition-all duration-300 
                    transform hover:scale-105 cursor-pointer">
                        WordPress
                    </button>
                    <button @click="setCategory('woocommerce')"
                        :class="{ 'bg-gradient-to-r from-cyber-cyan to-cyber-blue text-white shadow-lg drop-shadow-cyber-cyan scale-105': activeCategory === 'woocommerce', 
                              'bg-white/80 dark:bg-gray-800/80 text-text-light dark:text-text-dark hover:bg-gray-100 dark:hover:bg-gray-700': activeCategory !== 'woocommerce' }"
                        class="px-3 py-1.5 md:px-6 md:py-3 rounded-full font-manrope font-semibold border-2 border-transparent
                    hover:border-cyber-cyan hover:drop-shadow-cyber-cyan transition-all duration-300 
                    transform hover:scale-105 cursor-pointer">
                        WooCommerce
                    </button>
                    <button @click="setCategory('elementor')"
                        :class="{ 'bg-gradient-to-r from-cyber-cyan to-cyber-blue text-white shadow-lg drop-shadow-cyber-cyan scale-105': activeCategory === 'elementor', 
                              'bg-white/80 dark:bg-gray-800/80 text-text-light dark:text-text-dark hover:bg-gray-100 dark:hover:bg-gray-700': activeCategory !== 'elementor' }"
                        class="px-3 py-1.5 md:px-6 md:py-3 rounded-full font-manrope font-semibold border-2 border-transparent
                    hover:border-cyber-cyan hover:drop-shadow-cyber-cyan transition-all duration-300 
                    transform hover:scale-105 cursor-pointer">
                        Elementor
                    </button>
                    <button @click="setCategory('custom')"
                        :class="{ 'bg-gradient-to-r from-cyber-cyan to-cyber-blue text-white shadow-lg drop-shadow-cyber-cyan scale-105': activeCategory === 'custom', 
                              'bg-white/80 dark:bg-gray-800/80 text-text-light dark:text-text-dark hover:bg-gray-100 dark:hover:bg-gray-700': activeCategory !== 'custom' }"
                        class="px-3 py-1.5 md:px-6 md:py-3 rounded-full font-manrope font-semibold border-2 border-transparent
                    hover:border-cyber-cyan hover:drop-shadow-cyber-cyan transition-all duration-300 
                    transform hover:scale-105 cursor-pointer">
                        Custom
                    </button>
                </div>
            </div>
        </section>

        <!-- Projects Grid Section -->
        <section class="py-16 bg-gradient-to-b from-cyber-light to-white dark:from-cyber-dark dark:to-gray-900">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- VMS -->
                    <article
                        class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl border border-gray-200 dark:border-gray-700 transition-all duration-500 hover:-translate-y-2 hover:drop-shadow-cyber-cyan hover:border-cyber-cyan dark:hover:border-cyber-cyan"
                        data-categories="wordpress,custom" x-show="shouldShow('wordpress,custom')"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform translate-y-8"
                        x-transition:enter-end="opacity-100 transform translate-y-0">

                        <div class="relative overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vms.png" alt="VMS"
                                class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500" />

                            <div class="absolute inset-0 bg-gradient-to-t from-cyber-dark/80 via-transparent to-transparent 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 
                            flex items-end justify-center pb-8">
                                <a href="<?php echo esc_url(site_url('/vms')); ?>" class="px-6 py-3 rounded-full bg-gradient-to-r from-cyber-cyan to-cyber-blue 
                                text-white font-manrope font-semibold shadow-lg hover:shadow-xl
                                transform hover:scale-105 transition-all duration-300">
                                    View Details
                                </a>
                            </div>

                            <!-- Tech Stack Badges -->
                            <div class="absolute top-4 left-4 flex gap-2">
                                <span
                                    class="px-3 py-1 bg-cyber-cyan/90 text-white text-xs font-semibold rounded-full">WordPress</span>
                                <span
                                    class="px-3 py-1 bg-cyber-pink/90 text-white text-xs font-semibold rounded-full">Custom
                                </span>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3
                                class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-3 
                            group-hover:text-cyber-cyan dark:group-hover:text-cyber-blue transition-colors duration-300">
                                Visitor Management System
                            </h3>
                            <p
                                class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                                A powerful visitor management system built to streamline check-ins, improve security,
                                automate guest records, and provide organizations with a seamless, efficient platform.
                            </p>
                            <a href="https://vms.nyericlub.co.ke" target="_blank" class="inline-flex items-center gap-2 font-manrope font-semibold
                            text-cyber-blue dark:text-cyber-cyan hover:text-cyber-coral dark:hover:text-cyber-pink 
                            transition-all duration-300 group/link">
                                Visit Website
                                <svg class="w-5 h-5 transform group-hover/link:translate-x-1 transition-transform duration-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9 3h8v8l-2-1V6.92l-5.6 5.59l-1.41-1.41L14.08 5H10zm3 12v-3l2-2v7H3V6h8L9 8H5v7h7z" />
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- Nyeri Club -->
                    <article
                        class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden  shadow-xl hover:shadow-2xl border border-gray-200 dark:border-gray-700 transition-all duration-500 hover:-translate-y-2 hover:drop-shadow-cyber-cyan hover:border-cyber-cyan dark:hover:border-cyber-cyan"
                        data-categories="wordpress,elementor" x-show="shouldShow('wordpress,elementor')"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform translate-y-8"
                        x-transition:enter-end="opacity-100 transform translate-y-0">

                        <div class="relative overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nyeri-club-1.png"
                                alt="Nyeri Club"
                                class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500" />

                            <div class="absolute inset-0 bg-gradient-to-t from-cyber-dark/80 via-transparent to-transparent 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 
                            flex items-end justify-center pb-8">
                                <a href="<?php echo esc_url(site_url('/nyeri-club/')); ?>" class="px-6 py-3 rounded-full bg-gradient-to-r from-cyber-cyan to-cyber-blue 
                                text-white font-manrope font-semibold shadow-lg hover:shadow-xl
                                transform hover:scale-105 transition-all duration-300">
                                    View Details
                                </a>
                            </div>

                            <div class="absolute top-4 left-4 flex gap-2">
                                <span
                                    class="px-3 py-1 bg-cyber-cyan/90 text-white text-xs font-semibold rounded-full">WordPress</span>
                                <span
                                    class="px-3 py-1 bg-cyber-pink/90 text-white text-xs font-semibold rounded-full">Elementor</span>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3
                                class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-3 
                            group-hover:text-cyber-cyan dark:group-hover:text-cyber-blue transition-colors duration-300">
                                Nyeri Club
                            </h3>
                            <p
                                class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                                Nyeri Club's golf website designed with WordPress and Elementor, featuring elegant
                                layouts,
                                intuitive navigation, and a dynamic platform for members and enthusiasts.
                            </p>
                            <a href="https://nyericlub.co.ke" target="_blank" class="inline-flex items-center gap-2 font-manrope font-semibold
                            text-cyber-blue dark:text-cyber-cyan hover:text-cyber-coral dark:hover:text-cyber-pink 
                            transition-all duration-300 group/link">
                                Visit Website
                                <svg class="w-5 h-5 transform group-hover/link:translate-x-1 transition-transform duration-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9 3h8v8l-2-1V6.92l-5.6 5.59l-1.41-1.41L14.08 5H10zm3 12v-3l2-2v7H3V6h8L9 8H5v7h7z" />
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- The Funded Way -->
                    <article
                        class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl border border-gray-200 dark:border-gray-700 transition-all duration-500 hover:-translate-y-2 hover:drop-shadow-cyber-cyan hover:border-cyber-cyan dark:hover:border-cyber-cyan"
                        data-categories="wordpress,woocommerce,custom"
                        x-show="shouldShow('wordpress,woocommerce,custom')"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform translate-y-8"
                        x-transition:enter-end="opacity-100 transform translate-y-0">

                        <div class="relative overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fundedway.png"
                                alt="The Funded Way"
                                class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500" />

                            <div class="absolute inset-0 bg-gradient-to-t from-cyber-dark/80 via-transparent to-transparent 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 
                            flex items-end justify-center pb-8">
                                <a href="<?php echo esc_url(site_url('/funded-way')); ?>" class="px-6 py-3 rounded-full bg-gradient-to-r from-cyber-cyan to-cyber-blue 
                                text-white font-manrope font-semibold shadow-lg hover:shadow-xl
                                transform hover:scale-105 transition-all duration-300">
                                    View Details
                                </a>
                            </div>

                            <div class="absolute top-4 left-4 flex gap-2">
                                <span
                                    class="px-3 py-1 bg-cyber-cyan/90 text-white text-xs font-semibold rounded-full">WordPress</span>
                                <span
                                    class="px-3 py-1 bg-cyber-blue/90 text-white text-xs font-semibold rounded-full">WooCommerce</span>
                                <span
                                    class="px-3 py-1 bg-cyber-pink/90 text-white text-xs font-semibold rounded-full">Custom
                                </span>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3
                                class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-3 
                            group-hover:text-cyber-cyan dark:group-hover:text-cyber-blue transition-colors duration-300">
                                The Funded Way
                            </h3>
                            <p
                                class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                                The Funded Way prop trading platform, built with WordPress and WooCommerce, delivers
                                instant
                                challenges up to $100K with custom checkouts and affiliate tracking.
                            </p>
                            <a href="https://thefundedway.com" target="_blank" class="inline-flex items-center gap-2 font-manrope font-semibold
                            text-cyber-blue dark:text-cyber-cyan hover:text-cyber-coral dark:hover:text-cyber-pink 
                            transition-all duration-300 group/link">
                                Visit Website
                                <svg class="w-5 h-5 transform group-hover/link:translate-x-1 transition-transform duration-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9 3h8v8l-2-1V6.92l-5.6 5.59l-1.41-1.41L14.08 5H10zm3 12v-3l2-2v7H3V6h8L9 8H5v7h7z" />
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- AI Prop -->
                    <article
                        class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl border border-gray-200 dark:border-gray-700 transition-all duration-500 hover:-translate-y-2 hover:drop-shadow-cyber-cyan hover:border-cyber-cyan dark:hover:border-cyber-cyan"
                        data-categories="wordpress,woocommerce,custom"
                        x-show="shouldShow('wordpress,woocommerce,custom')"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform translate-y-8"
                        x-transition:enter-end="opacity-100 transform translate-y-0">

                        <div class="relative overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ai-prop.png" alt="AI Prop"
                                class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500" />

                            <div class="absolute inset-0 bg-gradient-to-t from-cyber-dark/80 via-transparent to-transparent 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 
                            flex items-end justify-center pb-8">
                                <a href="<?php echo esc_url(site_url('/ai-prop')); ?>" class="px-6 py-3 rounded-full bg-gradient-to-r from-cyber-cyan to-cyber-blue 
                                text-white font-manrope font-semibold shadow-lg hover:shadow-xl
                                transform hover:scale-105 transition-all duration-300">
                                    View Details
                                </a>
                            </div>

                            <div class="absolute top-4 left-4 flex gap-2">
                                <span
                                    class="px-3 py-1 bg-cyber-cyan/90 text-white text-xs font-semibold rounded-full">WordPress</span>
                                <span
                                    class="px-3 py-1 bg-cyber-blue/90 text-white text-xs font-semibold rounded-full">WooCommerce</span>
                                <span
                                    class="px-3 py-1 bg-cyber-pink/90 text-white text-xs font-semibold rounded-full">Custom
                                </span>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3
                                class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-3 
                            group-hover:text-cyber-cyan dark:group-hover:text-cyber-blue transition-colors duration-300">
                                AI Prop
                            </h3>
                            <p
                                class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                                AI PROP leverages AI to offer instant prop challenges, smart evaluations, and real
                                funding up to $100K through an efficient WordPress-powered platform.
                            </p>

                            <a href="https://aiprop.com" target="_blank" class="inline-flex items-center gap-2 font-manrope font-semibold
                            text-cyber-blue dark:text-cyber-cyan hover:text-cyber-coral dark:hover:text-cyber-pink 
                            transition-all duration-300 group/link">
                                Visit Website
                                <svg class="w-5 h-5 transform group-hover/link:translate-x-1 transition-transform duration-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9 3h8v8l-2-1V6.92l-5.6 5.59l-1.41-1.41L14.08 5H10zm3 12v-3l2-2v7H3V6h8L9 8H5v7h7z" />
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- Torus Africa -->
                    <article
                        class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl border border-gray-200 dark:border-gray-700 transition-all duration-500 hover:-translate-y-2 hover:drop-shadow-cyber-cyan hover:border-cyber-cyan dark:hover:border-cyber-cyan"
                        data-categories="wordpress,custom" x-show="shouldShow('wordpress,custom')"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform translate-y-8"
                        x-transition:enter-end="opacity-100 transform translate-y-0">

                        <div class="relative overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/torus.png"
                                alt="Torus Africa"
                                class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500" />

                            <div class="absolute inset-0 bg-gradient-to-t from-cyber-dark/80 via-transparent to-transparent 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 
                            flex items-end justify-center pb-8">
                                <a href="<?php echo esc_url(site_url('/torus')); ?>" class="px-6 py-3 rounded-full bg-gradient-to-r from-cyber-cyan to-cyber-blue 
                                text-white font-manrope font-semibold shadow-lg hover:shadow-xl
                                transform hover:scale-105 transition-all duration-300">
                                    View Details
                                </a>
                            </div>

                            <div class="absolute top-4 left-4 flex gap-2">
                                <span
                                    class="px-3 py-1 bg-cyber-cyan/90 text-white text-xs font-semibold rounded-full">WordPress</span>
                                <span
                                    class="px-3 py-1 bg-cyber-pink/90 text-white text-xs font-semibold rounded-full">Custom
                                </span>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3
                                class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-3 
                            group-hover:text-cyber-cyan dark:group-hover:text-cyber-blue transition-colors duration-300">
                                Torus
                            </h3>
                            <p
                                class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                                A premier East African web design agency using WordPress, custom themes, and modern JS,
                                delivering comprehensive services and client-focused digital solutions worldwide.
                            </p>
                            <a href="https://torus.africa" target="_blank" class="inline-flex items-center gap-2 font-manrope font-semibold
                            text-cyber-blue dark:text-cyber-cyan hover:text-cyber-coral dark:hover:text-cyber-pink 
                            transition-all duration-300 group/link">
                                Visit Website
                                <svg class="w-5 h-5 transform group-hover/link:translate-x-1 transition-transform duration-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9 3h8v8l-2-1V6.92l-5.6 5.59l-1.41-1.41L14.08 5H10zm3 12v-3l2-2v7H3V6h8L9 8H5v7h7z" />
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- Institutional Funding -->
                    <article
                        class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl border border-gray-200 dark:border-gray-700 transition-all duration-500 hover:-translate-y-2 hover:drop-shadow-cyber-cyan hover:border-cyber-cyan dark:hover:border-cyber-cyan"
                        data-categories="wordpress,woocommerce,custom"
                        x-show="shouldShow('wordpress,woocommerce,custom')"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform translate-y-8"
                        x-transition:enter-end="opacity-100 transform translate-y-0">

                        <div class="relative overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/institutional-funding.png"
                                alt="Institutional Funding"
                                class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500" />

                            <div class="absolute inset-0 bg-gradient-to-t from-cyber-dark/80 via-transparent to-transparent 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 
                            flex items-end justify-center pb-8">
                                <a href="<?php echo esc_url(site_url('/institutional-funding')); ?>" class="px-6 py-3 rounded-full bg-gradient-to-r from-cyber-cyan to-cyber-blue 
                                text-white font-manrope font-semibold shadow-lg hover:shadow-xl
                                transform hover:scale-105 transition-all duration-300">
                                    View Details
                                </a>
                            </div>

                            <div class="absolute top-4 left-4 flex gap-2">
                                <span
                                    class="px-3 py-1 bg-cyber-cyan/90 text-white text-xs font-semibold rounded-full">WordPress</span>
                                <span
                                    class="px-3 py-1 bg-cyber-blue/90 text-white text-xs font-semibold rounded-full">WooCommerce</span>
                                <span
                                    class="px-3 py-1 bg-cyber-pink/90 text-white text-xs font-semibold rounded-full">Elementor</span>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3
                                class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-3 
                            group-hover:text-cyber-cyan dark:group-hover:text-cyber-blue transition-colors duration-300">
                                Institutional Funding
                            </h3>
                            <p
                                class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                                The website for Institutional Funding, built with WordPress and Elementor, delivers
                                clarity and functionality, showcasing funding programs and opportunities effectively.
                            </p>
                            <a href="https://institutionalfunding.ro" target="_blank" class="inline-flex items-center gap-2 font-manrope font-semibold
                            text-cyber-blue dark:text-cyber-cyan hover:text-cyber-coral dark:hover:text-cyber-pink 
                            transition-all duration-300 group/link">
                                Visit Website
                                <svg class="w-5 h-5 transform group-hover/link:translate-x-1 transition-transform duration-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9 3h8v8l-2-1V6.92l-5.6 5.59l-1.41-1.41L14.08 5H10zm3 12v-3l2-2v7H3V6h8L9 8H5v7h7z" />
                                </svg>
                            </a>
                        </div>
                    </article>

                    <!-- Backed Sports -->
                    <article
                        class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl border border-gray-200 dark:border-gray-700 transition-all duration-500 hover:-translate-y-2 hover:drop-shadow-cyber-cyan hover:border-cyber-cyan dark:hover:border-cyber-cyan"
                        data-categories="wordpress,woocommerce,custom"
                        x-show="shouldShow('wordpress,woocommerce,custom')"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform translate-y-8"
                        x-transition:enter-end="opacity-100 transform translate-y-0">

                        <div class="relative overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/backed-sports.png"
                                alt="Backed Sports"
                                class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500" />

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-cyber-dark/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-8">
                                <a href="<?php echo esc_url(site_url('/backed-sports')); ?>"
                                    class="px-6 py-3 rounded-full bg-gradient-to-r from-cyber-cyan to-cyber-blue text-white font-manrope font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                                    View Details
                                </a>
                            </div>

                            <div class="absolute top-4 left-4 flex gap-2">
                                <span
                                    class="px-3 py-1 bg-cyber-cyan/90 text-white text-xs font-semibold rounded-full">WordPress</span>
                                <span
                                    class="px-3 py-1 bg-cyber-blue/90 text-white text-xs font-semibold rounded-full">WooCommerce</span>
                                <span
                                    class="px-3 py-1 bg-cyber-pink/90 text-white text-xs font-semibold rounded-full">Custom</span>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3
                                class="font-oswald text-2xl font-bold text-cyber-blue dark:text-cyber-cyan mb-3 group-hover:text-cyber-cyan dark:group-hover:text-cyber-blue transition-colors duration-300">
                                Backed Sports
                            </h3>
                            <p
                                class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-6 leading-relaxed">
                                Backed Sports empowers users with funding challenges, strategic sports picks, and secure
                                payouts, creating engaging opportunities to boost winnings and maximize performance.
                            </p>
                            <a href="https://backedsports.wpenginepowered.com" target="_blank"
                                class="inline-flex items-center gap-2 font-manrope font-semibold text-cyber-blue dark:text-cyber-cyan hover:text-cyber-coral dark:hover:text-cyber-pink transition-all duration-300 group/link">
                                Visit Website
                                <svg class="w-5 h-5 transform group-hover/link:translate-x-1 transition-transform duration-300"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9 3h8v8l-2-1V6.92l-5.6 5.59l-1.41-1.41L14.08 5H10zm3 12v-3l2-2v7H3V6h8L9 8H5v7h7z" />
                                </svg>
                            </a>
                        </div>
                    </article>

                </div>

                <!-- No Results Message -->
                <div x-show="filteredProjects.length === 0"
                    class="text-center mt-16 font-manrope text-xl text-text-light-muted dark:text-text-dark-muted">
                    <div class="mb-4">
                        <svg class="w-16 h-16 mx-auto text-cyber-cyan/50" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                    </div>
                    No projects match your search or category. More coming soon!
                </div>
            </div>
        </section>
    </section>

</main>

<!-- Alpine.js Project Filter Logic -->
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('projectFilter', () => ({
        search: '',
        activeCategory: 'all',
        projects: [{
                name: 'Visitor Management System',
                categories: ['wordpress', 'custom']
            },
            {
                name: 'Nyeri Club',
                categories: ['wordpress', 'elementor']
            },
            {
                name: 'The Funded Way',
                categories: ['wordpress', 'woocommerce', 'custom']
            },
            {
                name: 'Torus',
                categories: ['wordpress', 'custom']
            },
            {
                name: 'Institutional Funding',
                categories: ['wordpress', 'woocommerce', 'custom']
            },
            {
                name: 'Backed Sports',
                categories: ['wordpress', 'woocommerce', 'custom']
            }
        ],
        filteredProjects: [],
        init() {
            this.filteredProjects = this.projects;
        },
        setCategory(category) {
            this.activeCategory = category;
            this.filterProjects();
        },
        filterProjects() {
            const searchTerm = this.search.toLowerCase();
            this.filteredProjects = this.projects.filter(project => {
                const matchesSearch = project.name.toLowerCase().includes(searchTerm);
                const matchesCategory = this.activeCategory === 'all' || project.categories
                    .includes(this.activeCategory);
                return matchesSearch && matchesCategory;
            });
        },
        shouldShow(categories) {
            const projectCategories = categories.split(',').map(cat => cat.trim());
            const matchesCategory = this.activeCategory === 'all' || projectCategories.includes(this
                .activeCategory);

            const projectNames = [
                'Visitor Management System',
                'Nyeri Club',
                'The Funded Way',
                'Torus',
                'Institutional Funding',
                'Backed Sports'
            ];

            const matchesSearch = this.search === '' ||
                projectNames.some(name => name.toLowerCase().includes(this.search.toLowerCase()));

            return matchesCategory && matchesSearch;
        }
    }));
});

// Add floating animation keyframes
const style = document.createElement('style');
style.textContent = `
    @keyframes float {
        0% { transform: translate(0px, 0px); }
        100% { transform: translate(-40px, -40px); }
    }
`;
document.head.appendChild(style);
</script>

<?php
get_footer();