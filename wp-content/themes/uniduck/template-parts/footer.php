<!-- Footer START -->
<footer class="global-footer">
	<div class="footer-container">
		<div class="logo-container">
			<?php
			if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			}
			?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Widget Area Footer") ) : ?>
			<?php endif;?>
		</div>

		<ul class="social-media-footer">
			<li>
				Like <a href="#" target="_blank">Uniduck</a> on <a class="facebook" href="#" target="_blank"></a>
			</li>
			<li>
				Follow <a href="#" target="_blank">@uniduck</a> on <a class="twitter" href="#" target="_blank"></a>
			</li>
			<li>
				Follow <a href="#" target="_blank">@uniduck</a> on <a class="instagram" href="#" target="_blank"></a>
			</li>
		</ul>
	</div>
</footer>
<!-- Footer END -->