<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ultrabootstrap
 */

get_header(); ?>


<div class="col-xs-10 col-xs-offset-1">
<div id="primary" class="content-area">
				      	<div class="logo-tag" style="margin-bottom:200px;">
				      		<img src="http://labhacker.org.br/habitar-habitat/wordpress/wp-content/uploads/2016/11/logoBranco-1.png" alt="logoBranco.png" itemprop="logo" class="custom-logo col-xs-2 col-xs-ofsset-5 center-block" />
			      			<h2 class="site-description text-center" style="color:<?php echo "#". $header_text_color;?>"><?php bloginfo('description'); ?></h2>
      						
      					</div>
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

      <?php if ( is_home() && ! is_front_page() ) : ?>
        <header>
          <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
      <?php endif; ?>
  <div class="post-list">
      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php

          /*
           * Include the Post-Format-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
           */
          get_template_part( 'template-parts/content', get_post_format() );
        ?>

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>
</div>
    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>
