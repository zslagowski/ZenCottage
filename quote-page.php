<?php
// Template Name: Quote Page

get_header();
?>

<div class="container">
  <div class="cz-quote-content">
    <?php $args = array(
      'page_id' => 17
    );

    $query = new WP_Query( $args );

    if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

    the_content();

    endwhile; endif; wp_reset_postdata();
    ?>
  </div>
</div>




<?php
get_footer();
