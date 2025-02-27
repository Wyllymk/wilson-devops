<?php
/**
 * The template for displaying the about-me page
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

    <!-- 1. Hero Section -->
    <section class="relative py-24 overflow-hidden">
        <div class="container mx-auto px-4 max-w-[var(--container-wide)]">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6 z-10">
                    <h1 class="font-oswald text-5xl md:text-6xl uppercase tracking-wide 
                        text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)]">
                        Hey, I’m Wilson
                    </h1>
                    <p
                        class="font-manrope text-xl text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        A software developer crafting scalable, pixel-perfect solutions with a passion for innovation.
                    </p>
                    <p
                        class="font-satisfy text-2xl text-[var(--color-cyber-coral)] dark:text-[var(--color-cyber-pink)]">
                        “Code is my canvas, and tech is my palette.”
                    </p>
                    <a href="#contact"
                        class="inline-block px-6 py-3 rounded-full 
                        bg-gradient-to-r from-[var(--color-cyber-blue)] to-[var(--color-cyber-coral)] 
                        dark:from-[var(--color-cyber-cyan)] dark:to-[var(--color-cyber-pink)] 
                        text-white font-manrope hover:scale-105 transition-all duration-300 shadow-[var(--drop-shadow-cyber-cyan)]">
                        Get in Touch
                    </a>
                </div>
                <div class="relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Dev.webp" alt="Wilson" class="relative rounded-xl shadow-2xl w-full max-w-sm mx-auto z-10 
                        border-4 border-[var(--color-cyber-cyan)] hover:shadow-[var(--drop-shadow-cyber-cyan)] 
                        transition-all duration-300" />
                    <div class="absolute inset-0 bg-[var(--color-cyber-cyan)]/20 rounded-xl animate-pulse"></div>
                </div>
            </div>
        </div>
        <!-- Background Animation -->
        <div class="absolute inset-0 z-0 opacity-20">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path id="cyberPath" d="M0,100 L20,80 L40,90 L60,70 L80,85 L100,60" fill="none"
                    stroke="var(--color-cyber-cyan)" stroke-width="2" />
            </svg>
        </div>
    </section>

    <!-- 2. Journey Section -->
    <section
        class="py-20 bg-[var(--color-cyber-dark)]/10 dark:bg-[var(--color-cyber-light)]/10 relative overflow-hidden">
        <div class="container mx-auto px-4 max-w-7xl relative">
            <h2
                class="font-oswald text-4xl text-center uppercase text-[var(--color-text-light)] dark:text-[var(--color-text-dark)] mb-12">
                My Developer Journey
            </h2>
            <!-- Central Vertical Line -->
            <div class="absolute left-1/2 top-30 bottom-5 w-1 bg-teal-500/50 dark:bg-[var(--color-cyber-pink)]/50 
            transform -translate-x-1/2 z-0 journey-line"></div>

            <div class="relative space-y-16">
                <!-- Milestone 1 -->
                <div class="flex flex-col md:flex-row items-center gap-8 journey-item">
                    <div
                        class="flex-1 text-right font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        <p class="text-lg font-bold text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)]">
                            2018 - First Lines of Code</p>
                        <p>Started with HTML/CSS, building static sites for fun.</p>
                    </div>
                    <div class="w-6 h-6 bg-[var(--color-cyber-cyan)] rounded-full shadow-[var(--drop-shadow-cyber-cyan)] 
                    border-4 border-[var(--color-cyber-light)] dark:border-[var(--color-cyber-dark)] z-10 journey-dot">
                    </div>
                    <div class="flex-1"></div>
                </div>

                <!-- Milestone 2 -->
                <div class="flex flex-col md:flex-row items-center gap-8 journey-item">
                    <div class="flex-1"></div>
                    <div class="w-6 h-6 bg-[var(--color-cyber-cyan)] rounded-full shadow-[var(--drop-shadow-cyber-cyan)] 
                    border-4 border-[var(--color-cyber-light)] dark:border-[var(--color-cyber-dark)] z-10 journey-dot">
                    </div>
                    <div
                        class="flex-1 font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        <p class="text-lg font-bold text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)]">
                            2020 - JavaScript & Beyond</p>
                        <p>Dived into JS, React, and Node.js, delivering dynamic apps.</p>
                    </div>
                </div>

                <!-- Milestone 3 -->
                <div class="flex flex-col md:flex-row items-center gap-8 journey-item">
                    <div
                        class="flex-1 text-right font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        <p class="text-lg font-bold text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)]">
                            2022 - WordPress Ninja</p>
                        <p>Mastered PHP and WordPress, creating custom themes.</p>
                    </div>
                    <div class="w-6 h-6 bg-[var(--color-cyber-cyan)] rounded-full shadow-[var(--drop-shadow-cyber-cyan)] 
                    border-4 border-[var(--color-cyber-light)] dark:border-[var(--color-cyber-dark)] z-10 journey-dot">
                    </div>
                    <div class="flex-1"></div>
                </div>

                <!-- Milestone 4 -->
                <div class="flex flex-col md:flex-row items-center gap-8 journey-item">
                    <div class="flex-1"></div>
                    <div class="w-6 h-6 bg-[var(--color-cyber-cyan)] rounded-full shadow-[var(--drop-shadow-cyber-cyan)] 
                    border-4 border-[var(--color-cyber-light)] dark:border-[var(--color-cyber-dark)] z-10 journey-dot">
                    </div>
                    <div
                        class="flex-1 font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        <p class="text-lg font-bold text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)]">
                            2025 - Full-Stack Visionary</p>
                        <p>Building scalable solutions with TypeScript and Strapi.</p>
                    </div>
                </div>

                <!-- Bonus Milestone 5 -->
                <div class="flex flex-col md:flex-row items-center gap-8 journey-item">
                    <div
                        class="flex-1 text-right font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        <p class="text-lg font-bold text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)]">
                            2026 - Open Source Advocate</p>
                        <p>Contributing to the community with tools and libraries.</p>
                    </div>
                    <div class="w-6 h-6 bg-[var(--color-cyber-cyan)] rounded-full shadow-[var(--drop-shadow-cyber-cyan)] 
                    border-4 border-[var(--color-cyber-light)] dark:border-[var(--color-cyber-dark)] z-10 journey-dot">
                    </div>
                    <div class="flex-1"></div>
                </div>
            </div>

            <!-- Background Particles -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
                <div class="particle w-2 h-2 bg-[var(--color-cyber-pink)] rounded-full absolute animate-float"
                    style="top: 20%; left: 30%;"></div>
                <div class="particle w-3 h-3 bg-[var(--color-cyber-cyan)] rounded-full absolute animate-float-delayed"
                    style="top: 50%; left: 70%;"></div>
                <div class="particle w-2 h-2 bg-[var(--color-cyber-coral)] rounded-full absolute animate-float"
                    style="top: 80%; left: 20%;"></div>
            </div>
        </div>
    </section>

    <!-- GSAP Animations and ScrollTrigger -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // Register ScrollTrigger with GSAP
        gsap.registerPlugin(ScrollTrigger);

        // Animate the central line growing from top to bottom
        gsap.fromTo('.journey-line', {
            height: 0
        }, {
            height: '100%',
            duration: 2,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: '.journey-section',
                start: 'top 80%',
                toggleActions: 'play none none reset'
            }
        });

        // Animate each journey item on scroll
        gsap.utils.toArray('.journey-item').forEach((item, index) => {
            gsap.fromTo(item.querySelectorAll('.flex-1'), {
                opacity: 0,
                x: index % 2 === 0 ? 50 : -50
            }, {
                opacity: 1,
                x: 0,
                duration: 1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: item,
                    start: 'top 80%',
                    toggleActions: 'play none none reset'
                }
            });
            gsap.fromTo(item.querySelector('.journey-dot'), {
                scale: 0
            }, {
                scale: 1,
                duration: 0.8,
                ease: 'elastic.out(1, 0.5)',
                scrollTrigger: {
                    trigger: item,
                    start: 'top 80%',
                    toggleActions: 'play none none reset'
                }
            });
        });

        // Pulse effect for dots
        gsap.to('.journey-dot', {
            scale: 1.2,
            duration: 1,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut',
            stagger: 0.3
        });
    });
    </script>

    <!-- Custom CSS for Particle Animation -->
    <style>
    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    .animate-float {
        animation: float 4s ease-in-out infinite;
    }

    .animate-float-delayed {
        animation: float 4s ease-in-out infinite 2s;
    }
    </style>

    <!-- 3. Tech Stack Section -->
    <section class="py-20">
        <div class="container mx-auto px-4 max-w-[var(--container-wide)]">
            <h2
                class="font-oswald text-4xl text-center uppercase text-[var(--color-text-light)] dark:text-[var(--color-text-dark)] mb-12">
                My Tech Stack
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6" x-data="{ activeSkill: '' }">
                <?php
                $skills = ['HTML', 'CSS', 'JavaScript', 'TypeScript', 'React', 'Git & Github', 'SCSS', 'Strapi', 'PHP', 'WordPress', 'Node.js'];
                foreach ($skills as $skill) {
                    echo '<div class="group relative cursor-pointer p-4 rounded-xl 
                        bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                        hover:bg-[var(--color-cyber-blue)]/20 dark:hover:bg-[var(--color-cyber-cyan)]/20 
                        transition-all duration-300 shadow-[var(--drop-shadow-custom)]"
                        @mouseover="activeSkill = \'' . esc_js($skill) . '\'"
                        @mouseleave="activeSkill = \'\'">
                        <p class="font-manrope text-center text-[var(--color-text-light)] dark:text-[var(--color-text-dark)] 
                            group-hover:text-[var(--color-cyber-coral)] dark:group-hover:text-[var(--color-cyber-pink)]">
                            ' . esc_html($skill) . '
                        </p>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 
                            bg-gradient-to-t from-[var(--color-cyber-cyan)]/30 to-transparent rounded-xl"></div>
                    </div>';
                }
                ?>
            </div>
            <div class="mt-8 text-center font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]"
                x-show="activeSkill" x-text="activeSkill + ' is one of my go-to tools for building awesome stuff!'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"></div>
        </div>
    </section>

    <!-- 4. Philosophy Section -->
    <section class="py-20 bg-[var(--color-cyber-dark)]/10 dark:bg-[var(--color-cyber-light)]/10">
        <div class="container mx-auto px-4 max-w-[var(--container-wide)]">
            <h2
                class="font-oswald text-4xl text-center uppercase text-[var(--color-text-light)] dark:text-[var(--color-text-dark)] mb-12">
                My Coding Philosophy
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    shadow-[var(--drop-shadow-cyber-cyan)]">
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-4">
                        Clean Code
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        I write readable, maintainable code that scales with projects and teams.
                    </p>
                </div>
                <div class="p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    shadow-[var(--drop-shadow-cyber-cyan)]">
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-4">
                        Collaboration
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        Thriving in Agile environments, I value teamwork and clear communication.
                    </p>
                </div>
                <div class="p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    shadow-[var(--drop-shadow-cyber-cyan)]">
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-4">
                        Innovation
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        Always exploring new tools and techniques to push boundaries.
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- GSAP Animations -->
<script>
document.addEventListener('DOMContentLoaded', () => {
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
        delay: 0.3,
        stagger: 0.2
    });
    gsap.from('.hero-section img', {
        opacity: 0,
        scale: 0.9,
        duration: 1,
        delay: 0.5
    });
    gsap.to('#cyberPath', {
        duration: 3,
        strokeDasharray: '1000',
        strokeDashoffset: '1000',
        repeat: -1,
        ease: 'linear'
    });
});
</script>

<?php
get_footer();