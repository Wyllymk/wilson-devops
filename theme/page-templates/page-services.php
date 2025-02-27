<?php
/**
 * The template for displaying the services page
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

    <!-- 1. Intro Section -->
    <section class="py-24 relative overflow-hidden">
        <div class="container mx-auto px-4 max-w-[var(--container-wide)]">
            <h1 class="font-oswald text-5xl md:text-6xl uppercase tracking-wide text-center 
                text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-6">
                Services That Power Your Vision
            </h1>
            <p
                class="font-manrope text-xl text-center text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)] max-w-2xl mx-auto">
                From concept to deployment, I craft cutting-edge solutions with a blend of creativity and precision.
            </p>
            <div class="mt-8 flex justify-center">
                <a href="#contact"
                    class="px-6 py-3 rounded-full bg-gradient-to-r 
                    from-[var(--color-cyber-blue)] to-[var(--color-cyber-coral)] 
                    dark:from-[var(--color-cyber-cyan)] dark:to-[var(--color-cyber-pink)] 
                    text-white font-manrope hover:scale-105 transition-all duration-300 shadow-[var(--drop-shadow-cyber-cyan)]">
                    Let’s Build Something Awesome
                </a>
            </div>
        </div>
        <!-- Background Animation -->
        <div class="absolute inset-0 z-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path id="servicePath" d="M0,90 Q25,70 50,90 T100,70" fill="none" stroke="var(--color-cyber-cyan)"
                    stroke-width="2" />
            </svg>
        </div>
    </section>

    <!-- 2. Core Services Section -->
    <section class="py-20 bg-[var(--color-cyber-dark)]/10 dark:bg-[var(--color-cyber-light)]/10">
        <div class="container mx-auto px-4 max-w-[var(--container-wide)]">
            <h2
                class="font-oswald text-4xl uppercase text-center text-[var(--color-text-light)] dark:text-[var(--color-text-dark)] mb-12">
                What I Offer
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Full-Stack Development -->
                <div class="service-card p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    backdrop-blur-md hover:shadow-[var(--drop-shadow-cyber-cyan)] transition-all duration-300 group"
                    x-data="{ expanded: false }" @click="expanded = !expanded">
                    <div
                        class="w-12 h-12 bg-[var(--color-cyber-cyan)]/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 fill-[var(--color-cyber-blue)] dark:fill-[var(--color-cyber-cyan)]"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4 4h16v16H4V4m2 2v12h12V6H6zM8 8h8v2H8V8zm0 4h8v2H8v-2z" />
                        </svg>
                    </div>
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                        Full-Stack Development
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        End-to-end web solutions with seamless front-end and back-end integration.
                    </p>
                    <div class="mt-4 text-sm" x-show="expanded" x-transition>
                        <p>Expertise in React, Node.js, PHP, and more to build scalable, dynamic apps.</p>
                    </div>
                </div>

                <!-- WordPress Solutions -->
                <div class="service-card p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    backdrop-blur-md hover:shadow-[var(--drop-shadow-cyber-cyan)] transition-all duration-300 group"
                    x-data="{ expanded: false }" @click="expanded = !expanded">
                    <div
                        class="w-12 h-12 bg-[var(--color-cyber-cyan)]/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 fill-[var(--color-cyber-blue)] dark:fill-[var(--color-cyber-cyan)]"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z" />
                        </svg>
                    </div>
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                        WordPress Solutions
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        Custom themes and plugins tailored to your needs.
                    </p>
                    <div class="mt-4 text-sm" x-show="expanded" x-transition>
                        <p>High-performance, responsive WordPress sites with Tailwind and PHP.</p>
                    </div>
                </div>

                <!-- API & Integration -->
                <div class="service-card p-6 rounded-xl bg-[var(--color-cyber-light)]/50 dark:bg-[var(--color-cyber-dark)]/50 
                    backdrop-blur-md hover:shadow-[var(--drop-shadow-cyber-cyan)] transition-all duration-300 group"
                    x-data="{ expanded: false }" @click="expanded = !expanded">
                    <div
                        class="w-12 h-12 bg-[var(--color-cyber-cyan)]/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 fill-[var(--color-cyber-blue)] dark:fill-[var(--color-cyber-cyan)]"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 2a8 8 0 110 16 8 8 0 010-16zm-2 4h4v2h-4zm0 4h4v2h-4z" />
                        </svg>
                    </div>
                    <h3
                        class="font-oswald text-xl text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                        API & Integration
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        Connect systems with robust APIs and third-party integrations.
                    </p>
                    <div class="mt-4 text-sm" x-show="expanded" x-transition>
                        <p>Seamless Strapi, AWS, and custom API solutions for your ecosystem.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Process Section -->
    <section class="py-20 relative">
        <div class="container mx-auto px-4 max-w-[var(--container-wide)]">
            <h2
                class="font-oswald text-4xl uppercase text-center text-[var(--color-text-light)] dark:text-[var(--color-text-dark)] mb-12">
                My Process
            </h2>
            <div class="relative flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="absolute left-1/2 top-0 bottom-0 w-1 bg-[var(--color-cyber-cyan)]/30 dark:bg-[var(--color-cyber-pink)]/30 
                    transform -translate-x-1/2 hidden md:block process-line"></div>
                <div class="process-step flex-1 p-6 rounded-xl bg-[var(--color-cyber-light)]/20 dark:bg-[var(--color-cyber-dark)]/20 
                    text-center relative z-10">
                    <div
                        class="w-10 h-10 bg-[var(--color-cyber-cyan)] rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="font-oswald text-white">1</span>
                    </div>
                    <h3
                        class="font-manrope text-lg text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                        Discovery
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        Understanding your goals and tech needs.
                    </p>
                </div>
                <div class="process-step flex-1 p-6 rounded-xl bg-[var(--color-cyber-light)]/20 dark:bg-[var(--color-cyber-dark)]/20 
                    text-center relative z-10">
                    <div
                        class="w-10 h-10 bg-[var(--color-cyber-cyan)] rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="font-oswald text-white">2</span>
                    </div>
                    <h3
                        class="font-manrope text-lg text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                        Design & Build
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        Crafting solutions with precision and flair.
                    </p>
                </div>
                <div class="process-step flex-1 p-6 rounded-xl bg-[var(--color-cyber-light)]/20 dark:bg-[var(--color-cyber-dark)]/20 
                    text-center relative z-10">
                    <div
                        class="w-10 h-10 bg-[var(--color-cyber-cyan)] rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="font-oswald text-white">3</span>
                    </div>
                    <h3
                        class="font-manrope text-lg text-[var(--color-cyber-blue)] dark:text-[var(--color-cyber-cyan)] mb-2">
                        Launch & Scale
                    </h3>
                    <p
                        class="font-manrope text-[var(--color-text-light-muted)] dark:text-[var(--color-text-dark-muted)]">
                        Deploying and optimizing for growth.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Tech Toolkit Section -->
    <section class="py-20 bg-[var(--color-cyber-dark)]/10 dark:bg-[var(--color-cyber-light)]/10">
        <div class="container mx-auto px-4 max-w-[var(--container-wide)]">
            <h2
                class="font-oswald text-4xl uppercase text-center text-[var(--color-text-light)] dark:text-[var(--color-text-dark)] mb-12">
                My Tech Toolkit
            </h2>
            <div class="grid grid-cols-3 md:grid-cols-5 gap-6 justify-items-center">
                <?php
                $tech_stack = [
                    ['name' => 'HTML', 'image' => 'html-5.008cf296.svg'],
                    ['name' => 'SCSS', 'image' => 'scss.98aab7f4.svg'],
                    ['name' => 'Tailwind', 'image' => 'tailwind-css.41e68952.svg'],
                    ['name' => 'JavaScript', 'image' => 'javascript.bf9de660.svg'],
                    ['name' => 'TypeScript', 'image' => 'typescript-icon.svg'],
                    ['name' => 'PHP', 'image' => 'php.a1592ac5.svg'],
                    ['name' => 'MySQL', 'image' => 'mysql.c01bedfc.svg'],
                    ['name' => 'Github', 'image' => 'github.93f8e2ad.svg'],
                    ['name' => 'AWS', 'image' => 'aws.svg'],
                    ['name' => 'WordPress', 'image' => 'icons8-wordpress-94.png'],
                ];
                foreach ($tech_stack as $tech) {
                    $invert_class = $tech['name'] === 'Github' ? 'dark:filter-none filter invert' : '';
                    echo '<div class="tech-item relative group p-4 rounded-full bg-[var(--color-cyber-light)]/20 dark:bg-[var(--color-cyber-dark)]/20 
                        hover:shadow-[var(--drop-shadow-cyber-cyan)] transition-all duration-300">
                        <img src="' . esc_url(get_template_directory_uri() . '/assets/img/' . $tech['image']) . '" 
                            class="w-12 h-12 object-contain ' . esc_attr($invert_class) . '" alt="' . esc_attr($tech['name']) . '">
                        <span class="absolute top-full mt-2 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 
                            bg-[var(--color-cyber-dark)] dark:bg-[var(--color-cyber-light)] text-[var(--color-text-light)] 
                            dark:text-[var(--color-text-dark)] text-sm py-1 px-3 rounded-md shadow-lg transition-opacity duration-300">
                            ' . esc_html($tech['name']) . '
                        </span>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

</main>

<!-- GSAP Animations -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Intro animation
    gsap.from('.intro-section h1', {
        opacity: 0,
        y: 50,
        duration: 1,
        ease: 'power3.out'
    });
    gsap.from('.intro-section p', {
        opacity: 0,
        y: 30,
        duration: 1,
        delay: 0.3
    });
    gsap.from('.intro-section a', {
        opacity: 0,
        scale: 0.9,
        duration: 1,
        delay: 0.6
    });
    gsap.to('#servicePath', {
        duration: 4,
        strokeDasharray: '200',
        strokeDashoffset: '200',
        repeat: -1,
        ease: 'linear'
    });

    // Service cards animation
    gsap.utils.toArray('.service-card').forEach((card, i) => {
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

    // Process steps animation
    gsap.from('.process-line', {
        height: 0,
        duration: 1.5,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.process-step',
            start: 'top 80%'
        }
    });
    gsap.utils.toArray('.process-step').forEach((step, i) => {
        gsap.from(step, {
            opacity: 0,
            x: i % 2 === 0 ? -50 : 50,
            duration: 1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: step,
                start: 'top 80%',
                toggleActions: 'play none none none'
            },
            delay: i * 0.3
        });
    });

    // Tech items animation
    gsap.utils.toArray('.tech-item').forEach((item, i) => {
        gsap.from(item, {
            opacity: 0,
            scale: 0.8,
            duration: 0.8,
            ease: 'elastic.out(1, 0.5)',
            scrollTrigger: {
                trigger: item,
                start: 'top 90%',
                toggleActions: 'play none none none'
            },
            delay: i * 0.1
        });
    });
});
</script>

<?php
get_footer();