<?php
/**
 * Template part for displaying posts
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
            <?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
            <div class="entry-meta">
                <?php
					online_mart_posted_on();
					online_mart_posted_by();
					?>
            </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->
    </div>

    <div class="container">
        <div class="row">
            <?php if ( is_active_sidebar( 'single-sidebar' ) ) : ?>
            <div class="col-md-9">
                <?php the_content( sprintf( wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'online_mart' ),
					array(	'span' => array(
							'class' => array(),
						),)),
						wp_kses_post( get_the_title() )
					)
				); ?>
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
            <div class="col-md-12">
                <div class="card">
                    <span class="text-center"><?php online_mart_post_thumbnail(); ?></span>
                    <div class="card-body">
                        <?php the_content();?>
                        <p class="card-text">
                            <small class="text-muted">
                                Last updated  <?php the_modified_time('i')?> mins ago
                            </small></p>
                    </div>
                </div>
            </div>
            <?php else : ?>
            <?php endif; ?>
        </div>
    </div>

    <footer class="entry-footer">
        <div class="container">
            <?php online_mart_entry_footer(); ?>
        </div>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->