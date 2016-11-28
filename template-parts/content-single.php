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

  <h1><?php the_title(); ?></h1>
</div>
    

<div class="single-post">
   <div class="post-content">
    <article class="spacer">
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