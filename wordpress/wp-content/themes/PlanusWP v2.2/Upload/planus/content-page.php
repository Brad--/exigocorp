<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Planus
 * @since Planus 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'static-page' ); ?>>
	<?php
		// Page thumbnail and title.
		the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
	?>

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->