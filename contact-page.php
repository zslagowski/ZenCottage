<?php
// Template Name: Contact Page Template

get_header();
?>

<div class="cz-contact-content-section">
  <?php $query = new WP_Query( array( 'pagename' => 'contact' ) ); ?>

  <?php if ( $query->have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="cz-services-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div> <!--.rb-homepage-welcome-msg -->
        <div class="container cz-about-title text-center">
          <?php the_title(); ?>
        </div> <!--.container -->

        <div class="cz-contact-content container">
          <?php the_content(); ?>
        </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>
</div>

<?php get_footer();
