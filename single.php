<?php get_header(); ?>

<div class="container text-center single-piece">
  <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="single-piece-info blog-page">
        <h2><?php the_title(); ?></h2>

          <p class="datetime">
            <?php the_time('F jS, Y'); ?>
          </p>

        <div class="blog-content"><?php the_content(); ?></div>

        <span class="previous-post"><?php previous_post_link(); ?></span>
        <span class="next-post"><?php next_post_link(); ?></span>

      </div>

      <?php endwhile; else : ?>

      <h1>Oh No!</h1>

      <p>No content is appearing for this page!</p>

    <?php endif; ?>

  </div>
</div>

    <?php get_footer(); ?>
