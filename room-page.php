<?php /* Template Name: Room Page Template */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div id="frame">
	    <div class="container">
	        <div class="content">
		        <h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div><!-- end content-->
		</div><!-- end container-->
<?php endwhile; endif; ?>

<?php get_footer(); ?>