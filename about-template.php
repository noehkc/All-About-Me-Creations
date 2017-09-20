<?php /* Template Name: About */ ?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container-fluid title">
	<h1 class="d-flex justify-content-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
</div>

<?php the_content(); ?>
  
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, there doesn\'t appear to be anything here.' ); ?></p>
<?php endif; ?>



<?php get_footer(); ?>