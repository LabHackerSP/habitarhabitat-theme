<div class="menu-wrap">
	<nav class="menu">
		<div class="icon-list">
			<a href="<?php echo home_url( '/' );  ?>"><img id="menu-logo" src="<?php echo content_url(); ?>/uploads/2016/11/logoBranco-1.png"></a>
			
			<?php
	            wp_nav_menu( array(
	                'menu'              => 'primary',
	                'theme_location'    => 'primary',
	                'depth'             => 1,
	                'container'         => false,
	                'menu_class'        => '',
	                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                'walker'            => new wp_bootstrap_navwalker())
	            );
	        ?>

			<!--form  class="navbar-form" role="search"  method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<ul class="nav">
					<div class="main-search">
  						<input type="text" class="form-control" placeholder="Buscar" value="<?php echo get_search_query(); ?>" name="s">
						<button class="btn btn-search" type="submit" >
						  <i class="fa fa-search"></i>
						</button>
					</div>
				</ul>
			</form-->

		</div>
	</nav>
	<button class="close-button" id="close-button">Fechar Menu</button>
</div>
<button class="menu-button" id="open-button">Abrir Menu</button>

<script type="text/javascript" >
</script>