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
    <section class="pb-24 pt-34 relative overflow-hidden bg-cyber-dark/10 dark:bg-cyber-light/10">
        <div class="container mx-auto px-4">
            <h1 class="font-nico text-5xl md:text-6xl uppercase tracking-wide text-center 
                text-cyber-blue dark:text-cyber-cyan mb-6">
                My Projects
            </h1>
            <p
                class="font-manrope text-xl text-center text-text-light-muted dark:text-text-dark-muted max-w-2xl mx-auto">
                A showcase of my work—crafted with passion, precision, and cutting-edge tech.
            </p>
            <!-- Background Animation -->
            <div class="absolute inset-0 z-0 opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path id="projectPath" d="M0,80 Q25,60 50,80 T100,60" fill="none" stroke="var(--color-cyber-pink)"
                        stroke-width="2" />
                </svg>
            </div>
        </div>
    </section>

    <!-- Projects Filter Section -->
    <section class="py-12  sticky top-0 z-20 bg-cyber-light dark:bg-cyber-dark drop-shadow-custom"
        x-data="projectFilter()">
        <div class="container mx-auto px-4">
            <!-- Search Bar -->
            <div class="relative max-w-md mx-auto mb-6">
                <input type="text" x-model="search" @input="filterProjects" placeholder="Search projects..." class="w-full p-3 rounded-full bg-cyber-light/80 dark:bg-cyber-dark/80 
                    border border-cyber-cyan/30 focus:border-cyber-cyan 
                    text-[var(--color-text-light)] dark:text-[var(--color-text-dark)] 
                    placeholder-text-light-muted dark:placeholder-text-dark-muted 
                    focus:outline-none drop-shadow-custom">
                <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 fill-cyber-cyan"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                </svg>
            </div>
            <!-- Categories -->
            <div class="flex flex-wrap justify-center gap-4">
                <button @click="setCategory('all')"
                    :class="{ 'bg-cyber-cyan text-white': activeCategory === 'all', 'bg-cyber-light/80 dark:bg-cyber-dark/80 text-[var(--color-text-light)] dark:text-[var(--color-text-dark)]': activeCategory !== 'all' }"
                    class="cursor-pointer px-4 py-2 rounded-full font-manrope hover:drop-shadow-cyber-cyan transition-all duration-300">
                    All
                </button>
                <button @click="setCategory('wordpress')"
                    :class="{ 'bg-cyber-cyan text-white': activeCategory === 'wordpress', 'bg-cyber-light/80 dark:bg-cyber-dark/80 text-[var(--color-text-light)] dark:text-[var(--color-text-dark)]': activeCategory !== 'wordpress' }"
                    class="cursor-pointer px-4 py-2 rounded-full font-manrope hover:drop-shadow-cyber-cyan transition-all duration-300">
                    WordPress
                </button>
                <button @click="setCategory('woocommerce')"
                    :class="{ 'bg-cyber-cyan text-white': activeCategory === 'woocommerce', 'bg-cyber-light/80 dark:bg-cyber-dark/80 text-[var(--color-text-light)] dark:text-[var(--color-text-dark)]': activeCategory !== 'woocommerce' }"
                    class="cursor-pointer px-4 py-2 rounded-full font-manrope hover:drop-shadow-cyber-cyan transition-all duration-300">
                    WooCommerce
                </button>
                <button @click="setCategory('elementor')"
                    :class="{ 'bg-cyber-cyan text-white': activeCategory === 'elementor', 'bg-cyber-light/80 dark:bg-cyber-dark/80 text-[var(--color-text-light)] dark:text-[var(--color-text-dark)]': activeCategory !== 'elementor' }"
                    class="cursor-pointer px-4 py-2 rounded-full font-manrope hover:drop-shadow-cyber-cyan transition-all duration-300">
                    Elementor
                </button>
            </div>
        </div>

        <!-- Projects Grid Section -->
        <div class="container mx-auto px-4 py-12">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- VMS -->
                <article class="project-card bg-cyber-light dark:bg-cyber-dark 
                    rounded-xl overflow-hidden drop-shadow-custom group hover:drop-shadow-cyber-cyan 
                    transition-all duration-300 border border-gray-200 dark:border-gray-700"
                    data-categories="wordpress" x-show="shouldShow('wordpress')">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vms.png" alt="VMS"
                            class="w-full h-56 object-cover" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-cyber-cyan/50 to-transparent 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="<?php echo esc_url(site_url('/vms')); ?>" class="px-4 py-2 rounded-full bg-[var(--color-cyber-pink)] text-white font-manrope 
                                hover:scale-105 transition-all duration-300">
                                <?php esc_html_e('View Project Details', 'wilson-devops'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                            <?php esc_html_e('Visitor Management System', 'wilson-devops'); ?>
                        </h3>
                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-4">
                            <?php esc_html_e("A powerful visitor management system built to streamline check-ins, improve security, automate guest records, and provide organizations with a seamless, efficient platform for managing visitors effectively every day.", 'wilson-devops'); ?>
                        </p>
                        <a href="https://vms.nyericlub.co.ke" target="_blank" class="font-manrope text-cyber-blue dark:text-cyber-cyan 
                            hover:text-[var(--color-cyber-coral)] dark:hover:text-[var(--color-cyber-pink)] 
                            inline-flex items-center gap-2 transition-colors duration-300">
                            <?php esc_html_e('Visit Website', 'wilson-devops'); ?>
                            <svg class="w-5 h-5 fill-cyber-blue dark:fill-cyber-cyan" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M9 3h8v8l-2-1V6.92l-5.6 5.59l-1.41-1.41L14.08 5H10zm3 12v-3l2-2v7H3V6h8L9 8H5v7h7z" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Nyeri Club -->
                <article class="project-card bg-cyber-light dark:bg-cyber-dark 
                    rounded-xl overflow-hidden drop-shadow-custom group hover:drop-shadow-cyber-cyan 
                    transition-all duration-300 border border-gray-200 dark:border-gray-700"
                    data-categories="wordpress,elementor" x-show="shouldShow('wordpress,elementor')">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nyeri-club-1.png"
                            alt="Nyeri Club" class="w-full h-56 object-cover" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-cyber-cyan/50 to-transparent 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="<?php echo esc_url(site_url('/nyeri-club/')); ?>" class="px-4 py-2 rounded-full bg-[var(--color-cyber-pink)] text-white font-manrope 
                                hover:scale-105 transition-all duration-300">
                                <?php esc_html_e('View Project Details', 'wilson-devops'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                            <?php esc_html_e('Nyeri Club', 'wilson-devops'); ?>
                        </h3>
                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-4">
                            <?php esc_html_e("Nyeri Club's golf website designed with WordPress and Elementor, featuring elegant layouts, intuitive navigation, and a dynamic platform for members and enthusiasts to engage and explore golfing opportunities.", 'wilson-devops'); ?>
                        </p>
                        <a href="https://nyericlub.co.ke" target="_blank" class="font-manrope text-cyber-blue dark:text-cyber-cyan 
                            hover:text-[var(--color-cyber-coral)] dark:hover:text-[var(--color-cyber-pink)] 
                            inline-flex items-center gap-2 transition-colors duration-300">
                            <?php esc_html_e('Visit Website', 'wilson-devops'); ?>
                            <svg class="w-5 h-5 fill-cyber-blue dark:fill-cyber-cyan" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M9 3h8v8l-2-1V6.92l-5.6 5.59l-1.41-1.41L14.08 5H10zm3 12v-3l2-2v7H3V6h8L9 8H5v7h7z" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Dejavu Technologies -->
                <article class="project-card bg-cyber-light dark:bg-cyber-dark 
                    rounded-xl overflow-hidden drop-shadow-custom group hover:drop-shadow-cyber-cyan 
                    transition-all duration-300 border border-gray-200 dark:border-gray-700"
                    data-categories="wordpress,elementor" x-show="shouldShow('wordpress,elementor')">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Dejavu.jpg"
                            alt="Dejavu Technologies" class="w-full h-56 object-cover" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-cyber-cyan/50 to-transparent 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="<?php echo esc_url(site_url('/dejavu-technologies/')); ?>" class="px-4 py-2 rounded-full bg-[var(--color-cyber-pink)] text-white font-manrope 
                                hover:scale-105 transition-all duration-300">
                                <?php esc_html_e('View Project Details', 'wilson-devops'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                            <?php esc_html_e('Dejavu Technologies', 'wilson-devops'); ?>
                        </h3>
                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-4">
                            <?php esc_html_e('The company website redesign utilizes WordPress and Elementor, featuring a custom shop page, seamless API integration, and an innovative design to enhance user experience and functionality across the site.', 'wilson-devops'); ?>
                        </p>
                        <a href="https://dejavutechkenya.com" target="_blank" class="font-manrope text-cyber-blue dark:text-cyber-cyan 
                            hover:text-[var(--color-cyber-coral)] dark:hover:text-[var(--color-cyber-pink)] 
                            inline-flex items-center gap-2 transition-colors duration-300">
                            <?php esc_html_e('Visit Website', 'wilson-devops'); ?>
                            <svg class="w-5 h-5 fill-cyber-blue dark:fill-cyber-cyan" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M9 3h8v8l-2-1V6.92l-5.6 5.59l-1.41-1.41L14.08 5H10zm3 12v-3l2-2v7H3V6h8L9 8H5v7h7z" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- FaceShop 254 -->
                <article class="project-card bg-cyber-light dark:bg-cyber-dark 
                    rounded-xl overflow-hidden drop-shadow-custom group hover:drop-shadow-cyber-cyan 
                    transition-all duration-300 border border-gray-200 dark:border-gray-700"
                    data-categories="woocommerce" x-show="shouldShow('woocommerce')">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Faceshop.jpg"
                            alt="FaceShop 254" class="w-full h-56 object-cover" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-cyber-cyan/50 to-transparent 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="<?php echo esc_url(site_url('/faceshop-254/')); ?>" class="px-4 py-2 rounded-full bg-[var(--color-cyber-pink)] text-white font-manrope 
                                hover:scale-105 transition-all duration-300">
                                <?php esc_html_e('View Project Details', 'wilson-devops'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                            <?php esc_html_e('FaceShop 254', 'wilson-devops'); ?>
                        </h3>
                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-4">
                            <?php esc_html_e('The FaceShop 254 e-commerce overhaul, powered by WooCommerce, fixed plugin update issues, enhanced speed, optimized SEO, and improved performance and online visibility for a better user experience.', 'wilson-devops'); ?>
                        </p>
                        <a href="https://faceshop254.com" target="_blank" class="font-manrope text-cyber-blue dark:text-cyber-cyan 
                            hover:text-[var(--color-cyber-coral)] dark:hover:text-[var(--color-cyber-pink)] 
                            inline-flex items-center gap-2 transition-colors duration-300">
                            <?php esc_html_e('Visit Website', 'wilson-devops'); ?>
                            <svg class="w-5 h-5 fill-cyber-blue dark:fill-cyber-cyan" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M9 3h8v8l-2-1V6.92l-5.6 5.59l-1.41-1.41L14.08 5H10zm3 12v-3l2-2v7H3V6h8L9 8H5v7h7z" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Gathathi-ini Boys -->
                <article class="project-card bg-cyber-light dark:bg-cyber-dark 
                    rounded-xl overflow-hidden drop-shadow-custom group hover:drop-shadow-cyber-cyan 
                    transition-all duration-300 border border-gray-200 dark:border-gray-700"
                    data-categories="wordpress" x-show="shouldShow('wordpress')">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Gathathi-ini.jpg"
                            alt="Gathathi-ini Boys" class="w-full h-56 object-cover" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-cyber-cyan/50 to-transparent 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="<?php echo esc_url(site_url('/gathathiini-boys/')); ?>" class="px-4 py-2 rounded-full bg-[var(--color-cyber-pink)] text-white font-manrope 
                                hover:scale-105 transition-all duration-300">
                                <?php esc_html_e('View Project Details', 'wilson-devops'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                            <?php esc_html_e('Gathathi-ini Boys', 'wilson-devops'); ?>
                        </h3>
                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-4">
                            <?php esc_html_e("The design and development of Gathathi-ini Boys High School's website, built on a custom WordPress theme, enhances communication and engagement, reflecting the school's ethos and improving its online presence.", 'wilson-devops'); ?>
                        </p>
                        <a href="https://gathathiiniboyshighschool.sc.ke" target="_blank" class="font-manrope text-cyber-blue dark:text-cyber-cyan 
                            hover:text-[var(--color-cyber-coral)] dark:hover:text-[var(--color-cyber-pink)] 
                            inline-flex items-center gap-2 transition-colors duration-300">
                            <?php esc_html_e('Visit Website', 'wilson-devops'); ?>
                            <svg class="w-5 h-5 fill-cyber-blue dark:fill-cyber-cyan" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M9 3h8v8l-2-1V6.92l-5.6 5.59l-1.41-1.41L14.08 5H10zm3 12v-3l2-2v7H3V6h8L9 8H5v7h7z" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Aegeus Inspections -->
                <article class="project-card bg-cyber-light dark:bg-cyber-dark 
                    rounded-xl overflow-hidden drop-shadow-custom group hover:drop-shadow-cyber-cyan 
                    transition-all duration-300 border border-gray-200 dark:border-gray-700"
                    data-categories="wordpress,elementor" x-show="shouldShow('wordpress,elementor')">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Aegeus-Inspections.jpg"
                            alt="Aegeus Inspections" class="w-full h-56 object-cover" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-cyber-cyan/50 to-transparent 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="<?php echo esc_url(site_url('/aegeus-inspections/')); ?>" class="px-4 py-2 rounded-full bg-[var(--color-cyber-pink)] text-white font-manrope 
                                hover:scale-105 transition-all duration-300">
                                <?php esc_html_e('View Project Details', 'wilson-devops'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                            <?php esc_html_e('Aegeus Inspections', 'wilson-devops'); ?>
                        </h3>
                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-4">
                            <?php esc_html_e('The website developed for Aegeus Inspections, using WordPress and Elementor, features over 40 pages and seamless integration, enhancing their online presence and enabling better audience engagement through Super DevOps.', 'wilson-devops'); ?>
                        </p>
                        <a href="https://aegeusinspections.com" target="_blank" class="font-manrope text-cyber-blue dark:text-cyber-cyan 
                            hover:text-[var(--color-cyber-coral)] dark:hover:text-[var(--color-cyber-pink)] 
                            inline-flex items-center gap-2 transition-colors duration-300">
                            <?php esc_html_e('Visit Website', 'wilson-devops'); ?>
                            <svg class="w-5 h-5 fill-cyber-blue dark:fill-cyber-cyan" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M9 3h8v8l-2-1V6.92l-5.6 5.59l-1.41-1.41L14.08 5H10zm3 12v-3l2-2v7H3V6h8L9 8H5v7h7z" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Aegeus Group -->
                <article class="project-card bg-cyber-light dark:bg-cyber-dark 
                    rounded-xl overflow-hidden drop-shadow-custom group hover:drop-shadow-cyber-cyan 
                    transition-all duration-300 border border-gray-200 dark:border-gray-700"
                    data-categories="wordpress,elementor" x-show="shouldShow('wordpress,elementor')">
                    <div class="relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Aegeus-Group.jpg"
                            alt="Aegeus Group" class="w-full h-56 object-cover" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-cyber-cyan/50 to-transparent 
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="<?php echo esc_url(site_url('/aegeus-group/')); ?>" class="px-4 py-2 rounded-full bg-[var(--color-cyber-pink)] text-white font-manrope 
                                hover:scale-105 transition-all duration-300">
                                <?php esc_html_e('View Project Details', 'wilson-devops'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-oswald text-xl text-cyber-blue dark:text-cyber-cyan mb-2">
                            <?php esc_html_e('Aegeus Group', 'wilson-devops'); ?>
                        </h3>
                        <p class="font-manrope text-text-light-muted dark:text-text-dark-muted mb-4">
                            <?php esc_html_e('The landing page for Aegeus Group, built with WordPress and Elementor, combines stunning design and seamless functionality, effectively showcasing the company’s offerings while engaging and captivating its target audience.', 'wilson-devops'); ?>
                        </p>
                        <a href="https://aegeusgroup.com" target="_blank" class="font-manrope text-cyber-blue dark:text-cyber-cyan 
                            hover:text-[var(--color-cyber-coral)] dark:hover:text-[var(--color-cyber-pink)] 
                            inline-flex items-center gap-2 transition-colors duration-300">
                            <?php esc_html_e('Visit Website', 'wilson-devops'); ?>
                            <svg class="w-5 h-5 fill-cyber-blue dark:fill-cyber-cyan" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M9 3h8v8l-2-1V6.92l-5.6 5.59l-1.41-1.41L14.08 5H10zm3 12v-3l2-2v7H3V6h8L9 8H5v7h7z" />
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
            <!-- No Results Message -->
            <div x-show="filteredProjects.length === 0"
                class="text-center mt-12 font-manrope text-text-light-muted dark:text-text-dark-muted">
                No projects match your search or category. More coming soon!
            </div>
        </div>
    </section>

</main>

<!-- Alpine.js Project Filter Logic -->
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('projectFilter', () => ({
        search: '',
        activeCategory: 'all',
        projects: [{
                name: 'Dejavu Technologies',
                categories: ['wordpress', 'elementor']
            },
            {
                name: 'Nyeri Club',
                categories: ['wordpress', 'elementor']
            },
            {
                name: 'FaceShop 254',
                categories: ['wordpress', 'woocommerce', 'elementor']
            },
            {
                name: 'Gathathi-ini Boys',
                categories: ['wordpress']
            },
            {
                name: 'Aegeus Inspections',
                categories: ['wordpress', 'elementor']
            },
            {
                name: 'Aegeus Group',
                categories: ['wordpress', 'elementor']
            },
            // Add more projects here as needed
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
            const matchesSearch = this.search === '' ||
                '<?php esc_html_e('Dejavu Technologies', 'wilson-devops'); ?>'.toLowerCase()
                .includes(this.search.toLowerCase()) ||
                '<?php esc_html_e('Nyeri Club', 'wilson-devops'); ?>'.toLowerCase().includes(this
                    .search.toLowerCase()) ||
                '<?php esc_html_e('FaceShop 254', 'wilson-devops'); ?>'.toLowerCase().includes(this
                    .search.toLowerCase()) ||
                '<?php esc_html_e('Gathathi-ini Boys', 'wilson-devops'); ?>'.toLowerCase().includes(
                    this.search.toLowerCase()) ||
                '<?php esc_html_e('Aegeus Inspections', 'wilson-devops'); ?>'.toLowerCase()
                .includes(this.search.toLowerCase()) ||
                '<?php esc_html_e('Aegeus Group', 'wilson-devops'); ?>'.toLowerCase().includes(this
                    .search.toLowerCase());
            return matchesCategory && matchesSearch;
        }
    }));
});
</script>


<?php
get_footer();