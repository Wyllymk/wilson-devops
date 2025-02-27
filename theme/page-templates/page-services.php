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

<main class="min-h-screen bg-cyber-light dark:bg-cyber-dark transition-colors duration-400 ease-in-out">

    <!-- Sidebar Navigation (Mobile) -->
    <div id="navMenu" class="transform translate-x-full opacity-0 w-64 py-4 px-4 z-40 fixed md:hidden top-0 h-full 
        bg-cyber-light/90 dark:bg-cyber-dark/90 backdrop-blur-md drop-shadow-cyber-cyan 
        transition-all duration-400 ease-in-out">
        <?php get_template_part('template-parts/content/content', 'aside'); ?>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 top-0 h-screen z-30 bg-black/70 hidden"></div>

    <!-- 1. Intro Section -->
    <section class="pb-24 pt-34 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <h1 class="font-nico text-5xl md:text-6xl uppercase tracking-wide text-center 
                text-cyber-blue dark:text-cyber-cyan mb-6">
                Services That Power Your Vision
            </h1>
            <p
                class="font-manrope text-xl text-center text-text-light-muted dark:text-text-dark-muted max-w-2xl mx-auto">
                From concept to deployment, I craft cutting-edge solutions with a blend of creativity and precision.
            </p>
            <div class="mt-8 flex justify-center">
                <a href="<?php echo esc_url( site_url( '/contact/' ) ); ?>" class="inline-block px-6 py-3 rounded-full 
                        bg-gradient-to-r from-cyber-blue to-cyber-coral 
                        dark:from-cyber-cyan dark:to-cyber-pink 
                        text-white font-manrope hover:scale-105 transition-all duration-300 drop-shadow-cyber-cyan">
                    <?php esc_html_e( 'Let’s Build Something Awesome', 'wilson-devops' ); ?>
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
    <section class="py-20 bg-cyber-dark/10 dark:bg-cyber-light/10">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-10 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'What I Offer', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Full-Stack Development -->
                <div class="service-card p-6 rounded-xl bg-cyber-light/50 dark:bg-cyber-dark/50 
                    backdrop-blur-md hover:drop-shadow-cyber-cyan transition-all duration-300 group"
                    x-data="{ expanded: false }" @click="expanded = !expanded">
                    <div class="w-12 h-12 bg-cyber-cyan/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 fill-cyber-blue dark:fill-cyber-cyan" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path fill="var(--color-cyber-cyan)"
                                d="M4 4h16v16H4V4m2 2v12h12V6H6zM8 8h8v2H8V8zm0 4h8v2H8v-2z" />
                        </svg>
                    </div>
                    <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                        Full-Stack Development
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        End-to-end web solutions with seamless front-end and back-end integration.
                    </p>
                    <div class="mt-4 text-sm" x-show="expanded" x-transition>
                        <p>Expertise in React, Node.js, PHP, and more to build scalable, dynamic apps.</p>
                    </div>
                </div>

                <!-- WordPress Solutions -->
                <div class="service-card p-6 rounded-xl bg-cyber-light/50 dark:bg-cyber-dark/50 
                    backdrop-blur-md hover:drop-shadow-cyber-cyan transition-all duration-300 group"
                    x-data="{ expanded: false }" @click="expanded = !expanded">
                    <div class="w-12 h-12 bg-cyber-cyan/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 fill-cyber-blue dark:fill-cyber-cyan" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path fill="var(--color-cyber-cyan)"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z" />
                        </svg>
                    </div>
                    <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                        WordPress Solutions
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        Custom themes and plugins tailored to your needs.
                    </p>
                    <div class="mt-4 text-sm" x-show="expanded" x-transition>
                        <p>High-performance, responsive WordPress sites with Tailwind and PHP.</p>
                    </div>
                </div>

                <!-- API & Integration -->
                <div class="service-card p-6 rounded-xl bg-cyber-light/50 dark:bg-cyber-dark/50 
                    backdrop-blur-md hover:drop-shadow-cyber-cyan transition-all duration-300 group"
                    x-data="{ expanded: false }" @click="expanded = !expanded">
                    <div class="w-12 h-12 bg-cyber-cyan/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 fill-cyber-blue dark:fill-cyber-cyan" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path fill="var(--color-cyber-cyan)"
                                d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 2a8 8 0 110 16 8 8 0 010-16zm-2 4h4v2h-4zm0 4h4v2h-4z" />
                        </svg>
                    </div>
                    <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                        API & Integration
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
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
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-10 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'My Process', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
            </h2>
            <div class="relative flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="process-step flex-1 p-6 rounded-xl bg-cyber-light/20 dark:bg-cyber-dark/20 
                    text-center relative z-10">
                    <div class="w-10 h-10 bg-cyber-cyan rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="font-oswald text-white">1</span>
                    </div>
                    <h3 class="font-manrope text-lg text-cyber-blue dark:text-cyber-cyan mb-2">
                        Discovery
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        Understanding your goals and tech needs.
                    </p>
                </div>
                <div class="process-step flex-1 p-6 rounded-xl bg-cyber-light/20 dark:bg-cyber-dark/20 
                    text-center relative z-10">
                    <div class="w-10 h-10 bg-cyber-cyan rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="font-oswald text-white">2</span>
                    </div>
                    <h3 class="font-manrope text-lg text-cyber-blue dark:text-cyber-cyan mb-2">
                        Design & Build
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        Crafting solutions with precision and flair.
                    </p>
                </div>
                <div class="process-step flex-1 p-6 rounded-xl bg-cyber-light/20 dark:bg-cyber-dark/20 
                    text-center relative z-10">
                    <div class="w-10 h-10 bg-cyber-cyan rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="font-oswald text-white">3</span>
                    </div>
                    <h3 class="font-manrope text-lg text-cyber-blue dark:text-cyber-cyan mb-2">
                        Launch & Scale
                    </h3>
                    <p class="font-manrope text-text-light-muted dark:text-text-dark-muted">
                        Deploying and optimizing for growth.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Tech Toolkit Section -->
    <section class="py-20 bg-cyber-dark/10 dark:bg-cyber-light/10">
        <div class="container mx-auto px-4">
            <h2 class="section__title relative text-5xl mx-auto my-6 mb-10 max-w-max">
                <span class="relative z-10 text-4xl font-bold text-center text-gray-900 dark:text-white">
                    <?php esc_html_e( 'My Tech Toolkit', 'wilson-devops' ); ?>
                </span>
                <span class="absolute top-2 -right-2 w-12 h-9 bg-teal-400/50 dark:bg-teal-600/50"></span>
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
                    echo '<div class="tech-item relative group p-4 rounded-full bg-cyber-light/20 dark:bg-cyber-dark/20 
                        hover:drop-shadow-cyber-cyan transition-all duration-300">
                        <img src="' . esc_url(get_template_directory_uri() . '/assets/img/' . $tech['image']) . '" 
                            class="w-12 h-12 object-contain ' . esc_attr($invert_class) . '" alt="' . esc_attr($tech['name']) . '">
                        <span class="absolute top-full mt-2 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 
                            bg-cyber-dark dark:bg-cyber-light text-text-light 
                            dark:text-text-dark text-sm py-1 px-3 rounded-md shadow-lg transition-opacity duration-300">
                            ' . esc_html($tech['name']) . '
                        </span>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();