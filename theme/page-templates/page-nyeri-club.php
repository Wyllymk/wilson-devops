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
                Nyeri Club Website
            </h1>
            <p
                class="font-manrope text-xl text-center text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)] max-w-2xl mx-auto">
                A golfing haven reimagined with WordPress and Elementor—elegance meets functionality.
            </p>
            <div class="mt-8 flex justify-center gap-4">
                <a href="https://nyericlub.co.ke" target="_blank" class="px-6 py-3 rounded-full bg-gradient-to-r from-[var(--color-cyber-blue)] to-[var(--color-cyber-coral)] 
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
                    <path id="nyeriPath" d="M0,80 Q25,60 50,80 T100,60" fill="none" stroke="var(--color-cyber-cyan)"
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Nyeri-Club.jpg"
                        alt="Nyeri Club Website Screenshot"
                        class="w-full rounded-xl shadow-[var(--drop-shadow-cyber-cyan)] hover:scale-105 transition-all duration-300" />
                    <div class="absolute inset-0 bg-[var(--color-cyber-cyan)]/20 rounded-xl animate-pulse opacity-50">
                    </div>
                </div>
                <div class="space-y-6">
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        The Nyeri Club website (<a href="https://nyericlub.co.ke" target="_blank"
                            class="text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] hover:underline">nyericlub.co.ke</a>)
                        is a showcase of modern web design for a historic golf club. Built with WordPress and Elementor,
                        it blends elegant layouts with intuitive navigation, offering members and enthusiasts a dynamic
                        platform to explore golfing opportunities.
                    </p>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        Key features include a responsive design, stunning visuals of the golf course, and seamless
                        integration of membership and event details—
                        all tailored to reflect the club’s rich heritage and serene environment.
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
                        Balancing Aesthetics & Performance
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        The client wanted a visually rich site with high-quality images of the golf course,
                        but this risked slow load times—critical for a membership-driven audience.
                    </p>
                </div>
                <div class="p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    shadow-[var(--drop-shadow-cyber-cyan)]">
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-4">
                        Elementor Customization
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        While Elementor sped up development, achieving unique layouts beyond its templates
                        required custom CSS and JavaScript tweaks, testing my front-end skills.
                    </p>
                </div>
                <div class="p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    shadow-[var(--drop-shadow-cyber-cyan)]">
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-4">
                        Content Integration
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        The club’s diverse offerings (golf, dining, events) meant integrating varied content types
                        into a cohesive structure without overwhelming users.
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
                            Optimized Imagery
                        </h3>
                        <p>
                            Leveraged lazy loading and next-gen image formats (WebP) to keep the site fast
                            while showcasing Mt. Kenya views and lush greens—achieving load times under 2 seconds.
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
                            Custom Elementor Enhancements
                        </h3>
                        <p>
                            Used custom CSS for unique section transitions and JavaScript for interactive elements
                            like hover effects on the golf course map—blending Elementor’s ease with bespoke design.
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
    <section class="py-20 bg-[var(--color-cyber-dark)]/10 dark:bg-[var(--color-cyber-light)]/10">
        <div class="container mx-auto px-4 max-w-[var(--container-wide)]">
            <h2
                class="font-oswald text-4xl uppercase text-center text-[var(--color-text-light)] dark:text-[var(--color-text-dark)] mb-12">
                Cool Features
            </h2>
            <div class="grid md:grid-cols-3 gap-8" x-data="{ activeFeature: null }">
                <div class="feature-card p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    hover:shadow-[var(--drop-shadow-cyber-cyan)] transition-all duration-300 cursor-pointer"
                    @mouseover="activeFeature = 'gallery'" @mouseleave="activeFeature = null">
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                        Dynamic Gallery
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        A responsive gallery showcasing the club’s stunning landscapes and events,
                        with smooth transitions and mobile optimization.
                    </p>
                </div>
                <div class="feature-card p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    hover:shadow-[var(--drop-shadow-cyber-cyan)] transition-all duration-300 cursor-pointer"
                    @mouseover="activeFeature = 'navigation'" @mouseleave="activeFeature = null">
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                        Intuitive Navigation
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        A sleek, sticky menu that adapts to all devices, making it easy to explore
                        membership, facilities, and golfing details.
                    </p>
                </div>
                <div class="feature-card p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    hover:shadow-[var(--drop-shadow-cyber-cyan)] transition-all duration-300 cursor-pointer"
                    @mouseover="activeFeature = 'integration'" @mouseleave="activeFeature = null">
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                        Seamless Integration
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        Embedded forms and event listings powered by WordPress plugins,
                        streamlined for user engagement.
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- GSAP Animations -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Hero animation
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
    gsap.to('#nyeriPath', {
        duration: 4,
        strokeDasharray: '200',
        strokeDashoffset: '200',
        repeat: -1,
        ease: 'linear'
    });

    // Overview animation
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

    // Challenges animation
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

    // Solutions animation
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
            delay: i * 0.2,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: card,
                start: 'top 80%'
            }
        });
    });
});
</script>

<?php
get_footer();