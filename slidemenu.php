<div class="menu-wrap">
	<nav class="menu">
		<div class="icon-list">
<!-- 			<a href="#"><i class="fa fa-fw fa-star-o"></i><span>Favorites</span></a>
			<a href="#"><i class="fa fa-fw fa-bell-o"></i><span>Alerts</span></a>
			<a href="#"><i class="fa fa-fw fa-envelope-o"></i><span>Messages</span></a>
			<a href="#"><i class="fa fa-fw fa-comment-o"></i><span>Comments</span></a>
			<a href="#"><i class="fa fa-fw fa-bar-chart-o"></i><span>Analytics</span></a>
			<a href="#"><i class="fa fa-fw fa-newspaper-o"></i><span>Reading List</span></a> -->


			<?php
	            wp_nav_menu( array(
	                'menu'              => 'primary',
	                'theme_location'    => 'primary',
	                'depth'             => 8,
	                'container'         => false,
	                'menu_class'        => '',
	                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                'walker'            => new wp_bootstrap_navwalker())
	            );
	        ?>
		</div>
	</nav>
	<button class="close-button" id="close-button">Fechar Menu</button>
</div>
<button class="menu-button" id="open-button">Abrir Menu</button>