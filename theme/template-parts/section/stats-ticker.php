<?php
/**
 * Stats ticker — scrolling marquee of key achievements
 * @package wilson-devops
 */
?>
<div class="mt-16 -mx-6 lg:-mx-10 overflow-hidden border-y border-black/[0.06] dark:border-white/[0.06]" aria-hidden="true">
  <div class="flex animate-marquee whitespace-nowrap py-4">
    <?php
    $items = [
        [ 'num' => '10+',  'label' => 'Shipped Projects' ],
        [ 'num' => '500+', 'label' => 'Users in First Month' ],
        [ 'num' => '80%',  'label' => 'Review Time Saved via AI' ],
        [ 'num' => '40%',  'label' => 'Cart Abandonment Reduced' ],
        [ 'num' => '30s',  'label' => 'Visitor Processing (was 5 min)' ],
        [ 'num' => '100K', 'label' => 'Max Funded Challenge Built' ],
        [ 'num' => '6+',   'label' => 'Years Engineering WordPress' ],
        [ 'num' => 'A+',   'label' => 'Core Web Vitals Target' ],
    ];
    // Double for seamless loop
    $all = array_merge( $items, $items );
    foreach ( $all as $item ) :
        ?>
        <span class="inline-flex items-center gap-3 px-8 font-mono text-[13px]">
          <span class="text-[#0b1120] dark:text-white font-bold text-base"><?php echo esc_html( $item['num'] ); ?></span>
          <span class="text-[#8099b8] dark:text-white/35"><?php echo esc_html( $item['label'] ); ?></span>
          <span class="text-violet/30 dark:text-violet/40 mx-2">·</span>
        </span>
    <?php endforeach; ?>
  </div>
</div>
