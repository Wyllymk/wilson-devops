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

<!-- ══════════════════════════════════════════
     HERO — // 01
══════════════════════════════════════════ -->
<section id="hero" class="relative min-h-screen flex flex-col justify-center pt-16 overflow-hidden">

    <div aria-hidden="true"
        class="pointer-events-none select-none absolute top-1/2 left-1/2 font-display font-bold leading-none tracking-[-0.04em] text-transparent will-change-transform"
        style="transform:translate(-50%,-55%);font-size:clamp(100px,18vw,240px);-webkit-text-stroke:1.5px rgba(53,51,205,0.07)">
        ENGINEER</div>
    <span aria-hidden="true"
        class="absolute top-[24%] left-[7%]  h-1.5 w-1.5 rounded-full bg-blue/60 pointer-events-none animate-float"></span>
    <span aria-hidden="true"
        class="absolute top-[62%] left-[10%] h-1   w-1   rounded-full bg-lilac/50 pointer-events-none animate-float-2"></span>
    <span aria-hidden="true"
        class="absolute top-[19%] right-[17%] h-1.5 w-1.5 rounded-full bg-violet/50 pointer-events-none animate-float-3"></span>
    <span aria-hidden="true"
        class="absolute bottom-[28%] right-[7%] h-1 w-1 rounded-full bg-emerald-400/40 pointer-events-none animate-float"></span>

    <div class="relative z-10 max-w-[1280px] mx-auto px-6 lg:px-10 w-full">
        <div
            class="flex flex-wrap items-center justify-between gap-3 border-b border-black/[0.07] dark:border-white/[0.07] pb-7 mb-14">
            <div
                class="inline-flex items-center gap-2 rounded-full border border-black/[0.08] dark:border-white/[0.07] bg-white/70 dark:bg-white/[0.03] backdrop-blur px-4 py-1.5 font-mono text-[11.5px] text-[#445577] dark:text-white/65">
                <span class="relative flex h-2 w-2 flex-shrink-0" aria-hidden="true"><span
                        class="absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75 animate-ping"></span><span
                        class="relative flex h-2 w-2 rounded-full bg-emerald-400"></span></span>
                <?php esc_html_e( 'Open for projects — Nairobi, Kenya 🇰🇪', 'wilson-devops' ); ?>
            </div>
            <span
                class="font-mono text-[11px] text-[#8099b8] dark:text-white/30"><?php esc_html_e( 'Response < 24 hrs · UTC+3', 'wilson-devops' ); ?></span>
        </div>

        <div class="grid lg:grid-cols-[1fr_460px] items-end gap-14">
            <div>
                <h1 class="font-display font-bold leading-[0.92] tracking-[-0.035em]"
                    style="font-size:clamp(52px,9vw,112px)">
                    <span class="block text-[#0b1120] dark:text-white">Wilson</span>
                    <span class="block bg-grad-text bg-clip-text text-transparent">Mbuthia</span>
                </h1>
                <div class="flex flex-wrap gap-2 mt-6" role="list"
                    aria-label="<?php esc_attr_e( 'Professional titles', 'wilson-devops' ); ?>">
                    <span role="listitem"
                        class="inline-flex items-center rounded-full border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] backdrop-blur px-3.5 py-1.5 font-mono text-[11px] text-[#445577] dark:text-white/60"><?php esc_html_e( 'WordPress Architect', 'wilson-devops' ); ?></span>
                    <span role="listitem"
                        class="inline-flex items-center rounded-full border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] backdrop-blur px-3.5 py-1.5 font-mono text-[11px] text-[#445577] dark:text-white/60"><?php esc_html_e( 'AI Integrator', 'wilson-devops' ); ?></span>
                    <span role="listitem"
                        class="inline-flex items-center rounded-full border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] backdrop-blur px-3.5 py-1.5 font-mono text-[11px] text-[#445577] dark:text-white/60"><?php esc_html_e( 'Full Stack Engineer', 'wilson-devops' ); ?></span>
                </div>
                <p class="mt-6 max-w-[460px] text-[17px] text-[#445577] dark:text-white/60 leading-relaxed">
                    <?php esc_html_e( "I don't build websites. I engineer digital systems that solve real business problems — custom WordPress, complex WooCommerce, and AI-powered applications built to perform and scale.", 'wilson-devops' ); ?>
                </p>
                <div class="mt-8 flex flex-wrap items-center gap-3">
                    <a href="#projects" data-magnetic
                        class="inline-flex items-center gap-2 rounded-full bg-grad-main px-6 py-3 text-sm font-medium text-white shadow-glow hover:shadow-glow-v hover:-translate-y-0.5 transition-all duration-200">
                        <?php esc_html_e( 'See My Work', 'wilson-devops' ); ?>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" aria-hidden="true">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="#contact"
                        class="inline-flex items-center gap-2 rounded-full border border-black/[0.09] dark:border-white/[0.1] bg-white/60 dark:bg-white/[0.03] backdrop-blur px-6 py-3 text-sm font-medium text-[#0b1120] dark:text-white/90 hover:bg-black/[0.04] dark:hover:bg-white/[0.07] hover:-translate-y-0.5 transition-all duration-200">
                        <?php esc_html_e( 'Start a Project', 'wilson-devops' ); ?>
                    </a>
                </div>
                <div class="flex gap-2 mt-7">
                    <a href="https://github.com/Wyllymk" target="_blank" rel="noopener noreferrer"
                        aria-label="<?php esc_attr_e( 'GitHub profile', 'wilson-devops' ); ?>"
                        class="grid h-9 w-9 place-items-center rounded-lg border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] text-[#8099b8] dark:text-white/40 hover:text-[#0b1120] dark:hover:text-white hover:border-black/15 dark:hover:border-white/20 transition-all duration-200"><svg
                            width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path
                                d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                        </svg></a>
                    <a href="https://www.linkedin.com/in/wilson-mbuthia-k/" target="_blank" rel="noopener noreferrer"
                        aria-label="<?php esc_attr_e( 'LinkedIn profile', 'wilson-devops' ); ?>"
                        class="grid h-9 w-9 place-items-center rounded-lg border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] text-[#8099b8] dark:text-white/40 hover:text-blue hover:border-blue/40 transition-all duration-200"><svg
                            width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.063 2.063 0 110 4.128 2.063 2.063 0 010-4.128zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg></a>
                    <a href="https://twitter.com/WilsonMbuthiaK" target="_blank" rel="noopener noreferrer"
                        aria-label="<?php esc_attr_e( 'Twitter / X profile', 'wilson-devops' ); ?>"
                        class="grid h-9 w-9 place-items-center rounded-lg border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] text-[#8099b8] dark:text-white/40 hover:text-[#0b1120] dark:hover:text-white hover:border-black/15 dark:hover:border-white/20 transition-all duration-200"><svg
                            width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.735-8.856L2.025 2.25H8.32l4.259 5.629 5.665-5.629zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg></a>
                    <a href="https://wa.me/+254703639230" target="_blank" rel="noopener noreferrer"
                        aria-label="<?php esc_attr_e( 'WhatsApp contact', 'wilson-devops' ); ?>"
                        class="grid h-9 w-9 place-items-center rounded-lg border border-emerald-500/25 bg-emerald-500/[0.04] text-emerald-500/60 hover:text-emerald-500 hover:border-emerald-500/50 transition-all duration-200"><svg
                            width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg></a>
                </div>
            </div>

            <!-- Terminal card -->
            <div id="heroTerm"
                class="hidden lg:block rounded-2xl border border-black/[0.08] dark:border-white/[0.07] bg-white/70 dark:bg-white/[0.03] backdrop-blur-xl overflow-hidden shadow-glow"
                aria-label="<?php esc_attr_e( 'Engineering philosophy — code snippet', 'wilson-devops' ); ?>">
                <div class="flex items-center gap-2 px-4 py-3 border-b border-black/[0.06] dark:border-white/[0.05] bg-black/[0.02] dark:bg-white/[0.02]"
                    aria-hidden="true">
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
                    <span class="block pl-5"><span class="text-blue">goal</span><span
                            class="text-[#64748b] dark:text-[#4a637d]">:</span> <span
                            class="text-emerald-600 dark:text-emerald-300/80">'solve real problems'</span><span
                            class="text-[#64748b] dark:text-[#4a637d]">;</span></span>
                    <span class="block pl-5"><span class="text-blue">stack</span><span
                            class="text-[#64748b] dark:text-[#4a637d]">:</span> <span
                            class="text-emerald-600 dark:text-emerald-300/80">'chosen for fit, not trend'</span><span
                            class="text-[#64748b] dark:text-[#4a637d]">;</span></span>
                    <span class="block pl-5"><span class="text-blue">performance</span><span
                            class="text-[#64748b] dark:text-[#4a637d]">:</span> <span
                            class="text-emerald-600 dark:text-emerald-300/80">'non-negotiable'</span><span
                            class="text-[#64748b] dark:text-[#4a637d]">;</span></span>
                    <span class="block pl-5"><span class="text-blue">ai</span><span
                            class="text-[#64748b] dark:text-[#4a637d]">:</span> <span
                            class="text-emerald-600 dark:text-emerald-300/80">'integrated, not bolted on'</span><span
                            class="text-[#64748b] dark:text-[#4a637d]">;</span></span>
                    <span class="block">}</span>
                    <span class="block">&nbsp;</span>
                    <span class="block"><span class="text-violet dark:text-lilac">const</span> <span
                            class="text-blue">wilson</span> <span class="text-[#64748b] dark:text-[#4a637d]">=</span>
                        <span class="text-amber-600 dark:text-amber-300/90">new</span> <span
                            class="text-blue">Engineer</span>({</span>
                    <span class="block pl-5"><span class="text-[#64748b] dark:text-[#4a637d]">location:</span> <span
                            class="text-emerald-600 dark:text-emerald-300/80">'Nairobi, KE 🇰🇪'</span>,</span>
                    <span class="block pl-5"><span class="text-[#64748b] dark:text-[#4a637d]">available:</span> <span
                            class="text-violet dark:text-lilac">true</span>,</span>
                    <span class="block pl-5"><span class="text-[#64748b] dark:text-[#4a637d]">replyTime:</span> <span
                            class="text-emerald-600 dark:text-emerald-300/80">'&lt; 24 hours'</span>,</span>
                    <span class="block">});</span>
                    <span class="block">&nbsp;</span>
                    <span class="block" id="termCursor"><span class="text-emerald-500">▶</span> <span
                            class="text-[#94a3b8] dark:text-[#3d5575]">wilson.hire()</span><span
                            class="animate-blink">_</span></span>
                </div>
            </div>
        </div>

        <!-- Stats ticker -->
        <?php get_template_part( 'template-parts/section/stats-ticker' ); ?>
    </div>
</section>

<!-- ══ ABOUT — // 02 ══ -->
<?php get_template_part( 'template-parts/section/section', 'about' ); ?>

<!-- ══ AI SERVICES — // 02b ══ -->
<?php get_template_part( 'template-parts/section/section', 'ai' ); ?>

<!-- ══ SERVICES — // 03 ══ -->
<?php get_template_part( 'template-parts/section/section', 'services' ); ?>

<!-- ══ PROCESS — // 04 ══ -->
<?php get_template_part( 'template-parts/section/section', 'process' ); ?>

<!-- ══ PROJECTS — // 05 ══ -->
<?php get_template_part( 'template-parts/section/section', 'projects' ); ?>

<!-- ══ CONTACT — // 06 ══ -->
<?php get_template_part( 'template-parts/section/section', 'contact' ); ?>

<?php get_footer();