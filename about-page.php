<?php
// Template Name: About Page Template

get_header();
?>

<div class="cz-about-content-section">
  <?php $query = new WP_Query( array( 'pagename' => 'about' ) ); ?>

  <?php if ( $query->have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="cz-services-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div> <!--.rb-homepage-welcome-msg -->
        <div class="container cz-about-title text-center">
          <?php the_title(); ?>
        </div> <!--.container -->

        <div class="cz-about-content-title text-center">
          <h2>We are <img src="http://localhost/cottagezen/wp-content/uploads/2017/09/CottageZenCleaning_SecondLogo.png" />.</h2>
          <hr />
        </div>

        <div class="cz-about-content">
          <?php the_content(); ?>
        </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>
</div>

<div class="cz-about-featured-2 text-center">
  <?php kdmfi_the_featured_image( 'featured-image-2', 'full' ); ?>
</div>

<div class="cz-services-info">
  <?php $query = new WP_Query( array(
    'post_type' => 'cz_about_sections',
    'order_by' => 'date',
    'order' => 'ASC'
   ) ); ?>

  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="cz-services-section-row row">
      <div class="col-sm-3 cz-services-section-image text-center">
        <?php the_post_thumbnail(); ?>
      </div><!--col-sm-3-->
      <div class="col-sm-9">
        <div class="cz-services-section-title">
          <?php the_title(); ?>
        </div>
        <div class="cz-services-section-text">
          <?php the_content(); ?>
        </div>
      </div><!--col-sm-9-->
    </div><!--row-->
  <?php endwhile; endif; wp_reset_postdata(); ?>
</div>

<div class="cz-about-learn-more-button text-center">
  <a class="cz-learn-more cz-about-learn-more" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us</a>
</div>



<?php
get_footer();
