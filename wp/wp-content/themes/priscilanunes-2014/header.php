<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/ico/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

  	<link href='http://fonts.googleapis.com/css?family=Electrolize|Ubuntu:400,300,700,400italic' rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/reset.css"/>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/jquery-ui-1.10.3.custom.min.css"/>

		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.3.custom.js"></script>

		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bxslider/jquery.bxslider.min.js"></script><!-- Slideshow BX Slider-->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/bxslider/jquery.bxslider.css"/>

		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/utils.js"></script>

		<?php wp_head(); ?>
		<!--script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php //echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script-->

	</head>
	<body <?php body_class(); ?>>

	<!-- Facebook SDK -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=235037943234707&version=v2.0";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

		<section class="general">
			<section class="block_wpr header">
				<header class="block_cntt">
					<h1><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-priscillanunes.gif" title="Priscilla Nunes - Blog" /></a></h1>
					<nav class="menu_social">
						<a href="#" target="_blank" class="face"></a>
						<a href="#" target="_blank" class="inst"></a>
						<a href="#" target="_blank" class="twit"></a>
					</nav>
					<nav class="nav" role="navigation">
						<?php //html5blank_nav(); ?>
						<?php wp_nav_menu(); ?>
					</nav>						
				</header>
				<div class="header_bottom"></div>
			</section>


		<!-- wrapper -->
		<div class="wrapper">

			
