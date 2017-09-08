<?php get_header(); ?>

<section class="gemm-home-container">
  <div class="container">

    <h1 class="text-center gemm-blog-page-header">Recent Posts</h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="gemm-home-posts row">
          <div class="col-md-5"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
          <div class="col-md-7">
            <div class="gemm-front-posts-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            <div class="gemm-front-posts-meta"><?php echo get_the_date(); ?> | <?php the_category( ' | '); ?></div>
            <div class="gemm-front-posts-excerpt"><?php the_excerpt(); ?></div>
          </div>
      </div>

    <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

  </div> <!-- container -->
</section>

<?php get_footer(); ?>
