<?php get_header(); ?>

<section class="cz-blog-home-container">

      <div class="cz-services-bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(11); ?>')"></div>
      <div class="container cz-blog-page-title text-center">
        <?php single_post_title(); ?>
      </div> <!--.container -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="container">
        <div class="cz-home-posts-row row">
            <div class="col-md-4 cz-blog-page-post-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
            <div class="col-md-8">
              <div class="cz-blog-page-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <div class="cz-blog-page-post-meta"><p><?php echo get_the_date(); ?></p></div>
              <div class="cz-blog-page-post-excerpt"><p><?php the_excerpt(); ?></p></div>
              <div class="cz-blog-page-post-read-more text-right"><a class="cz-learn-more" href="<?php the_permalink(); ?>">Read More</a></div>
            </div>
        </div>
      </div>

    <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    <div class="container cz-pagination text-right">
      <?php the_posts_pagination(); ?>
    </div>

</section>

<?php get_footer(); ?>
