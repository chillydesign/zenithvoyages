<?php get_header(); ?>



<div class="container" style="padding-top:120px" >


		<!-- section -->
		<section >

		<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>


			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->





</div> <!-- END OF CONTAINER -->


<?php get_footer(); ?>
