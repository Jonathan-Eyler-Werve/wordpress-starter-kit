<?php
/**
Template Name: Portfolio
*
* This template is used to display a portfolio of images.
*
* @package Response
* @since Response 1.2
*
*/
get_header(); ?>

<?php if ( '' != get_the_post_thumbnail() ) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'banner'); } ?>
<?php if ( '' != get_the_post_thumbnail() ) { ?>
	<div class="banner" style="background-image: url(<?php echo $thumb[0]; ?>);"><span class="banner-img"><?php the_post_thumbnail( 'response-banner' ); ?></span></div>
<?php } ?>

<!-- BEGIN #content -->
<div id="content" class="full-width">
	
	<!-- BEGIN .row -->
	<div class="row">
	
	    <!-- BEGIN .sixteen columns -->
	    <div class="sixteen columns">	
	    
	        <?php get_template_part( 'loop', 'portfolio' ); ?>
			
		<!-- END .sixteen columns -->
		</div>
	
	<!-- END .row -->
	</div>

<!-- END #content -->
</div>

<?php get_footer(); ?>