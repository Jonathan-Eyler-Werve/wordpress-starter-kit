<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
    <div <?php post_class('archive-result content holder'); ?> id="page-<?php the_ID(); ?>">
    
    	<?php if (!get_post_format()) { get_template_part('formats/format', 'standard'); } else { get_template_part('formats/format', get_post_format()); } ?>
    
    </div>

<?php endwhile; ?>

	<?php if($wp_query->max_num_pages > 1) { ?>
		<!-- BEGIN .pagination -->
		<div class="pagination">
			<?php echo response_get_pagination_links(); ?>
		<!-- END .pagination -->
		</div>
	<?php } ?>

<?php else : ?>
       
	<p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
	
<?php endif; ?>