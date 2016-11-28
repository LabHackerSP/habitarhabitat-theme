<?php
/**
 * The template for displaying all single posts.
 *
 * @package ultrabootstrap
 */

get_header(); ?>
<section class="page-section">

      <div class="detail-content">
           	
      	<?php while ( have_posts() ) : the_post(); ?>                    
  	      <?php get_template_part( 'template-parts/content', 'single' ); ?>
          

        <?php endwhile; // End of the loop. ?>

    
        <!-- <?php comments_template(); ?> -->


                  </div><!-- /.end of deatil-content -->
  			 
</section> <!-- /.end of section -->  
<?php get_footer(); ?>