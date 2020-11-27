<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TestWordpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<header class="entry-header">
		<?php 
		if(!is_front_page()){
			 the_title( '<h1 class="entry-title">', '</h1>' ); 
		} else {
			echo "<h1 class=\"entry-title\"> With Lucy <br/><br/> accounting is a piece of cake</h1>";
		 ?>
		 <ul id="ul-text-slider">
			 <li class="text-slider">Accountant with 15 years of experience</li>
			 <li class="text-slider">Accountant with many clients</li>
			 <li class="text-slider">Accountant with many years of experience</li>
			 <li class="text-slider">Accountant with interests</li>
		 </ul>
		<?php } ?>
	<div class="overlay"> </div>
	</header><!-- .entry-header -->

	<?php themewordpress_post_thumbnail(); ?>

	<div class="container <?php if(is_page('Tax Return Preparation')) { echo 'tax-return-prepar'; } elseif(is_page('Tips & more')) { echo 'tips'; } ?>">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'themewordpress' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			/* edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
					/*	__( 'Edit <span class="screen-reader-text">%s</span>', 'themewordpress' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			); */
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php //the_ID(); ?> -->
