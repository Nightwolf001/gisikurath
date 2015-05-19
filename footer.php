<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package gisikurath
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'gisikurath' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'gisikurath' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'gisikurath' ), 'gisikurath', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
	<script>
		jQuery( document ).ready( function( $ ) {
    $( '#main-posts-container' ).masonry( { itemSelector: '.post_brick' } );
} );




	</script>
	  
<?php wp_footer(); ?>

</body>
</html>
