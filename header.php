<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <! -- Start Body --> comment
 *
 * @package All About Me
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bitter|Montserrat" rel="stylesheet">
  <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>    
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/imgs/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/get-a-quote">Contact</a>
      </li>
    </ul>
  </div>
</nav><! -- End Nav -->
</div><! -- End Nav Container -->
