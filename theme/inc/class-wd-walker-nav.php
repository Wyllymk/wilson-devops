<?php
/**
 * Walker_Nav_Menu subclass for Wilson DevOps primary nav.
 * Outputs clean semantic HTML with Tailwind classes.
 *
 * @package wilson-devops
 */

if ( ! defined( 'ABSPATH' ) ) exit;

class WD_Walker_Nav extends Walker_Nav_Menu {

    /** @var int Start level — wraps the <ul> */
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="absolute top-full left-0 mt-2 min-w-[180px] rounded-xl border border-black/[0.08] dark:border-white/[0.08] bg-white/95 dark:bg-card/95 backdrop-blur py-1 shadow-glow hidden group-hover:block">' . "\n";
    }

    /** @var int End level */
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= "</ul>\n";
    }

    /** @var int Start element — each nav item */
    public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        $item    = $data_object;
        $classes = empty( $item->classes ) ? [] : (array) $item->classes;
        $classes[] = 'nav-item';

        if ( $depth === 0 ) {
            $li_class = 'relative group';
            $a_class  = 'relative text-sm text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white transition-colors duration-200 group';
            $span     = '<span class="absolute -bottom-0.5 left-0 h-px w-0 bg-blue group-hover:w-full transition-all duration-300"></span>';
        } else {
            $li_class = '';
            $a_class  = 'block px-4 py-2 text-sm text-[#445577] dark:text-white/55 hover:text-[#0b1120] dark:hover:text-white hover:bg-black/[0.03] dark:hover:bg-white/[0.04] transition-colors';
            $span     = '';
        }

        $atts           = [];
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url : '#';
        $atts['class']  = $a_class;

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( '' !== $value ) {
                $attributes .= ' ' . $attr . '="' . esc_attr( $value ) . '"';
            }
        }

        $title  = apply_filters( 'the_title', $item->title, $item->ID );
        $output .= "<li class=\"{$li_class}\">";
        $output .= "<a{$attributes}>{$title}{$span}</a>";
    }

    public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }
}
