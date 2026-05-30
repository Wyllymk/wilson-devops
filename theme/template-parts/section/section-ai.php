<?php
/**
 * AI Services section — // 02b
 * @package wilson-devops
 */
?>
<section id="ai" class="border-y border-black/[0.06] dark:border-white/[0.06] bg-white/40 dark:bg-surface/50 py-28 md:py-36">
  <div class="max-w-[1280px] mx-auto px-6 lg:px-10">
    <div class="grid gap-16 lg:grid-cols-[480px_1fr] items-start">
      <div>
        <p class="reveal font-mono text-[11px] uppercase tracking-[0.22em] text-violet dark:text-lilac/80 mb-4">// 02b — AI Integration</p>
        <h2 class="reveal font-display text-4xl md:text-5xl font-bold tracking-tight text-[#0b1120] dark:text-white mb-6">
          <?php esc_html_e( 'AI that', 'wilson-devops' ); ?>
          <span class="bg-grad-text bg-clip-text text-transparent"><?php esc_html_e( 'ships', 'wilson-devops' ); ?>
          </span>
        </h2>
        <p class="reveal text-[17px] text-[#445577] dark:text-white/55 leading-relaxed mb-6 max-w-md">
          <?php esc_html_e( "Not AI experiments — production integrations that replace manual work or create measurable new capability inside your existing WordPress stack.", 'wilson-devops' ); ?>
        </p>
        <div class="reveal space-y-2 font-mono text-[13px]">
          <?php
          $points = [
              'Claude API, GPT-4, custom model integrations',
              'Production-shipped, not prototype demos',
              'Measured by results: time saved, revenue added',
              'WordPress-native — no external SaaS lock-in',
          ];
          foreach ( $points as $point ) :
              ?>
              <div class="flex items-start gap-2 text-[#445577] dark:text-white/45">
                <span class="text-violet mt-0.5 flex-shrink-0">→</span>
                <?php echo esc_html( $point ); ?>
              </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="reveal grid grid-cols-1 sm:grid-cols-2 gap-3">
        <?php
        $ai_services = [
            [
                'icon'  => '🧠',
                'title' => 'Intelligent Chatbots & Agents',
                'desc'  => 'Context-aware support bots, lead qualification agents, and FAQ automation — built on Claude or GPT, deployed inside WordPress',
                'color' => 'violet',
            ],
            [
                'icon'  => '🛒',
                'title' => 'AI-Enhanced WooCommerce',
                'desc'  => 'Smart recommendations, dynamic pricing, AI descriptions, checkout optimization, automated upsells',
                'color' => 'blue',
            ],
            [
                'icon'  => '⚡',
                'title' => 'Workflow Automation Agents',
                'desc'  => 'Lead triage, email routing, form extraction, and process automation inside your existing stack',
                'color' => 'lilac',
            ],
            [
                'icon'  => '🔍',
                'title' => 'Semantic Search & Discovery',
                'desc'  => 'Natural language product search, AI-powered filtering, intelligent site search for WooCommerce',
                'color' => 'violet',
            ],
            [
                'icon'  => '✍️',
                'title' => 'AI Content & SEO Pipelines',
                'desc'  => 'Automated descriptions, blog generation, meta optimization integrated into WordPress admin',
                'color' => 'blue',
            ],
            [
                'icon'  => '📊',
                'title' => 'AI Scoring & Evaluation',
                'desc'  => 'Custom AI evaluation logic — built for prop trading challenge scoring but adaptable to any assessment workflow',
                'color' => 'lilac',
            ],
        ];
        foreach ( $ai_services as $service ) :
            $border = match ( $service['color'] ) {
                'violet' => 'hover:border-violet/30',
                'blue'   => 'hover:border-blue/30',
                'lilac'  => 'hover:border-lilac/30',
                default  => '',
            };
            $icon_bg = match ( $service['color'] ) {
                'violet' => 'bg-violet/10',
                'blue'   => 'bg-blue/10',
                'lilac'  => 'bg-lilac/10',
                default  => 'bg-white/10',
            };
            ?>
            <div class="flex items-start gap-4 rounded-2xl border border-black/[0.06] dark:border-white/[0.06] bg-white dark:bg-white/[0.02] p-4 <?php echo esc_attr( $border ); ?> hover:translate-x-1 transition-all duration-200 cursor-default">
              <div class="h-9 w-9 flex-shrink-0 rounded-lg <?php echo esc_attr( $icon_bg ); ?> grid place-items-center text-base" aria-hidden="true"><?php echo esc_html( $service['icon'] ); ?></div>
              <div>
                <div class="text-sm font-semibold text-[#0b1120] dark:text-white mb-0.5"><?php echo esc_html( $service['title'] ); ?></div>
                <div class="text-xs text-[#8099b8] dark:text-white/40 leading-relaxed"><?php echo esc_html( $service['desc'] ); ?></div>
              </div>
            </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
