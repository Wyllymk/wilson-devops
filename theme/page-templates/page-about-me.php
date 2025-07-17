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

<main class="min-h-screen bg-cyber-light dark:bg-cyber-dark transition-colors duration-400 ease-in-out">

    <!-- Sidebar Navigation (Mobile) -->
    <div id="navMenu" class="transform translate-x-full opacity-0 w-64 py-4 px-4 z-40 fixed md:hidden top-0 h-full 
        bg-cyber-light/90 dark:bg-cyber-dark/90 backdrop-blur-md drop-shadow-cyber-cyan 
        transition-all duration-400 ease-in-out">
        <?php get_template_part('template-parts/content/content', 'aside'); ?>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 top-0 h-screen z-30 bg-black/70 hidden"></div>

    <!-- 1. Hero Section -->
    <section class="relative pb-24 pt-34 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6 z-10">
                    <h1 class="font-nico text-5xl md:text-6xl uppercase tracking-wide 
                        text-teal-500 dark:text-teal-300">
                        <?php esc_html_e( 'Hey, I’m Wilson', 'wilson-devops' ); ?>
                    </h1>
                    <p class="font-manrope text-xl text-text-light-muted dark:text-text-dark-muted">
                        <?php esc_html_e( 'A software developer crafting scalable, pixel-perfect solutions with a passion for innovation.', 'wilson-devops' ); ?>
                    </p>
                    <p class="font-satisfy text-2xl text-cyber-coral dark:text-cyber-pink">
                        <?php esc_html_e( '“Code is my canvas, and tech is my palette.”', 'wilson-devops' ); ?>
                    </p>
                    <a href="<?php echo esc_url( site_url( '/contact/' ) ); ?>" class="inline-block px-6 py-3 rounded-full 
                        bg-gradient-to-r from-cyber-blue to-cyber-coral 
                        dark:from-cyber-cyan dark:to-cyber-pink 
                        text-white font-manrope hover:scale-105 transition-all duration-300 drop-shadow-cyber-cyan">
                        <?php esc_html_e( 'Get in Touch', 'wilson-devops' ); ?>
                    </a>
                </div>
                <div class="relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Dev.webp" alt="Wilson" class="relative rounded-xl shadow-2xl w-full max-w-sm mx-auto z-10 
                        border-4 border-cyber-cyan hover:drop-shadow-cyber-cyan 
                        transition-all duration-300" />
                    <div class="absolute inset-0 bg-cyber-cyan/20 rounded-xl animate-pulse"></div>
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
    <section class="py-20 bg-cyber-dark/10 dark:bg-cyber-light/10 relative overflow-hidden">
        <div class="container mx-auto px-4 max-w-7xl relative">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-10 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'My Developer Journey', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>
            <!-- Central Vertical Line -->
            <div class="absolute left-1/2 top-30 bottom-0 !h-3/4 w-1 bg-teal-500/50 dark:bg-cyber-pink/50 
            transform -translate-x-1/2 z-0 journey-line"></div>

            <div class="relative space-y-16">
                <!-- Milestone 1 -->
                <div class="flex flex-col md:flex-row items-center gap-8 journey-item">
                    <div class="flex-1 text-right font-manrope text-text-light-muted dark:text-text-dark-muted">
                        <p class="text-lg font-bold text-cyber-blue dark:text-cyber-cyan">
                            <?php esc_html_e( '2018 - First Lines of Code', 'wilson-devops' ); ?>
                        </p>
                        <p>
                            <?php esc_html_e( 'Started with HTML/CSS, building static sites for fun.', 'wilson-devops' ); ?>

                        </p>
                    </div>
                    <div class="w-6 h-6 bg-cyber-cyan rounded-full drop-shadow-cyber-cyan 
                    border-4 border-cyber-light dark:border-cyber-dark z-10 journey-dot">
                    </div>
                    <div class="flex-1"></div>
                </div>

                <!-- Milestone 2 -->
                <div class="flex flex-col md:flex-row items-center gap-8 journey-item">
                    <div class="flex-1"></div>
                    <div class="w-6 h-6 bg-cyber-cyan rounded-full drop-shadow-cyber-cyan 
                    border-4 border-cyber-light dark:border-cyber-dark z-10 journey-dot">
                    </div>
                    <div class="flex-1 font-manrope text-text-light-muted dark:text-text-dark-muted">
                        <p class="text-lg font-bold text-cyber-blue dark:text-cyber-cyan">
                            <?php esc_html_e( '2020 - JavaScript & Beyond', 'wilson-devops' ); ?>
                        </p>
                        <p>
                            <?php esc_html_e( 'Dived into JS, React, and Node.js, delivering dynamic apps.', 'wilson-devops' ); ?>
                        </p>
                    </div>
                </div>

                <!-- Milestone 3 -->
                <div class="flex flex-col md:flex-row items-center gap-8 journey-item">
                    <div class="flex-1 text-right font-manrope text-text-light-muted dark:text-text-dark-muted">
                        <p class="text-lg font-bold text-cyber-blue dark:text-cyber-cyan">
                            <?php esc_html_e( '2022 - WordPress Ninja', 'wilson-devops' ); ?>
                        </p>
                        <p>
                            <?php esc_html_e( 'Mastered PHP and WordPress, creating custom themes.', 'wilson-devops' ); ?>
                        </p>
                    </div>
                    <div class="w-6 h-6 bg-cyber-cyan rounded-full drop-shadow-cyber-cyan 
                    border-4 border-cyber-light dark:border-cyber-dark z-10 journey-dot">
                    </div>
                    <div class="flex-1"></div>
                </div>

                <!-- Milestone 4 -->
                <div class="flex flex-col md:flex-row items-center gap-8 journey-item">
                    <div class="flex-1"></div>
                    <div class="w-6 h-6 bg-cyber-cyan rounded-full drop-shadow-cyber-cyan 
                    border-4 border-cyber-light dark:border-cyber-dark z-10 journey-dot">
                    </div>
                    <div class="flex-1 font-manrope text-text-light-muted dark:text-text-dark-muted">
                        <p class="text-lg font-bold text-cyber-blue dark:text-cyber-cyan">
                            <?php esc_html_e( '2025 - Full-Stack Visionary', 'wilson-devops' ); ?>
                        </p>
                        <p>
                            <?php esc_html_e( 'Building scalable solutions with TypeScript and Strapi.', 'wilson-devops' ); ?>
                        </p>
                    </div>
                </div>

                <!-- Bonus Milestone 5 -->
                <div class="flex flex-col md:flex-row items-center gap-8 journey-item">
                    <div class="flex-1 text-right font-manrope text-text-light-muted dark:text-text-dark-muted">
                        <p class="text-lg font-bold text-cyber-blue dark:text-cyber-cyan">
                            <?php esc_html_e( '2026 - Open Source Advocate', 'wilson-devops' ); ?>
                        </p>
                        <p>
                            <?php esc_html_e( 'Contributing to the community with tools and libraries.', 'wilson-devops' ); ?>
                        </p>
                    </div>
                    <div class="w-6 h-6 bg-cyber-cyan rounded-full drop-shadow-cyber-cyan 
                    border-4 border-cyber-light dark:border-cyber-dark z-10 journey-dot">
                    </div>
                    <div class="flex-1"></div>
                </div>
            </div>

            <!-- Background Particles -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
                <div class="particle w-2 h-2 bg-cyber-pink rounded-full absolute animate-float"
                    style="top: 20%; left: 30%;"></div>
                <div class="particle w-3 h-3 bg-cyber-cyan rounded-full absolute animate-float-delayed"
                    style="top: 50%; left: 70%;"></div>
                <div class="particle w-2 h-2 bg-cyber-coral rounded-full absolute animate-float"
                    style="top: 80%; left: 20%;"></div>
            </div>
        </div>
    </section>

    <!-- 3. Tech Stack Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-10 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'My Tech Stack', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6" x-data="{ activeSkill: '' }">
                <?php
                $skills = ['HTML', 'CSS', 'JavaScript', 'TypeScript', 'React', 'Git & Github', 'SCSS', 'Tailwind', 'Strapi', 'PHP', 'WordPress', 'Node.js'];
                foreach ($skills as $skill) {
                    echo '<div class="group relative cursor-pointer p-4 rounded-xl 
                        bg-cyber-light/50 dark:bg-cyber-dark/50 
                        hover:bg-cyber-blue/20 dark:hover:bg-cyber-cyan/20 
                        transition-all duration-300 -drop-shadow-custom"
                        @mouseover="activeSkill = \'' . esc_js($skill) . '\'"
                        @mouseleave="activeSkill = \'\'">
                        <p class="font-manrope text-center text-text-light dark:text-text-dark 
                            group-hover:text-gray-950 dark:group-hover:text-teal-300">
                            ' . esc_html__($skill) . '
                        </p>
                        <div class="absolute inset-0 group-hover:opacity-100 transition-opacity duration-300 
                            bg-gradient-to-t from-cyber-cyan/30 to-transparent rounded-xl"></div>
                    </div>';
                }
                ?>
            </div>
            <div class="mt-8 text-center font-manrope text-text-light-muted dark:text-text-dark-muted"
                x-show="activeSkill" x-text="activeSkill + ' is one of my go-to tools for building awesome stuff!'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"></div>
        </div>
    </section>

    <!-- 4. Philosophy Section -->
    <section class="py-20 bg-cyber-dark/10 dark:bg-cyber-light/10">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-10 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'My Coding Philosophy', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 rounded-xl bg-cyber-light/50 dark:bg-cyber-dark/50 
                    drop-shadow-cyber-cyan">
                    <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-4">
                        <?php esc_html_e( 'Clean Code', 'wilson-devops' ); ?>
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        <?php esc_html_e( 'I write readable, maintainable code that scales with projects and teams.', 'wilson-devops' ); ?>
                    </p>
                </div>
                <div class="p-6 rounded-xl bg-cyber-light/50 dark:bg-cyber-dark/50 
                    drop-shadow-cyber-cyan">
                    <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-4">
                        <?php esc_html_e( 'Collaboration', 'wilson-devops' ); ?>
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        <?php esc_html_e( 'Thriving in Agile environments, I value teamwork and clear communication.', 'wilson-devops' ); ?>
                    </p>
                </div>
                <div class="p-6 rounded-xl bg-cyber-light/50 dark:bg-cyber-dark/50 
                    drop-shadow-cyber-cyan">
                    <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-4">
                        <?php esc_html_e( 'Innovation', 'wilson-devops' ); ?>
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        <?php esc_html_e( 'Always exploring new tools and techniques to push boundaries.', 'wilson-devops' ); ?>
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