<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TestWordpress
 */

?>
<?php 
	if(is_singular()) {
		$col_sm = 'col-sm-12';
		$margin_t = 'mt-5';
	} else {
		$col_sm = 'col-sm-6';
		$margin_t = 'mt-4';
	}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(array($col_sm, 'px-4')); ?>>
	<header class="entry-header <?php echo $margin_t;  ?> text-center">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title mb-0">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title mb-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?> <hr/> <?php
		endif;
        echo nl2br("\n");
		if ( 'post' === get_post_type() ) :
			?>
			<!-- <div class="entry-meta text-center">  -->
				<!-- <small>
					<?php
					// themewordpress_posted_on();
					// themewordpress_posted_by();
					?>
				</small> -->
			<!-- </div>.entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php themewordpress_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		$content = get_the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'themewordpress' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
		$nr_words = str_word_count($content);
		if (!is_singular()):
		echo wp_trim_words($content, 60);
		?>
		<?php if ($nr_words > 59): ?>
			<a href="<?php the_permalink(get_the_ID()); ?>"> Read More >> </a>
		<?php endif ?>
		<?php
		else:
			echo $content;
		endif;
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'themewordpress' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php themewordpress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
