<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<!--meta name="Description" content="
Where a walk along the beach begins just steps from your door.Where the scent of sea air greets you each morning with the sunrise just outside your window..Where majestic Vineyard Sound and famed Martha&#8217;s Vineyard are in view at just a turn of your head...It&#8217;s all here at INN on the SOUND at Falmouth, Cape Cod, Massachusetts, a very special Bed & Breakfast.The Inn sits 45 feet up on a bluff, with panoramic ocean and Martha&#8217;s Vineyard views. Just 70 miles south of Boston and one hour from Providence, the Inn is perfectly located for sightseeing throughout Cape Cod, Martha&#8217;s Vineyard, Nantucket, Newport and Plymouth "/>
<meta name="keywords" content="Falmouth, Cape Cod, Inn, Bed and Breakfast, Bed Breakfast, Woods Hole, beaches, ocean view"/-->
<title><?php wp_title(''); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/library/images/favicon.ico">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/css/style.css" type="text/css" media="screen" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<?php if (is_front_page() || is_page('about-the-inn') || is_page_template('room-page.php')) : ?><script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/jquery.cycle2.min.js"></script><?php endif; ?>
<?php if (is_page('home')) : ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.slideshow').cycle({
            fx: 'uncover', speed: 900,  timeout: 6000, next: '#slideshow1', pause: 1 // choose your transition type, ex: fade, scrollUp, shuffle, etc...



        });
    });
</script>
<?php endif; ?>
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
    	<header>
			<div id="logo" onclick="location.href='<?php echo site_url(); ?>'">
				<img id="ctl00_Image1" src="<?php bloginfo('template_directory'); ?>/library/images/logo.jpg" />
			</div><!-- end logo -->
			<div id="headerbox">
				<ul id="contactus">
				<li id="phone"><a href="tel:5084579666">508-457-9666</a></li>
				<li>313 Grand Avenue</li>
				<li>Falmouth, MA 02540</li>
				</ul>
				<div id="reservationbtn"><a href="https://www.book-it-now.com/innonthesound" title="Check Availability" target="_blank">Check Availability</a></div>
			</div><!-- end headerbox -->
		</header><!-- end header -->
		<div id="underhead" class="collapse">
			<button id="mobile-tog">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<nav>
				<a href="<?php echo site_url(); ?>" id="ctl00_A9" title="Home">Home</a>
				<a href="<?php echo site_url(); ?>/about-the-inn" id="ctl00_A10" title="About The Inn">About The Inn</a>
				<a href="<?php echo site_url(); ?>/rooms-and-rates" id="ctl00_A11" title="Rates">Rooms and Rates</a>
				<a href="<?php echo site_url(); ?>/activities" id="ctl00_A12" title="Activities">Activities</a>
				<a href="<?php echo site_url(); ?>/policies" id="ctl00_A13" title="Policies">Policies</a>
				<a href="https://www.book-it-now.com/innonthesound" id="ctl00_A14" title="Availability" target="_blank">Availability</a>
				<a href="<?php echo site_url(); ?>/directions" id="ctl00_A15" title="Directions">Directions</a>
				<a href="<?php echo site_url(); ?>/contact/">Contact</a>
			</nav>
		</div><!--end underhead -->