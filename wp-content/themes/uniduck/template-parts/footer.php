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
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Widget Area Footer Social") ) :
			endif;
			?>
		</ul>
	</div>
</footer>
<!-- Footer END -->