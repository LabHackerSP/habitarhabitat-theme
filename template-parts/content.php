<?php
/**
 * Template part for displaying posts.
 *
 * @package ultrabootstrap
 */

?>

<div class="col-md-4 col-sm-6 eq-blocks">
    <div class="post-block">
    <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail('portfolio-thumb'); ?>
    <?php else : ?>
        <a href="<?php the_permalink(); ?>" rel="bookmark">
            <img src="<?php echo get_template_directory_uri(); ?>/images/no-blog-thumbnail.jpg" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive" />
    <?php endif; ?>  
            <h3><?php the_title(); ?></h3>
        </a>
        <div class="summary">

    
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
    }; ?>
        <div class="tags">
            <p><?php echo $terms; ?></p>
        </div>
        <?php the_excerpt('ultrabootstrap_excerpt_length');?>
        
        <div class="readmore">
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="">Leia mais </a>
        </div>

    </div>
</div>
</div>



