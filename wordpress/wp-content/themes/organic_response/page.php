<?php
/**
* The page template for our theme.
*
* This template is used to display page content.
*
* @package Response
* @since Response 1.0
* 
*/ 
get_header(); ?>
 
<?php if ( '' != get_the_post_thumbnail() ) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'banner'); } ?>
<?php if ( '' != get_the_post_thumbnail() ) { ?>
	<div class="banner" style="background-image: url(<?php echo $thumb[0]; ?>);"><span class="banner-img"><?php the_post_thumbnail( 'response-banner' ); ?></span></div>
<?php } ?>

<!-- BEGIN #content -->
<div id="content">
	
	<!-- BEGIN .row -->
	<div class="row">
	
	    <!-- BEGIN .eleven columns -->
	    <div class="eleven columns">
	    
	        <?php get_template_part( 'loop', 'page' ); ?>
			
		<!-- END .eleven columns -->
		</div>
		
		<!-- BEGIN .five columns -->
		<div class="five columns">
		
		    <?php get_sidebar(); ?> 
		
		<!-- END .five columns -->
		</div>
	
	<!-- END .row -->
	</div>

<!-- END #content -->
</div>

<?php get_footer(); ?>