<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package gisikurath
 */

get_header(); ?>
	
	<div id="primary" class="content-area">
	<?php get_template_part('site-navigation'); ?>
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
			<?php query_posts( 'cat=1' ); ?>
		</main><!-- #main -->

		<? get_template_part('site-options');?>
		
		<div class="clear"></div>
	</div><!-- #primary -->

<?php get_footer(); ?>
