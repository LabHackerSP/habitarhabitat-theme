<?php
/**
 * Template part for displaying single posts.
 *
 * @package ultrabootstrap
 */

?>

<!--div class="page-title">
<?php if (has_post_thumbnail()) : ?>
        <div class='feat-image'>
          <?php the_post_thumbnail('full'); ?>
        </div>
<?php endif; ?> 

  <h1 class='titulo'><?php the_title(); ?></h1>
</div-->
    

<div class="single-post">
  <div class="post-content">
    <article class="spacer col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">

    <?php $taxonomy = 'category';

    // Get the term IDs assigned to post.
    $post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
 
    // Separator between links.
    $separator = ', ';
 
    if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {
    $term_ids = implode( ',' , $post_terms );
    $terms = wp_list_categories( array(
        'title_li' => '',
        'style'    => 'none',
        'echo'     => false,
        'taxonomy' => $taxonomy,
        'include'  => $term_ids
    ) );
    $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
    // Display post categories.
    echo '<p>' . $terms . '</p>';
    }; ?>
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