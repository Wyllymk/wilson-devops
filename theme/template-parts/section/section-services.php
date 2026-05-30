<?php
/**
 * Services accordion section — // 03
 * @package wilson-devops
 */
$services = [
    [
        'num'   => '01',
        'label' => 'Custom WordPress Engineering',
        'desc'  => 'From-scratch custom themes, hybrid block-based architecture, and bespoke WordPress systems with no page builder dependencies. Engineered using OOP PHP and WordPress coding standards.',
        'tags'  => [ 'Custom Themes', 'Block Editor', 'PHP / OOP', 'ACF', 'Custom Post Types', 'REST API' ],
    ],
    [
        'num'   => '02',
        'label' => 'WooCommerce Revenue Systems',
        'desc'  => 'Custom checkout flows, in-checkout product switching, subscription engines, affiliate tracking, payment gateway integrations, and order automation. Built for conversion, not just functionality.',
        'tags'  => [ 'Custom Checkout', 'In-Checkout Switching', 'Subscriptions', 'Affiliates', 'Payment Gateways' ],
    ],
    [
        'num'   => '03',
        'label' => 'AI Integration & Automation',
        'desc'  => 'Chatbots, AI agents, and intelligent features built using Claude, GPT, and custom model integrations. Every AI feature I ship replaces a manual process or creates measurable new capability.',
        'tags'  => [ 'Claude API', 'GPT', 'Chatbots', 'Automation', 'AI Search' ],
    ],
    [
        'num'   => '04',
        'label' => 'Page Builder Development',
        'desc'  => 'Engineering-level customization on Elementor Pro, Oxygen Builder, and WP Bakery. Custom dynamic widgets, performance-optimized implementations, and pixel-perfect execution.',
        'tags'  => [ 'Elementor Pro', 'Oxygen Builder', 'WP Bakery', 'Custom Widgets' ],
    ],
    [
        'num'   => '05',
        'label' => 'Full Stack Web Applications',
        'desc'  => 'React frontends, Node.js backends, REST API architecture, and headless WordPress for businesses that need an application. Database design, auth, third-party integrations, AWS deployment.',
        'tags'  => [ 'React', 'TypeScript', 'Node.js', 'MySQL', 'AWS', 'Headless WP' ],
    ],
    [
        'num'   => '06',
        'label' => 'Performance & Security Audit',
        'desc'  => 'Deep audits on live WordPress sites: Core Web Vitals, LCP/CLS fixes, caching strategy, image pipeline, database profiling, security hardening, plugin audit, and SEO technical remediation.',
        'tags'  => [ 'Core Web Vitals', 'LCP / CLS', 'Security', 'DB Optimization', 'SEO Technical' ],
    ],
];
?>
<section id="services" class="max-w-[1280px] mx-auto px-6 lg:px-10 py-28 md:py-36">
  <p class="reveal font-mono text-[11px] uppercase tracking-[0.22em] text-violet dark:text-lilac/80 mb-4">// 03 — Services</p>
  <h2 class="reveal font-display text-4xl md:text-5xl font-bold tracking-tight text-[#0b1120] dark:text-white mb-4">
    <?php esc_html_e( 'What I', 'wilson-devops' ); ?>
    <span class="bg-grad-text bg-clip-text text-transparent"><?php esc_html_e( 'build', 'wilson-devops' ); ?></span>
  </h2>
  <p class="reveal max-w-lg text-[17px] text-[#445577] dark:text-white/55 leading-relaxed mb-12">
    <?php esc_html_e( 'Every engagement starts with the problem, not the tool.', 'wilson-devops' ); ?>
  </p>

  <div class="reveal border-t border-black/[0.06] dark:border-white/[0.07]" id="srv-list" role="list">
    <?php foreach ( $services as $svc ) : ?>
    <div class="srv-row border-b border-black/[0.06] dark:border-white/[0.07]" role="listitem">
      <button class="srv-btn w-full flex items-center gap-5 py-6 text-left group"
              onclick="toggleSrv(this)"
              aria-expanded="false"
              aria-label="<?php echo esc_attr( sprintf( __( 'Toggle %s service details', 'wilson-devops' ), $svc['label'] ) ); ?>">
        <span class="srv-num font-mono text-xs text-[#8099b8] dark:text-white/25 w-8 flex-shrink-0 group-hover:text-violet dark:group-hover:text-violet transition-colors duration-200" aria-hidden="true"><?php echo esc_html( $svc['num'] ); ?></span>
        <span class="srv-label flex-1 font-display font-semibold text-[#0b1120] dark:text-white group-hover:text-blue dark:group-hover:text-blue transition-colors duration-200" style="font-size:clamp(20px,2.4vw,28px)"><?php echo esc_html( $svc['label'] ); ?></span>
        <div class="srv-icon h-9 w-9 rounded-full border border-black/[0.1] dark:border-white/[0.1] grid place-items-center text-[#8099b8] dark:text-white/35 flex-shrink-0 transition-all duration-300 group-hover:bg-blue group-hover:border-blue group-hover:text-white" aria-hidden="true">
          <svg class="srv-plus w-4 h-4 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
        </div>
      </button>
      <div class="srv-grid" style="display:grid;grid-template-rows:0fr;transition:grid-template-rows 500ms cubic-bezier(0.16,1,0.3,1)" role="region">
        <div class="overflow-hidden min-h-0">
          <div class="pb-7 pl-[52px] text-[15px] text-[#445577] dark:text-white/55 leading-relaxed max-w-2xl">
            <?php echo esc_html( $svc['desc'] ); ?>
            <div class="flex flex-wrap gap-2 mt-4">
              <?php foreach ( $svc['tags'] as $tag ) : ?>
                <span class="tag"><?php echo esc_html( $tag ); ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>
