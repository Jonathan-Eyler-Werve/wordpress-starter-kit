<?php
/*
 *
 Template Name: Blog
 *
 * This is the custom blog page template.
 *
 */ 
 get_header(); ?>
 
<?php if ( '' != get_the_post_thumbnail() ) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'banner'); } ?>
<?php if ( '' != get_the_post_thumbnail() ) { ?>
	<div class="banner" style="background-image: url(<?php echo $thumb[0]; ?>);"><span class="banner-img"><?php the_post_thumbnail( 'response-banner' ); ?></span></div>
<?php } ?>

<!-- BEGIN #content -->
<div <?php post_class(); ?> id="content">

	<!-- BEGIN .row -->
	<div class="row">
	
		<?php if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>
	    
		    <!-- BEGIN .eleven columns -->
		    <div id="blog" class="eleven columns">
				
				<?php get_template_part( 'loop', 'blog' ); ?>
				
			<!-- END .eleven columns -->
			</div>
			
			<!-- BEGIN .five columns -->
			<div class="five columns">
			
			    <?php get_sidebar(); ?> 
			
			<!-- END .five columns -->
			</div>
			
		<?php else : ?>
		
			<!-- BEGIN .sixteen columns -->
			<div id="blog" class="sixteen columns">
				
				<?php get_template_part( 'loop', 'blog' ); ?>
				
			<!-- END .sixteen columns -->
			</div>
			
		<?php endif; ?>
	
	<!-- END .row -->
	</div>

<!-- END #content -->
</div>

<?php get_footer(); ?>