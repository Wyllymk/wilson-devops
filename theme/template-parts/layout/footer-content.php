<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wilson_Devops
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;
?>

<!-- ══ FOOTER ══ -->
<footer class="border-t border-black/[0.06] dark:border-white/[0.06]" role="contentinfo" itemscope
    itemtype="https://schema.org/WPFooter">
    <div class="max-w-[1280px] mx-auto px-6 lg:px-10 grid gap-10 py-14 md:grid-cols-3">

        <div>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                class="group flex items-center gap-2.5 font-display text-[17px] font-semibold mb-3"
                aria-label="<?php esc_attr_e( 'Wilson DevOps — Home', 'wilson-devops' ); ?>">
                <span class="grid h-8 w-8 place-items-center rounded-lg group-hover:-rotate-6" aria-hidden="true">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo" class="">
                </span>
                <span class="text-[#0b1120] dark:text-white">Wilson<span class="text-lilac"> </span>DevOps</span>
            </a>
            <p class="max-w-xs text-sm text-[#8099b8] dark:text-white/40">
                <?php esc_html_e( 'Engineering high-performance web systems and AI-powered applications from Nairobi, Kenya.', 'wilson-devops' ); ?>
            </p>
        </div>

        <nav aria-label="<?php esc_attr_e( 'Footer Navigation', 'wilson-devops' ); ?>">
            <div class="font-mono text-xs uppercase tracking-widest text-[#445577] dark:text-white/25 mb-4">
                <?php esc_html_e( 'Navigate', 'wilson-devops' ); ?></div>
            <ul class="grid grid-cols-2 gap-2 text-sm text-[#8099b8] dark:text-white/50">
                <li><a href="#about"
                        class="hover:text-[#0b1120] dark:hover:text-white transition-colors"><?php esc_html_e( 'About',       'wilson-devops' ); ?></a>
                </li>
                <li><a href="#ai"
                        class="hover:text-[#0b1120] dark:hover:text-white transition-colors"><?php esc_html_e( 'AI Services', 'wilson-devops' ); ?></a>
                </li>
                <li><a href="#services"
                        class="hover:text-[#0b1120] dark:hover:text-white transition-colors"><?php esc_html_e( 'Services',    'wilson-devops' ); ?></a>
                </li>
                <li><a href="#projects"
                        class="hover:text-[#0b1120] dark:hover:text-white transition-colors"><?php esc_html_e( 'Projects',    'wilson-devops' ); ?></a>
                </li>
                <li><a href="#process"
                        class="hover:text-[#0b1120] dark:hover:text-white transition-colors"><?php esc_html_e( 'Process',     'wilson-devops' ); ?></a>
                </li>
                <li><a href="#contact"
                        class="hover:text-[#0b1120] dark:hover:text-white transition-colors"><?php esc_html_e( 'Contact',     'wilson-devops' ); ?></a>
                </li>
            </ul>
        </nav>

        <div>
            <div class="font-mono text-xs uppercase tracking-widest text-[#445577] dark:text-white/25 mb-4">
                <?php esc_html_e( 'Connect', 'wilson-devops' ); ?></div>
            <div class="flex flex-wrap gap-2">
                <a href="https://github.com/Wyllymk" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center rounded-full border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] px-3 py-1 font-mono text-[11px] text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white hover:bg-black/[0.04] dark:hover:bg-white/[0.07] transition-all">GitHub</a>
                <a href="https://www.linkedin.com/in/wilson-mbuthia-k/" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center rounded-full border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] px-3 py-1 font-mono text-[11px] text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white hover:bg-black/[0.04] dark:hover:bg-white/[0.07] transition-all">LinkedIn</a>
                <a href="https://twitter.com/WilsonMbuthiaK" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center rounded-full border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] px-3 py-1 font-mono text-[11px] text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white hover:bg-black/[0.04] dark:hover:bg-white/[0.07] transition-all">Twitter</a>
                <a href="https://wa.me/+254703639230" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center rounded-full border border-emerald-500/25 bg-emerald-500/[0.04] px-3 py-1 font-mono text-[11px] text-emerald-600 dark:text-emerald-400/70 hover:border-emerald-500/45 transition-all">WhatsApp</a>
            </div>
        </div>
    </div>

    <div
        class="max-w-[1280px] mx-auto px-6 lg:px-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-3 border-t border-black/[0.06] dark:border-white/[0.06] py-6 text-xs text-[#8099b8] dark:text-white/30">
        <span>© <span id="yr"></span> Wilson DevOps.
            <?php esc_html_e( 'All rights reserved.', 'wilson-devops' ); ?></span>
        <span class="font-mono">Tailwind · GSAP · WordPress ·
            <?php esc_html_e( 'Built in Nairobi', 'wilson-devops' ); ?></span>
    </div>
</footer>

<!-- ══ BACK TO TOP ══ -->
<button id="btt" onclick="window.scrollTo({top:0,behavior:'smooth'})"
    aria-label="<?php esc_attr_e( 'Back to top', 'wilson-devops' ); ?>"
    class="fixed bottom-6 left-6 z-40 h-11 w-11 grid place-items-center rounded-xl bg-white dark:bg-card border border-black/[0.08] dark:border-white/[0.08] text-[#445577] dark:text-white/50 shadow-sm hover:bg-grad-main hover:border-transparent hover:text-white hover:shadow-glow hover:-translate-y-0.5 opacity-0 pointer-events-none transition-all duration-300">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
        aria-hidden="true">
        <path d="M18 15l-6-6-6 6" />
    </svg>
</button>

<!-- ══ WHATSAPP FLOAT ══ -->
<div class="fixed bottom-6 right-6 z-40 group flex flex-col items-end gap-2.5">
    <div
        class="opacity-0 group-hover:opacity-100 translate-y-1 group-hover:translate-y-0 transition-all duration-200 ease-out rounded-xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-card px-4 py-2.5 pointer-events-none whitespace-nowrap">
        <div class="font-semibold text-[13px] text-[#0b1120] dark:text-white">
            <?php esc_html_e( 'Chat on WhatsApp', 'wilson-devops' ); ?></div>
        <div class="font-mono text-[11px] text-[#8099b8] dark:text-white/35 mt-0.5">
            <?php esc_html_e( 'Usually replies in minutes', 'wilson-devops' ); ?></div>
    </div>
    <div class="relative">
        <div class="absolute inset-[-5px] rounded-[18px] border border-emerald-500/35 animate-pulsering pointer-events-none"
            aria-hidden="true"></div>
        <a href="https://wa.me/+254703639230?text=Hi%20Wilson%2C%20I%27d%20like%20to%20discuss%20a%20project"
            target="_blank" rel="noopener noreferrer"
            aria-label="<?php esc_attr_e( 'Open WhatsApp chat with Wilson', 'wilson-devops' ); ?>"
            class="relative flex h-14 w-14 items-center justify-center rounded-[14px] bg-[#25d366] text-white shadow-glow-g hover:-translate-y-0.5 hover:shadow-[0_8px_32px_rgba(37,211,102,.55)] transition-all duration-200">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
        </a>
    </div>
</div>

<!-- ══ PROJECT MODAL ══ -->
<div id="modbg" role="dialog" aria-modal="true" aria-labelledby="modt"
    class="fixed inset-0 z-[80] flex items-end md:items-center justify-center p-4 bg-ink/70 backdrop-blur-sm"
    style="opacity:0;pointer-events:none;transition:opacity .25s ease">
    <div id="modbox"
        class="relative w-full max-w-lg rounded-3xl border border-black/[0.08] dark:border-white/[0.08] bg-white dark:bg-card overflow-hidden shadow-[0_40px_100px_-15px_rgba(0,0,0,0.6)] max-h-[90vh] overflow-y-auto"
        style="transform:translateY(16px) scale(.98);transition:transform .3s cubic-bezier(0.16,1,0.3,1)">
        <div id="modthumb" class="relative h-44 flex items-center justify-center overflow-hidden"></div>
        <div class="p-7">
            <h3 id="modt" class="font-display text-2xl font-bold text-[#0b1120] dark:text-white mb-3"></h3>
            <div id="modtags" class="flex flex-wrap gap-1.5 mb-4"></div>
            <div id="modimp"
                class="rounded-xl bg-emerald-500/[0.07] border border-emerald-500/20 px-4 py-3 font-mono text-[13px] text-emerald-700 dark:text-emerald-300 mb-4">
            </div>
            <p id="moddesc" class="text-[15px] text-[#445577] dark:text-white/55 leading-relaxed mb-6"></p>
            <div id="modacts" class="flex flex-wrap gap-3"></div>
        </div>
    </div>
</div>