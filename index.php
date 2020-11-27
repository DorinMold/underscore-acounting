<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TestWordpress
 */

get_header();
?>

	<div id="primary" class="<?php if (is_home()) echo 'container-services '; ?>content-area container">
		<main id="main" class="site-main">

		<?php
		if (is_home()) {
		?>
		<div>
			<div id="choice-text"> You can choose from my <span style="color:purple; font-size: 27px"> range of services </span> by using the dropdown attached or browsing through the page below </div>
			<select id="services-select">
				<optgroup label="Select from below"> 
					<option value="<?php the_permalink(77); ?>"> Cloud Accounting </option>
					<option value="<?php the_permalink(55);  ?>"> Start-ups </option>
					<option value="<?php the_permalink(31);  ?>"> Tax Return Preparation </option>
					<option value="<?php the_permalink(93);  ?>"> BAS Preparation </option>
				</optgroup>
			</select>
		</div>
		<?php	
		}
		?>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<!-- this is READ ONLY for people with disabilities -->
					<!-- single_post_title() - functioneaza cand nu esti in loop si vrei titlul PAGINII pe care esti nu 
					tilul/itlurile posturilor cafre intra in loop mai jos - in cazul paginii cu bloguri - evident blogurile -->
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			$i;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */

			 ?>

				

				<?php

				if (is_integer($i/2) == true) { ?> <div class="row"> <?php }
				
				get_template_part( 'template-parts/content', get_post_type() );

				if (is_integer($i/2) != true) { ?> </div> <?php }

				$i++;
			
			endwhile;

				the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->


<!-- <div class="page-sidebar">
<div id="div-search"> You can search through the site here </div>
<?php
get_sidebar();
?> </div> -->
<?php
get_footer();
?>
