<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title(''); ?> <?php if ( !(is_404()) && (is_single()) or (is_page()) or (is_archive()) ) { ?> :: <?php } ?> <?php bloginfo('name'); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blueprint-wp.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/print.css" type="text/css" media="print">

	<!-- To use a custom stylesheet, uncomment the next line: -->
	<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/custom.css" type="text/css" media="screen, projection"> -->

	<!-- Javascripts  -->
	<!-- <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.1.3.1.pack.js"></script> -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/functions.js"></script>
	<!--[if lt IE 7]>
	<script defer type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/pngfix.js"></script>
	<![endif]-->

	<!-- Show the grid and baseline  -->
	<style type="text/css">
/*		.container { background: url(<?php bloginfo('stylesheet_directory'); ?>/css/lib/img/grid.png); }*/
	</style>

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>



</head>
<body>

<div class="container">

	<!-- Header -->
  <div class="column span-12 first" id="header">

					<!-- Search -->
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
					
					<!-- Site Name -->
          <a href="<?php echo get_option('home'); ?>/" class="logo"><h1><?php bloginfo('name'); ?></h1></a>
					<div class="description"><?php bloginfo('description'); ?></div>

  </div> <!-- #header -->

	
	<!-- Navigation -->
  <div class="column span-12 first large" id="nav">
			<div class="content">
				<ul>
					<li class="<?php if (((is_home()) && !(is_paged())) or (is_archive()) or (is_single()) or (is_paged()) or (is_search())) { ?>current_page_item<?php } else { ?>page_item<?php } ?> first"><a href="<?php echo get_settings('home'); ?>">Home</a></li>
					<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
				</ul>
			</div>
  </div>
	<!-- End Navigation -->

