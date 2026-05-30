<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wilson_Devops
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>

<!-- ══════════════════════════════════════════
     MOBILE MENU — full-screen cinematic slide
══════════════════════════════════════════ -->
<div id="mob-wrap" class="fixed inset-0 z-[90] pointer-events-none" aria-hidden="true">
    <div id="mob-dim" class="absolute inset-0 bg-ink/60 backdrop-blur-sm opacity-0 transition-opacity duration-500"
        onclick="closeMob()"></div>
    <div id="mob-ov1" class="absolute inset-y-0 right-0 w-full md:w-[420px] bg-violet z-30 translate-x-full"
        style="transition:transform .38s cubic-bezier(.7,0,.3,1)"></div>
    <div id="mob-panel"
        class="absolute inset-y-0 right-0 w-full md:w-[420px] bg-[#07080e] z-20 translate-x-full flex flex-col"
        style="transition:transform .42s cubic-bezier(.7,0,.3,1)">
        <div class="flex items-center justify-between px-8 pt-8 pb-6 border-b border-white/[0.07]">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" onclick="closeMob()"
                class="flex items-center gap-2.5 font-display text-[17px] font-semibold">
                <span class="grid h-8 w-8 place-items-center rounded-lg group-hover:-rotate-6" aria-hidden="true">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo" class="">
                </span>
                <span class="text-[#0b1120] dark:text-white">Wilson<span class="text-lilac"> </span>DevOps</span>
            </a>
            <button onclick="closeMob()" aria-label="<?php esc_attr_e( 'Close menu', 'wilson-devops' ); ?>"
                class="grid h-10 w-10 place-items-center rounded-xl border border-white/[0.1] text-white/50 hover:text-white hover:border-white/20 hover:rotate-90 transition-all duration-300">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg>
            </button>
        </div>
        <nav class="flex-1 flex flex-col justify-center px-8 gap-1" id="mob-nav"
            aria-label="<?php esc_attr_e( 'Mobile Navigation', 'wilson-devops' ); ?>">
            <a href="#about" onclick="closeMob()"
                class="mob-link group flex items-center gap-4 py-4 border-b border-white/[0.05] opacity-0 translate-x-8"
                style="transition:opacity .4s,transform .4s"><span class="font-mono text-xs text-violet">01</span><span
                    class="font-display text-3xl font-bold text-white group-hover:text-lilac transition-colors duration-200">About</span><svg
                    class="ml-auto w-5 h-5 text-white/20 group-hover:text-violet group-hover:translate-x-1 transition-all"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg></a>
            <a href="#ai" onclick="closeMob()"
                class="mob-link group flex items-center gap-4 py-4 border-b border-white/[0.05] opacity-0 translate-x-8"
                style="transition:opacity .4s,transform .4s"><span class="font-mono text-xs text-violet">02</span><span
                    class="font-display text-3xl font-bold text-white group-hover:text-lilac transition-colors duration-200">AI
                    Services</span><svg
                    class="ml-auto w-5 h-5 text-white/20 group-hover:text-violet group-hover:translate-x-1 transition-all"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg></a>
            <a href="#services" onclick="closeMob()"
                class="mob-link group flex items-center gap-4 py-4 border-b border-white/[0.05] opacity-0 translate-x-8"
                style="transition:opacity .4s,transform .4s"><span class="font-mono text-xs text-violet">03</span><span
                    class="font-display text-3xl font-bold text-white group-hover:text-lilac transition-colors duration-200">Services</span><svg
                    class="ml-auto w-5 h-5 text-white/20 group-hover:text-violet group-hover:translate-x-1 transition-all"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg></a>
            <a href="#projects" onclick="closeMob()"
                class="mob-link group flex items-center gap-4 py-4 border-b border-white/[0.05] opacity-0 translate-x-8"
                style="transition:opacity .4s,transform .4s"><span class="font-mono text-xs text-violet">04</span><span
                    class="font-display text-3xl font-bold text-white group-hover:text-lilac transition-colors duration-200">Projects</span><svg
                    class="ml-auto w-5 h-5 text-white/20 group-hover:text-violet group-hover:translate-x-1 transition-all"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg></a>
            <a href="#contact" onclick="closeMob()"
                class="mob-link group flex items-center gap-4 py-4 opacity-0 translate-x-8"
                style="transition:opacity .4s,transform .4s"><span class="font-mono text-xs text-violet">05</span><span
                    class="font-display text-3xl font-bold text-white group-hover:text-lilac transition-colors duration-200">Contact</span><svg
                    class="ml-auto w-5 h-5 text-white/20 group-hover:text-violet group-hover:translate-x-1 transition-all"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg></a>
        </nav>
        <div id="mob-footer" class="px-8 pb-8 pt-6 border-t border-white/[0.07] opacity-0 translate-y-4"
            style="transition:opacity .4s,transform .4s">
            <a href="#contact" onclick="closeMob()"
                class="w-full flex items-center justify-center gap-2 rounded-full bg-grad-main py-3.5 text-sm font-medium text-white shadow-glow mb-5">
                <?php esc_html_e( 'Hire Me →', 'wilson-devops' ); ?>
            </a>
            <div class="flex items-center gap-3">
                <a href="https://github.com/Wyllymk" target="_blank" rel="noopener noreferrer" aria-label="GitHub"
                    class="grid h-9 w-9 place-items-center rounded-lg border border-white/[0.1] text-white/35 hover:text-white hover:border-white/25 transition-all"><svg
                        width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                    </svg></a>
                <a href="https://www.linkedin.com/in/wilson-mbuthia-k/" target="_blank" rel="noopener noreferrer"
                    aria-label="LinkedIn"
                    class="grid h-9 w-9 place-items-center rounded-lg border border-white/[0.1] text-white/35 hover:text-blue hover:border-blue/40 transition-all"><svg
                        width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.063 2.063 0 110 4.128 2.063 2.063 0 010-4.128zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg></a>
                <a href="https://twitter.com/WilsonMbuthiaK" target="_blank" rel="noopener noreferrer"
                    aria-label="X / Twitter"
                    class="grid h-9 w-9 place-items-center rounded-lg border border-white/[0.1] text-white/35 hover:text-white hover:border-white/25 transition-all"><svg
                        width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.735-8.856L2.025 2.25H8.32l4.259 5.629 5.665-5.629zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                    </svg></a>
                <a href="https://wa.me/+254703639230" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"
                    class="grid h-9 w-9 place-items-center rounded-lg border border-emerald-500/25 text-emerald-400/60 hover:text-emerald-400 hover:border-emerald-500/50 transition-all"><svg
                        width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                    </svg></a>
                <div class="ml-auto font-mono text-[10px] text-white/20">info@<br>wilsondevops.com</div>
            </div>
        </div>
    </div>
</div>

<!-- ══ PRIMARY NAV ══ -->
<header id="nav" class="fixed inset-x-0 top-0 z-50 transition-all duration-300" role="banner">
    <nav class="max-w-[1280px] mx-auto px-6 lg:px-10 h-16 flex items-center justify-between gap-6"
        aria-label="<?php esc_attr_e( 'Primary Navigation', 'wilson-devops' ); ?>">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
            class="group flex items-center gap-2.5 font-display font-semibold text-[17px] flex-shrink-0"
            aria-label="<?php esc_attr_e( 'Wilson DevOps — Home', 'wilson-devops' ); ?>">
            <span class="grid h-8 w-8 place-items-center rounded-lg group-hover:-rotate-6" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo" class="">
            </span>
            <span class="text-[#0b1120] dark:text-white">Wilson<span class="text-lilac"> </span>DevOps</span>
        </a>

        <ul class="hidden md:flex items-center gap-8" role="list">
            <li><a href="#about"
                    class="relative text-sm text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white transition-colors duration-200 group">About<span
                        class="absolute -bottom-0.5 left-0 h-px w-0 bg-blue group-hover:w-full transition-all duration-300"></span></a>
            </li>
            <li><a href="#ai"
                    class="relative text-sm text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white transition-colors duration-200 group">AI
                    Services<span
                        class="absolute -bottom-0.5 left-0 h-px w-0 bg-blue group-hover:w-full transition-all duration-300"></span></a>
            </li>
            <li><a href="#services"
                    class="relative text-sm text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white transition-colors duration-200 group">Services<span
                        class="absolute -bottom-0.5 left-0 h-px w-0 bg-blue group-hover:w-full transition-all duration-300"></span></a>
            </li>
            <li><a href="#projects"
                    class="relative text-sm text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white transition-colors duration-200 group">Projects<span
                        class="absolute -bottom-0.5 left-0 h-px w-0 bg-blue group-hover:w-full transition-all duration-300"></span></a>
            </li>
            <li><a href="#contact"
                    class="relative text-sm text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white transition-colors duration-200 group">Contact<span
                        class="absolute -bottom-0.5 left-0 h-px w-0 bg-blue group-hover:w-full transition-all duration-300"></span></a>
            </li>
        </ul>

        <div class="flex items-center gap-2.5">
            <button id="tbtn" onclick="cycleTheme()"
                aria-label="<?php esc_attr_e( 'Toggle dark/light/system theme', 'wilson-devops' ); ?>"
                class="relative overflow-hidden grid h-9 w-9 place-items-center rounded-lg border border-black/[0.08] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white/90 transition-colors">
                <span id="i-sys" class="t-ico absolute grid place-items-center transition-all duration-300"><svg
                        width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        aria-hidden="true">
                        <rect x="2" y="3" width="20" height="14" rx="2" />
                        <path d="M8 21h8M12 17v4" />
                    </svg></span>
                <span id="i-sun"
                    class="t-ico absolute grid place-items-center opacity-0 scale-50 rotate-[40deg] transition-all duration-300"><svg
                        width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        aria-hidden="true">
                        <circle cx="12" cy="12" r="4" />
                        <path
                            d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41" />
                    </svg></span>
                <span id="i-moon"
                    class="t-ico absolute grid place-items-center opacity-0 scale-50 rotate-[40deg] transition-all duration-300"><svg
                        width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        aria-hidden="true">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" />
                    </svg></span>
            </button>
            <a href="#contact" data-magnetic
                class="hidden md:inline-flex items-center gap-2 rounded-full bg-grad-main px-5 py-2 text-[13px] font-medium text-white shadow-glow hover:shadow-glow-v hover:-translate-y-0.5 transition-all duration-200">
                <?php esc_html_e( 'Hire Me →', 'wilson-devops' ); ?>
            </a>
            <button id="hambtn" onclick="openMob()"
                aria-label="<?php esc_attr_e( 'Open mobile menu', 'wilson-devops' ); ?>" aria-expanded="false"
                aria-controls="mob-panel"
                class="md:hidden grid h-9 w-9 place-items-center rounded-lg border border-black/[0.08] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] text-[#445577] dark:text-white/60 hover:text-[#0b1120] dark:hover:text-white transition-colors">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                    aria-hidden="true">
                    <path d="M4 7h16M4 12h10M4 17h16" />
                </svg>
            </button>
        </div>
    </nav>
</header>