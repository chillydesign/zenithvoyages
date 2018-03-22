<?php get_header(); ?>
<?php $contact = '						
	<div class="row" style="max-width: 600px;">
	<p class="col-sm-12"><strong>Contacts & Réservations</strong></p>
	<p class="col-sm-12">Nos conseillers spécialisés sont à votre disposition pour vous aider à faire le bon choix.</p>
		<p class="col-sm-6">
			<strong>Zenith Voyages GLAND</strong><br>
			9, avenue du Mont-Blanc<br>
			CH – 1196 Gland<br>
			T +41 22 364 46 91<br>
			<a href="mailto:info@zenithvoyages.ch">info@zenithvoyages.ch</a>
		</p>
		<p class="col-sm-6">
			<strong>Zenith Voyages NYON</strong><br>
			6, place Bel-Air<br>
			CH – 1260 Nyon<br>
			T +41 22 362 98 80<br>
			<a href="mailto:nyon@zenithvoyages.ch">nyon@zenithvoyages.ch</a>
		</p>
	</div>
'; ?>
<?php $backtonews = '	
<div style="margin-top: 20px;">
	<p><a href="' . get_home_url() . '/news"><< Retour aux news</a></p>
</div>
'; ?>

	<div class="page_image" style="background-image:url('<?php echo get_the_post_thumbnail_url(48); ?>')"></div>


	

<div class="container" >
	<h1 style="padding-left:15px; margin: 35px 0 0;"><?php the_title(); ?></h1>
	<!-- <h1 style="padding-left:15px; margin: 35px 0 0;">News</h1> -->
	<div class="row">

		<!-- section -->
		<section id="main_col" class="col-sm-12">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="main_article" <?php post_class(); ?>>


			<?php $post_upload =  get_field('post_upload'); ?>
			<?php if( $post_upload ||  has_post_thumbnail()  ) : ?>

			<div class="row ">
					<div class="col-sm-9">
						<?php the_content(); ?>
						<?php if(get_field('contact')){echo $contact;} ?>
						<?php echo $backtonews; ?>

					</div>
					<div class="col-sm-3 file_gallery">

						<?php if( $post_upload  ) : ?>
							<?php $file_type =  explode('/', $post_upload['mime_type'])[1]; ?>
							<?php $file_icon =  ($file_type == 'pdf') ? 'fa-file-pdf-o' : 'fa-file-text-o'; ?>
							<a target="_blank" class="file_upload" href="<?php echo $post_upload['url']; ?>"><i class="fa <?php echo $file_icon; ?>"></i><span><?php echo  $file_type; ?></span></a>
						<?php endif; ?>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>

								<?php the_post_thumbnail(); // Fullsize image for the single post ?>

						<?php endif; ?>
						<!-- /post thumbnail -->

					</div>
				</div>




			<?php else :  ?>
				<?php the_content(); // Dynamic Content ?>
				<?php if(get_field('contact')){echo $contact;} ?>
				<?php echo $backtonews; ?>
			<?php endif; ?>




			<?php edit_post_link(); ?>

	


			<?php //  comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

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
