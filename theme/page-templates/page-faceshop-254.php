<?php
/**
 * The template for displaying the Dejavu Technologies project page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wilson_Devops
 */
defined('ABSPATH') || exit;

get_header();
?>

<main
    class="min-h-screen bg-[var(--color-cyber-light)] dark:bg-[var(--color-cyber-dark)] transition-colors duration-400 ease-in-out">

    <!-- Sidebar Navigation (Mobile) -->
    <div id="cyberNavMenu" class="transform translate-x-full opacity-0 w-64 py-4 px-4 z-40 fixed md:hidden top-0 h-full 
        bg-[var(--color-cyber-light)]/90 dark:bg-[var(--color-cyber-dark)]/90 backdrop-blur-md shadow-[var(--drop-shadow-cyber-cyan)] 
        transition-all duration-400 ease-in-out">
        <?php get_template_part('template-parts/content/content', 'aside'); ?>
    </div>

    <!-- Overlay -->
    <div id="cyberOverlay" class="fixed inset-0 top-0 h-screen z-30 bg-black/70 hidden"></div>

    <!-- Hero Section -->
    <section
        class="py-24 relative overflow-hidden bg-[var(--color-cyber-dark)]/10 dark:bg-[var(--color-cyber-light)]/10">
        <div class="container mx-auto px-4 max-w-[var(--container-wide)]">
            <h1 class="font-oswald text-5xl md:text-6xl uppercase tracking-wide text-center 
                text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-6">
                Dejavu Technologies Website
            </h1>
            <p
                class="font-manrope text-xl text-center text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)] max-w-2xl mx-auto">
                A tech-driven redesign with WordPress, custom Laravel API, and innovative design.
            </p>
            <div class="mt-8 flex justify-center gap-4">
                <a href="https://dejavutechkenya.com" target="_blank" class="px-6 py-3 rounded-full bg-gradient-to-r from-[var(--color-cyber-blue)] to-[var(--color-cyber-coral)] 
                    dark:from-[var(--color-cyber-cyan)] dark:to-[var(--color-cyber-pink)] text-white font-manrope 
                    hover:scale-105 transition-all duration-300 shadow-[var(--drop-shadow-cyber-cyan)]">
                    Visit Live Site
                </a>
                <a href="#contact"
                    class="px-6 py-3 rounded-full border border-[var(--color-cyber-cyan)] text-[var(--color-cyber-blue)] 
                    dark:text-[var(--color-cyber-cyan)] hover:bg-[var(--color-cyber-cyan)]/20 transition-all duration-300">
                    Hire Me
                </a>
            </div>
            <!-- Background Animation -->
            <div class="absolute inset-0 z-0 opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path id="dejavuPath" d="M0,90 Q25,70 50,90 T100,70" fill="none" stroke="var(--color-cyber-pink)"
                        stroke-width="2" />
                </svg>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="py-20">
        <div class="container mx-auto px-4 max-w-[var(--container-wide)]">
            <h2
                class="font-oswald text-4xl uppercase text-center text-[var(--color-text-light)] dark:text-[var(--color-text-dark)] mb-12">
                Project Overview
            </h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Dejavu.jpg"
                        alt="Dejavu Technologies Website Screenshot"
                        class="w-full rounded-xl shadow-[var(--drop-shadow-cyber-cyan)] hover:scale-105 transition-all duration-300" />
                    <div class="absolute inset-0 bg-[var(--color-cyber-cyan)]/20 rounded-xl animate-pulse opacity-50">
                    </div>
                </div>
                <div class="space-y-6">
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        The Dejavu Technologies website (<a href="https://dejavutechkenya.com" target="_blank"
                            class="text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] hover:underline">dejavutechkenya.com</a>)
                        is a bold redesign that fuses WordPress with a custom Laravel API for its product catalog.
                        Featuring a sleek shop page, seamless integrations, and a modern aesthetic, it’s built to
                        elevate user experience and functionality.
                    </p>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        This project stands out with its dynamic product listings, powered by a custom API,
                        complete with pagination and real-time updates—an exciting blend of front-end flair and back-end
                        innovation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Challenges Section -->
    <section class="py-20 bg-[var(--color-cyber-dark)]/10 dark:bg-[var(--color-cyber-light)]/10">
        <div class="container mx-auto px-4 max-w-[var(--container-wide)]">
            <h2
                class="font-oswald text-4xl uppercase text-center text-[var(--color-text-light)] dark:text-[var(--color-text-dark)] mb-12">
                Development Challenges
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    shadow-[var(--drop-shadow-cyber-cyan)]">
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-4">
                        Laravel API Integration
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        Bridging WordPress with a Laravel backend for product data required a robust API setup,
                        handling authentication and real-time sync challenges.
                    </p>
                </div>
                <div class="p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    shadow-[var(--drop-shadow-cyber-cyan)]">
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-4">
                        Pagination Complexity
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        Implementing efficient pagination for a growing product catalog demanded careful query
                        optimization
                        and a smooth front-end experience.
                    </p>
                </div>
                <div class="p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    shadow-[var(--drop-shadow-cyber-cyan)]">
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-4">
                        Design Consistency
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        Matching the client’s vision of a modern, innovative look across WordPress and API-driven
                        sections
                        was a creative and technical hurdle.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section class="py-20">
        <div class="container mx-auto px-4 max-w-[var(--container-wide)]">
            <h2
                class="font-oswald text-4xl uppercase text-center text-[var(--color-text-light)] dark:text-[var(--color-text-dark)] mb-12">
                Solutions Implemented
            </h2>
            <div class="space-y-12">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="w-12 h-12 bg-[var(--color-cyber-cyan)] rounded-full flex items-center justify-center">
                        <span class="font-oswald text-white">1</span>
                    </div>
                    <div
                        class="flex-1 font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        <h3
                            class="text-lg font-bold text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                            Custom Laravel API
                        </h3>
                        <p>
                            Built a secure Laravel REST API to fetch products dynamically, using OAuth for
                            authentication
                            and caching to ensure fast, reliable data delivery to WordPress.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="w-12 h-12 bg-[var(--color-cyber-cyan)] rounded-full flex items-center justify-center">
                        <span class="font-oswald text-white">2</span>
                    </div>
                    <div
                        class="flex-1 font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        <h3
                            class="text-lg font-bold text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                            Optimized Pagination
                        </h3>
                        <p>
                            Leveraged Laravel’s pagination with custom queries and front-end tweaks to handle large
                            product sets,
                            delivering a seamless browsing experience with minimal load times.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="w-12 h-12 bg-[var(--color-cyber-cyan)] rounded-full flex items-center justify-center">
                        <span class="font-oswald text-white">3</span>
                    </div>
                    <div
                        class="flex-1 font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        <h3
                            class="text-lg font-bold text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                            Unified Design System
                        </h3>
                        <p>
                            Crafted a custom WordPress theme with Elementor, syncing styles with API-driven sections
                            using Tailwind-inspired utilities for a cohesive, innovative look.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cool Features Section -->
    <section class="py-20 bg-[var(--color-cyber-dark)]/10 dark:bg-[var(--color-cyber-light)]/10">
        <div class="container mx-auto px-4 max-w-[var(--container-wide)]">
            <h2
                class="font-oswald text-4xl uppercase text-center text-[var(--color-text-light)] dark:text-[var(--color-text-dark)] mb-12">
                Cool Features
            </h2>
            <div class="grid md:grid-cols-3 gap-8" x-data="{ activeFeature: null }">
                <div class="feature-card p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    hover:shadow-[var(--drop-shadow-cyber-cyan)] transition-all duration-300 cursor-pointer"
                    @mouseover="activeFeature = 'api'" @mouseleave="activeFeature = null">
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                        Laravel Product API
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        Real-time product listings powered by a custom Laravel API,
                        bringing dynamic, scalable e-commerce to WordPress.
                    </p>
                </div>
                <div class="feature-card p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    hover:shadow-[var(--drop-shadow-cyber-cyan)] transition-all duration-300 cursor-pointer"
                    @mouseover="activeFeature = 'shop'" @mouseleave="activeFeature = null">
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                        Custom Shop Page
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        A sleek, paginated shop page with intuitive filters and a modern layout,
                        enhancing the shopping experience.
                    </p>
                </div>
                <div class="feature-card p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    hover:shadow-[var(--drop-shadow-cyber-cyan)] transition-all duration-300 cursor-pointer"
                    @mouseover="activeFeature = 'design'" @mouseleave="activeFeature = null">
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                        Innovative Design
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        A visually striking interface with bold colors and smooth transitions,
                        reflecting Dejavu’s tech-forward identity.
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- GSAP Animations -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Hero animation (assumes prior section has .hero-section class)
    gsap.from('.hero-section h1', {
        opacity: 0,
        y: 50,
        duration: 1,
        ease: 'power3.out'
    });
    gsap.from('.hero-section p', {
        opacity: 0,
        y: 30,
        duration: 1,
        delay: 0.3
    });
    gsap.from('.hero-section a', {
        opacity: 0,
        scale: 0.9,
        duration: 1,
        delay: 0.6,
        stagger: 0.2
    });
    gsap.to('#dejavuPath', {
        duration: 4,
        strokeDasharray: '200',
        strokeDashoffset: '200',
        repeat: -1,
        ease: 'linear'
    });

    // Overview animation (assumes prior section has .overview-section class)
    gsap.from('.overview-section img', {
        opacity: 0,
        scale: 0.9,
        duration: 1,
        scrollTrigger: {
            trigger: '.overview-section',
            start: 'top 80%'
        }
    });
    gsap.from('.overview-section p', {
        opacity: 0,
        y: 30,
        duration: 1,
        stagger: 0.2,
        scrollTrigger: {
            trigger: '.overview-section',
            start: 'top 80%'
        }
    });

    // Challenges animation (assumes prior section has .challenges-section class)
    gsap.utils.toArray('.challenges-section .rounded-xl').forEach((card, i) => {
        gsap.from(card, {
            opacity: 0,
            y: 50,
            duration: 1,
            delay: i * 0.2,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: card,
                start: 'top 80%'
            }
        });
    });

    // Solutions animation (assumes prior section has .solutions-section class)
    gsap.utils.toArray('.solutions-section .flex').forEach((step, i) => {
        gsap.from(step, {
            opacity: 0,
            x: i % 2 === 0 ? -50 : 50,
            duration: 1,
            delay: i * 0.3,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: step,
                start: 'top 80%'
            }
        });
    });

    // Features animation
    gsap.utils.toArray('.feature-card').forEach((card, i) => {
        gsap.from(card, {
            opacity: 0,
            y: 50,
            duration: 1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: card,
                start: 'top 80%',
                toggleActions: 'play none none none'
            },
            delay: i * 0.2
        });
    });
});
</script>

<?php
get_footer();