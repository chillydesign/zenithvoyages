<?php get_header(); ?>


	<?php if ( has_post_thumbnail()) :  ?>
	<div class="page_image" style="background-image:url('<?php echo the_post_thumbnail_url(); ?>'); overflow: hidden;">

		<!-- Start of snow -->

			<?php if( is_front_page() AND false ){?>
			<canvas id="canvas" style=" position:fixed;left:0; top:0; z-index:2;opacity: 0.8; pointer-events: none;"></canvas>
			  <script  src="<?php echo get_template_directory_uri(); ?>/js/snow.js"></script>
			<div class="message">
				<h2>Toute l’équipe de Zenith Voyages vous souhaite de joyeuses fêtes!</h2>
			</div>
		<?php } ?>

			<!-- End of snow -->

	</div>
	<?php else: ?>
		<div class="page_image" style="background-color:#ddd"></div>
	<?php endif; ?>

<div class="container" >

		<!-- section -->
		<section >

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>



				<!-- article -->
				<article <?php post_class(); ?>>



				
				<h1><?php the_title(); ?></h1>
				<?php include('section-loop.php'); ?>


					<?php $page_gallery =  get_field('page_gallery'); ?>
					<?php $page_icons =  get_field('page_icons'); ?>
					<?php $file_upload =  get_field('file_upload'); ?>

					<?php if ($page_gallery) : ?>
						<div class="slideshow" style="height:200px"><ul>
							<?php foreach($page_gallery as $image): ?>
								<li><img style="height:200px" src="<?php echo ($image['url']); ?>" alt="" /></li>
							<?php endforeach; ?>

						</ul>
						</div>
					<?php endif; ?>

					<?php if ($file_upload || $page_icons) : ?>
						<div class="row ">
							<div class="col-sm-9">
								<?php the_content(); ?>
							</div>
							<div class="col-sm-3 file_gallery">
								<?php if( $file_upload  ) : ?>
									<?php $file_type =  explode('/', $file_upload['mime_type'])[1]; ?>
									<?php $file_icon =  ($file_type == 'pdf') ? 'fa-file-pdf-o' : 'fa-file-text-o'; ?>
									<a target="_blank" class="file_upload" href="<?php echo $file_upload['url']; ?>"><i class="fa <?php echo $file_icon; ?>"></i><span><?php echo  $file_type; ?></span></a>
								<?php endif; ?>

								<?php if( $page_icons  ) : ?>
									<?php foreach($page_icons as $icon): ?>

										<img src="<?php echo ($icon['url']); ?>" alt="" />
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
						</div>

					<?php else: # IF NO GALLERY AND NO PDF ?>
						<?php the_content(); ?>
					<?php endif; ?>


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




</div> <!-- END OF CONTAINER -->


<?php if ( get_the_title() == 'Contact' ) : ?>
	<script type="text/javascript" src="//maps.google.com/maps/api/js?key=AIzaSyAxQfqRqtPLAW4BolFMCxTiv9y--R8CXdU"></script>
<section style="margin: 50px 0 -20px;"><div id="agencymap"></div></section>
<?php endif; ?>


<?php get_footer(); ?>
