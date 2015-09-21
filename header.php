<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
      <?php wp_title('|', true, 'right'); ?>
      <?php bloginfo('name'); ?>
    </title>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <div class="navbar-collapse collapse inverse" id="navbar-header">
      <div class="container-fluid">
        <div class="about">
          <h4>About Me</h4>
          <p class="text-muted">
            I like figuring out how things work.
            <br>
            I'm always working on something.
          </p>
        </div>
        <div class="social">
          <h4>Contact</h4>
          <ul class="list-unstyled">
            <li>
              <a href="https://www.linkedin.com/pub/amy-kang/90/267/415" target="_blank">
                LinkedIn
              </a>
            </li>
            <li>
              <a href="https://github.com/amykangweb" target="_blank">
                Github
              </a>
            </li>
            <li>
              <a href="mailto:selene6023@gmail.com">
                Email me
              </a>
            </li>
          </ul>
          <div class="blog">
            <h4>
              <a href="<?php echo get_permalink( get_option( 'page_for_posts' )); ?>">Blog</a>
            </h4>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header">
          &#9776;
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      </div>
    </div>
