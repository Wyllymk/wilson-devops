<?php
/**
 * Contact section — // 06
 * @package wilson-devops
 */
?>
<section id="contact" class="border-t border-black/[0.06] dark:border-white/[0.06] py-28 md:py-36">
    <div class="max-w-[1280px] mx-auto px-6 lg:px-10">
        <div class="grid gap-16 lg:grid-cols-[1fr_1.1fr] items-start">

            <div>
                <p class="reveal font-mono text-[11px] uppercase tracking-[0.22em] text-violet dark:text-lilac/80 mb-4">
                    // 06 — Contact</p>
                <h2 class="reveal font-display font-bold leading-tight tracking-tight text-[#0b1120] dark:text-white mb-6"
                    style="font-size:clamp(34px,5.5vw,62px)">
                    <?php esc_html_e( "Let's build something", 'wilson-devops' ); ?>
                    <span
                        class="bg-grad-text bg-clip-text text-transparent"><?php esc_html_e( 'unforgettable.', 'wilson-devops' ); ?></span>
                </h2>
                <p class="reveal text-[17px] text-[#445577] dark:text-white/55 leading-relaxed mb-8 max-w-sm">
                    <?php esc_html_e( 'Available for freelance projects, retainers, and collaborations. Working with clients in Kenya, across Africa, and globally.', 'wilson-devops' ); ?>
                </p>
                <div
                    class="reveal inline-flex items-center gap-3 rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] px-5 py-3 mb-8">
                    <span class="relative flex h-2.5 w-2.5 flex-shrink-0" aria-hidden="true"><span
                            class="absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75 animate-ping"></span><span
                            class="relative flex h-2.5 w-2.5 rounded-full bg-emerald-400"></span></span>
                    <div>
                        <div class="text-sm font-semibold text-[#0b1120] dark:text-white">
                            <?php esc_html_e( 'Currently available', 'wilson-devops' ); ?></div>
                        <div class="font-mono text-[11px] text-[#8099b8] dark:text-white/35 mt-0.5">
                            <?php esc_html_e( 'Nairobi, Kenya · UTC+3 · Reply < 24 hours', 'wilson-devops' ); ?></div>
                    </div>
                </div>
                <div class="reveal space-y-2 font-mono text-sm text-[#8099b8] dark:text-white/45">
                    <div class="flex items-center gap-3"><span class="text-violet" aria-hidden="true">→</span> <a
                            href="mailto:info@wilsondevops.com"
                            class="hover:text-violet transition-colors">info@wilsondevops.com</a></div>
                    <div class="flex items-center gap-3"><span class="text-violet" aria-hidden="true">→</span> <a
                            href="tel:+254703639230" class="hover:text-violet transition-colors">+254 703 639 230</a>
                    </div>
                    <div class="flex items-center gap-3"><span class="text-violet" aria-hidden="true">→</span>
                        <?php esc_html_e( 'Nairobi, Kenya · Open to travel', 'wilson-devops' ); ?></div>
                </div>
            </div>

            <div class="reveal grid grid-cols-1 sm:grid-cols-2 gap-3">
                <a href="mailto:info@wilsondevops.com"
                    class="sm:col-span-2 group flex flex-col gap-4 rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] p-6 hover:border-violet/30 dark:hover:border-white/14 hover:shadow-glow hover:-translate-y-0.5 transition-all duration-200">
                    <div class="flex items-center justify-between">
                        <div class="h-10 w-10 rounded-xl bg-violet/10 grid place-items-center text-lg"
                            aria-hidden="true">✉️</div>
                        <svg class="w-4 h-4 text-[#8099b8] dark:text-white/20 group-hover:text-violet group-hover:translate-x-1 transition-all duration-200"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </div>
                    <div>
                        <div class="font-display font-semibold text-[#0b1120] dark:text-white mb-1">
                            <?php esc_html_e( 'Email', 'wilson-devops' ); ?></div>
                        <div class="font-mono text-xs text-[#8099b8] dark:text-white/40">info@wilsondevops.com</div>
                        <div class="text-xs text-[#8099b8] dark:text-white/30 mt-1">
                            <?php esc_html_e( 'For project inquiries and scoping', 'wilson-devops' ); ?></div>
                    </div>
                </a>

                <a href="https://wa.me/+254703639230?text=Hi%20Wilson%2C%20I%27d%20like%20to%20discuss%20a%20project"
                    target="_blank" rel="noopener noreferrer"
                    class="group flex flex-col gap-4 rounded-2xl border border-emerald-500/20 bg-emerald-500/[0.03] p-6 hover:border-emerald-500/40 hover:shadow-[0_0_40px_-10px_rgba(52,211,153,.3)] hover:-translate-y-0.5 transition-all duration-200">
                    <div class="flex items-center justify-between">
                        <div class="h-10 w-10 rounded-xl bg-emerald-500/15 grid place-items-center text-lg"
                            aria-hidden="true">💬</div>
                        <svg class="w-4 h-4 text-[#8099b8] dark:text-white/20 group-hover:text-emerald-500 group-hover:translate-x-1 transition-all duration-200"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </div>
                    <div>
                        <div class="font-display font-semibold text-[#0b1120] dark:text-white mb-1">
                            <?php esc_html_e( 'WhatsApp', 'wilson-devops' ); ?></div>
                        <div class="font-mono text-xs text-[#8099b8] dark:text-white/40">+254 703 639 230</div>
                        <div class="text-xs text-[#8099b8] dark:text-white/30 mt-1">
                            <?php esc_html_e( 'Quick chats. Fastest response.', 'wilson-devops' ); ?></div>
                    </div>
                </a>

                <a href="https://github.com/Wyllymk" target="_blank" rel="noopener noreferrer"
                    class="group flex flex-col gap-4 rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] p-6 hover:border-black/14 dark:hover:border-white/14 hover:-translate-y-0.5 transition-all duration-200">
                    <div class="flex items-center justify-between">
                        <div class="h-10 w-10 rounded-xl bg-black/[0.04] dark:bg-white/[0.05] grid place-items-center"
                            aria-hidden="true"><svg class="w-5 h-5 text-[#445577] dark:text-white/50"
                                viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                            </svg></div>
                        <svg class="w-4 h-4 text-[#8099b8] dark:text-white/20 group-hover:text-[#0b1120] dark:group-hover:text-white group-hover:translate-x-1 transition-all duration-200"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3" />
                        </svg>
                    </div>
                    <div>
                        <div class="font-display font-semibold text-[#0b1120] dark:text-white mb-1">GitHub</div>
                        <div class="font-mono text-xs text-[#8099b8] dark:text-white/40">github.com/Wyllymk</div>
                        <div class="text-xs text-[#8099b8] dark:text-white/30 mt-1">
                            <?php esc_html_e( 'See the code behind the work', 'wilson-devops' ); ?></div>
                    </div>
                </a>

                <a href="https://www.linkedin.com/in/wilson-mbuthia-k/" target="_blank" rel="noopener noreferrer"
                    class="group flex flex-col gap-4 rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] p-6 hover:border-blue/30 hover:-translate-y-0.5 transition-all duration-200">
                    <div class="flex items-center justify-between">
                        <div class="h-10 w-10 rounded-xl bg-blue/10 grid place-items-center" aria-hidden="true"><svg
                                class="w-5 h-5 text-blue/60" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.063 2.063 0 110 4.128 2.063 2.063 0 010-4.128zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg></div>
                        <svg class="w-4 h-4 text-[#8099b8] dark:text-white/20 group-hover:text-blue group-hover:translate-x-1 transition-all duration-200"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3" />
                        </svg>
                    </div>
                    <div>
                        <div class="font-display font-semibold text-[#0b1120] dark:text-white mb-1">LinkedIn</div>
                        <div class="font-mono text-xs text-[#8099b8] dark:text-white/40">wilson-mbuthia-k</div>
                        <div class="text-xs text-[#8099b8] dark:text-white/30 mt-1">
                            <?php esc_html_e( 'Professional networking and inquiries', 'wilson-devops' ); ?></div>
                    </div>
                </a>

                <a href="https://twitter.com/WilsonMbuthiaK" target="_blank" rel="noopener noreferrer"
                    class="group flex flex-col gap-4 rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-white/[0.03] p-6 hover:border-black/14 dark:hover:border-white/14 hover:-translate-y-0.5 transition-all duration-200">
                    <div class="flex items-center justify-between">
                        <div class="h-10 w-10 rounded-xl bg-black/[0.04] dark:bg-white/[0.05] grid place-items-center"
                            aria-hidden="true"><svg class="w-4 h-4 text-[#445577] dark:text-white/50"
                                viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.735-8.856L2.025 2.25H8.32l4.259 5.629 5.665-5.629zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg></div>
                        <svg class="w-4 h-4 text-[#8099b8] dark:text-white/20 group-hover:text-[#0b1120] dark:group-hover:text-white group-hover:translate-x-1 transition-all duration-200"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3" />
                        </svg>
                    </div>
                    <div>
                        <div class="font-display font-semibold text-[#0b1120] dark:text-white mb-1">
                            <?php esc_html_e( 'X / Twitter', 'wilson-devops' ); ?></div>
                        <div class="font-mono text-xs text-[#8099b8] dark:text-white/40">@WilsonMbuthiaK</div>
                        <div class="text-xs text-[#8099b8] dark:text-white/30 mt-1">
                            <?php esc_html_e( 'Tech thoughts and project updates', 'wilson-devops' ); ?></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>