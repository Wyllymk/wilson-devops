<?php
/**
 * The template for displaying the Nyeri Club project page
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

    <!-- Hero Section -->
    <section class="hero-section pb-24 pt-34 relative overflow-hidden bg-cyber-dark/10 dark:bg-cyber-light/10">
        <div class="container mx-auto px-4 ">
            <h1 class="font-nico text-5xl md:text-6xl uppercase tracking-wide text-center 
                text-cyber-blue dark:text-cyber-cyan mb-6">
                Nyeri Club Website
            </h1>
            <p
                class="font-manrope text-xl text-center text-text-light-muted dark:text-text-dark-muted max-w-2xl mx-auto">
                A golfing haven reimagined with WordPress and Elementor—elegance meets functionality.
            </p>
            <div class="mt-8 flex justify-center gap-4 z-10 relative">
                <a href="https://nyericlub.co.ke" target="_blank" class="px-6 py-3 rounded-full bg-gradient-to-r from-cyber-blue to-cyber-coral 
                    dark:from-cyber-cyan dark:to-cyber-pink text-white font-manrope 
                    hover:scale-105 transition-all duration-300 drop-shadow-cyber-cyan">
                    Visit Live Site
                </a>
                <a href="#contact" class="px-6 py-3 rounded-full border border-cyber-cyan text-cyber-blue 
                    dark:text-cyber-cyan hover:bg-cyber-cyan/20 transition-all duration-300">
                    Hire Me
                </a>
            </div>
            <!-- Background Animation -->
            <div class="absolute inset-0 z-0 opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path id="nyeriPath" d="M0,80 Q25,60 50,80 T100,60" fill="none" stroke="var(--color-cyber-cyan)"
                        stroke-width="2" />
                </svg>
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
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Nyeri-Club.jpg"
                        alt="Nyeri Club Website Screenshot"
                        class="w-full rounded-xl drop-shadow-cyber-cyan hover:scale-105 transition-all duration-300" />
                    <div class="absolute inset-0 bg-cyber-cyan/20 rounded-xl animate-pulse opacity-50">
                    </div>
                </div>
                <div class="space-y-6">
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        The Nyeri Club website (<a href="https://nyericlub.co.ke" target="_blank"
                            class="text-cyber-blue dark:text-cyber-cyan hover:underline">nyericlub.co.ke</a>)
                        is a showcase of modern web design for a historic golf club. Built with WordPress and Elementor,
                        it blends elegant layouts with intuitive navigation, offering members and enthusiasts a dynamic
                        platform to explore golfing opportunities.
                    </p>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        Key features include a responsive design, stunning visuals of the golf course, and seamless
                        integration of membership and event details—
                        all tailored to reflect the club’s rich heritage and serene environment.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Challenges Section -->
    <section class="challenges-section py-20 bg-cyber-dark/10 dark:bg-cyber-light/10">
        <div class="container mx-auto px-4 ">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Development Challenges', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 rounded-xl bg-cyber-light/50 dark:bg-cyber-dark/50 
                    drop-shadow-cyber-cyan">
                    <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-4">
                        Balancing Aesthetics & Performance
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        The client wanted a visually rich site with high-quality images of the golf course,
                        but this risked slow load times—critical for a membership-driven audience.
                    </p>
                </div>
                <div class="p-6 rounded-xl bg-cyber-light/50 dark:bg-cyber-dark/50 
                    drop-shadow-cyber-cyan">
                    <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-4">
                        Elementor Customization
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        While Elementor sped up development, achieving unique layouts beyond its templates
                        required custom CSS and JavaScript tweaks, testing my front-end skills.
                    </p>
                </div>
                <div class="p-6 rounded-xl bg-cyber-light/50 dark:bg-cyber-dark/50 
                    drop-shadow-cyber-cyan">
                    <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-4">
                        Content Integration
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        The club’s diverse offerings (golf, dining, events) meant integrating varied content types
                        into a cohesive structure without overwhelming users.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section class="solutions-section py-20">
        <div class="container mx-auto px-4 ">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Solutions Implemented', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>
            <div class="space-y-12">
                <div class="solution flex flex-col md:flex-row items-center gap-8">
                    <div class="w-12 h-12 bg-cyber-cyan rounded-full flex items-center justify-center">
                        <span class="font-oswald text-white">1</span>
                    </div>
                    <div class="flex-1 font-manrope text-text-light-muted dark:text-text-dark-muted">
                        <h3 class="text-lg font-bold text-cyber-blue dark:text-cyber-cyan mb-2">
                            Optimized Imagery
                        </h3>
                        <p>
                            Leveraged lazy loading and next-gen image formats (WebP) to keep the site fast
                            while showcasing Mt. Kenya views and lush greens—achieving load times under 2 seconds.
                        </p>
                    </div>
                </div>
                <div class="solution flex flex-col md:flex-row items-center gap-8">
                    <div class="w-12 h-12 bg-cyber-cyan rounded-full flex items-center justify-center">
                        <span class="font-oswald text-white">2</span>
                    </div>
                    <div class="flex-1 font-manrope text-text-light-muted dark:text-text-dark-muted">
                        <h3 class="text-lg font-bold text-cyber-blue dark:text-cyber-cyan mb-2">
                            Custom Elementor Enhancements
                        </h3>
                        <p>
                            Used custom CSS for unique section transitions and JavaScript for interactive elements
                            like hover effects on the golf course map—blending Elementor’s ease with bespoke design.
                        </p>
                    </div>
                </div>
                <div class="solution flex flex-col md:flex-row items-center gap-8">
                    <div class="w-12 h-12 bg-cyber-cyan rounded-full flex items-center justify-center">
                        <span class="font-oswald text-white">3</span>
                    </div>
                    <div class="flex-1 font-manrope text-text-light-muted dark:text-text-dark-muted">
                        <h3 class="text-lg font-bold text-cyber-blue dark:text-cyber-cyan mb-2">
                            Modular Content Structure
                        </h3>
                        <p>
                            Designed a flexible WordPress template with custom post types for events and facilities,
                            ensuring easy updates and a clean, user-friendly navigation experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cool Features Section -->
    <section class="py-20 bg-cyber-dark/10 dark:bg-cyber-light/10">
        <div class="container mx-auto px-4 ">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-15 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'Cool Features', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>
            <div class="grid md:grid-cols-3 gap-8" x-data="{ activeFeature: null }">
                <div class="feature-card p-6 rounded-xl bg-cyber-light/50 dark:bg-cyber-dark/50 
                    hover:drop-shadow-cyber-cyan transition-all duration-300 cursor-pointer"
                    @mouseover="activeFeature = 'gallery'" @mouseleave="activeFeature = null">
                    <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                        Dynamic Gallery
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        A responsive gallery showcasing the club’s stunning landscapes and events,
                        with smooth transitions and mobile optimization.
                    </p>
                </div>
                <div class="feature-card p-6 rounded-xl bg-cyber-light/50 dark:bg-cyber-dark/50 
                    hover:drop-shadow-cyber-cyan transition-all duration-300 cursor-pointer"
                    @mouseover="activeFeature = 'navigation'" @mouseleave="activeFeature = null">
                    <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                        Intuitive Navigation
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        A sleek, sticky menu that adapts to all devices, making it easy to explore
                        membership, facilities, and golfing details.
                    </p>
                </div>
                <div class="feature-card p-6 rounded-xl bg-cyber-light/50 dark:bg-cyber-dark/50 
                    hover:drop-shadow-cyber-cyan transition-all duration-300 cursor-pointer"
                    @mouseover="activeFeature = 'integration'" @mouseleave="activeFeature = null">
                    <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                        Seamless Integration
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        Embedded forms and event listings powered by WordPress plugins,
                        streamlined for user engagement.
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();