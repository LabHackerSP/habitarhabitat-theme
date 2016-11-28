<?php
/**
 * The template for displaying all single posts.
 *
 * @package ultrabootstrap
 */

get_header(); ?>
<div class="col-sm-3"><?php get_sidebar(); ?></div>
<div class="col-sm-7 col-sm-offset-1 max-h">
<section class="page-section">

      <div class="detail-content">
           	
      	<?php while ( have_posts() ) : the_post(); ?>                    
  	      <?php get_template_part( 'template-parts/content', 'single' ); ?>
          

        <?php endwhile; // End of the loop. ?>

    
        <?php comments_template(); ?>


                  </div><!-- /.end of deatil-content -->
  			 
</section> <!-- /.end of section -->  
</div>
<?php get_footer(); ?>