<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ultrabootstrap
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>-child/css/menu_sideslide.css">
</head>


<body <?php body_class(); ?>>
<?php $header_text_color = get_header_textcolor();?>


	<section id="iframebarraportalsesc" class="">
		<div id="sesc_header_menu">
			<h1><a href="http://www.sescsp.org.br/" title="Sesc SP" target="_top">Sesc SP</a></h1>
			<a href="javascript:controlMenu(this);" title="Menu" id="sesc_menu_toggle"><i class="fa fa-chevron-down fa-2x"></i></a>
			<ul class="">
				<li><a href="http://www.sescsp.org.br/programacao/" title="programação" target="_top">programação</a></li>
				<li><a href="http://www.sescsp.org.br/aulas/" title="cursos" target="_top">cursos</a></li>
				<li><a href="http://www.sescsp.org.br/turismo/" title="turismo" target="_top">turismo</a></li>
				<li><a href="http://www.sescsp.org.br/unidades/" title="unidades" target="_top">unidades</a></li>
				<li><a href="http://www.sescsp.org.br/servicos/" title="serviços" target="_top">serviços</a></li>
				<li><a href="http://www.sescsp.org.br/online/" title="conteudoteca" target="_top">conteudoteca</a></li>
				<li><a href="http://www.sescsp.org.br/loja/" title="livraria" target="_top">livraria</a></li>
			</ul>
		</div>
	</section>

<header> 	
<section class="logo-menu">
	<nav class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only"><?php _e('Toggle navigation' , 'ultrabootstrap' ); ?></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
				      	</button>
				      	<div class="logo-tag">
				      		
				      			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php if ( has_custom_logo()): the_custom_logo(); else: ?>
				      			<h1 class="site-title" style="color:<?php echo "#". $header_text_color;?>"><?php echo bloginfo( 'name' ); ?></h1>
				      			<h2 class="site-description" style="color:<?php echo "#". $header_text_color;?>"><?php bloginfo('description'); ?></h2><?php endif; ?></a>                     
      						
      					</div>
				    </div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<form  class="navbar-form navbar-right" role="search">
							<ul class="nav pull-right">
								<div class="main-search">
									<button class="btn btn-search" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
									  <i class="fa fa-search"></i>
									</button>
									<div class="search-box collapse" id="collapseExample">
											<div class="well search-well">
										    <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                          						<input type="text" class="form-control" placeholder="Search a keyword" value="<?php echo get_search_query(); ?>" name="s">
                          					</form>
											</div>
									</div>
								</div>
							</ul>
						</form>
  							
						<?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary',
				                'depth'             => 8,
				                'container'         => 'div',
				                'menu_class'        => 'nav navbar-nav navbar-left',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker())
				            );
				        ?>
						<?php
				            wp_nav_menu( array(
				                'menu'              => 'secondary',
				                'theme_location'    => 'footer',
				                'depth'             => 8,
				                'container'         => 'div',
				                'menu_class'        => 'nav navbar-nav navbar-right',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker())
				            );
				        ?>
				    </div> <!-- /.end of collaspe navbar-collaspe -->
	</div> <!-- /.end of container -->
	</nav>
</section> <!-- /.end of section -->
</header>
<?php 

 include 'slidemenu.php';

?>

	<?php if ( is_front_page() && is_home() ) : ?>	<img src="http://labhacker.org.br/habitar-habitat/wordpress/wp-content/uploads/2016/11/logoBranco-1.png" alt="logoBranco.png" itemprop="logo" class="custom-logo col-xs-2 col-xs-ofsset-5 center-block" />		
		<div id='header' class="container-fluid" style="background-image:url('<?php header_image(); ?>');">
			<div class="row max-h panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="col-xs-10 col-xs-offset-1 logo-tag" style="margin-top:40px;margin-bottom:200px;">
					<h2 class="site-description text-center" style="color:<?php echo "#". $header_text_color;?>"><?php bloginfo('description'); ?></h2>
				
				</div>
			</div>
		</div>
	<?php endif; ?>
	
	<div id='conteudo' class="">
		<div class="row max-h panel-group" id="accordion" role="tablist" aria-multiselectable="true">
