<!-- Header START -->
<header class="global-header">
		
	<?php
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
	?>
	<nav>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
	</nav>
</header>
<!-- Header END -->