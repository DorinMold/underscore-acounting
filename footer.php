<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TestWordpress
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer <?php if(is_page('Contact me')) echo 'footer-contact'; ?>">
		<div class="site-info">
			<div class="row">
				<div class="col-sm-4">
					<div class="footer-heading"> Useful Links </div>
					<ul>
						<li><a href="https://www.ato.gov.au/">Australian Taxation Office</a></li>
						<li><a href="https://asic.gov.au/">ASIC</a></li>
						<li><a href="https://www.superguide.com.au/how-super-works/superannuation-changes-rules-apply-current-year">Super guide</a></li>
					</ul>
				</div>
				<div class="col-sm-4">
					<div class="footer-heading"> Services </div>
					<ul>
						<li><a href="<?php the_permalink(77); ?>"> Cloud Accounting </a></li>
						<li><a href="<?php the_permalink(55);  ?>"> Start-ups </a></option>
						<li><a href="<?php the_permalink(31);  ?>"> Tax Return Preparation </a></option>
						<li><a href="<?php the_permalink(93);  ?>"> BAS Preparation </a></option>
					</ul>
				</div>
				<div class="col-sm-4">
					<div class="footer-heading"> Software packages </div>
					<ul>
						<li><a href="https://www.xero.com/">Xero</a></li>
						<li><a href="https://www.myob.com/au/accounting-software">Myob</a></li>
						<li><a href="https://quickbooks.intuit.com/au/">Quickbooks</a></li>
					</ul>
				</div>
			</div>
		<!--	<a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'themewordpress' ) ); ?>"> -->
				<div class="copyright">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Copyright  &copy; by BMC Accounting', 'themewordpress' ) );
				?>
				</div>
		<!--	</a>  
			<span class="sep"> | </span> -->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'themewordpress' ), 'themewordpress', '<a href="http://underscores.me/">Dorin</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php // wp_footer(); ?>
<p>  </p>
</body>
</html>
