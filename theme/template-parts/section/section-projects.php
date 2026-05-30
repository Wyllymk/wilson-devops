<?php
/**
 * Projects / Portfolio section — // 05
 * @package wilson-devops
 */

$projects = [
	[
		'id'   => 1,
		't'    => 'The Funded Way',
		'd'    => 'Prop trading platform with real-time challenge tracking, custom WooCommerce checkout with in-checkout product switching, and affiliate tracking for challenges up to $100K.',
		'imp'  => 'Custom checkout reduced cart abandonment by removing the re-selection barrier',
		'tags' => ['WordPress', 'WooCommerce', 'Custom'],
		'g'    => ['#1f8cf9', '#0a3a6e'],
		'e'    => '📈',
		'img'  => get_template_directory_uri() . '/assets/images/thefundedway-checkout.avif',
		'url'  => 'https://thefundedway.com',
		'span' => 4,
	],

	[
		'id'   => 2,
		't'    => 'AI Prop',
		'd'    => 'AI-powered prop trading using machine intelligence for instant challenge evaluations and smart funding decisions. WordPress and WooCommerce with custom AI scoring.',
		'imp'  => 'AI evaluations cut manual review time by 80%',
		'tags' => ['WordPress', 'WooCommerce', 'Custom'],
		'g'    => ['#b59ef5', '#2d1a6e'],
		'e'    => '🤖',
		'img'  => get_template_directory_uri() . '/assets/images/aiprop.avif',
		'url'  => 'https://aiprop.com',
		'span' => 2,
	],

	[
		'id'   => 3,
		't'    => 'PremiaBet',
		'd'    => 'Sports betting prop firm with video hero, dynamic pricing, GSAP animations, and full English/Portuguese bilingual support. Custom WooCommerce challenge flows.',
		'imp'  => 'Bilingual codebase opened the Brazilian market without a separate site',
		'tags' => ['WordPress', 'WooCommerce', 'Custom'],
		'g'    => ['#e63946', '#5c0a0f'],
		'e'    => '⚽',
		'img'  => get_template_directory_uri() . '/assets/images/premiabet.avif',
		'url'  => 'https://premiabet.org',
		'span' => 2,
	],

	[
		'id'   => 4,
		't'    => 'Torus Africa',
		'd'    => 'East African web design agency built on a fully custom WordPress theme. Modern JS animations and comprehensive services showcase for international audiences.',
		'imp'  => 'Rebrand supported expansion into international markets',
		'tags' => ['WordPress', 'Custom'],
		'g'    => ['#22c55e', '#0a3a1e'],
		'e'    => '🌍',
		'img'  => get_template_directory_uri() . '/assets/images/torus.avif',
		'url'  => 'https://torus.africa',
		'span' => 2,
	],

	[
		'id'   => 5,
		't'    => 'Nyeri Club',
		'd'    => 'Golf club website built with Elementor Pro. Member navigation, event scheduling, course information, and a dynamic content platform.',
		'imp'  => 'Moved bookings online, reducing phone enquiries by 40%',
		'tags' => ['WordPress', 'Elementor'],
		'g'    => ['#f59e0b', '#5c2800'],
		'e'    => '⛳',
		'img'  => get_template_directory_uri() . '/assets/images/nyericlub.avif',
		'url'  => 'https://nyericlub.co.ke',
		'span' => 2,
	],

	[
		'id'   => 6,
		't'    => 'Visitor Management',
		'd'    => 'Enterprise VMS with real-time check-ins, QR scanning, digital visitor badges, automated notifications, and detailed security reporting.',
		'imp'  => 'Cut visitor processing from 5 minutes to under 30 seconds',
		'tags' => ['WordPress', 'Custom'],
		'g'    => ['#3533cd', '#0d0a3e'],
		'e'    => '🏢',
		'img'  => get_template_directory_uri() . '/assets/images/vms.avif',
		'url'  => 'https://vms.nyericlub.co.ke',
		'span' => 3,
	],

	[
		'id'   => 7,
		't'    => 'Nezer Motors',
		'd'    => 'Automotive dealership site with vehicle listings and a lead inquiry system routing leads directly to sales. Optimized for local SEO.',
		'imp'  => 'Website now drives consistent qualified leads replacing walk-in reliance',
		'tags' => ['WordPress'],
		'g'    => ['#475569', '#0f172a'],
		'e'    => '🚗',
		'img'  => get_template_directory_uri() . '/assets/images/nezermotors.avif',
		'url'  => 'https://nezermotors.com',
		'span' => 3,
	],

	[
		'id'   => 8,
		't'    => 'Institutional Funding',
		'd'    => 'Financial services presenting funding programs with clear hierarchy for serious investors. WordPress and Elementor.',
		'imp'  => 'Clear architecture improved qualified investor inquiry rate',
		'tags' => ['WordPress', 'WooCommerce', 'Elementor'],
		'g'    => ['#b59ef5', '#1e1040'],
		'e'    => '💰',
		'img'  => get_template_directory_uri() . '/assets/images/if.avif',
		'url'  => 'https://institutional-funding.com',
		'span' => 2,
	],

	[
		'id'   => 9,
		't'    => 'PlayFunded',
		'd'    => 'Sports prop trading platform for users to prove skills, complete challenges, and earn funded accounts. Custom WooCommerce with advanced payment flows.',
		'imp'  => '500+ users registered within the first month post-launch',
		'tags' => ['WordPress', 'WooCommerce', 'Custom'],
		'g'    => ['#22c55e', '#061a0e'],
		'e'    => '🎮',
		'img'  => get_template_directory_uri() . '/assets/images/playfunded.avif',
		'url'  => 'https://playfunded.com',
		'span' => 2,
	],

	[
		'id'   => 10,
		't'    => 'Gathathiini Boys High School',
		'd'    => 'Gathathiini Secondary school website with academic pages, events, staff directory, and online admission inquiries. First digital presence for the institution.',
		'imp'  => 'Enabled online admissions and parent communication for the first time',
		'tags' => ['WordPress', 'Elementor'],
		'g'    => ['#1f8cf9', '#032244'],
		'e'    => '🏫',
		'img'  => get_template_directory_uri() . '/assets/images/gatchez.avif',
		'url'  => 'https://gathathiiniboyshighschool.sc.ke',
		'span' => 2,
	],
];

?>
<section id="projects" class="max-w-[1280px] mx-auto px-6 lg:px-10 py-28 md:py-36">
    <p class="reveal font-mono text-[11px] uppercase tracking-[0.22em] text-violet dark:text-lilac/80 mb-4">// 05 —
        Portfolio</p>
    <h2 class="reveal font-display text-4xl md:text-5xl font-bold tracking-tight text-[#0b1120] dark:text-white mb-4">
        <?php esc_html_e( "What I've", 'wilson-devops' ); ?>
        <span
            class="bg-grad-text bg-clip-text text-transparent"><?php esc_html_e( 'shipped', 'wilson-devops' ); ?></span>
    </h2>
    <p class="reveal max-w-lg text-[17px] text-[#445577] dark:text-white/55 leading-relaxed mb-8">
        <?php esc_html_e( 'Real work for real clients. Click any card to see the live site.', 'wilson-devops' ); ?>
    </p>

    <div class="reveal flex flex-wrap gap-2 mb-8" role="group"
        aria-label="<?php esc_attr_e( 'Filter projects', 'wilson-devops' ); ?>">
        <button class="pfilt" data-f="all"
            onclick="filterP('all',this)"><?php esc_html_e( 'All',          'wilson-devops' ); ?></button>
        <button class="pfilt" data-f="WordPress"
            onclick="filterP('WordPress',this)"><?php esc_html_e( 'WordPress',    'wilson-devops' ); ?></button>
        <button class="pfilt" data-f="WooCommerce"
            onclick="filterP('WooCommerce',this)"><?php esc_html_e( 'WooCommerce',  'wilson-devops' ); ?></button>
        <button class="pfilt" data-f="Custom"
            onclick="filterP('Custom',this)"><?php esc_html_e( 'Custom Dev',   'wilson-devops' ); ?></button>
        <button class="pfilt" data-f="Elementor"
            onclick="filterP('Elementor',this)"><?php esc_html_e( 'Elementor',    'wilson-devops' ); ?></button>
    </div>

    <script>
    window.PD = <?php echo wp_json_encode($projects); ?>;
    </script>

    <div id="pgrid" class="grid grid-cols-6 gap-3" aria-live="polite"
        aria-label="<?php esc_attr_e( 'Project grid', 'wilson-devops' ); ?>">

        <?php foreach ($projects as $project): ?>

        <?php
		$span_class = match ($project['span']) {
			4 => 'md:col-span-4',
			3 => 'md:col-span-3',
			2 => 'md:col-span-2',
			default => 'md:col-span-2',
		};
		?>

        <article
            class="bcard col-span-6 <?php echo esc_attr($span_class); ?> rounded-2xl border border-black/[0.07] dark:border-white/[0.07] bg-white dark:bg-card overflow-hidden cursor-pointer hover:-translate-y-1 transition-all duration-300"
            data-id="<?php echo esc_attr($project['id']); ?>"
            data-tags="<?php echo esc_attr(implode(',', $project['tags'])); ?>"
            onclick="openModal(<?php echo esc_attr($project['id']); ?>)" tabindex="0" role="button"
            onkeydown="if(event.key==='Enter'||event.key===' ')openModal(<?php echo esc_attr($project['id']); ?>)">

            <div class="relative flex items-center justify-center overflow-hidden group"
                style="height:<?php echo $project['span'] >= 4 ? '260px' : '190px'; ?>;
			background:linear-gradient(135deg,<?php echo esc_attr($project['g'][0]); ?>25,<?php echo esc_attr($project['g'][1]); ?>70)">
                <?php if (!empty($project['img'])) : ?>
                <img src="<?php echo esc_url($project['img']); ?>"
                    class="absolute inset-0 w-full h-full object-cover opacity-40 group-hover:opacity-60 transition"
                    alt="<?php echo esc_attr($project['t']); ?>">
                <?php else : ?>
                <div class="text-[58px] opacity-[.28] select-none group-hover:scale-110 transition-transform">
                    <?php echo esc_html($project['e']); ?>
                </div>
                <?php endif; ?>

                <div
                    class="absolute inset-0 bg-ink/50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
                    <div class="bg-white text-ink text-xs px-4 py-2 rounded-lg">
                        View Project ↗
                    </div>
                </div>
            </div>

            <div class="p-5">
                <h3 class="font-display text-[16px] font-semibold text-[#0b1120] dark:text-white">
                    <?php echo esc_html($project['t']); ?>
                </h3>

                <p class="text-[13px] text-[#8099b8] dark:text-white/40 line-clamp-2 mt-1">
                    <?php echo esc_html($project['d']); ?>
                </p>
            </div>

        </article>

        <?php endforeach; ?>

    </div>

    <div class="reveal text-center mt-10">
        <a href="https://github.com/Wyllymk" target="_blank" rel="noopener noreferrer"
            class="inline-flex items-center gap-2 rounded-full border border-black/[0.09] dark:border-white/[0.09] bg-white/60 dark:bg-white/[0.03] backdrop-blur px-6 py-3 text-sm font-medium text-[#0b1120] dark:text-white/90 hover:bg-black/[0.04] dark:hover:bg-white/[0.07] hover:-translate-y-0.5 transition-all duration-200">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path
                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
            </svg>
            <?php esc_html_e( 'View GitHub Profile', 'wilson-devops' ); ?>
        </a>
    </div>
</section>