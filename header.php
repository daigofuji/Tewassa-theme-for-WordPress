<!doctype html>  
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?> class="no-js iem7"> <![endif]-->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 8)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- meta tags should be handled by SEO plugin. I recommend (http://yoast.com/wordpress/seo/) -->
		
		<!-- mobile optimized -->
		<meta name="viewport" content="width=device-width">
		
		<!-- allow pinned sites -->
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
		 <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css' />
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		
		<!-- load all styles for IE -->
		<!--[if (lt IE 9) & (!IEMobile)]>
    		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css">	
		<![endif]-->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
			
			<header role="banner" class="header">
			
				<div id="inner-header" class="wrap clearfix">
				
					<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
					
					<!-- if you'd like to use the site description you can un-comment it below -->
					<p id="header-subtitle"><?php bloginfo('description'); ?></p>
					
					<div id="header-search"> 					
						<?php get_search_form(); ?>
					</div>
					
					
					<nav role="navigation" class="nav">
						<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
				
				</div> <!-- end #inner-header -->
			
			</header> <!-- end header -->
