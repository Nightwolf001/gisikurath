<?php

/**
* A Simple Category Template
*/
get_header(); ?>
	<div id="primary" class="content-area">
		<?php get_template_part('site-navigation'); ?>
		<main id="main" class="site-main cat-main" role="main">
		<section>
		<?php
		// Check if there are any posts to display
		if ( have_posts() ) : ?>
		<header class="archive-header">
		<?php
					single_cat_title( '', true );
					
				?>
		</header>
		</section>
		<section id="main-posts-container">
		<?php
		// The Loop
		while ( have_posts() ) : the_post();
		?>
		<div class="post_brick">
		<div id="post_cont">
		<?php
		// Must be inside a loop.
		if ( has_post_thumbnail() ) { ?>
			<figure class="post_img"><?php the_post_thumbnail(); ?></figure>
		<?php } else {
		echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/noimage.jpg" />';
		}
		?>
		<div id="post_contents">
		<h2 class="post_head"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"> <?php the_title();?></a></h2>
		<small class="post_details">
			<ul>
				<li><i class="fa fa-clock-o"></i><?php the_time('F jS, Y') ?></li> 
				<li><i class="fa fa-user"></i><?php the_author_posts_link() ?></li>
			</ul>
		</small>
		<div class="entry post_entry">
		<?php the_excerpt();?>
 		<p class="postmetadata">
 			<?php comments_popup_link( '0', '1', '%', 'comments-link', 'Comments closed');?>
 			<i class="fa fa-comments-o"> </i>
 		</p>

		</div><!--ENTRY-->
		</div>
		</div><!--POST_CONT-->
		</div><!--post_brick-->
		<?php endwhile; // End Loop
		else: ?>

			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
		</div>
	</section>

</main><!-- #main -->
</div><!-- #primary -->
<? get_template_part('site-options');?>
<?php get_footer(); ?>

