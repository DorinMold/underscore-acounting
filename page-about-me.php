<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TestWordpress
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main container">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<div class="row">
			<div class="col-xs-12 col-md-6 about-me"> 
				<?php the_title('<h1 class="title-about-me">','</h1>');
				//get_template_part( 'template-parts/content', 'page' );
				// // If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;
				endwhile; // End of the loop.
				?>
				<div> 
					<p>I am driven to create quality outcomes and shared value for my clients enabling them to reach their full 
					potential. </p>
					<p> I deliver a personalised approach to my privately owned, publicly listed and public sector clients. </p> 
					<p> I have the exprtise which can help my valued clients find solutions to reach their business goals.
					I believe I am different, because I am different. My hands-on approach to personalised service is 
					something I take pride in. </p>
					<p> You will discover once you contact me that I genuinely care. When your business 
					succeeds, so does mine, and that’s the making of a great long-term relationship. </p>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 imageLucy">
				<div class="testimonial mb-3">
					<div class="mb-2">
						<span>"Judy Bisanger"</span>
						<small>Corporation Pty Ltd</small>
					</div>
					<div> 
						<span>"I work with Lucy from 2012. It's been a pleasure</span>
						<div>I am loyal to whom I trust and I can fully say this about Lucy</div>
						<span>I only can say that I am glad I found Lucy to take care of my accounting affairs"</span>
					</div>
				</div>
				<img src="<?php echo get_template_directory_uri();?>/assets/Photo-Lucy.jpg" alt="Photo Lucy" />
				<div class="testimonial test-second mt-0">
					<div class="mb-2"><span>"Judy Bisanger"</span><small>Corporation Pty Ltd</small>
					</div>
					<div> 
						<span>"I work with Lucy from 2012. It's been a pleasure</span>
						<div>I am loyal to whom I trust and I can fully say this about Lucy</div>
						<span>I only can say that I am glad I found Lucy to take care of my accounting affairs"</span>
					</div>
				</div>
			</div> 
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<!-- <div class="page-sidebar">
	<div id="div-search"> You can search through the site here </div> 
<?php
//get_sidebar(); 
?> 
</div> -->
<?php get_footer(); ?>
