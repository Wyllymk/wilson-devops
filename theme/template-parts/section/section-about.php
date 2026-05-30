<?php
/**
 * About section — // 02
 * @package wilson-devops
 */
?>
<section id="about" class="max-w-[1280px] mx-auto px-6 lg:px-10 py-28 md:py-36" itemscope itemtype="https://schema.org/Person">
  <p class="reveal font-mono text-[11px] uppercase tracking-[0.22em] text-violet dark:text-lilac/80 mb-4">// 02 — About</p>
  <div class="grid gap-16 lg:grid-cols-[1fr_480px] items-start">
    <div>
      <h2 class="reveal font-display text-4xl md:text-5xl font-bold tracking-tight text-[#0b1120] dark:text-white mb-6">
        <?php esc_html_e( 'An engineer who', 'wilson-devops' ); ?>
        <span class="bg-grad-text bg-clip-text text-transparent"><?php esc_html_e( 'thinks in systems', 'wilson-devops' ); ?></span>
      </h2>
      <div class="reveal space-y-4 text-[17px] text-[#445577] dark:text-white/55 leading-relaxed max-w-xl">
        <p itemprop="description">
          <?php esc_html_e( "I'm Wilson Mbuthia — a full stack WordPress engineer and AI specialist based in Nairobi, Kenya. I build digital systems that solve real business problems, not just websites that look good.", 'wilson-devops' ); ?>
        </p>
        <p>
          <?php esc_html_e( "My clients include prop trading firms, African web agencies, golf clubs, schools, and automotive businesses — each needing a different solution. I've shipped checkout systems that moved $100K challenge purchases, AI scoring engines that reduced review time by 80%, and platforms that opened new markets.", 'wilson-devops' ); ?>
        </p>
        <p>
          <?php esc_html_e( "I don't believe in one-size-fits-all stacks. I diagnose the problem, choose the right tools, and engineer for performance and scale from day one.", 'wilson-devops' ); ?>
        </p>
      </div>
      <div class="reveal mt-8 flex flex-wrap gap-2">
        <?php
        $skills = [
            'PHP / OOP', 'WordPress Core', 'WooCommerce', 'React', 'TypeScript',
            'Node.js', 'MySQL', 'REST API', 'ACF Pro', 'AWS', 'Claude API', 'GPT',
        ];
        foreach ( $skills as $skill ) :
            ?>
            <span class="tag"><?php echo esc_html( $skill ); ?></span>
        <?php endforeach; ?>
      </div>
    </div>

    <aside class="reveal space-y-3">
      <?php
      $cards = [
          [
              'icon'  => '🏗️',
              'title' => 'Custom WordPress Engineer',
              'desc'  => 'From-scratch custom themes and plugins using OOP PHP and WordPress coding standards. Zero page-builder dependencies when clean code matters.',
              'color' => 'violet',
          ],
          [
              'icon'  => '⚡',
              'title' => 'Performance-First Mindset',
              'desc'  => 'Core Web Vitals, LCP optimization, and database profiling are defaults — not afterthoughts. Every site is built to score.',
              'color' => 'blue',
          ],
          [
              'icon'  => '🤖',
              'title' => 'AI Integration Specialist',
              'desc'  => 'Claude, GPT, and custom model integrations that replace manual work and create new capability — shipped and in production.',
              'color' => 'lilac',
          ],
          [
              'icon'  => '🌍',
              'title' => 'Built for Global Clients',
              'desc'  => 'Based in Nairobi; delivered for clients in Kenya, across Africa, the UK, and globally. Async-friendly, reliable, and available.',
              'color' => 'emerald',
          ],
      ];

      foreach ( $cards as $card ) :
          $border_class = match ( $card['color'] ) {
              'violet'  => 'hover:border-violet/30',
              'blue'    => 'hover:border-blue/30',
              'lilac'   => 'hover:border-lilac/30',
              'emerald' => 'hover:border-emerald-500/30',
              default   => 'hover:border-white/15',
          };
          $icon_bg = match ( $card['color'] ) {
              'violet'  => 'bg-violet/10',
              'blue'    => 'bg-blue/10',
              'lilac'   => 'bg-lilac/10',
              'emerald' => 'bg-emerald-500/10',
              default   => 'bg-white/10',
          };
          ?>
          <div class="flex items-start gap-4 rounded-2xl border border-black/[0.06] dark:border-white/[0.06] bg-white dark:bg-white/[0.02] p-4 <?php echo esc_attr( $border_class ); ?> hover:translate-x-1 transition-all duration-200">
            <div class="h-9 w-9 flex-shrink-0 rounded-lg <?php echo esc_attr( $icon_bg ); ?> grid place-items-center text-base" aria-hidden="true"><?php echo esc_html( $card['icon'] ); ?></div>
            <div>
              <div class="text-sm font-semibold text-[#0b1120] dark:text-white mb-0.5"><?php echo esc_html( $card['title'] ); ?></div>
              <div class="text-xs text-[#8099b8] dark:text-white/40 leading-relaxed"><?php echo esc_html( $card['desc'] ); ?></div>
            </div>
          </div>
      <?php endforeach; ?>
    </aside>
  </div>
</section>
