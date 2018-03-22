<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicons/manifest.json">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicons/safari-pinned-tab.svg" color="#008eaa">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon.ico">
	<meta name="apple-mobile-web-app-title" content="Zenith Voyages">
	<meta name="application-name" content="Zenith Voyages">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic,700italic|Roboto:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/justifiedGallery.min.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php $smp = social_meta_properties(); ?>
    <meta name="description" content="<?php echo $smp->description; ?>">
    <!-- Open Graph -->
    <meta property="og:url" content="<?php echo $smp->url; ?>">
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Zenith Voyages" >
    <meta property="og:title" content="<?php echo $smp->title; ?>">
    <meta property="og:description" content="<?php echo $smp->description; ?>">
    <meta property="og:img" content="<?php echo $smp->image; ?>">
    <meta property="og:image" content="<?php echo $smp->image; ?>">
    <meta property="fb:app_id" content="1473712689341173">
    
    <!-- <meta property="fb:admins" content="" /> -->

    <!-- TWITTER -->
    <meta name="twitter:card" value="<?php echo $smp->description; ?>">
    <meta name="twitter:title" content="<?php echo $smp->title; ?>">
    <meta name="twitter:description" content="<?php echo $smp->description; ?>">
    <meta name="twitter:image" content="<?php echo $smp->image; ?>">
    <!-- GOOGLE -->
    <meta itemprop="name" content="<?php echo $smp->title; ?>">
    <meta itemprop="description" content="<?php echo $smp->description; ?>">
    <meta itemprop="image" content="<?php echo $smp->image; ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="fb-root"></div> <script>(function(d, s, id) {   var js, fjs = d.getElementsByTagName(s)[0];   if (d.getElementById(id)) return;   js = d.createElement(s); js.id = id;   js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=1473712689341173";   fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>


		<!-- header -->
		<header class="header clear" id="header">
			<div class="container-fluid" >
			<div class="row">
				<div class="logobit"><a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/zenith.svg" alt="" /></a></div>
				<?php //  bloginfo('name'); ?>
				<div class="navbit">  
					<nav id="nav" class="nav" role="navigation">
						<a href="#" id="show_nav_button"><span style="position: relative; top: -1px;">&#9776;</span> Menu</a>
						<?php wp_nav_menu(array('theme_location'  => 'header-menu')); ?>
					</nav>
				</div>

			</div>
			</div>
			<?php do_action('icl_language_selector'); ?>

			



		</header>
		<!-- /header -->

