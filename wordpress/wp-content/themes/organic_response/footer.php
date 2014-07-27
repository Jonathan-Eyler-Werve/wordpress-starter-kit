<?php 
/*
 * The footer for our theme.
 *
 * This template is used to generate the footer for the theme.
 *
 * @package Response 
 * @since Response 1.0
 *
 */ 
 ?>
 
<div class="clear"></div>
 
<div id="footer">

	<div class="row">
	
		<div class="sixteen columns">

			<div class="left">
		        <p><?php _e("Copyright", 'organicthemes'); ?> &copy; <?php echo date(__("Y", 'organicthemes')); ?> &middot; <?php _e("All Rights Reserved", 'organicthemes'); ?> &middot; <?php bloginfo('name'); ?></p>
		
		        <p><a href="http://www.organicthemes.com/themes/" title="Organic Response WordPress Theme" target="_blank"><?php _e("Response Theme", 'organicthemes'); ?></a> <?php _e("by", 'organicthemes'); ?> <a href="http://www.organicthemes.com" title="Premium WordPress Themes" target="_blank"><?php _e("Organic Themes", 'organicthemes'); ?></a> &middot; <a href="http://kahunahost.com" target="_blank" title="WordPress Hosting"><?php _e("WordPress Hosting", 'organicthemes'); ?></a> &middot; <a href="<?php bloginfo('rss2_url'); ?>"><?php _e("RSS Feed", 'organicthemes'); ?></a> &middot; <?php wp_loginout(); ?></p>
		    </div>
		    
		    <?php if( '1' == of_get_option('display_social_footer')) { ?>
		    
		    <div class="right">
				<ul class="social-icons">
					<?php if (of_get_option('facebook_link') && of_get_option('facebook_link') != '') { ?>
						<li><a class="link-facebook" href="<?php echo of_get_option('facebook_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-facebook"></span></a></li>
					<?php } ?>
					<?php if (of_get_option('twitter_link') && of_get_option('twitter_link') != '') { ?>
						<li><a class="link-twitter" href="<?php echo of_get_option('twitter_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-twitter"></span></a></li>
					<?php } ?>
					<?php if (of_get_option('linkedin_link') && of_get_option('linkedin_link') != '') { ?>
						<li><a class="link-linkedin" href="<?php echo of_get_option('linkedin_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-linkedin"></span></a></li>
					<?php } ?>
					<?php if (of_get_option('dribbble_link') && of_get_option('dribbble_link') != '') { ?>
						<li><a class="link-dribbble" href="<?php echo of_get_option('dribbble_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-dribbble"></span></a></li>
					<?php } ?>
					<?php if (of_get_option('skype_link') && of_get_option('skype_link') != '') { ?>
						<li><a class="link-skype" href="<?php echo of_get_option('skype_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-skype"></span></a></li>
					<?php } ?>
					<?php if (of_get_option('plus_link') && of_get_option('plus_link') != '') { ?>
						<li><a class="link-google" href="<?php echo of_get_option('plus_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-googleplus"></span></a></li>
					<?php } ?>
					<?php if (of_get_option('pinterest_link') && of_get_option('pinterest_link') != '') { ?>
						<li><a class="link-pinterest" href="<?php echo of_get_option('pinterest_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-pinterest"></span></a></li>
					<?php } ?>
					<?php if (of_get_option('github_link') && of_get_option('github_link') != '') { ?>
						<li><a class="link-github" href="<?php echo of_get_option('github_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-github"></span></a></li>
					<?php } ?>
					<?php if (of_get_option('instagram_link') && of_get_option('instagram_link') != '') { ?>
						<li><a class="link-instagram" href="<?php echo of_get_option('instagram_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-instagram-2"></span></a></li>
					<?php } ?>
					<?php if (of_get_option('youtube_link') && of_get_option('youtube_link') != '') { ?>
						<li><a class="link-youtube" href="<?php echo of_get_option('youtube_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-youtube"></span></a></li>
					<?php } ?>
					<?php if (of_get_option('email_link') && of_get_option('email_link') != '') { ?>
						<li><a class="link-email" href="mailto:<?php echo of_get_option('email_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-envelop"></span></a></li>
					<?php } ?>
				</ul>
			</div>
			
			<?php } ?>
		
		<!-- END .sixteen columns -->
		</div>
	
	<!-- END .row -->
	</div>

<!-- END #footer -->
</div>

<!-- END .container -->
</div>

<?php wp_footer(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=246727095428680";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>