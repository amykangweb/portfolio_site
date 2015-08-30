<!-- http://bryantwebdesign.com/code/previous-next-navigation-for-custom-post-types/ -->
<!-- Return image object for current piece -->
<?php $image = get_field('image'); ?>
<?php $image2 = get_field('second-image'); ?>
<?php $site = get_field('site'); ?>

<?php get_header(); ?>

    <div class="container text-center single-piece">
      <div class="row">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <?php if( is_singular('portfolio') ) { ?>
                <div class="post-nav">
                  <!-- Previous Post -->
                  <span class="previous">
                    <?php next_post_link( '%link', '&#10096;' ) ?>
                  </span>
                  <!-- Home -->
                  <a href="<?php echo bloginfo('url'); ?>", class="home">&#9783;</a>
                  <!-- Next Post -->
                  <span class="next">
                    <?php previous_post_link( '%link', '&#10097;' ) ?>
                  </span>
                </div>
              <?php } ?>

              <p class="single-piece-info">
                <?php echo get_post_meta(get_the_ID(), 'description', TRUE); ?>
                <?php if( !empty($site) ): ?>
                  <p>
                    <a href="<?php echo $site; ?>" target="_blank">
                      Visit Site
                    </a>
                  </p>
                <?php endif; ?>
              </p>

              <p><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></p>

              <!-- If Second Image exists, show image -->
              <?php if( !empty($image2) ): ?>
                  <p><img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" /></p>
              <?php endif; ?>

          <?php endwhile; else : ?>

            <div class="page-header">
              <h1>Oh No!</h1>
            </div>

            <p>No content is appearing for this page!</p>

          <?php endif; ?>

        </div>

      </div>

<?php get_footer(); ?>
