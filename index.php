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
  <main id="main" class="site-main" role="main">

  <?php if ( have_posts() ) : ?>

    <?php if ( is_home() && ! is_front_page() ) : ?>
    <header><h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1></header>
    <?php endif; ?>

    <div class="post-list row">
        <?php /* Start the Loop */ ?>

        <?php while ( have_posts() ) : the_post(); 
        /*
        * Include the Post-Format-specific template for the content.
        * If you want to override this in a child theme, then include a file
        * called content-___.php (where ___ is the Post Format name) and that will be used instead.
        */
        get_template_part( 'template-parts/content', get_post_format() );
        endwhile; 
        ?>

        <!--?php the_posts_navigation(); ?-->
        <div class="navigation col-xs-12">
        <?php if (get_previous_posts_link() ) { ?>
            <div class="pull-left">
            <?php previous_posts_link('<i class="glyphicon glyphicon-triangle-left"></i>mais recentes'); ?>
            </div>
            <?php } ?>
        <?php if ( get_next_posts_link() ) { ?>
            <div class="pull-right">
            <?php next_posts_link('mais antigos<i class="glyphicon glyphicon-triangle-right"></i>'); ?>
            </div>
        <?php } ?>
        </div><!-- .navigation -->
    </div>

    <?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>
  </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
