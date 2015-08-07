<?php get_header(); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1>Hello, world!</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">

    <?php
      $args = array(
        'post_type' => 'portfolio'
        );

      $the_query = new WP_Query($args);
    ?>

    <?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="col-sm-4 portfolio text-center">
      <p><?php the_post_thumbnail(); ?></p>
      <p class="thumbnails"><?php echo get_post_meta(get_the_ID(), 'description', TRUE); ?></p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>

    <?php endwhile; endif; ?>

  </div>
</div>

<?php get_footer(); ?>
