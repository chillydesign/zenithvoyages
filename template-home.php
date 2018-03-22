<?php /* Template Name: Homepage Template */ get_header(); ?>
<div class="page_title">
	<h1 class="container"><?php the_title(); ?></h1>
</div>

<?php $slides_loop = new WP_Query(array(
	'post_type' => 'slide',  
	'posts_per_page' => -1,
	'order' => 'ASC'
	)); ?>



<?php if ($slides_loop->have_posts() ) : ?>
<div class="slideshow"><ul>
	<?php while($slides_loop->have_posts()) : $slides_loop->the_post(); ?>
			<?php $quotation_text =  get_field('quotation_text'); ?>
			<?php $latlon =  get_field('lat_lon'); ?>
		<li data-latlon="<?php echo $latlon; ?>" class="slide" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>'); ">

			<?php if (isset($quotation_text)): ?>
			<blockquote><?php echo $quotation_text; ?>
			<cite><?php echo get_field('quotation_author'); ?></cite>
			</blockquote>
			<div  class="map_location" >
				<span class="location_name"><?php echo get_field('location_name'); ?></span>
				<span class="lat_lon"><?php echo $latlon ?></span>
			</div>
			<?php endif; ?>

		</li>
		

	<?php endwhile; ?>
</ul></div> <!-- END OF SLIDESHOW -->
<input type="hidden" name="lat_lon"  id="lat_lon" value="" />
<?php endif; ?>
<?php wp_reset_query(); ?>

<div id="mylightbox">
	<div id="googleMap" style="height:300px;width:300px"></div>

</div>
<script type='text/javascript' src='http://maps.google.com/maps/api/js'></script>
<script type="text/javascript">
	

</script>
<?php get_footer(); ?>