<?php
/**
 * Template part for displaying single posts.
 *
 * @package ultrabootstrap
 */

?>

<div class="page-title">
<?php if (has_post_thumbnail()) : ?>
        <div class='feat-image'>
          <?php the_post_thumbnail('full'); ?>
        </div>
<?php endif; ?> 

  <h1 class='titulo'><?php the_title(); ?></h1>
</div>
    

<div class="single-post">
   <div class="post-content">
    <article class="spacer col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

      <?php the_content();?>

      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ultrabootstrap' ),
          'after'  => '</div>',
        ) );
      ?>     
    </article>
    </div>
  </div>