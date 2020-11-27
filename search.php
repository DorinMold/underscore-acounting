<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package TestWordpress
 */

get_header();
global $wp_query;
$_SESSION['search_count'] = $wp_query->found_posts;
$_SESSION['current_search'] = 1;
?>

	<section id="primary" class="container search-results content-area">
		<main id="main" class="site-main">
		<br/>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'themewordpress' ), '<span>"' . get_search_query() . '"</span>' );
					?>
				</h2>
			</header><!-- .page-header -->
				<br/>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				$_SESSION['current_search'] += 1;
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<!-- <div class="page-sidebar">
<div id="div-search"> You can search through the site here </div>
	
<?php 
//get_sidebar();
?> </div> -->
  <?php
get_footer();
