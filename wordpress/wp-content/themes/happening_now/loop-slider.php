<?php $wp_query = new WP_Query(array('cat'=>of_get_option('category_slideshow'),'posts_per_page'=>of_get_option('postnumber_slideshow'), 'suppress_filters'=>0)); ?>
<?php if ($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
<?php if (isset($_POST['featurevid'])){ $custom = get_post_custom($post->ID); $featurevid = $custom['featurevid'][0]; } ?>
<?php global $more; $more = 0; ?>

<li <?php post_class(); ?> style="
	background-image: url(<?php echo get_post_meta(get_the_ID(), 'post_bg', true); ?>);
	background-color: <?php echo get_post_meta(get_the_ID(), 'bg_color', true); ?>;
	background-repeat: <?php if ('true' == (get_post_meta(get_the_ID(),'repeat_bg', true))) : ?>repeat<?php else : ?>no-repeat<?php endif; ?>;
	background-position: <?php if ('true' == (get_post_meta(get_the_ID(),'repeat_bg', true))) : ?>left<?php else : ?>center<?php endif; ?>;
	-webkit-background-size: <?php if ('true' == (get_post_meta(get_the_ID(),'repeat_bg', true))) : ?>none<?php else : ?>cover<?php endif; ?>;
	-moz-background-size: <?php if ('true' == (get_post_meta(get_the_ID(),'repeat_bg', true))) : ?>none<?php else : ?>cover<?php endif; ?>;
	-o-background-size: <?php if ('true' == (get_post_meta(get_the_ID(),'repeat_bg', true))) : ?>none<?php else : ?>cover<?php endif; ?>;
	background-size: <?php if ('true' == (get_post_meta(get_the_ID(),'repeat_bg', true))) : ?>none<?php else : ?>cover<?php endif; ?>; ">
	
	<div class="slide-holder <?php if ( get_post_meta($post->ID, 'featurevid', true) ) { ?>video-holder<?php } ?>">
	
    	<?php if ( get_post_meta($post->ID, 'featurevid', true) ) { ?>
    		<div class="eleven columns">
    	    	<div class="feature-vid"><?php echo get_post_meta($post->ID, 'featurevid', true); ?></div>
    	    </div>
    	<?php } else { ?>
	    	<?php if ( '' != get_the_post_thumbnail() ) { ?>
	    		<a class="feature-img" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'response-banner' ); ?></a>
	    	<?php } elseif ( empty( $post->post_excerpt ) ) { ?>
	    		<a class="feature-img" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/default-slide.png" alt="<?php the_title(); ?>" /></a>
	    	<?php } ?>
    	<?php } ?>
    	
    	<?php if ( get_post_meta($post->ID, 'featurevid', true) ) { ?>
    		<div class="five columns">
	    		<div class="slide-info video-info">
	    			<div class="slide-text">
	    		        <h2 class="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    		        <?php the_excerpt(); ?>
	    		        <a class="more-link" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php _e("Continue Reading", 'organicthemes'); ?></a>
	    		    </div>
	    		</div>
    		</div>
    	<?php } else { ?>
	    	<?php if ( ! empty( $post->post_excerpt )) { ?>
            <div class="slide-info">
            	<div class="slide-text">
                    <h2 class="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <?php } ?>
        <?php } ?>
        
    </div>

</li>

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>