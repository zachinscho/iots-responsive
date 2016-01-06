<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<!--meta name="Description" content="
Where a walk along the beach begins just steps from your door.Where the scent of sea air greets you each morning with the sunrise just outside your window..Where majestic Vineyard Sound and famed Martha&#8217;s Vineyard are in view at just a turn of your head...It&#8217;s all here at INN on the SOUND at Falmouth, Cape Cod, Massachusetts, a very special Bed & Breakfast.The Inn sits 45 feet up on a bluff, with panoramic ocean and Martha&#8217;s Vineyard views. Just 70 miles south of Boston and one hour from Providence, the Inn is perfectly located for sightseeing throughout Cape Cod, Martha&#8217;s Vineyard, Nantucket, Newport and Plymouth "/>
<meta name="keywords" content="Falmouth, Cape Cod, Inn, Bed and Breakfast, Bed Breakfast, Woods Hole, beaches, ocean view"/-->
<title><?php wp_title(''); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/StyleSheet.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.all.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.slideshow').cycle({
            fx: 'uncover', speed: 900,  timeout: 6000, next: '#slideshow1', pause: 1 // choose your transition type, ex: fade, scrollUp, shuffle, etc...



        });
    });
</script>
<style type="text/css">
    .style4
    {
        font-size: small;
    }
    
        .slideshow {

	margin: 0;
	padding: 0;
	list-style: none;
	overflow: hidden;
	cursor: pointer;
	text-align:center;
	}
.slideshow li {
	margin: 0;
	padding: 0;
	list-style: none;
}
</style>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
	
<body <?php body_class(); ?>>
		
	<!-- <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1> -->
	
	<div id="wrapper">
    	<div id="header">
			<div id="logo" onclick="location.href='<?php echo site_url(); ?>'">
				<img id="ctl00_Image1" src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" style="height:96px;width:447px;border-width:0px;" />
			</div><!-- end logo -->
			<div id="headerbox">
				<ul id="contactus">
				<li id="phone"><a href="tel:5084579666">508-457-9666</a></li>
				<li>313 Grand Avenue</li>
				<li>Falmouth, MA 02540</li>
				</ul>
				<div id="reservationbtn"><a href="https://www.book-it-now.com/innonthesound" title="Check Availability" target="_blank">Check Availability</a></div>
			</div><!-- end headerbox -->
		</div><!-- end header -->
		<div id="underhead">
			<div id="sidebar" >
				<ul>
					<li><a href="<?php echo site_url(); ?>" id="ctl00_A9" title="Home">Home</a></li>
					<li><a href="<?php echo site_url(); ?>/about-the-inn" id="ctl00_A10" title="About The Inn">About The Inn</a></li>
					<li><a href="<?php echo site_url(); ?>/rooms-and-rates" id="ctl00_A11" title="Rates">Rooms and Rates</a></li>
					<li><a href="<?php echo site_url(); ?>/activities" id="ctl00_A12" title="Activities">Activities</a></li>
					<li><a href="<?php echo site_url(); ?>/policies" id="ctl00_A13" title="Policies">Policies</a></li>
					<li>
						<a href="https://www.book-it-now.com/innonthesound" id="ctl00_A14" title="Availability" target="_blank">Availability</a>
					</li>
					<li><a href="<?php echo site_url(); ?>/directions" id="ctl00_A15" title="Directions">Directions</a></li>
					<li><a href="http://innonthesound.com/contact/">Contact</a></li>
				</ul>
			</div>
			<!-- end sidebar -->
		</div><!--end underhead -->