<?php /*template name:Contact*/ get_header(); ?>
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
							Where a walk along the beach begins just steps from your door...<br />&nbsp;<br />
							Where the scent of sea air greets you each morning with the sunrise just outside your window... <br /><br />
							Where majestic Vineyard Sound and famed Martha&#8217;s Vineyard are in view at just a turn of your head...<br /><br />
							It&#8217;s all here at INN on the SOUND at Falmouth, Cape Cod,Massachusetts, a very special Bed &amp; Breakfast.<br /><br /><br />
							The Inn sits 45 feet up on a bluff, with panoramic ocean and Martha&#8217;s Vineyard views. Just 70 miles south of Boston and one hour from Providence, the Inn is perfectly located for sightseeing throughout Cape Cod, Martha&#8217;s Vineyard, Nantucket, Newport and Plymouth<br /><br />
						</div>
					</div>
				
			</div><!-- end content-->
		</div><!-- end container-->
<?php else : ?>
<div id="frame">
    <div class="container">
        <div class="content">
        <div style="padding:10px;">
        <div style="width:100%;margin-top:0px; border:solid 0px red;color:Black;display:block;">
<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
        </div>
	</div>
    </div><!-- end content-->
</div><!-- end container-->
<?php endif; ?>


<?php get_footer(); ?>