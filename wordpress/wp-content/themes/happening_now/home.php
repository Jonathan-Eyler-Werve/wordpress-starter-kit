<?php get_header(); ?>

<?php if ( '1' == of_get_option('display_slideshow')) { ?>
	
	<!-- BEGIN .slideshow -->
    <div class="slideshow featured-slideshow">
    
    	<!-- BEGIN .row -->
    	<div class="row">
    		
    		<!-- BEGIN .sixteen columns -->
    	    <div class="sixteen columns">
    	    	
    	    	<!-- BEGIN .slideshow -->
    	    	<div class="slideshow">
    
			        <!-- BEGIN .flexslider -->
			        <div class="flexslider loading" data-speed="<?php echo of_get_option('transition_interval'); ?>">
			        
			            <!-- BEGIN ul.slides -->
			            <ul class="slides">
			            
			                <?php get_template_part( 'loop', 'slider' ); ?>
			
			            <!-- END ul.slides -->
			            </ul>
			            
			        <!-- END .flexslider -->
			        </div>
		        
		        <!-- END .slideshow -->
		        </div>
	        
	        <!-- END .sixteen columns -->
	        </div>
            
        <!-- END .row -->
        </div>
    
    <!-- END .slideshow -->
    </div>
	    
<?php } ?>

<?php if ( '1' == of_get_option('display_home')) { ?>

<!-- BEGIN #content -->
<div id="content">

	<!-- BEGIN .row -->
	<div class="row">
		    
	    <div id="homepage">
	    
	    	<div class="sixteen columns">
	    	
				<?php $wp_query = new WP_Query('page_id='.of_get_option('select_page')); while($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<?php global $more; $more = 0; ?>

				<div class="article">
				
					<?php the_content(__("Read More", 'organicthemes')); ?>
					
					<?php wp_link_pages(array(
						'before' => '<p class="page-links"><span class="link-label">' . __('Pages:', 'organicthemes') . '</span>',
						'after' => '</p>',
						'link_before' => '<span>',
						'link_after' => '</span>',
						'next_or_number' => 'next_and_number',
						'nextpagelink' => __('Next', 'organicthemes'),
						'previouspagelink' => __('Previous', 'organicthemes'),
						'pagelink' => '%',
						'echo' => 1 )
					); ?>

				</div>
				
				<?php endwhile; ?>
			
			</div>
		
		<!-- END #homepage -->
		</div>
		
	<!-- END .row -->
	</div>

<!-- END #content -->
</div>

<?php } ?>

<?php get_footer(); ?>