<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package online_mart
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container-fluid size-1 p-5 text-center"
        style="background-image: url(<?php echo header_image(); ?>); background-repeat: no-repeat; background-size: cover;">
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
    </div>
    <div class="container">
		<div class="row">
		<?php if ( is_active_sidebar( 'page-sidebar' ) ) : ?>
			<div class="col-md-9">
				<?php the_content();?>
				<div class="container">
					<?php wp_link_pages( array(
						'before' => '<div class="page-links"><span aria-hidden="true">&laquo;' . esc_html__( 'Pages:', 'online_mart' ),
						'after'  => '</span></div>',));
					?>
				</div>
			</div>
			<div class="col-md-3">
				<?php dynamic_sidebar( 'page-sidebar' ); ?>
				<hr>
				<span>
				<?php online_mart_post_thumbnail(); ?>
				</span>
			</div>
		<?php elseif (has_post_thumbnail()) :?>
			<div class="col-md-9">
				<?php the_content();?>
			</div>
			<div class="col-md-3">
				<?php online_mart_post_thumbnail(); ?>
			</div>
		<?php else : ?>
			<div class="col-md-12">
				<?php the_content();?>
			</div>
		<?php endif; ?>
    	
		</div><!-- .row -->
	</div><!-- .container -->
	

    <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer">
        <?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'online_mart' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
    </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->