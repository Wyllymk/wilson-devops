<?php
/**
 * Process section — // 04
 * @package wilson-devops
 */
$steps = [
    [ 'num' => '01', 'icon' => '🔍', 'title' => 'Diagnose',          'desc' => 'What problem are you actually solving? What does success look like in 6 months? Only then do I choose tools.' ],
    [ 'num' => '02', 'icon' => '🏛️', 'title' => 'Architect',         'desc' => 'System design before code. Stack, data model, integrations, and performance targets defined upfront.' ],
    [ 'num' => '03', 'icon' => '⚒️', 'title' => 'Build',             'desc' => 'Clean, modular, documented code. Regular check-ins. Real progress visible throughout. No surprises.' ],
    [ 'num' => '04', 'icon' => '📡', 'title' => 'Deploy + Support',  'desc' => 'Production-hardened delivery. I stay through launch, train where needed, and remain available after go-live.' ],
];
?>
<section id="process" class="border-y border-black/[0.06] dark:border-white/[0.06] bg-white/40 dark:bg-surface/50 py-28 md:py-36">
  <div class="max-w-[1280px] mx-auto px-6 lg:px-10">
    <p class="reveal font-mono text-[11px] uppercase tracking-[0.22em] text-violet dark:text-lilac/80 mb-4">// 04 — Process</p>
    <h2 class="reveal font-display text-4xl md:text-5xl font-bold tracking-tight text-[#0b1120] dark:text-white mb-4">
      <?php esc_html_e( 'How an engineer', 'wilson-devops' ); ?>
      <span class="bg-grad-text bg-clip-text text-transparent"><?php esc_html_e( 'thinks', 'wilson-devops' ); ?></span>
    </h2>
    <p class="reveal max-w-lg text-[17px] text-[#445577] dark:text-white/55 leading-relaxed mb-12">
      <?php esc_html_e( 'Tools are secondary. Understanding the problem comes first.', 'wilson-devops' ); ?>
    </p>
    <div class="reveal grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px bg-black/[0.06] dark:bg-white/[0.06] rounded-2xl overflow-hidden border border-black/[0.06] dark:border-white/[0.06]" role="list">
      <?php foreach ( $steps as $step ) : ?>
        <div class="group relative bg-white dark:bg-card p-8 hover:bg-[#f5f8ff] dark:hover:bg-surface transition-colors duration-200 overflow-hidden" role="listitem">
          <div class="absolute bottom-0 left-0 right-0 h-[2px] bg-transparent group-hover:bg-grad-main transition-all duration-300" aria-hidden="true"></div>
          <div class="font-display text-[64px] font-bold leading-none text-black/[0.05] dark:text-white/[0.05] mb-3 group-hover:text-violet/10 dark:group-hover:text-violet/[0.12] transition-colors" aria-hidden="true"><?php echo esc_html( $step['num'] ); ?></div>
          <div class="text-2xl mb-3" aria-hidden="true"><?php echo esc_html( $step['icon'] ); ?></div>
          <h3 class="font-display font-semibold text-[#0b1120] dark:text-white mb-2"><?php echo esc_html( $step['title'] ); ?></h3>
          <p class="text-xs text-[#8099b8] dark:text-white/40 leading-relaxed"><?php echo esc_html( $step['desc'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
