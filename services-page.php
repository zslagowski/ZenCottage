<?php
// Template Name: Services Page Template

get_header();
?>

<div class="cz-services-content">
  <?php $query = new WP_Query( array( 'pagename' => 'services' ) ); ?>

  <?php if ( $query->have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="cz-services-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div> <!--.rb-homepage-welcome-msg -->
        <div class="container cz-services-title text-center">
          <?php the_title(); ?>
        </div> <!--.container -->
  <?php endwhile; endif; wp_reset_postdata(); ?>
</div>

<div class="cz-services-info">
  <?php $query = new WP_Query( array(
    'post_type' => 'cz_services_sections',
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





<?php
get_footer();
