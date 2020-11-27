<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TestWordpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('searched-post')); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<!-- <?php
			//themewordpress_posted_on();
			//themewordpress_posted_by();
			?> -->
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php themewordpress_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
<?php if($_SESSION['search_count'] != $_SESSION['current_search']) { ?> <hr/> <?php } ?>
	</div><!-- .entry-summary -->
	<footer class="entry-footer">
		<?php themewordpress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
