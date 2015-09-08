<?php get_header(); ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<section class="jumbotron text-center">
  <div class="container">
    <div class="avatar">
      <?php echo get_avatar('selene6023@gmail.com', '', '', 'Amy Kang', ''); ?>
    </div>
    <h1 class="jumbotron-heading">Amy Kang</h1>
    <p class="lead text-muted">
      What makes the desert beautiful is that somewhere it hides a well.<br>
      - Antoine de Saint-Exupery
    </p>
    <p class="icons">
      <a href="https://www.linkedin.com/pub/amy-kang/90/267/415" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/linked-lg.png" alt="LinkedIn">
      </a>
       <a href="https://github.com/amykangweb" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/git-lg.png" alt="Github">
      </a>
       <a href="mailto: selene6023@gmail.com" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mail-lg.png" alt="Email">
      </a>
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
      <!-- Portfolio Thumbnails -->
      <?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <div class="col-lg-4 portfolio-piece col-centered">
      <!-- Image -->
        <span class="piece-image">
          <a href="<?php the_permalink(); ?>">
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
