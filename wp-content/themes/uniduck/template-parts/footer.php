<!-- Footer START -->
<footer class="global-footer">
	<div class="footer-container">
		<div class="logo-container">
			<?php
			if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			}
			?>
			<?php
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Widget Area Footer") ) :
			endif;
			?>
		</div>

		<ul class="social-media-footer">
		<?php
		$uniduck_social_options = get_option('uniduck_theme_options');
		if($uniduck_social_options['fb_username'] && $uniduck_social_options['fb_link']) {
		 ?>
			<li>
				Like <a href="<?php echo $uniduck_social_options['fb_link'];  ?>" target="_blank"><?php echo $uniduck_social_options['fb_username']; ?></a> on <a class="facebook" href="<?php echo $uniduck_social_options['fb_link']; ?>" target="_blank">facebook</a>
			</li>
		<?php
		}

		if($uniduck_social_options['tw_username'] && $uniduck_social_options['tw_link']) {
		 ?>
			<li>
				Follow <a href="<?php echo $uniduck_social_options['tw_link'];  ?>" target="_blank"><?php echo $uniduck_social_options['tw_username'];  ?></a> on <a class="twitter" href="<?php echo $uniduck_social_options['tw_link'];  ?>" target="_blank">twitter</a>
			</li>
		<?php
		}
		if($uniduck_social_options['ig_username'] && $uniduck_social_options['ig_link']) {
		?>
			<li>
				Follow <a href="<?php echo $uniduck_social_options['ig_link'];  ?>" target="_blank"><?php echo $uniduck_social_options['ig_username'];  ?></a> on <a class="instagram" href="<?php echo $uniduck_social_options['ig_link'];  ?>" target="_blank">instagram</a>
			</li>
		<?php } ?>
		</ul>
	</div>
</footer>
<!-- Footer END -->