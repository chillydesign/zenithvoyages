<?php /* Template Name: Reservations Template */ get_header(); ?>

	<?php if ( has_post_thumbnail()) :  ?>
	<div class="page_image" style="background-image:url('<?php echo the_post_thumbnail_url(); ?>')"></div>
	<?php else: ?>
		<div id="featured_slide"><?php  get_template_part('slides'); ?></div>
	<?php endif; ?>


<div class="page_title">
	<h1 class="container"><?php the_title(); ?></h1>
</div>



<div class="container" >
	<div class="row">

		<!-- section -->
		<section id="main_col" class="col-sm-12">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>



				<!-- article -->
				<article id="main_article" <?php post_class(); ?>>


					
						<?php the_content(); ?>


					<ul class="iframe_links row">
						
						<li class="col-sm-6 col-lg-3 offre_iframe"><a class="iframe_link" href="#placetoslide" data-message="Cette application est actuellement en cours de modernisation, une mise en ligne est prévue tout prochainement."   data-url-old="http://www.kendros.com/fr/web2web.aspx?W2W=7531103">
							<h4>Rechercher une offre</h4>
							<p>Vous pouvez réserver votre vol en ligne 24h/24.</p>
						</a></li>


						<!-- <li class="col-sm-6 col-lg-3 vol_iframe"><a class="iframe_link" href="#" data-url="http://flight1.onlinetravel.ch/flightmoregif/fastbooking/tco/reservations.html"> -->
						<li class="col-sm-6 col-lg-3 vol_iframe"><a class="iframe_link" href="#placetoslide"  data-url="https://aqtion1.airquest.com/aq4/jsp/?j_username=zenithvoyages.ch&j_password=zenithvoyages.ch">
							<h4>Réserver un vol</h4>
							<p>Entrez vos dates, vos critères et toutes les offres spéciales disponibles vous seront proposées.</p>
						</a></li>

						<!-- <li class="col-sm-6 col-lg-3 hotel_iframe"><a class="iframe_link" href="#placetoslide"  data-url="http://www.hotelpronto.com/?affiliateid=30613&amp;language=fr"> -->
						<li class="col-sm-6 col-lg-3 hotel_iframe"><a class="iframe_link" href="#placetoslide"  data-url="http://www.hotelpronto.com/?affiliateid=30613">
							<h4>Rechercher un hôtel</h4>
							<p></p>
						</a></li>

						<li class="col-sm-6 col-lg-3 voiture_iframe"><a class="iframe_link" href="#placetoslide" data-url="https://partner.sunnycars.ch/ak/452820">

					<!-- http://switzerland.holidayautos.com/cgi-bin/liveweb.sh/QSearch.w?ctryref=SWZ&lang=SFR&aff=849sfr -->	
							<h4>Réserver une voiture</h4>
							<p>En quelques clics votre voiture de location sera confirmée.</p>
						</a></li>
					</ul>
					<div id="placetoslide"></div>

					<iframe id="page_iframe" style="height:700px" src=""></iframe>

					<p id="message_to_show"></p>


					<br class="clear">

					<?php edit_post_link(); ?>





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




<?php get_footer(); ?>