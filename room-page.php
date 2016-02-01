<?php /* Template Name: Room Page Template */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div id="frame">
	    <div class="container">
	        <div class="content">
		        <div class="col-50">
			        <h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<?php the_field('price_table'); ?>
					<a href="<?php echo site_url(); ?>/rooms-and-rates">< RETURN to Rooms</a>
				</div>
				<div class="col-50">
					<div class="cycle-slideshow room-slideshow" 
					    data-cycle-fx=scrollHorz
					    data-cycle-timeout=0
					    data-cycle-pager="#adv-custom-pager"
					    data-cycle-pager-template="<a href='#'><img src='{{src}}' width=100 height=67></a>"
					    >
					    <img src="<?php the_field('image_1'); ?>" />
						<img src="<?php the_field('image_2'); ?>" />
						<img src="<?php the_field('image_3'); ?>" />
					</div>
					<!-- empty element for pager links -->
					<div id=adv-custom-pager class="center external"></div>
				
			</div><!-- end content-->
		</div><!-- end container-->
<?php endwhile; endif; ?>

<?php get_footer(); ?>