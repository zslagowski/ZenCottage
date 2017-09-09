<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GEMM_Framework
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="gemm-footer-icons col-md-4 text-right">
						<p class="gemm-footer-icons-contact">
							Contact us today!<br />
							Hello@zencottage.com<br />
							801.000.000
						</p>

						<?php

						$query = new WP_Query( array( 'post_type' => 'gemm_footer_social' ) );

						if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

						?>

						<a href="<?php the_field('gemm-sm-footer-link'); ?>" target="__blank"><i class="fa <?php the_field('gemm-footer-icon-class'); ?>" aria-hidden="true"></i></a>

						<?php endwhile; endif; wp_reset_postdata; ?>
					</div>
					<div class="gemm-footer-logo col-md-4 text-center">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://localhost/cottagezen/wp-content/uploads/2017/09/CottageZenCleaning_MainLogo.png" /></a>
					</div>
					<div class="gemm-copyright col-md-4 text-left">
						<p>
							Find us at:<br />
							123 Main Street<br />
							Salt Lake City, UTAH
						</p>
						<a class="gemm-copyright-quote" href="<?php echo esc_url( home_url( '/quote' ) ); ?>">Get a quote</a>
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
