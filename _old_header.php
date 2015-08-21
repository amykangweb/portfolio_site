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

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">

          <?php
            $args = array(
              'theme_location' => 'header-menu',
              'menu_class' => 'nav navbar-nav',
              'container' => 'false'
              );

            wp_nav_menu($args);

            ?>

        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="navbar-collapse collapse inverse" id="navbar-header">
      <div class="container-fluid">
        <div class="about">
          <h4>About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="social">
          <h4>Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#">Follow on Twitter</a></li>
            <li><a href="#">Like on Facebook</a></li>
            <li><a href="#">Email me</a></li>
          </ul>
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
