<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Wilson_Devops
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- 404 MAIN CONTENT -->
<main class="min-h-screen flex items-center justify-center pt-16 px-6">
    <div class="max-w-[900px] mx-auto w-full">

        <!-- Floating decorative dots -->
        <span aria-hidden="true"
            class="absolute top-[25%] left-[8%]  h-1.5 w-1.5 rounded-full bg-blue/60   animate-float pointer-events-none"></span>
        <span aria-hidden="true"
            class="absolute top-[60%] left-[12%] h-1   w-1   rounded-full bg-lilac/50  animate-float pointer-events-none"
            style="animation-delay:1.5s"></span>
        <span aria-hidden="true"
            class="absolute top-[20%] right-[8%] h-1.5 w-1.5 rounded-full bg-violet/50 animate-float pointer-events-none"
            style="animation-delay:3s"></span>

        <div class="text-center">

            <!-- Terminal window -->
            <div
                class="inline-block text-left w-full max-w-[620px] mb-12 rounded-2xl border border-black/[0.08] dark:border-white/[0.07] bg-white/70 dark:bg-white/[0.03] backdrop-blur-xl overflow-hidden shadow-glow">
                <!-- Terminal bar -->
                <div
                    class="flex items-center gap-2 px-4 py-3 border-b border-black/[0.06] dark:border-white/[0.05] bg-black/[0.02] dark:bg-white/[0.02]">
                    <div class="h-2.5 w-2.5 rounded-full bg-[#ff5f56]"></div>
                    <div class="h-2.5 w-2.5 rounded-full bg-[#ffbd2e]"></div>
                    <div class="h-2.5 w-2.5 rounded-full bg-[#27c93f]"></div>
                    <span
                        class="ml-2 flex-1 text-center font-mono text-[11px] text-[#8099b8] dark:text-white/30">error.log
                        — wilson-devops</span>
                </div>
                <!-- Terminal body -->
                <div id="404" class="p-6 font-mono text-[12.5px] leading-[1.9] text-[#334155] dark:text-[#bfcfe8]">
                    <div class="flex items-center gap-2 mb-1" style="animation:typein .5s .1s both;opacity:0">
                        <span class="text-emerald-500">$</span>
                        <span class="text-[#8099b8] dark:text-white/40">fetch('/page-you-were-looking-for')</span>
                    </div>
                    <div class="mt-2 text-red-400 dark:text-red-400" style="animation:typein .5s .5s both;opacity:0">
                        ✗ Error: 404 NOT_FOUND
                    </div>
                    <div class="text-[#8099b8] dark:text-white/40 mt-1" style="animation:typein .5s .8s both;opacity:0">
                        &nbsp;&nbsp;→ The route does not exist on this server
                    </div>
                    <div class="text-[#8099b8] dark:text-white/40 mt-1"
                        style="animation:typein .5s 1.1s both;opacity:0">
                        &nbsp;&nbsp;→ It may have been moved, deleted, or never deployed
                    </div>
                    <div class="mt-3 text-violet dark:text-lilac" style="animation:typein .5s 1.5s both;opacity:0">
                        ℹ Suggested fix: navigate back to a known route
                    </div>
                    <div class="mt-3 flex items-center gap-2" style="animation:typein .5s 1.9s both;opacity:0">
                        <span class="text-emerald-500">$</span>
                        <span class="text-[#8099b8] dark:text-white/40">cd /home</span>
                        <span
                            class="inline-block h-[13px] w-[7px] bg-blue align-middle rounded-[1px] animate-blink ml-1"></span>
                    </div>
                </div>
            </div>

            <!-- 404 number -->
            <div class="relative inline-block mb-6">
                <div class="font-display font-bold leading-none tracking-[-0.04em] bg-grad-text bg-clip-text text-transparent select-none"
                    style="font-size:clamp(100px,22vw,220px)">
                    404
                </div>
                <!-- Scanline effect overlay — dark only -->
                <div
                    class="dark:block hidden absolute inset-0 pointer-events-none overflow-hidden opacity-20 rounded-lg">
                    <div class="h-px w-full bg-gradient-to-r from-transparent via-blue to-transparent animate-scanline"
                        style="position:absolute;left:0"></div>
                </div>
            </div>

            <!-- Heading + description -->
            <h1 class="font-display text-2xl md:text-3xl font-bold text-[#0b1120] dark:text-white mb-4 tracking-tight">
                Page shipped with a bug
            </h1>
            <p class="text-[17px] text-[#445577] dark:text-white/55 leading-relaxed max-w-md mx-auto mb-10">
                This route doesn't exist in production. It may have been moved, deleted, or never deployed. Let me take
                you somewhere that works.
            </p>

            <!-- CTAs -->
            <div class="flex flex-wrap items-center justify-center gap-3 mb-12">
                <a href="/"
                    class="inline-flex items-center gap-2 rounded-full bg-grad-main px-6 py-3 text-sm font-medium text-white shadow-glow hover:shadow-[0_0_60px_-10px_rgba(53,51,205,.6)] hover:-translate-y-0.5 transition-all duration-200">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                    Back to Home
                </a>
                <a href="/#projects"
                    class="inline-flex items-center gap-2 rounded-full border border-black/[0.09] dark:border-white/[0.1] bg-white/60 dark:bg-white/[0.03] backdrop-blur px-6 py-3 text-sm font-medium text-[#0b1120] dark:text-white/90 hover:bg-black/[0.04] dark:hover:bg-white/[0.07] hover:-translate-y-0.5 transition-all duration-200">
                    View Projects
                </a>
                <a href="/#contact"
                    class="inline-flex items-center gap-2 rounded-full border border-black/[0.09] dark:border-white/[0.1] bg-white/60 dark:bg-white/[0.03] backdrop-blur px-6 py-3 text-sm font-medium text-[#0b1120] dark:text-white/90 hover:bg-black/[0.04] dark:hover:bg-white/[0.07] hover:-translate-y-0.5 transition-all duration-200">
                    Contact Me
                </a>
            </div>

            <!-- Quick nav links -->
            <div class="border-t border-black/[0.06] dark:border-white/[0.06] pt-8">
                <p class="font-mono text-xs uppercase tracking-[0.2em] text-[#8099b8] dark:text-white/30 mb-5">Or go
                    directly to:</p>
                <div class="flex flex-wrap items-center justify-center gap-3">
                    <a href="/#about"
                        class="inline-flex items-center gap-1.5 rounded-full border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] px-4 py-1.5 font-mono text-[11px] text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white hover:bg-black/[0.04] dark:hover:bg-white/[0.07] transition-all duration-200"><span
                            class="text-violet dark:text-lilac text-[10px]">01</span>About</a>
                    <a href="/#ai"
                        class="inline-flex items-center gap-1.5 rounded-full border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] px-4 py-1.5 font-mono text-[11px] text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white hover:bg-black/[0.04] dark:hover:bg-white/[0.07] transition-all duration-200"><span
                            class="text-violet dark:text-lilac text-[10px]">02</span>AI Services</a>
                    <a href="/#services"
                        class="inline-flex items-center gap-1.5 rounded-full border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] px-4 py-1.5 font-mono text-[11px] text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white hover:bg-black/[0.04] dark:hover:bg-white/[0.07] transition-all duration-200"><span
                            class="text-violet dark:text-lilac text-[10px]">03</span>Services</a>
                    <a href="/#projects"
                        class="inline-flex items-center gap-1.5 rounded-full border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] px-4 py-1.5 font-mono text-[11px] text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white hover:bg-black/[0.04] dark:hover:bg-white/[0.07] transition-all duration-200"><span
                            class="text-violet dark:text-lilac text-[10px]">04</span>Projects</a>
                    <a href="/#contact"
                        class="inline-flex items-center gap-1.5 rounded-full border border-black/[0.07] dark:border-white/[0.07] bg-white/60 dark:bg-white/[0.03] px-4 py-1.5 font-mono text-[11px] text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white hover:bg-black/[0.04] dark:hover:bg-white/[0.07] transition-all duration-200"><span
                            class="text-violet dark:text-lilac text-[10px]">05</span>Contact</a>
                </div>
            </div>

        </div>
    </div>
</main>
<script>
// Apply theme to terminal typein animations
const items = document.querySelectorAll('[style*="opacity:0"]');
items.forEach(el => {
    const delay = parseFloat((el.getAttribute('style') || '').match(/(\d+\.?\d*)s both/)?. [1] || 0) * 1000;
    setTimeout(() => {
        el.style.opacity = '1';
        el.style.transform = 'translateX(0)';
    }, delay);
});
</script>
<?php get_footer();