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
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<body <?php body_class(); ?>>
<?php $header_text_color = get_header_textcolor();?>

	<?php include 'sesc-header.php'; ?>
	<?php include 'slidemenu.php'; ?>

	<?php if ( is_front_page() && is_home() ) : ?>
		<header id='header' class="container-fluid" style="background-image:url('<?php header_image(); ?>');">
			<div class="row max-h panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 logo-tag" style="margin-top:80px;margin-bottom:160px;">
					<img src="http://labhacker.org.br/habitar-habitat/wordpress/wp-content/uploads/2016/11/logoBranco-1.png" alt="logoBranco.png" itemprop="logo" class="custom-logo center-block col-xs-10 col-sm-6 col-md-4 col-lg-3" />
					<h2 class="site-description text-center" style="color:<?php echo "#". $header_text_color;?>"><?php bloginfo('description'); ?></h2>
				</div>
			</div>
		</header>
	<?php elseif (is_category()) : ?>
		<header id='header' class="container-fluid" style="background-image:url('<?php if(function_exists('z_taxonomy_image_url') && z_taxonomy_image_url() != null) : echo z_taxonomy_image_url(); else : header_image(); endif; ?>');">
			<div class="row max-h panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 logo-tag" style="margin-top:240px;margin-bottom:40px;">
                    <h1><?php
                    $categoria = get_the_category();
                    $nomeCategoria = $categoria[0]->cat_name;
                    echo $nomeCategoria;
                    ?></h1>
				</div>
			</div>
		</header>
		<div id="description" class="container">
			<div class="row">
				<?php the_archive_description( '<div class="taxonomy-description col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 collapse in" id="description_txt">
  <div class="well">', '</div></div>' ); ?>
				<!--a class="btn btn-primary col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2" role="button" data-toggle="collapse" href="#description_txt" aria-expanded="false" aria-controls="description_txt">Leia mais</a-->
			</div>
		</div>
	<?php elseif (is_page()) : ?>
		<header id='header' class="container-fluid" style="background-image:url('<?php if(has_post_thumbnail()) : echo the_post_thumbnail('url'); else : header_image(); endif; ?>');">
			<div class="row max-h panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 logo-tag" style="margin-top:240px;margin-bottom:40px;">
                    <h1><?php the_title(); ?></h1>
				</div>
			</div>
		</header>
	<?php elseif (is_single()) : ?>
		<header id='header' class="container-fluid" style="background-image:url('<?php if(has_post_thumbnail()) : echo the_post_thumbnail_url('full'); else : header_image(); endif; ?>');">
			<div class="row max-h panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 logo-tag" style="margin-top:240px;margin-bottom:40px;">
                    <h1><?php the_title(); ?></h1>
				</div>
			</div>
		</header>
	<?php endif; ?>
	<div id='conteudo' class="container">
		<div class="row panel-group" id="accordion">
