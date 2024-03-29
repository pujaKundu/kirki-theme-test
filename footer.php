<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kirki
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kirki' ) ); ?>">
				<?php
				
				printf( esc_html__( 'Proudly powered by %s', 'kirki' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'kirki' ), 'kirki', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
		
	</footer> 
	
	<!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
