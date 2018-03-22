<?php /* Template Name: Reservation Privée Template */  ?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	
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
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>




		<!-- header -->
		<header class="header clear" id="header" style="position: relative; height: 150px; box-shadow: none; text-align: center; padding: 15px 0 0;">
<img style="width:200px; height:auto;" src="<?php echo get_template_directory_uri();?>/img/zenith-color.jpg" alt="" />
<p style="background: #008eaa; color: white; padding: 5px; margin: 5px 0 50px;">Membre du groupe Transcontinental</p>

			



		</header>
		<!-- /header -->


<div class="container" >
	<div class="row">

		<!-- section -->
		<section id="main_col" class="col-sm-12">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>



				<!-- article -->
				<article style="margin:auto; width: 100%; max-width:800px;" id="main_article" <?php post_class(); ?>>

				<iframe style="height: 550px;" src="https://aqtion1.airquest.com/aq4/jsp/c/amadeus2/Aqtionbooker.jsp;jsessionid=3F0E7F973611D6FCC7C62C31B35CEC20?j_username=patek&j_password=zenithvoyages.ch&&&termid=patek"></iframe>


					

				</article>
				<!-- /article -->

			<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</section>
	<!-- /section -->


	<?php //get_sidebar(); ?>
	<?php // get_template_part('sidebar_right'); ?>


</div> <!-- END OF ROW -->
</div> <!-- END OF CONTAINER -->



<style type="text/css">
	/*.container.copyright, .footer_inner .col-sm-6 * {display: none;}*/
	/*.footer_inner {margin-top: -20px;}*/
</style>
<?php get_footer(); ?>