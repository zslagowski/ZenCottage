<?php get_header(); ?>

<section id="gemm-front-header-image" class="">
    <?php $query = new WP_Query( array( 'pagename' => 'home' ) ); ?>

    <?php if ( $query->have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="cz-header-logo-bg">
            <div class="cz-header-logo text-center">
              <img src="http://localhost/cottagezen/wp-content/uploads/2017/09/CottageZenCleaning_MainLogo.png" />
            </div>
          </div>
          <div class="cz-header-logo-transparent"></div>
          <div class="gemm-homepage-welcome-msg-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div> <!--.rb-homepage-welcome-msg -->
          <div class="container cz-home-content">
            <?php the_content(); ?>
          </div> <!--.container -->
    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; wp_reset_postdata(); ?>
</section>
<section class="cz-home-see-cz text-center">
  <?php kdmfi_the_featured_image( 'featured-image-2', 'full' ); ?>
  <a class="cz-check-services cz-learn-more" href="<?php echo esc_url( home_url( '/services' ) ); ?>">Check Out Our Services</a>
</section>
<section class="cz-testimonials-section">
  <?php $query = new WP_Query( array(
    'post_type' => 'cz_testimonials',
    'posts_per_page' => '3'
  )); ?>

  <div class="container">
    <div class="cz-testimonials">

      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="cz-testimonial-text text-center">
          <p>
            "<?php the_field('testimonial_text'); ?>"
          </p>
        </div>
        <div class="cz-testimonial-author text-center">
          <p>
            - <?php the_field('testimonial_author'); ?>
          </p>
        </div>

      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>
