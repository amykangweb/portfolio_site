<?php get_header(); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1>Amy Kang</h1>
    <p>Social Network Links</p>
  </div>
</div>

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
