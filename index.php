<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if (is_home() || is_front_page() ) :?>
			<div id="frame">
				<div class="container">
					<div class="content">
						<div style="padding:10px;">
							<div style="width:100%;margin-top:0px; border:solid 0px red;color:Black;display:block;">
								<div style="text-align:center;">
								<?php echo do_shortcode('[soliloquy slug="12"] '); ?>
							<!--		<div style="text-align:center;  border:solid 0px #b5b5b5; padding:0px; width:400px;margin:0 auto;"> 
										<ul id="slideshow1" class="slideshow">
											<li><img alt="" src="<?php/* bloginfo('template_directory'); *?>/images/slides/6.jpg" /></li>
											<li><img alt="" src="<?php bloginfo('template_directory'); ?>/images/slides/2.jpg" /></li>
											<li><img alt="" src="<?php bloginfo('template_directory'); ?>/images/slides/3.jpg" /></li>
											<li><img alt="" src="<?php bloginfo('template_directory'); ?>/images/slides/4.jpg" /></li>
											<li><img alt="" src="<?php bloginfo('template_directory'); ?>/images/slides/5.jpg" /></li>
											<li><img alt="" src="<?php bloginfo('template_directory'); ?>/images/slides/7.jpg" /></li>
											<li><img alt="" src="<?php bloginfo('template_directory'); ?>/images/slides/9.jpg" /></li>
											<li><img alt="" src="<?php bloginfo('template_directory'); */?>/images/slides/8.jpg" /></li>
										</ul>
									</div> -->
								</div>
							
								<span id="ctl00_contentplh_Label1" class="pageheader">Inn On The Sound</span><br /><br />
								<?php the_content(); ?>
							</div>
						</div>
					
				</div><!-- end content-->
			</div><!-- end container-->
	<?php else : ?>
	<div id="frame">
	    <div class="container">
	        <div class="content">
		        <h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				
				<?php if (is_page('about-the-inn')) : ?>
					<div class="col-50">
						<?php the_field('left_column', 14); ?>
					</div>
					<div class="col-50 about-right-column">
						<?php the_field('right_column', 14); ?>
					</div>
				<?php endif; ?>
				
				<?php if (is_page('directions')) : ?>
					<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=inn+on+the+sound+falmouth+ma&amp;sll=37.0625,-95.677068&amp;sspn=49.891082,52.910156&amp;ie=UTF8&amp;cid=15509764964103133625&amp;ll=41.553618,-70.594969&amp;spn=0.022481,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=inn+on+the+sound+falmouth+ma&amp;sll=37.0625,-95.677068&amp;sspn=49.891082,52.910156&amp;ie=UTF8&amp;cid=15509764964103133625&amp;ll=41.553618,-70.594969&amp;spn=0.022481,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
				<?php endif; ?>
	        
				<?php if (is_page('contact')) : ?>
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
				<?php endif; ?>
				
	    	</div><!-- end content-->
		</div><!-- end container-->
	<?php endif; ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>