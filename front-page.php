<?php get_header(); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<section class="jumbotron text-center">
  <div class="container">
    <div class="avatar">
      <?php echo get_avatar('selene6023@gmail.com', '', '', 'Amy Kang', ''); ?>
    </div>
    <h1 class="jumbotron-heading">Amy Kang</h1>
    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
    <p>
      <a href="#" class="btn btn-primary">Main call to action</a>
      <a href="#" class="btn btn-secondary">Secondary action</a>
    </p>
  </div>
</section>

<div class="full-width">
  <div class="container">

    <!-- Example row of columns -->
    <div class="row row-centered">

      <?php
        $args = array(
          'post_type' => 'portfolio'
          );

        $the_query = new WP_Query($args);
      ?>

      <?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <div class="col-md-4 portfolio-piece col-centered">
      <!-- Image -->
        <span class="piece-image">
          <a href="<?php echo get_post_meta(get_the_ID(), 'link', TRUE); ?>">
            <?php the_post_thumbnail(); ?>
          </a>
        </span>
        <!-- Portfolio Piece Information -->
        <div class="piece-info">
            <!-- Piece Framework/Program -->
          <span class="category">
            <?php echo get_post_meta(get_the_ID(), 'category', TRUE); ?>
          </span>
          <hr>
            <!-- Piece Description -->
          <span class="description">
            <?php echo get_post_meta(get_the_ID(), 'description', TRUE); ?>
          </span>
        </div>
      </div>

      <?php endwhile; endif; ?>

    </div>
  </div>

<?php get_footer(); ?>
