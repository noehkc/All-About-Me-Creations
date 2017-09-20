<?php 
/**
 * The main template file
 * It puts together the home page if no home.php file exists.
 *
 * @package All About Me
 */
 get_header(); ?>

<div class="container"><! -- Start Body -->

	<div class="row services">
		<div class="col-md-6">
			<h2 class="fancy">Awesome Service 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu velit quis lacus faucibus   </p>
		</div>
		<div class="col-md-6">
			<h2 class="fancy">Awesome Service 2</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu velit quis lacus faucibus   </p>
		</div>
		<div class="col-md-6">
			<h2 class="fancy">Awesome Service 3</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu velit quis lacus faucibus   </p>
		</div>
		<div class="col-md-6">
			<h2 class="fancy">Awesome Service 4</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu velit quis lacus faucibus   </p>
		</div>	
		<div class="col-md-6">
			<h2 class="fancy">Awesome Service 5</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu velit quis lacus faucibus   </p>
		</div>
		<div class="col-md-6">
			<h2 class="fancy">Awesome Service 6</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu velit quis lacus faucibus   </p>
		</div>	
	</div><! -- End Service Row -->
  <div class="view-more d-flex justify-content-center">
	<a href="#"> View More </a> <i class="fa fa-plus" aria-hidden="true"></i> 
  </div>
</div>

<div class="about">
	<div class="container">
		<h2 class="d-flex justify-content-center">About Us</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut placerat, nibh ac sollicitudin condimentum, diam ex gravida sem, efficitur luctus diam lorem eu lectus. Ut eleifend blandit porttitor. Sed porttitor est at nisi iaculis ultricies. Nunc eu sapien ex. Integer id mattis turpis, id efficitur elit. In nec odio nisl. Morbi scelerisque, lorem vitae efficitur tempor, dolor mauris pharetra risus, in maximus enim lectus et felis. Aliquam porta vehicula accumsan. Suspendisse a imperdiet tellus. Vestibulum elementum nibh nec nulla dapibus, tincidunt rutrum nisl luctus. Praesent eu elementum urna, eu venenatis felis. Nullam eget dictum erat, vitae dapibus ipsum. Phasellus posuere facilisis massa, vel euismod ligula dapibus sit amet. Duis mattis luctus nibh ut ultricies.</p>
	</div>
</div>

<div class="container portfolio">
<h2 class="fancy">Our Recent Work</h2>
  <div class="row no-gutters">
    <div class="col-md-4 portfolio-item"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/imgs/embroideredsoccertowel.jpg" />
      <div class="caption d-flex align-items-center justify-content-center"><i class="fa fa-search" aria-hidden="true"></i></div>
    </div>
    <div class="col-md-8">
		<div class="row no-gutters">
		  <div class="col-md-6 portfolio-item"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/imgs/texasironhorse.jpg" />
        <div class="caption d-flex align-items-center justify-content-center"><i class="fa fa-search" aria-hidden="true"></i></div>
      </div>
		  <div class="col-md-6 portfolio-item"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/imgs/sapdbacktheblueblanket.jpg" />
        <div class="caption d-flex align-items-center justify-content-center"><i class="fa fa-search" aria-hidden="true"></i></div>
      </div>
     <div class="col-md-6 portfolio-item"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/imgs/spursblanket.jpg" />
        <div class="caption d-flex align-items-center justify-content-center"><i class="fa fa-search" aria-hidden="true"></i></div>
      </div>
      <div class="col-md-6 portfolio-item"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/imgs/hopeandcourage.jpg" />
        <div class="caption d-flex align-items-center justify-content-center"><i class="fa fa-search" aria-hidden="true"></i></div>
      </div>
	  </div>
    </div>
  </div>
  <div class="view-more d-flex justify-content-center">
	<a href="#"> View More </a> <i class="fa fa-plus" aria-hidden="true"></i> 
  </div>
</div>

<?php get_footer(); ?>
