<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ultrabootstrap
 */

get_header(); ?>
<div class="col-md-10 col-md-offset-1">
        <?php if ( have_posts() ) : ?>
        <div class="row">
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content');
                ?>

            <?php endwhile; ?>

            

        <?php 

        /* 
        * else : ?>
        *   <?php get_template_part( 'template-parts/content', 'none' );
        */ ?>

        <?php endif; ?>
        </div>
        <?php /* the_posts_navigation(); */ ?>
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
<?php get_footer(); ?>
