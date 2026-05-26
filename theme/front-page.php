<?php
/**
 * The template for displaying the front page
 *
 * This is the template that displays the front page by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wilson_Devops
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

get_header();

?>

<main
    class="bg-[#f4f6ff] dark:bg-ink text-[#0b1120] dark:text-white/85 font-sans antialiased overflow-x-hidden transition-colors duration-300">

    <!-- HERO -->
    <section id="hero" class="relative min-h-screen flex flex-col justify-center pt-16 overflow-hidden">
        <div id="heroWord" aria-hidden="true"
            class="pointer-events-none select-none absolute top-1/2 left-1/2 font-display font-bold leading-none tracking-[-0.04em] text-transparent will-change-transform"
            style="transform: translate(-50%, -55%); font-size: clamp(100px, 18vw, 240px); -webkit-text-stroke: 1.5px rgba(53, 51, 205, 0.07)">
            ENGINEER
        </div>
        <span aria-hidden="true"
            class="absolute top-[24%] left-[7%] h-1.5 w-1.5 rounded-full bg-blue/60 pointer-events-none animate-float"></span>
        <span aria-hidden="true"
            class="absolute top-[62%] left-[10%] h-1 w-1 rounded-full bg-lilac/50 pointer-events-none animate-float-2"></span>
        <span aria-hidden="true"
            class="absolute top-[19%] right-[17%] h-1.5 w-1.5 rounded-full bg-violet/50 pointer-events-none animate-float-3"></span>
        <span aria-hidden="true"
            class="absolute bottom-[28%] right-[7%] h-1 w-1 rounded-full bg-emerald-400/40 pointer-events-none animate-float"></span>

        <div class="relative z-10 max-w-[1280px] mx-auto px-6 lg:px-10 w-full">
            <div
                class="flex flex-wrap items-center justify-between gap-3 border-b border-black/[0.07] dark:border-white/[0.07] pb-7 mb-14">
                <div
                    class="inline-flex items-center gap-2 rounded-full border border-black/[0.08] dark:border-white/[0.07] bg-white/70 dark:bg-white/[0.03] backdrop-blur px-4 py-1.5 font-mono text-[11.5px] text-[#445577] dark:text-white/65">
                    <span class="relative flex h-2 w-2 flex-shrink-0"><span
                            class="absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75 animate-ping"></span><span
                            class="relative flex h-2 w-2 rounded-full bg-emerald-400"></span></span>
                    Open for projects — Nairobi, Kenya 🇰🇪
                </div>
                <span class="font-mono text-[11px] text-[#8099b8] dark:text-white/30">Response &lt; 24 hrs ·
                    UTC+3</span>
            </div>

            <div class="grid lg:grid-cols-[1fr_460px] items-end gap-14">
                <div>
                    <h1 class="font-display font-bold leading-[0.92] tracking-[-0.035em]"
                        style="font-size: clamp(52px, 9vw, 112px)">
                        <span class="block text-[#0b1120] dark:text-white">Wilson</span>
                        <span class="block bg-grad-text bg-clip-text text-transparent">Mbuthia</span>
                    </h1>
                    <div class="flex flex-wrap gap-2 mt-6">
                        <span
                            class="inline-flex items-center rounded-full border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] backdrop-blur px-3.5 py-1.5 font-mono text-[11px] text-[#445577] dark:text-white/60">WordPress
                            Architect</span>
                        <span
                            class="inline-flex items-center rounded-full border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] backdrop-blur px-3.5 py-1.5 font-mono text-[11px] text-[#445577] dark:text-white/60">AI
                            Integrator</span>
                        <span
                            class="inline-flex items-center rounded-full border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] backdrop-blur px-3.5 py-1.5 font-mono text-[11px] text-[#445577] dark:text-white/60">Full
                            Stack Engineer</span>
                    </div>
                    <p class="mt-6 max-w-[460px] text-[17px] text-[#445577] dark:text-white/60 leading-relaxed">
                        I don't build websites. I engineer digital systems that solve real business problems — custom
                        WordPress, complex WooCommerce, and AI-powered applications built to perform and scale.
                    </p>
                    <div class="mt-8 flex flex-wrap items-center gap-3">
                        <a href="#projects" data-magnetic
                            class="inline-flex items-center gap-2 rounded-full bg-grad-main px-6 py-3 text-sm font-medium text-white shadow-glow hover:shadow-glow-v hover:-translate-y-0.5 transition-all duration-200">See
                            My Work <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.5">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></a>
                        <a href="#contact"
                            class="inline-flex items-center gap-2 rounded-full border border-black/[0.09] dark:border-white/[0.1] bg-white/60 dark:bg-white/[0.03] backdrop-blur px-6 py-3 text-sm font-medium text-[#0b1120] dark:text-white/90 hover:bg-black/[0.04] dark:hover:bg-white/[0.07] hover:-translate-y-0.5 transition-all duration-200">Start
                            a Project</a>
                    </div>
                    <div class="flex gap-2 mt-7">
                        <a href="https://github.com/Wyllymk" target="_blank" rel="noopener noreferrer"
                            aria-label="GitHub"
                            class="grid h-9 w-9 place-items-center rounded-lg border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] text-[#8099b8] dark:text-white/40 hover:text-[#0b1120] dark:hover:text-white hover:border-black/15 dark:hover:border-white/20 transition-all duration-200"><svg
                                width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                            </svg></a>
                        <a href="https://www.linkedin.com/in/wilson-mbuthia-k/" target="_blank"
                            rel="noopener noreferrer" aria-label="LinkedIn"
                            class="grid h-9 w-9 place-items-center rounded-lg border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] text-[#8099b8] dark:text-white/40 hover:text-blue hover:border-blue/40 transition-all duration-200"><svg
                                width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.063 2.063 0 110 4.128 2.063 2.063 0 010-4.128zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg></a>
                        <a href="https://twitter.com/WilsonMbuthiaK" target="_blank" rel="noopener noreferrer"
                            aria-label="Twitter"
                            class="grid h-9 w-9 place-items-center rounded-lg border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] text-[#8099b8] dark:text-white/40 hover:text-[#0b1120] dark:hover:text-white hover:border-black/15 dark:hover:border-white/20 transition-all duration-200"><svg
                                width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.735-8.856L2.025 2.25H8.32l4.259 5.629 5.665-5.629zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg></a>
                        <a href="https://wa.me/+254703639230" target="_blank" rel="noopener noreferrer"
                            aria-label="WhatsApp"
                            class="grid h-9 w-9 place-items-center rounded-lg border border-emerald-500/25 bg-emerald-500/[0.04] text-emerald-500/60 hover:text-emerald-500 hover:border-emerald-500/50 transition-all duration-200"><svg
                                width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg></a>
                    </div>
                </div>

                <!-- Terminal -->
                <div id="heroTerm"
                    class="hidden lg:block rounded-2xl border border-black/[0.08] dark:border-white/[0.07] bg-white/70 dark:bg-white/[0.03] backdrop-blur-xl overflow-hidden shadow-glow">
                    <div
                        class="flex items-center gap-2 px-4 py-3 border-b border-black/[0.06] dark:border-white/[0.05] bg-black/[0.02] dark:bg-white/[0.02]">
                        <div class="h-2.5 w-2.5 rounded-full bg-[#ff5f56]"></div>
                        <div class="h-2.5 w-2.5 rounded-full bg-[#ffbd2e]"></div>
                        <div class="h-2.5 w-2.5 rounded-full bg-[#27c93f]"></div>
                        <span
                            class="ml-2 flex-1 text-center font-mono text-[11px] text-[#8099b8] dark:text-white/30">engineer.ts
                            — wilson-devops</span>
                    </div>
                    <div class="p-6 font-mono text-[12.5px] leading-[1.95] text-[#334155] dark:text-[#bfcfe8]">
                        <span class="block text-[#94a3b8] dark:text-[#3d5575]">// How I approach every project</span>
                        <span class="block">&nbsp;</span>
                        <span class="block"><span class="text-violet dark:text-lilac">interface</span> <span
                                class="text-amber-600 dark:text-amber-300/90">Engagement</span> {</span>
                        <span class="block"> problem: <span
                                class="text-amber-600 dark:text-amber-300/90">string</span>;</span>
                        <span class="block"> constraints: <span
                                class="text-amber-600 dark:text-amber-300/90">string</span>[];</span>
                        <span class="block"> outcome: <span
                                class="text-amber-600 dark:text-amber-300/90">string</span>;</span>
                        <span class="block">}</span>
                        <span class="block">&nbsp;</span>
                        <span class="block"><span class="text-violet dark:text-lilac">async function</span> <span
                                class="text-blue">engineer</span>(e: <span
                                class="text-amber-600 dark:text-amber-300/90">Engagement</span>)
                            {</span>
                        <span class="block">
                            <span class="text-violet dark:text-lilac">const</span> root = <span
                                class="text-violet dark:text-lilac">await</span> <span
                                class="text-blue">understand</span>(e.problem);</span>
                        <span class="block"> <span class="text-violet dark:text-lilac">const</span> arch = <span
                                class="text-blue">design</span>(root, e.constraints);</span>
                        <span class="block">
                            <span class="text-violet dark:text-lilac">const</span> built = <span
                                class="text-violet dark:text-lilac">await</span> <span
                                class="text-blue">build</span>(arch);</span>
                        <span class="block">
                            <span class="text-violet dark:text-lilac">return</span> <span
                                class="text-blue">ship</span>({ result: <span
                                class="text-blue">integrateAI</span>(built), outcome: e.outcome });</span>
                        <span class="block">}</span>
                        <span class="block">&nbsp;</span>
                        <span class="block"><span class="text-blue">engineer</span>(yourProject);<span
                                class="inline-block h-[13px] w-[7px] bg-blue align-middle rounded-[1px] ml-0.5 animate-blink"></span></span>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="flex mt-14 border-t border-black/[0.07] dark:border-white/[0.07]">
                <div class="flex-1 pt-7 pr-8 mr-8 border-r border-black/[0.07] dark:border-white/[0.07]">
                    <div class="font-display text-[44px] font-bold leading-none text-[#0b1120] dark:text-white counter"
                        data-target="50">50+</div>
                    <div class="mt-2 font-mono text-[11px] text-[#8099b8] dark:text-white/35">Problems Solved</div>
                </div>
                <div class="flex-1 pt-7 pr-8 mr-8 border-r border-black/[0.07] dark:border-white/[0.07]">
                    <div class="font-display text-[44px] font-bold leading-none text-[#0b1120] dark:text-white counter"
                        data-target="5">5+</div>
                    <div class="mt-2 font-mono text-[11px] text-[#8099b8] dark:text-white/35">Years Engineering</div>
                </div>
                <div class="flex-1 pt-7 pr-8 mr-8 border-r border-black/[0.07] dark:border-white/[0.07]">
                    <div class="font-display text-[44px] font-bold leading-none text-[#0b1120] dark:text-white counter"
                        data-target="25">25+</div>
                    <div class="mt-2 font-mono text-[11px] text-[#8099b8] dark:text-white/35">Businesses Scaled</div>
                </div>
                <div class="flex-1 pt-7">
                    <div class="font-display text-[44px] font-bold leading-none text-[#0b1120] dark:text-white">100%
                    </div>
                    <div class="mt-2 font-mono text-[11px] text-[#8099b8] dark:text-white/35">Projects Delivered</div>
                </div>
            </div>
        </div>
    </section>

    <!-- MARQUEE -->
    <div aria-hidden="true"
        class="overflow-hidden border-y border-black/[0.06] dark:border-white/[0.06] bg-white/50 dark:bg-surface/60 backdrop-blur-sm py-4">
        <div class="flex w-max animate-marquee hover:[animation-play-state:paused]">
            <span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">WordPress</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">WooCommerce</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">PHP
                / OOP</span><span class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">React</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">TypeScript</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">Node.js</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">Tailwind
                CSS</span><span class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">Claude
                API</span><span class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">AWS</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">Docker</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">Elementor
                Pro</span><span class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">Oxygen
                Builder</span><span class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">GSAP</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">WordPress</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">WooCommerce</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">PHP
                / OOP</span><span class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">React</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">TypeScript</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">Node.js</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">Tailwind
                CSS</span><span class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">Claude
                API</span><span class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">AWS</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">Docker</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">Elementor
                Pro</span><span class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">Oxygen
                Builder</span><span class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span><span
                class="flex items-center px-8 font-mono text-xs text-[#8099b8] dark:text-white/25 whitespace-nowrap">GSAP</span><span
                class="h-1 w-1 rounded-full bg-violet/50 flex-shrink-0"></span>
        </div>
    </div>

    <!-- ══ ABOUT ══ -->
    <section id="about" class="max-w-[1280px] mx-auto px-6 lg:px-10 py-28 md:py-36">
        <div class="grid gap-16 lg:grid-cols-[400px_1fr] items-start">
            <div class="reveal relative" data-tilt>
                <div
                    class="relative aspect-[4/5] rounded-2xl border border-black/[0.08] dark:border-white/[0.07] bg-[#e8edff] dark:bg-white/[0.03] overflow-hidden flex items-center justify-center">
                    <div class="text-center font-mono px-8">
                        <div class="text-5xl opacity-[0.18] mb-3">📸</div>
                        <p class="text-xs text-[#8099b8] dark:text-white/25">Upload photo via WP Admin</p>
                        <p class="text-[10px] text-[#8099b8]/60 dark:text-white/15 mt-1 italic">See AI prompt in HTML
                            comment at top</p>
                    </div>
                    <div
                        class="absolute bottom-4 left-4 right-4 rounded-xl border border-black/[0.08] dark:border-white/[0.08] bg-white/90 dark:bg-ink/88 backdrop-blur-xl px-4 py-3 flex items-center gap-3">
                        <span class="relative flex h-2 w-2 flex-shrink-0"><span
                                class="absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75 animate-ping"></span><span
                                class="relative flex h-2 w-2 rounded-full bg-emerald-400"></span></span>
                        <div>
                            <div class="text-[13px] font-medium text-[#0b1120] dark:text-white">Open to new projects
                            </div>
                            <div class="font-mono text-[11px] text-[#8099b8] dark:text-white/35 mt-0.5">Nairobi, Kenya ·
                                Remote worldwide</div>
                        </div>
                    </div>
                </div>
                <div class="absolute -top-3 -right-3 h-20 w-20 rounded-2xl bg-violet/10 -z-10"></div>
            </div>
            <div class="reveal">
                <p class="font-mono text-[11px] uppercase tracking-[0.22em] text-violet dark:text-lilac/80 mb-4">// 01 —
                    About</p>
                <h2
                    class="font-display text-4xl md:text-5xl font-bold leading-tight tracking-tight text-[#0b1120] dark:text-white mb-6">
                    I engineer systems.<br /><span class="bg-grad-text bg-clip-text text-transparent">I solve
                        problems.</span>
                </h2>
                <blockquote
                    class="border-l-[3px] border-violet rounded-r-xl bg-violet/[0.04] dark:bg-violet/[0.08] border border-violet/10 p-5 mb-6">
                    <p class="text-[15px] text-[#445577] dark:text-white/65 leading-relaxed italic">
                        "Most developers ask what you want built. I ask what problem you're trying to solve. That
                        distinction shapes every architecture decision, every tool choice, every line of code."
                    </p>
                    <cite class="mt-3 block font-mono text-[11px] text-violet dark:text-lilac/80 not-italic">— Wilson
                        Mbuthia</cite>
                </blockquote>
                <p class="text-[16px] text-[#445577] dark:text-white/60 leading-relaxed mb-3">
                    I'm Wilson Mbuthia — full stack developer and AI specialist from Nairobi, Kenya. Five years building
                    digital infrastructure for businesses in Kenya, across Africa, and globally.
                </p>
                <p class="text-[16px] text-[#445577] dark:text-white/60 leading-relaxed">
                    I integrate AI the way an engineer should — as infrastructure that solves specific problems.
                    Chatbots, automation agents, intelligent features — all shipped into production using Claude,
                    GPT, and custom model implementations.
                </p>
                <div class="mt-9 border-l border-black/[0.09] dark:border-white/[0.09] pl-5 space-y-5">
                    <div>
                        <div class="font-mono text-[11px] text-blue mb-1">2018</div>
                        <div class="font-display text-[14px] font-semibold text-[#0b1120] dark:text-white">First code —
                            HTML, CSS, static sites</div>
                        <div class="text-xs text-[#8099b8] dark:text-white/40 mt-0.5">Learning what the web is really
                            made of</div>
                    </div>
                    <div>
                        <div class="font-mono text-[11px] text-blue mb-1">2020</div>
                        <div class="font-display text-[14px] font-semibold text-[#0b1120] dark:text-white">JavaScript,
                            React, and backend systems</div>
                        <div class="text-xs text-[#8099b8] dark:text-white/40 mt-0.5">Dynamic apps, REST APIs, full
                            stack thinking</div>
                    </div>
                    <div>
                        <div class="font-mono text-[11px] text-blue mb-1">2022</div>
                        <div class="font-display text-[14px] font-semibold text-[#0b1120] dark:text-white">WordPress
                            Architect</div>
                        <div class="text-xs text-[#8099b8] dark:text-white/40 mt-0.5">Custom themes, WooCommerce
                            engineering, OOP PHP, plugin architecture</div>
                    </div>
                    <div>
                        <div class="font-mono text-[11px] text-blue mb-1">2024</div>
                        <div class="font-display text-[14px] font-semibold text-[#0b1120] dark:text-white">AI
                            Integration Specialist</div>
                        <div class="text-xs text-[#8099b8] dark:text-white/40 mt-0.5">Chatbots, agents, and AI features
                            shipped into production systems</div>
                    </div>
                    <div class="relative">
                        <div
                            class="absolute -left-[21px] top-1.5 h-2 w-2 rounded-full bg-emerald-400 shadow-[0_0_0_4px_rgba(52,211,153,.2)]">
                        </div>
                        <div class="font-mono text-[11px] text-emerald-500 mb-1">2026 — Now</div>
                        <div class="font-display text-[14px] font-semibold text-[#0b1120] dark:text-white">Full Stack
                            Engineer + AI Integrator</div>
                        <div class="text-xs text-[#8099b8] dark:text-white/40 mt-0.5">Engineering precision meets AI
                            intelligence for next-gen web products</div>
                    </div>
                </div>
                <div class="mt-8 grid grid-cols-2 gap-3">
                    <div
                        class="rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] p-5 hover:border-black/14 dark:hover:border-white/14 hover:-translate-y-0.5 transition-all duration-200 cursor-default">
                        <div class="font-display text-[36px] font-bold leading-none text-[#0b1120] dark:text-white counter"
                            data-target="50">50+</div>
                        <div class="mt-2 font-mono text-[11px] text-[#8099b8] dark:text-white/35">Projects Delivered
                        </div>
                    </div>
                    <div
                        class="rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] p-5 hover:border-black/14 dark:hover:border-white/14 hover:-translate-y-0.5 transition-all duration-200 cursor-default">
                        <div class="font-display text-[36px] font-bold leading-none text-[#0b1120] dark:text-white counter"
                            data-target="5">5+</div>
                        <div class="mt-2 font-mono text-[11px] text-[#8099b8] dark:text-white/35">Years Engineering
                        </div>
                    </div>
                    <div
                        class="rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] p-5 hover:border-black/14 dark:hover:border-white/14 hover:-translate-y-0.5 transition-all duration-200 cursor-default">
                        <div class="font-display text-[36px] font-bold leading-none text-[#0b1120] dark:text-white counter"
                            data-target="25">25+</div>
                        <div class="mt-2 font-mono text-[11px] text-[#8099b8] dark:text-white/35">Businesses Scaled
                        </div>
                    </div>
                    <div
                        class="rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] p-5 hover:border-black/14 dark:hover:border-white/14 hover:-translate-y-0.5 transition-all duration-200 cursor-default">
                        <div class="font-display text-[36px] font-bold leading-none text-[#0b1120] dark:text-white">100%
                        </div>
                        <div class="mt-2 font-mono text-[11px] text-[#8099b8] dark:text-white/35">On-time Delivery</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ AI SECTION ══ -->
    <section id="ai"
        class="border-y border-black/[0.06] dark:border-white/[0.06] bg-white/40 dark:bg-surface/50 py-28 md:py-36">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-10 grid gap-16 lg:grid-cols-2 items-center">
            <div class="reveal" data-tilt>
                <div
                    class="rounded-2xl border border-black/[0.08] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] backdrop-blur-xl overflow-hidden shadow-glow hover:-translate-y-1 transition-transform duration-300">
                    <div
                        class="flex items-center gap-3 px-5 py-4 border-b border-black/[0.06] dark:border-white/[0.06] bg-black/[0.02] dark:bg-white/[0.02]">
                        <div class="h-9 w-9 flex-shrink-0 rounded-full bg-grad-main grid place-items-center text-sm">🤖
                        </div>
                        <div>
                            <div class="text-sm font-medium text-[#0b1120] dark:text-white">WilsonBot — WooCommerce AI
                            </div>
                            <div class="font-mono text-[11px] text-emerald-500 mt-0.5">● Online — Powered by Claude
                            </div>
                        </div>
                    </div>
                    <div class="p-5 space-y-3 min-h-[240px]">
                        <div
                            class="max-w-[84%] rounded-2xl rounded-bl-sm border border-black/[0.06] dark:border-white/[0.06] bg-black/[0.02] dark:bg-white/[0.03] px-4 py-3 text-[13px] leading-snug text-[#445577] dark:text-white/65">
                            Hi. I help customers track orders and resolve issues 24/7. How can I help?
                        </div>
                        <div
                            class="max-w-[84%] rounded-2xl rounded-br-sm bg-grad-main px-4 py-3 text-[13px] leading-snug text-white ml-auto">
                            I want to switch the product in my order #4892</div>
                        <div
                            class="max-w-[84%] rounded-2xl rounded-bl-sm border border-black/[0.06] dark:border-white/[0.06] bg-black/[0.02] dark:bg-white/[0.03] px-4 py-3 text-[13px] leading-snug text-[#445577] dark:text-white/65">
                            Found it — still in processing. Current: <strong
                                class="text-[#0b1120] dark:text-white">Challenge $25K Standard</strong>. Which variant?
                        </div>
                        <div
                            class="max-w-[84%] rounded-2xl rounded-br-sm bg-grad-main px-4 py-3 text-[13px] leading-snug text-white ml-auto">
                            Switch to the $50K Aggressive</div>
                        <div
                            class="max-w-[84%] rounded-2xl rounded-bl-sm border border-black/[0.06] dark:border-white/[0.06] bg-black/[0.02] dark:bg-white/[0.03] px-4 py-3 text-[13px] leading-snug text-[#445577] dark:text-white/65">
                            Done ✓ Order updated. Price diff charged. Confirmation sent.
                        </div>
                    </div>
                    <div
                        class="flex gap-2 items-center px-5 py-3 border-t border-black/[0.06] dark:border-white/[0.06]">
                        <input readonly placeholder="Ask anything…"
                            class="flex-1 rounded-lg border border-black/[0.07] dark:border-white/[0.07] bg-black/[0.02] dark:bg-white/[0.03] px-3 py-2 text-[13px] text-[#8099b8] dark:text-white/40 outline-none cursor-default" /><button
                            class="h-8 w-8 grid place-items-center rounded-lg bg-grad-main flex-shrink-0">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="white"
                                stroke-width="2.5">
                                <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="reveal">
                <p class="font-mono text-[11px] uppercase tracking-[0.22em] text-violet dark:text-lilac/80 mb-4">// 02 —
                    AI Specialist</p>
                <h2
                    class="font-display text-4xl md:text-5xl font-bold leading-tight tracking-tight text-[#0b1120] dark:text-white mb-5">
                    I build AI into <span class="bg-grad-text bg-clip-text text-transparent">your product</span>
                </h2>
                <p class="text-[17px] text-[#445577] dark:text-white/60 leading-relaxed mb-7 max-w-md">
                    Not as a gimmick. As infrastructure. Every AI feature I ship replaces a manual process or creates a
                    capability that didn't exist before.
                </p>
                <div class="space-y-3">
                    <div
                        class="flex items-start gap-4 rounded-2xl border border-black/[0.06] dark:border-white/[0.06] bg-white dark:bg-white/[0.02] p-4 hover:border-black/12 dark:hover:border-white/12 hover:translate-x-1 transition-all duration-200 cursor-default">
                        <div class="h-9 w-9 flex-shrink-0 rounded-lg bg-violet/10 grid place-items-center text-base">💬
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-[#0b1120] dark:text-white mb-0.5">Conversational
                                Chatbots</div>
                            <div class="text-xs text-[#8099b8] dark:text-white/40 leading-relaxed">Customer support,
                                order management, and lead qualification bots via Claude and GPT APIs</div>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4 rounded-2xl border border-black/[0.06] dark:border-white/[0.06] bg-white dark:bg-white/[0.02] p-4 hover:border-black/12 dark:hover:border-white/12 hover:translate-x-1 transition-all duration-200 cursor-default">
                        <div class="h-9 w-9 flex-shrink-0 rounded-lg bg-blue/10 grid place-items-center text-base">🛒
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-[#0b1120] dark:text-white mb-0.5">AI-Enhanced
                                WooCommerce</div>
                            <div class="text-xs text-[#8099b8] dark:text-white/40 leading-relaxed">Smart
                                recommendations, dynamic pricing, AI descriptions, checkout optimization, automated
                                upsells</div>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4 rounded-2xl border border-black/[0.06] dark:border-white/[0.06] bg-white dark:bg-white/[0.02] p-4 hover:border-black/12 dark:hover:border-white/12 hover:translate-x-1 transition-all duration-200 cursor-default">
                        <div class="h-9 w-9 flex-shrink-0 rounded-lg bg-lilac/10 grid place-items-center text-base">⚡
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-[#0b1120] dark:text-white mb-0.5">Workflow Automation
                                Agents</div>
                            <div class="text-xs text-[#8099b8] dark:text-white/40 leading-relaxed">Lead triage, email
                                routing, form extraction, and process automation inside your existing stack</div>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4 rounded-2xl border border-black/[0.06] dark:border-white/[0.06] bg-white dark:bg-white/[0.02] p-4 hover:border-black/12 dark:hover:border-white/12 hover:translate-x-1 transition-all duration-200 cursor-default">
                        <div class="h-9 w-9 flex-shrink-0 rounded-lg bg-violet/10 grid place-items-center text-base">🔍
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-[#0b1120] dark:text-white mb-0.5">Semantic Search
                                &amp; Discovery</div>
                            <div class="text-xs text-[#8099b8] dark:text-white/40 leading-relaxed">Natural language
                                product search, AI-powered filtering, intelligent site search for WooCommerce</div>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4 rounded-2xl border border-black/[0.06] dark:border-white/[0.06] bg-white dark:bg-white/[0.02] p-4 hover:border-black/12 dark:hover:border-white/12 hover:translate-x-1 transition-all duration-200 cursor-default">
                        <div class="h-9 w-9 flex-shrink-0 rounded-lg bg-blue/10 grid place-items-center text-base">✍️
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-[#0b1120] dark:text-white mb-0.5">AI Content &amp;
                                SEO Pipelines</div>
                            <div class="text-xs text-[#8099b8] dark:text-white/40 leading-relaxed">Automated
                                descriptions, blog generation, meta optimization integrated into WordPress admin</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 
     SERVICES — // 03  (FIXED ACCORDION)
     Uses CSS grid-template-rows transition:
     0fr → 1fr for smooth height animation
    -->
    <section id="services" class="max-w-[1280px] mx-auto px-6 lg:px-10 py-28 md:py-36">
        <p class="reveal font-mono text-[11px] uppercase tracking-[0.22em] text-violet dark:text-lilac/80 mb-4">// 03 —
            Services</p>
        <h2
            class="reveal font-display text-4xl md:text-5xl font-bold tracking-tight text-[#0b1120] dark:text-white mb-4">
            What I <span class="bg-grad-text bg-clip-text text-transparent">build</span>
        </h2>
        <p class="reveal max-w-lg text-[17px] text-[#445577] dark:text-white/55 leading-relaxed mb-12">Every engagement
            starts with the problem, not the tool.</p>

        <div class="reveal border-t border-black/[0.06] dark:border-white/[0.07]" id="srv-list">
            <!-- ── Service Row helper structure:
         button.srv-btn [onclick=toggleSrv(this)]
           grid.srv-grid [style="grid-template-rows:0fr"]  ← transition target
             div.overflow-hidden.min-h-0                   ← min-h-0 is KEY
               div.srv-body-inner                          ← actual content
                ── -->

            <div class="srv-row border-b border-black/[0.06] dark:border-white/[0.07]">
                <button class="srv-btn w-full flex items-center gap-5 py-6 text-left group" onclick="toggleSrv(this)"
                    aria-expanded="false">
                    <span
                        class="srv-num font-mono text-xs text-[#8099b8] dark:text-white/25 w-8 flex-shrink-0 group-hover:text-violet dark:group-hover:text-violet transition-colors duration-200">01</span>
                    <span
                        class="srv-label flex-1 font-display font-semibold text-[#0b1120] dark:text-white group-hover:text-blue dark:group-hover:text-blue transition-colors duration-200"
                        style="font-size: clamp(20px, 2.4vw, 28px)">Custom WordPress Engineering</span>
                    <div
                        class="srv-icon h-9 w-9 rounded-full border border-black/[0.1] dark:border-white/[0.1] grid place-items-center text-[#8099b8] dark:text-white/35 flex-shrink-0 transition-all duration-300 group-hover:bg-blue group-hover:border-blue group-hover:text-white">
                        <svg class="srv-plus w-4 h-4 transition-transform duration-300" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5">
                            <path d="M12 5v14M5 12h14" />
                        </svg>
                    </div>
                </button>
                <div class="srv-grid"
                    style="display: grid; grid-template-rows: 0fr; transition: grid-template-rows 500ms cubic-bezier(0.16, 1, 0.3, 1)">
                    <div class="overflow-hidden min-h-0">
                        <div
                            class="pb-7 pl-[52px] text-[15px] text-[#445577] dark:text-white/55 leading-relaxed max-w-2xl">
                            From-scratch custom themes, hybrid block-based architecture, and bespoke WordPress systems
                            with no page builder dependencies. Engineered using OOP PHP and WordPress coding standards.
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span class="tag">Custom Themes</span><span class="tag">Block Editor</span><span
                                    class="tag">PHP / OOP</span><span class="tag">ACF</span><span class="tag">Custom
                                    Post Types</span><span class="tag">REST API</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="srv-row border-b border-black/[0.06] dark:border-white/[0.07]">
                <button class="srv-btn w-full flex items-center gap-5 py-6 text-left group" onclick="toggleSrv(this)"
                    aria-expanded="false">
                    <span
                        class="srv-num font-mono text-xs text-[#8099b8] dark:text-white/25 w-8 flex-shrink-0 group-hover:text-violet dark:group-hover:text-violet transition-colors duration-200">02</span>
                    <span
                        class="srv-label flex-1 font-display font-semibold text-[#0b1120] dark:text-white group-hover:text-blue dark:group-hover:text-blue transition-colors duration-200"
                        style="font-size: clamp(20px, 2.4vw, 28px)">WooCommerce Revenue Systems</span>
                    <div
                        class="srv-icon h-9 w-9 rounded-full border border-black/[0.1] dark:border-white/[0.1] grid place-items-center text-[#8099b8] dark:text-white/35 flex-shrink-0 transition-all duration-300 group-hover:bg-blue group-hover:border-blue group-hover:text-white">
                        <svg class="srv-plus w-4 h-4 transition-transform duration-300" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5">
                            <path d="M12 5v14M5 12h14" />
                        </svg>
                    </div>
                </button>
                <div class="srv-grid"
                    style="display: grid; grid-template-rows: 0fr; transition: grid-template-rows 500ms cubic-bezier(0.16, 1, 0.3, 1)">
                    <div class="overflow-hidden min-h-0">
                        <div
                            class="pb-7 pl-[52px] text-[15px] text-[#445577] dark:text-white/55 leading-relaxed max-w-2xl">
                            Custom checkout flows, in-checkout product switching, subscription engines, affiliate
                            tracking, payment gateway integrations, and order automation. Built for conversion, not just
                            functionality.
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span class="tag">Custom Checkout</span><span class="tag">In-Checkout
                                    Switching</span><span class="tag">Subscriptions</span><span
                                    class="tag">Affiliates</span><span class="tag">Payment Gateways</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="srv-row border-b border-black/[0.06] dark:border-white/[0.07]">
                <button class="srv-btn w-full flex items-center gap-5 py-6 text-left group" onclick="toggleSrv(this)"
                    aria-expanded="false">
                    <span
                        class="srv-num font-mono text-xs text-[#8099b8] dark:text-white/25 w-8 flex-shrink-0 group-hover:text-violet dark:group-hover:text-violet transition-colors duration-200">03</span>
                    <span
                        class="srv-label flex-1 font-display font-semibold text-[#0b1120] dark:text-white group-hover:text-blue dark:group-hover:text-blue transition-colors duration-200"
                        style="font-size: clamp(20px, 2.4vw, 28px)">AI Integration &amp; Automation</span>
                    <div
                        class="srv-icon h-9 w-9 rounded-full border border-black/[0.1] dark:border-white/[0.1] grid place-items-center text-[#8099b8] dark:text-white/35 flex-shrink-0 transition-all duration-300 group-hover:bg-blue group-hover:border-blue group-hover:text-white">
                        <svg class="srv-plus w-4 h-4 transition-transform duration-300" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5">
                            <path d="M12 5v14M5 12h14" />
                        </svg>
                    </div>
                </button>
                <div class="srv-grid"
                    style="display: grid; grid-template-rows: 0fr; transition: grid-template-rows 500ms cubic-bezier(0.16, 1, 0.3, 1)">
                    <div class="overflow-hidden min-h-0">
                        <div
                            class="pb-7 pl-[52px] text-[15px] text-[#445577] dark:text-white/55 leading-relaxed max-w-2xl">
                            Chatbots, AI agents, and intelligent features built using Claude, GPT, and custom model
                            integrations. Every AI feature I ship replaces a manual process or creates measurable new
                            capability.
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span class="tag">Claude API</span><span class="tag">GPT</span><span
                                    class="tag">Chatbots</span><span class="tag">Automation</span><span class="tag">AI
                                    Search</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="srv-row border-b border-black/[0.06] dark:border-white/[0.07]">
                <button class="srv-btn w-full flex items-center gap-5 py-6 text-left group" onclick="toggleSrv(this)"
                    aria-expanded="false">
                    <span
                        class="srv-num font-mono text-xs text-[#8099b8] dark:text-white/25 w-8 flex-shrink-0 group-hover:text-violet dark:group-hover:text-violet transition-colors duration-200">04</span>
                    <span
                        class="srv-label flex-1 font-display font-semibold text-[#0b1120] dark:text-white group-hover:text-blue dark:group-hover:text-blue transition-colors duration-200"
                        style="font-size: clamp(20px, 2.4vw, 28px)">Page Builder Development</span>
                    <div
                        class="srv-icon h-9 w-9 rounded-full border border-black/[0.1] dark:border-white/[0.1] grid place-items-center text-[#8099b8] dark:text-white/35 flex-shrink-0 transition-all duration-300 group-hover:bg-blue group-hover:border-blue group-hover:text-white">
                        <svg class="srv-plus w-4 h-4 transition-transform duration-300" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5">
                            <path d="M12 5v14M5 12h14" />
                        </svg>
                    </div>
                </button>
                <div class="srv-grid"
                    style="display: grid; grid-template-rows: 0fr; transition: grid-template-rows 500ms cubic-bezier(0.16, 1, 0.3, 1)">
                    <div class="overflow-hidden min-h-0">
                        <div
                            class="pb-7 pl-[52px] text-[15px] text-[#445577] dark:text-white/55 leading-relaxed max-w-2xl">
                            Engineering-level customization on Elementor Pro, Oxygen Builder, and WP Bakery. Custom
                            dynamic widgets, performance-optimized implementations, and pixel-perfect execution.
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span class="tag">Elementor Pro</span><span class="tag">Oxygen Builder</span><span
                                    class="tag">WP Bakery</span><span class="tag">Custom Widgets</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="srv-row border-b border-black/[0.06] dark:border-white/[0.07]">
                <button class="srv-btn w-full flex items-center gap-5 py-6 text-left group" onclick="toggleSrv(this)"
                    aria-expanded="false">
                    <span
                        class="srv-num font-mono text-xs text-[#8099b8] dark:text-white/25 w-8 flex-shrink-0 group-hover:text-violet dark:group-hover:text-violet transition-colors duration-200">05</span>
                    <span
                        class="srv-label flex-1 font-display font-semibold text-[#0b1120] dark:text-white group-hover:text-blue dark:group-hover:text-blue transition-colors duration-200"
                        style="font-size: clamp(20px, 2.4vw, 28px)">Full Stack Web Applications</span>
                    <div
                        class="srv-icon h-9 w-9 rounded-full border border-black/[0.1] dark:border-white/[0.1] grid place-items-center text-[#8099b8] dark:text-white/35 flex-shrink-0 transition-all duration-300 group-hover:bg-blue group-hover:border-blue group-hover:text-white">
                        <svg class="srv-plus w-4 h-4 transition-transform duration-300" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5">
                            <path d="M12 5v14M5 12h14" />
                        </svg>
                    </div>
                </button>
                <div class="srv-grid"
                    style="display: grid; grid-template-rows: 0fr; transition: grid-template-rows 500ms cubic-bezier(0.16, 1, 0.3, 1)">
                    <div class="overflow-hidden min-h-0">
                        <div
                            class="pb-7 pl-[52px] text-[15px] text-[#445577] dark:text-white/55 leading-relaxed max-w-2xl">
                            React frontends, Node.js backends, REST API architecture, and headless WordPress for
                            businesses that need an application. Database design, auth, third-party integrations, AWS
                            deployment.
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span class="tag">React</span><span class="tag">TypeScript</span><span
                                    class="tag">Node.js</span><span class="tag">MySQL</span><span
                                    class="tag">AWS</span><span class="tag">Headless WP</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="srv-row">
                <button class="srv-btn w-full flex items-center gap-5 py-6 text-left group" onclick="toggleSrv(this)"
                    aria-expanded="false">
                    <span
                        class="srv-num font-mono text-xs text-[#8099b8] dark:text-white/25 w-8 flex-shrink-0 group-hover:text-violet dark:group-hover:text-violet transition-colors duration-200">06</span>
                    <span
                        class="srv-label flex-1 font-display font-semibold text-[#0b1120] dark:text-white group-hover:text-blue dark:group-hover:text-blue transition-colors duration-200"
                        style="font-size: clamp(20px, 2.4vw, 28px)">Performance &amp; Security Audit</span>
                    <div
                        class="srv-icon h-9 w-9 rounded-full border border-black/[0.1] dark:border-white/[0.1] grid place-items-center text-[#8099b8] dark:text-white/35 flex-shrink-0 transition-all duration-300 group-hover:bg-blue group-hover:border-blue group-hover:text-white">
                        <svg class="srv-plus w-4 h-4 transition-transform duration-300" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5">
                            <path d="M12 5v14M5 12h14" />
                        </svg>
                    </div>
                </button>
                <div class="srv-grid"
                    style="display: grid; grid-template-rows: 0fr; transition: grid-template-rows 500ms cubic-bezier(0.16, 1, 0.3, 1)">
                    <div class="overflow-hidden min-h-0">
                        <div
                            class="pb-7 pl-[52px] text-[15px] text-[#445577] dark:text-white/55 leading-relaxed max-w-2xl">
                            Deep audits on live WordPress sites: Core Web Vitals, LCP/CLS fixes, caching strategy, image
                            pipeline, database profiling, security hardening, plugin audit, and SEO technical
                            remediation.
                            <div class="flex flex-wrap gap-2 mt-4">
                                <span class="tag">Core Web Vitals</span><span class="tag">LCP / CLS</span><span
                                    class="tag">Security</span><span class="tag">DB Optimization</span><span
                                    class="tag">SEO Technical</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ PROCESS ══ -->
    <section id="process"
        class="border-y border-black/[0.06] dark:border-white/[0.06] bg-white/40 dark:bg-surface/50 py-28 md:py-36">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-10">
            <p class="reveal font-mono text-[11px] uppercase tracking-[0.22em] text-violet dark:text-lilac/80 mb-4">//
                04 — Process</p>
            <h2
                class="reveal font-display text-4xl md:text-5xl font-bold tracking-tight text-[#0b1120] dark:text-white mb-4">
                How an engineer <span class="bg-grad-text bg-clip-text text-transparent">thinks</span>
            </h2>
            <p class="reveal max-w-lg text-[17px] text-[#445577] dark:text-white/55 leading-relaxed mb-12">Tools are
                secondary. Understanding the problem comes first.</p>
            <div
                class="reveal grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px bg-black/[0.06] dark:bg-white/[0.06] rounded-2xl overflow-hidden border border-black/[0.06] dark:border-white/[0.06]">
                <div
                    class="group relative bg-white dark:bg-card p-8 hover:bg-[#f5f8ff] dark:hover:bg-surface transition-colors duration-200 overflow-hidden">
                    <div
                        class="absolute bottom-0 left-0 right-0 h-[2px] bg-transparent group-hover:bg-grad-main transition-all duration-300">
                    </div>
                    <div
                        class="font-display text-[64px] font-bold leading-none text-black/[0.05] dark:text-white/[0.05] mb-3 group-hover:text-violet/10 dark:group-hover:text-violet/[0.12] transition-colors">
                        01
                    </div>
                    <div class="text-2xl mb-3">🔍</div>
                    <div class="font-display font-semibold text-[#0b1120] dark:text-white mb-2">Diagnose</div>
                    <div class="text-xs text-[#8099b8] dark:text-white/40 leading-relaxed">What problem are you actually
                        solving? What does success look like in 6 months? Only then do I choose tools.</div>
                </div>
                <div
                    class="group relative bg-white dark:bg-card p-8 hover:bg-[#f5f8ff] dark:hover:bg-surface transition-colors duration-200 overflow-hidden">
                    <div
                        class="absolute bottom-0 left-0 right-0 h-[2px] bg-transparent group-hover:bg-grad-main transition-all duration-300">
                    </div>
                    <div
                        class="font-display text-[64px] font-bold leading-none text-black/[0.05] dark:text-white/[0.05] mb-3 group-hover:text-violet/10 dark:group-hover:text-violet/[0.12] transition-colors">
                        02
                    </div>
                    <div class="text-2xl mb-3">🏛️</div>
                    <div class="font-display font-semibold text-[#0b1120] dark:text-white mb-2">Architect</div>
                    <div class="text-xs text-[#8099b8] dark:text-white/40 leading-relaxed">System design before code.
                        Stack, data model, integrations, and performance targets defined upfront.</div>
                </div>
                <div
                    class="group relative bg-white dark:bg-card p-8 hover:bg-[#f5f8ff] dark:hover:bg-surface transition-colors duration-200 overflow-hidden">
                    <div
                        class="absolute bottom-0 left-0 right-0 h-[2px] bg-transparent group-hover:bg-grad-main transition-all duration-300">
                    </div>
                    <div
                        class="font-display text-[64px] font-bold leading-none text-black/[0.05] dark:text-white/[0.05] mb-3 group-hover:text-violet/10 dark:group-hover:text-violet/[0.12] transition-colors">
                        03
                    </div>
                    <div class="text-2xl mb-3">⚒️</div>
                    <div class="font-display font-semibold text-[#0b1120] dark:text-white mb-2">Build</div>
                    <div class="text-xs text-[#8099b8] dark:text-white/40 leading-relaxed">Clean, modular, documented
                        code. Regular check-ins. Real progress visible throughout. No surprises.</div>
                </div>
                <div
                    class="group relative bg-white dark:bg-card p-8 hover:bg-[#f5f8ff] dark:hover:bg-surface transition-colors duration-200 overflow-hidden">
                    <div
                        class="absolute bottom-0 left-0 right-0 h-[2px] bg-transparent group-hover:bg-grad-main transition-all duration-300">
                    </div>
                    <div
                        class="font-display text-[64px] font-bold leading-none text-black/[0.05] dark:text-white/[0.05] mb-3 group-hover:text-violet/10 dark:group-hover:text-violet/[0.12] transition-colors">
                        04
                    </div>
                    <div class="text-2xl mb-3">📡</div>
                    <div class="font-display font-semibold text-[#0b1120] dark:text-white mb-2">Deploy + Support</div>
                    <div class="text-xs text-[#8099b8] dark:text-white/40 leading-relaxed">Production-hardened delivery.
                        I stay through launch, train where needed, and remain available after go-live.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ PROJECTS ══ -->
    <section id="projects" class="max-w-[1280px] mx-auto px-6 lg:px-10 py-28 md:py-36">
        <p class="reveal font-mono text-[11px] uppercase tracking-[0.22em] text-violet dark:text-lilac/80 mb-4">// 05 —
            Portfolio</p>
        <h2
            class="reveal font-display text-4xl md:text-5xl font-bold tracking-tight text-[#0b1120] dark:text-white mb-4">
            What I've <span class="bg-grad-text bg-clip-text text-transparent">shipped</span>
        </h2>
        <p class="reveal max-w-lg text-[17px] text-[#445577] dark:text-white/55 leading-relaxed mb-8">Real work for real
            clients. Click any card to see the live site.</p>
        <div class="reveal flex flex-wrap gap-2 mb-8">
            <button class="pfilt" data-f="all" onclick="filterP('all', this)">All</button>
            <button class="pfilt" data-f="WordPress" onclick="filterP('WordPress', this)">WordPress</button>
            <button class="pfilt" data-f="WooCommerce" onclick="filterP('WooCommerce', this)">WooCommerce</button>
            <button class="pfilt" data-f="Custom" onclick="filterP('Custom', this)">Custom Dev</button>
            <button class="pfilt" data-f="Elementor" onclick="filterP('Elementor', this)">Elementor</button>
        </div>
        <div class="grid grid-cols-6 gap-3" id="pgrid"></div>
        <div class="reveal text-center mt-10">
            <a href="https://github.com/Wyllymk" target="_blank" rel="noopener noreferrer"
                class="inline-flex items-center gap-2 rounded-full border border-black/[0.09] dark:border-white/[0.09] bg-white/60 dark:bg-white/[0.03] backdrop-blur px-6 py-3 text-sm font-medium text-[#0b1120] dark:text-white/90 hover:bg-black/[0.04] dark:hover:bg-white/[0.07] hover:-translate-y-0.5 transition-all duration-200">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                </svg>
                View GitHub Profile
            </a>
        </div>
    </section>

    <!-- ══ CONTACT ══ -->
    <section id="contact" class="border-t border-black/[0.06] dark:border-white/[0.06] py-28 md:py-36">
        <div class="max-w-[1280px] mx-auto px-6 lg:px-10">
            <div class="grid gap-16 lg:grid-cols-[1fr_1.1fr] items-start">
                <div>
                    <p
                        class="reveal font-mono text-[11px] uppercase tracking-[0.22em] text-violet dark:text-lilac/80 mb-4">
                        // 06 — Contact</p>
                    <h2 class="reveal font-display font-bold leading-tight tracking-tight text-[#0b1120] dark:text-white mb-6"
                        style="font-size: clamp(34px, 5.5vw, 62px)">
                        Let's build something <span
                            class="bg-grad-text bg-clip-text text-transparent">unforgettable.</span>
                    </h2>
                    <p class="reveal text-[17px] text-[#445577] dark:text-white/55 leading-relaxed mb-8 max-w-sm">
                        Available for freelance projects, retainers, and collaborations. Working with clients in Kenya,
                        across Africa, and globally.
                    </p>
                    <div
                        class="reveal inline-flex items-center gap-3 rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] px-5 py-3 mb-8">
                        <span class="relative flex h-2.5 w-2.5 flex-shrink-0"><span
                                class="absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75 animate-ping"></span><span
                                class="relative flex h-2.5 w-2.5 rounded-full bg-emerald-400"></span></span>
                        <div>
                            <div class="text-sm font-semibold text-[#0b1120] dark:text-white">Currently available</div>
                            <div class="font-mono text-[11px] text-[#8099b8] dark:text-white/35 mt-0.5">Nairobi, Kenya ·
                                UTC+3 · Reply &lt; 24 hours</div>
                        </div>
                    </div>
                    <div class="reveal space-y-2 font-mono text-sm text-[#8099b8] dark:text-white/45">
                        <div class="flex items-center gap-3"><span class="text-violet">→</span> info@wilsondevops.com
                        </div>
                        <div class="flex items-center gap-3"><span class="text-violet">→</span> +254 703 639 230</div>
                        <div class="flex items-center gap-3"><span class="text-violet">→</span> Nairobi, Kenya · Open to
                            travel</div>
                    </div>
                </div>
                <div class="reveal grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <a href="mailto:info@wilsondevops.com"
                        class="sm:col-span-2 group flex flex-col gap-4 rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] p-6 hover:border-violet/30 dark:hover:border-white/14 hover:shadow-glow hover:-translate-y-0.5 transition-all duration-200">
                        <div class="flex items-center justify-between">
                            <div class="h-10 w-10 rounded-xl bg-violet/10 grid place-items-center text-lg">✉️</div>
                            <svg class="w-4 h-4 text-[#8099b8] dark:text-white/20 group-hover:text-violet group-hover:translate-x-1 transition-all duration-200"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-display font-semibold text-[#0b1120] dark:text-white mb-1">Email</div>
                            <div class="font-mono text-xs text-[#8099b8] dark:text-white/40">info@wilsondevops.com</div>
                            <div class="text-xs text-[#8099b8] dark:text-white/30 mt-1">For project inquiries and
                                scoping</div>
                        </div>
                    </a>
                    <a href="https://wa.me/+254703639230?text=Hi%20Wilson%2C%20I%27d%20like%20to%20discuss%20a%20project"
                        target="_blank" rel="noopener noreferrer"
                        class="group flex flex-col gap-4 rounded-2xl border border-emerald-500/20 bg-emerald-500/[0.03] p-6 hover:border-emerald-500/40 hover:shadow-[0_0_40px_-10px_rgba(52,211,153,.3)] hover:-translate-y-0.5 transition-all duration-200">
                        <div class="flex items-center justify-between">
                            <div class="h-10 w-10 rounded-xl bg-emerald-500/15 grid place-items-center text-lg">💬</div>
                            <svg class="w-4 h-4 text-[#8099b8] dark:text-white/20 group-hover:text-emerald-500 group-hover:translate-x-1 transition-all duration-200"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-display font-semibold text-[#0b1120] dark:text-white mb-1">WhatsApp</div>
                            <div class="font-mono text-xs text-[#8099b8] dark:text-white/40">+254 703 639 230</div>
                            <div class="text-xs text-[#8099b8] dark:text-white/30 mt-1">Quick chats. Fastest response.
                            </div>
                        </div>
                    </a>
                    <a href="https://github.com/Wyllymk" target="_blank" rel="noopener noreferrer"
                        class="group flex flex-col gap-4 rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] p-6 hover:border-black/14 dark:hover:border-white/14 hover:-translate-y-0.5 transition-all duration-200">
                        <div class="flex items-center justify-between">
                            <div
                                class="h-10 w-10 rounded-xl bg-black/[0.04] dark:bg-white/[0.05] grid place-items-center">
                                <svg class="w-5 h-5 text-[#445577] dark:text-white/50" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                                </svg>
                            </div>
                            <svg class="w-4 h-4 text-[#8099b8] dark:text-white/20 group-hover:text-[#0b1120] dark:group-hover:text-white group-hover:translate-x-1 transition-all duration-200"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-display font-semibold text-[#0b1120] dark:text-white mb-1">GitHub</div>
                            <div class="font-mono text-xs text-[#8099b8] dark:text-white/40">github.com/Wyllymk</div>
                            <div class="text-xs text-[#8099b8] dark:text-white/30 mt-1">See the code behind the work
                            </div>
                        </div>
                    </a>
                    <a href="https://www.linkedin.com/in/wilson-mbuthia-k/" target="_blank" rel="noopener noreferrer"
                        class="group flex flex-col gap-4 rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] p-6 hover:border-blue/30 hover:-translate-y-0.5 transition-all duration-200">
                        <div class="flex items-center justify-between">
                            <div class="h-10 w-10 rounded-xl bg-blue/10 grid place-items-center">
                                <svg class="w-5 h-5 text-blue/60" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.063 2.063 0 110 4.128 2.063 2.063 0 010-4.128zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </div>
                            <svg class="w-4 h-4 text-[#8099b8] dark:text-white/20 group-hover:text-blue group-hover:translate-x-1 transition-all duration-200"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-display font-semibold text-[#0b1120] dark:text-white mb-1">LinkedIn</div>
                            <div class="font-mono text-xs text-[#8099b8] dark:text-white/40">wilson-mbuthia-k</div>
                            <div class="text-xs text-[#8099b8] dark:text-white/30 mt-1">Professional networking and
                                inquiries</div>
                        </div>
                    </a>
                    <a href="https://twitter.com/WilsonMbuthiaK" target="_blank" rel="noopener noreferrer"
                        class="sm:col-span-2 group flex flex-col gap-4 rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] p-6 hover:border-black/14 dark:hover:border-white/14 hover:-translate-y-0.5 transition-all duration-200">
                        <div class="flex items-center justify-between">
                            <div
                                class="h-10 w-10 rounded-xl bg-black/[0.04] dark:bg-white/[0.05] grid place-items-center">
                                <svg class="w-4 h-4 text-[#445577] dark:text-white/50" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path
                                        d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.735-8.856L2.025 2.25H8.32l4.259 5.629 5.665-5.629zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                </svg>
                            </div>
                            <svg class="w-4 h-4 text-[#8099b8] dark:text-white/20 group-hover:text-[#0b1120] dark:group-hover:text-white group-hover:translate-x-1 transition-all duration-200"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-display font-semibold text-[#0b1120] dark:text-white mb-1">X / Twitter
                            </div>
                            <div class="font-mono text-xs text-[#8099b8] dark:text-white/40">@WilsonMbuthiaK</div>
                            <div class="text-xs text-[#8099b8] dark:text-white/30 mt-1">Tech thoughts and project
                                updates</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ MODAL ══ -->
    <div id="modbg"
        class="fixed inset-0 z-50 flex items-center justify-center p-5 bg-ink/88 dark:bg-ink/92 backdrop-blur-xl opacity-0 pointer-events-none transition-opacity duration-300">
        <div id="modbox"
            class="rounded-2xl border border-black/[0.08] dark:border-white/[0.09] bg-white dark:bg-surface max-w-[700px] w-full max-h-[88vh] overflow-y-auto translate-y-4 scale-[.98] transition-all duration-300 ease-[cubic-bezier(0.16,1,0.3,1)]">
            <div id="modthumb"
                class="relative h-[260px] rounded-t-2xl overflow-hidden flex items-center justify-center">
                <button onclick="closeModal()"
                    class="absolute top-3 right-3 h-8 w-8 grid place-items-center rounded-full bg-black/50 text-white/70 hover:text-white hover:rotate-90 transition-all duration-200 z-10">
                    ✕
                </button>
            </div>
            <div class="p-7">
                <h3 id="modt" class="font-display text-2xl font-bold text-[#0b1120] dark:text-white mb-3"></h3>
                <div id="modtags" class="flex flex-wrap gap-2 mb-4"></div>
                <div id="modimp"
                    class="font-mono text-xs text-emerald-600 dark:text-emerald-400 bg-emerald-500/[0.06] border border-emerald-500/20 rounded-xl px-4 py-3 mb-4">
                </div>
                <p id="moddesc" class="text-[15px] text-[#445577] dark:text-white/60 leading-relaxed mb-5"></p>
                <div id="modacts" class="flex gap-3"></div>
            </div>
        </div>
    </div>


</main>

<?php get_footer();