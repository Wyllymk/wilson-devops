<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wilson_Devops
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php
		if ( is_sticky() && is_home() && ! is_paged() ) {
			printf( '<span">%s</span>', esc_html_x( 'Featured', 'post', 'wilson-devops' ) );
		}
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif;
		?>
    </header><!-- .entry-header -->

    <?php wd_post_thumbnail(); ?>

    <div <?php wd_content_class( 'entry-content' ); ?>>
        <?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'wilson-devops' ),
				'after'  => '</div>',
			)
		);
		?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php wd_entry_footer(); ?>
    </footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->