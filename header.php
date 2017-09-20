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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
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
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav><! -- End Nav -->
</div><! -- End Nav Container -->
<div class="container-fluid hero">
	<h1 class="d-flex justify-content-center">Some Awesome Headline About All About Me Creations</h1>
	<h3 class="d-flex justify-content-center">Awesome slogan about All About Me Creations</h3>
</div><! -- End Hero -->
<div class="container-fluid divider">
	<div class="ribbon d-flex justify-content-center">Services</div>
</div>