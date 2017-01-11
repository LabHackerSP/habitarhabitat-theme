<?php 

function home_page_menu_args( $args ) {
$args['show_home'] = true;
return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );


function new_content($content) {

    $content = str_replace('texto col-xs-7 box-shadow col-xs-offset-1','col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3', $content);

    return $content;
}

add_filter('the_content','new_content');


// add categories to attachments  
function wptp_add_categories_to_attachments() {
      register_taxonomy_for_object_type( 'category', 'attachment' );  
}  
add_action( 'init' , 'wptp_add_categories_to_attachments' ); 

// diminui o texto de excerpt
function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>
