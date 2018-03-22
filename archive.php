<?php get_header(); ?>



<div class="container" style="padding-top:120px" >




		<!-- section -->
		<section  >
<article>
		<h1 ><?php _e( 'Archives', 'html5blank' ); ?></h1>
</article>

	<div class="row">


			<div class="col-sm-9">


			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>


		
			</div>
	<?php get_sidebar(); ?>
		</div> <!-- END OF ROW -->


		</section>
		<!-- /section -->


		

</div> <!-- END OF CONTAINER -->


<?php get_footer(); ?>
