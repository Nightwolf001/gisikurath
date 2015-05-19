<?php
/**
 * @package gisikurath
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="single-entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php gisikurath_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="single-entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gisikurath' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php gisikurath_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
