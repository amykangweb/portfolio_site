<?php get_header(); ?>

<div class="container text-center single-piece">
  <div class="row">

  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div class="single-piece-info blog-page">

      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

      <p><?php the_excerpt(); ?></p>

    </div>

      <?php endwhile; else :?>

    <h1>Oh No!</h1>

    <p>No content is appearing for this page!</p>

    <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>
