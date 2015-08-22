<!-- Return image object for current piece -->
<?php $image = get_field('image'); ?>

<?php get_header(); ?>

    <div class="container">
      <div class="row">

        <div class="col-md-12">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <p><?php echo get_post_meta(get_the_ID(), 'description', TRUE); ?></p>

              <p><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></p>

          <?php endwhile; else : ?>

            <div class="page-header">
              <h1>Oh No!</h1>
            </div>

            <p>No content is appearing for this page!</p>

          <?php endif; ?>

        </div>

      </div>

<?php get_footer(); ?>
