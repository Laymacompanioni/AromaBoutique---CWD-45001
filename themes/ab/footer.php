<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aroma_Boutique
 */

?>


<footer id="colophon" class="site-footer">

<?php
$recipe_args = array(
	'post_type'              => array('ab_recipe'), 
    'post_status'            => ('publish'), 
    'posts_per_page'         => 3, 
);
$recipe_query = new WP_Query ( $recipe_args  );
?>

<?php
if ($recipe_query ->have_posts() ) {
while( $recipe_query -> have_posts() ) {
	$recipe_query ->the_posts();
	}
	wp_reset_postdata();
} 
?> 
<div class="posts-area">
	<?php
	the_featured_Image();
	the_title('<h3>', '</h3>');
	the_excerpt();
	the_post_link();
	?>
</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ab' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ab' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ab' ), 'ab', '<a href="https://www.laymacompanioni.ca">Layma Companioni</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
